<?php

namespace App\Livewire\Core\Backend\Plan;

use App\Models\Core\Plan;
use Livewire\Component;
use Illuminate\Validation\Rule as ValidationRule; // Use alias

class Manage extends Component
{
    // Form properties for Plan
    public string $name = '';
    public string $slug = '';
    public ?string $description = null;
    public string $price = '0.00'; // Default to a string to handle decimal input
    public string $currency = 'USD'; // Default currency
    public array $features = ['']; // Array to hold multiple features, initialized with one empty string
    public ?string $stripe_price_id = null;
    public bool $is_active = false;
    public int $sort_order = 0;

    // Property to hold the current plan instance if editing
    public ?Plan $plan = null;

    protected array $rules = [
        'name' => 'required|string|min:3|max:255',
        'slug' => 'required|string|min:3|max:255|unique:plans,slug',
        'description' => 'nullable|string|max:1000',
        'price' => 'required|numeric|min:0',
        'currency' => 'required|string|size:3',
        'features' => 'nullable|array',
        'features.*' => 'nullable|string|max:255', // Each feature can be nullable and string
        'stripe_price_id' => 'nullable|string|max:255',
        'is_active' => 'boolean',
        'sort_order' => 'required|integer|min:0',
    ];

    /**
     * Mount the component, used for editing an existing plan.
     *
     * @param string|null $planId The ID of the plan to edit, if any.
     */
    public function mount(?string $planId = null)
    {
        if ($planId) {
            $this->plan = Plan::findOrFail($planId);
            $this->name = $this->plan->name;
            $this->slug = $this->plan->slug;
            $this->description = $this->plan->description;
            $this->price = (string) $this->plan->price; // Cast decimal to string for input
            $this->currency = $this->plan->currency;
            $this->features = $this->plan->features ?? ['']; // Ensure it's an array, add empty if null
            $this->stripe_price_id = $this->plan->stripe_price_id;
            $this->is_active = $this->plan->is_active;
            $this->sort_order = $this->plan->sort_order;

            // Adjust the slug validation rule to ignore the current plan's ID
            $this->rules['slug'] = [
                'required',
                'string',
                'min:3',
                'max:255',
                ValidationRule::unique('plans', 'slug')->ignore($this->plan->id),
            ];
        }
    }

    /**
     * Handle form submission (create or update).
     */
    public function save()
    {
        // Re-apply dynamic validation rules for slug if editing
        if ($this->plan) {
            $this->rules['slug'] = [
                'required',
                'string',
                'min:3',
                'max:255',
                ValidationRule::unique('plans', 'slug')->ignore($this->plan->id),
            ];
        }

        $this->validate();

        // Filter out empty feature inputs before saving
        $this->features = array_filter($this->features, fn($feature) => !empty(trim($feature)));

        if ($this->plan) {
            $this->updatePlan();
            $message = "Plan updated successfully!";
        } else {
            $this->createPlan();
            $message = "Plan saved successfully!";
        }

        $this->dispatch('show-toast', [
            'message' => $message,
            'type' => 'success',
        ]);

        $this->redirect(route('admin.plan.index'), navigate: true);
    }

    /**
     * Create a new plan.
     */
    protected function createPlan()
    {
        Plan::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => (float) $this->price, // Cast back to float for database
            'currency' => $this->currency,
            'features' => $this->features,
            'stripe_price_id' => $this->stripe_price_id,
            'is_active' => $this->is_active,
            'sort_order' => $this->sort_order,
        ]);
    }

    /**
     * Update an existing plan.
     */
    protected function updatePlan()
    {
        $this->plan->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => (float) $this->price,
            'currency' => $this->currency,
            'features' => $this->features,
            'stripe_price_id' => $this->stripe_price_id,
            'is_active' => $this->is_active,
            'sort_order' => $this->sort_order,
        ]);
    }

    // Livewire hooks for real-time validation (optional, but good for UX)
    public function updated($propertyName)
    {
        // Only validate if property is not a feature input (features are handled by specific methods)
        if (!str_starts_with($propertyName, 'features.')) {
            $this->validateOnly($propertyName);
        }
    }

    public function updatedSlug()
    {
        // Special handling for slug unique rule during real-time validation
        $rule = 'required|string|min:3|max:255|';
        if ($this->plan) {
            $rule .= ValidationRule::unique('plans', 'slug')->ignore($this->plan->id);
        } else {
            $rule .= 'unique:plans,slug';
        }
        $this->validateOnly('slug', ['slug' => $rule]);
    }

    // Methods for managing features array
    public function addFeature()
    {
        $this->features[] = '';
    }

    public function removeFeature($index)
    {
        unset($this->features[$index]);
        $this->features = array_values($this->features); // Re-index the array
    }

    public function render()
    {
        return view('livewire.core.backend.plan.manage');
    }
}
