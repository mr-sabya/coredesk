<?php

namespace App\Livewire\Backend\Tenant;

use App\Models\Tenant;
use App\Models\Domain;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule as ValidationRule;

class Manage extends Component
{
    use WithFileUploads;

    // Form properties for Tenant
    public string $name = '';
    public string $primary_contact_email = '';
    public ?string $industry = null;
    public $logo_file;
    public ?string $existing_logo_path = null;

    public string $tenant_id_field = '';

    // Domain property now holds the FULL domain name (e.g., 'foo.localhost')
    public string $domain_name = '';

    public ?Tenant $tenant = null;
    protected ?string $originalDomainId = null;

    protected array $rules = [
        'name' => 'required|min:3',
        'primary_contact_email' => 'required|email',
        'industry' => 'nullable|string|max:255',
        'logo_file' => 'nullable|image|max:1024',
        'tenant_id_field' => 'required|string|min:3|max:64|unique:tenants,id',
        // Validation for the full domain name
        'domain_name' => 'required|string|min:3|max:255|unique:domains,domain',
    ];

    /**
     * Mount the component, used for editing an existing tenant.
     *
     * @param string|null $tenantId The ID of the tenant to edit, if any.
     */
    public function mount(?string $tenantId = null)
    {
        if ($tenantId) {
            $this->tenant = Tenant::findOrFail($tenantId);
            $this->name = $this->tenant->name;
            $this->primary_contact_email = $this->tenant->primary_contact_email;
            $this->industry = $this->tenant->industry;
            $this->existing_logo_path = $this->tenant->logo_path;
            $this->tenant_id_field = $this->tenant->id;

            // Adjust the tenant_id_field rule
            $this->rules['tenant_id_field'] = 'required|string|min:3|max:64|' . ValidationRule::unique('tenants', 'id')->ignore($this->tenant->id);

            $primaryDomain = $this->tenant->domains()->first();
            if ($primaryDomain) {
                // Load the full domain into the property
                $this->domain_name = $primaryDomain->domain;
                $this->originalDomainId = $primaryDomain->id;

                // Adjust the domain_name validation rule to ignore the current domain's ID
                $this->rules['domain_name'] = 'required|string|min:3|max:255|' . ValidationRule::unique('domains', 'domain')->ignore($this->originalDomainId);
            }
        }
    }

    public function save()
    {
        // Re-apply dynamic validation rules just before validation, ensuring they are current.
        if ($this->tenant) {
            $this->rules['tenant_id_field'] = 'required|string|min:3|max:64|' . ValidationRule::unique('tenants', 'id')->ignore($this->tenant->id);
            if ($this->originalDomainId) {
                $this->rules['domain_name'] = 'required|string|min:3|max:255|' . ValidationRule::unique('domains', 'domain')->ignore($this->originalDomainId);
            }
        }

        $this->validate();

        if ($this->tenant) {
            $this->updateTenant();
        } else {
            $this->createTenant();
        }

        session()->flash('message', 'Tenant saved successfully!');
        $this->redirect(route('super-admin.tenants.index'), navigate: true);
    }

    protected function createTenant()
    {
        $logoPath = null;
        if ($this->logo_file) {
            $logoPath = $this->logo_file->store('tenant_logos', 'public');
        }

        $tenant = Tenant::create([
            'id' => $this->tenant_id_field,
            'name' => $this->name,
            'primary_contact_email' => $this->primary_contact_email,
            'industry' => $this->industry,
            'logo_path' => $logoPath,
        ]);

        // Use the full domain_name directly
        $tenant->domains()->create([
            'domain' => $this->domain_name,
        ]);
    }

    protected function updateTenant()
    {
        $logoPath = $this->existing_logo_path;

        if ($this->logo_file) {
            if ($this->existing_logo_path) {
                Storage::disk('public')->delete($this->existing_logo_path);
            }
            $logoPath = $this->logo_file->store('tenant_logos', 'public');
        }

        $this->tenant->update([
            'name' => $this->name,
            'primary_contact_email' => $this->primary_contact_email,
            'industry' => $this->industry,
            'logo_path' => $logoPath,
        ]);

        $domain = $this->tenant->domains()->first();
        if ($domain) {
            // Update with the full domain_name directly
            $domain->update(['domain' => $this->domain_name]);
        } else {
            $this->tenant->domains()->create(['domain' => $this->domain_name]);
        }
    }

    public function updatedLogoFile()
    {
        $this->validateOnly('logo_file');
    }

    public function updatedTenantIdField()
    {
        $rule = 'required|string|min:3|max:64|';
        if ($this->tenant) {
            $rule .= ValidationRule::unique('tenants', 'id')->ignore($this->tenant->id);
        } else {
            $rule .= 'unique:tenants,id';
        }
        $this->validateOnly('tenant_id_field', ['tenant_id_field' => $rule]);
    }

    // New: Real-time validation for domain_name (optional)
    public function updatedDomainName()
    {
        $rule = 'required|string|min:3|max:255|';
        if ($this->originalDomainId) { // If editing
            $rule .= ValidationRule::unique('domains', 'domain')->ignore($this->originalDomainId);
        } else { // If creating
            $rule .= 'unique:domains,domain';
        }
        $this->validateOnly('domain_name', ['domain_name' => $rule]);
    }


    public function render()
    {
        return view('livewire.backend.tenant.manage');
    }
}