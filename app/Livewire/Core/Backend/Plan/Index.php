<?php

namespace App\Livewire\Core\Backend\Plan;

use App\Models\Core\Plan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'sort_order';
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $selectedPlans = [];
    public $selectAll = false;

    public $planToDelete = null; // Still needed to store the ID of the plan to be deleted

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
            $this->selectedPlans = $this->getPlansProperty()->pluck('id')->map(fn($id) => (string) $id)->toArray();
        } else {
            $this->selectedPlans = [];
        }
    }

    public function isSelected($planId)
    {
        return in_array($planId, $this->selectedPlans);
    }

    public function deleteSelected()
    {
        if (empty($this->selectedPlans)) {
            session()->flash('message', 'No plans selected for deletion.');
            return;
        }

        foreach ($this->selectedPlans as $planId) {
            $plan = Plan::find($planId);
            if ($plan) {
                $plan->delete();
            }
        }

        $deletedCount = count($this->selectedPlans);
        $this->selectedPlans = [];
        $this->selectAll = false;
        session()->flash('message', "{$deletedCount} plan(s) deleted successfully!");
    }

    // Method to set the planToDelete when the modal button is clicked
    // No dispatching of modal events needed here
    public function setPlanToDelete($planId)
    {
        $this->planToDelete = $planId;
    }

    public function deletePlan()
    {
        if ($this->planToDelete) {
            $plan = Plan::find($this->planToDelete);
            if ($plan) {
                $plan->delete();
                session()->flash('message', "Plan '{$plan->name}' deleted successfully!");
            } else {
                session()->flash('message', "Plan not found or already deleted.");
            }
        } else {
            session()->flash('message', "No plan selected for deletion.");
        }

        $this->planToDelete = null; // Clear the plan to delete
        // No dispatching of close-modal event needed, Bootstrap handles closing via data-bs-dismiss
    }

    public function getPlansProperty()
    {
        return Plan::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%')
                    ->orWhere('slug', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.core.backend.plan.index', [
            'plans' => $this->getPlansProperty(),
        ]);
    }
}
