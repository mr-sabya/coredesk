<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Plan Management</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    {{-- Session Flash Message --}}
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="row mb-3 align-items-center">
                        {{-- Search Input --}}
                        <div class="col-sm-6 col-md-4">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Search plans..." wire:model.live.debounce.300ms="search">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>

                        {{-- Bulk Actions & Per Page --}}
                        <div class="col-sm-6 col-md-8 text-sm-end">
                            <div class="d-flex align-items-center justify-content-end gap-2">
                                <div class="me-2">
                                    <label for="perPageSelect" class="form-label mb-0 me-2 d-none d-md-inline">Per Page:</label>
                                    <select id="perPageSelect" wire:model.live="perPage" class="form-select form-control d-inline-block w-auto">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>

                                @if (count($selectedPlans) > 0)
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="bulkActions" data-bs-toggle="dropdown" aria-expanded="false">
                                        Bulk Actions ({{ count($selectedPlans) }})
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="bulkActions">
                                        <li><a class="dropdown-item" href="#" wire:click.prevent="deleteSelected" onclick="confirm('Are you sure you want to delete these plans?') || event.stopImmediatePropagation()">Delete Selected</a></li>
                                    </ul>
                                </div>
                                @endif
                                <a href="{{ route('admin.plan.create') }}" class="btn btn-success" wire:navigate><i class="ri-add-line align-bottom me-1"></i> Add Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive table-card mt-3">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="selectAllPlans" wire:model.live="selectAll">
                                            <label class="form-check-label" for="selectAllPlans"></label>
                                        </div>
                                    </th>
                                    <th class="sort" wire:click="sortBy('name')" data-sort="name">Name
                                        @if ($sortField === 'name')
                                        <i class="ri-sort-{{ $sortDirection === 'asc' ? 'asc' : 'desc' }} align-bottom text-muted"></i>
                                        @endif
                                    </th>
                                    <th class="sort" wire:click="sortBy('slug')" data-sort="slug">Slug
                                        @if ($sortField === 'slug')
                                        <i class="ri-sort-{{ $sortDirection === 'asc' ? 'asc' : 'desc' }} align-bottom text-muted"></i>
                                        @endif
                                    </th>
                                    <th class="sort" wire:click="sortBy('price')" data-sort="price">Price
                                        @if ($sortField === 'price')
                                        <i class="ri-sort-{{ $sortDirection === 'asc' ? 'asc' : 'desc' }} align-bottom text-muted"></i>
                                        @endif
                                    </th>
                                    <th class="sort" wire:click="sortBy('is_active')" data-sort="is_active">Active
                                        @if ($sortField === 'is_active')
                                        <i class="ri-sort-{{ $sortDirection === 'asc' ? 'asc' : 'desc' }} align-bottom text-muted"></i>
                                        @endif
                                    </th>
                                    <th class="sort" wire:click="sortBy('sort_order')" data-sort="sort_order">Order
                                        @if ($sortField === 'sort_order')
                                        <i class="ri-sort-{{ $sortDirection === 'asc' ? 'asc' : 'desc' }} align-bottom text-muted"></i>
                                        @endif
                                    </th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($plans as $plan)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model.live="selectedPlans" value="{{ $plan->id }}">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </th>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->slug }}</td>
                                    <td>{{ $plan->currency }}{{ number_format($plan->price, 2) }}</td>
                                    <td>
                                        @if ($plan->is_active)
                                        <span class="badge bg-success">Yes</span>
                                        @else
                                        <span class="badge bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td>{{ $plan->sort_order }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.plan.edit', $plan->id) }}" class="btn btn-sm btn-primary edit-item-btn" wire:navigate>Edit</a>
                                            {{-- Individual Delete Button: Uses data-bs-toggle/target --}}
                                            <button type="button"
                                                class="btn btn-sm btn-danger remove-item-btn"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deletePlanModal"
                                                wire:click="setPlanToDelete('{{ $plan->id }}')">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">No plans found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        {{ $plans->links() }}
                    </div>

                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    {{-- Delete Confirmation Modal --}}
    <div wire:ignore.self class="modal fade" id="deletePlanModal" tabindex="-1" aria-labelledby="deletePlanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePlanModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this plan? (ID: {{ $planToDelete }}) This action cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    {{-- The delete button will trigger Livewire action AND close the modal --}}
                    <button type="button" class="btn btn-danger" wire:click.prevent="deletePlan" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
