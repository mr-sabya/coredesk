<?php

namespace App\Livewire\Core\Backend\Tenant;

use App\Models\Tenant;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $selectedTenants = [];
    public $selectAll = false;

    // Only keep tenantToDelete for the modal
    public $tenantToDelete = null;

    protected $queryString = ['search', 'sortField', 'sortDirection'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedTenants = $this->getTenantsProperty()->pluck('id')->map(fn($id) => (string) $id)->toArray();
        } else {
            $this->selectedTenants = [];
        }
    }

    public function isSelected($tenantId)
    {
        return in_array($tenantId, $this->selectedTenants);
    }

    public function deleteSelected()
    {
        if (empty($this->selectedTenants)) {
            session()->flash('message', 'No tenants selected for deletion.');
            return;
        }

        foreach ($this->selectedTenants as $tenantId) {
            $tenant = Tenant::find($tenantId);
            if ($tenant) {
                $tenant->delete();
            }
        }

        $deletedCount = count($this->selectedTenants);
        $this->selectedTenants = [];
        $this->selectAll = false;
        session()->flash('message', "{$deletedCount} tenant(s) deleted successfully!");
        // No need to dispatch modal close event here, as it's for individual delete
    }

    // Method to set the tenantToDelete when the modal button is clicked
    public function setTenantToDelete($tenantId)
    {
        $this->tenantToDelete = $tenantId;
        // Optionally, fetch tenant name to display in modal for better UX
        // $tenant = Tenant::find($tenantId);
        // $this->tenantToDeleteName = $tenant ? $tenant->name : 'N/A';
    }

    public function deleteTenant()
    {
        if ($this->tenantToDelete) {
            $tenant = Tenant::find($this->tenantToDelete);
            if ($tenant) {
                $tenant->delete();
                session()->flash('message', "Tenant '{$tenant->name}' deleted successfully!");
            } else {
                session()->flash('message', "Tenant not found or already deleted.");
            }
        } else {
            session()->flash('message', "No tenant selected for deletion.");
        }

        $this->tenantToDelete = null; // Clear the tenant to delete
        // Livewire will re-render, closing the modal.
        // Or you can dispatch a JS event to specifically close it if Livewire doesn't cause a re-render where the modal is.
        // For this pattern, often you don't need a specific JS close event IF the deletion causes a re-render of the table itself.
    }

    public function getTenantsProperty()
    {
        return Tenant::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('primary_contact_email', 'like', '%' . $this->search . '%')
                    ->orWhere('id', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.core.backend.tenant.index', [
            'tenants' => $this->getTenantsProperty(),
        ]);
    }
}
