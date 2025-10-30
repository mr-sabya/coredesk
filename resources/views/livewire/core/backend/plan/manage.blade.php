<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        {{ $plan ? 'Edit Plan: ' . $plan->name : 'Create New Plan' }}
                    </h4>
                </div><!-- end card header -->

                <div class="card-body">
                    {{-- Session Flash Message --}}
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form wire:submit.prevent="save">
                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="planName" class="form-label">Plan Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="planName" placeholder="Enter plan name" wire:model.defer="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Slug --}}
                        <div class="mb-3">
                            <label for="planSlug" class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="planSlug" placeholder="Enter unique slug" wire:model.live="slug"> {{-- Use .live for real-time validation --}}
                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                            <small class="text-muted">A unique identifier for the plan, used in URLs or code.</small>
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="planDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="planDescription" rows="3" placeholder="Enter a brief description of the plan" wire:model.defer="description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Price and Currency --}}
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="planPrice" class="form-label">Monthly Price <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" class="form-control" id="planPrice" placeholder="e.g., 9.99" wire:model.defer="price">
                                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="annualPrice" class="form-label">Annual Price <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" class="form-control" id="annualPrice" placeholder="e.g., 9.99" wire:model.defer="annual_price">
                                @error('annual_price') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="planCurrency" class="form-label">Currency <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="planCurrency" placeholder="e.g., USD, EUR" wire:model.defer="currency">
                                @error('currency') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        {{-- Features (Dynamic Inputs) --}}
                        <div class="mb-3">
                            <label class="form-label">Features</label>
                            @foreach ($features as $index => $feature)
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" placeholder="Enter a feature" wire:model.defer="features.{{ $index }}">
                                <button class="btn btn-outline-danger" type="button" wire:click="removeFeature({{ $index }})" {{ count($features) == 1 ? 'disabled' : '' }}>
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>
                            @error('features.' . $index) <span class="text-danger d-block mt-0">{{ $message }}</span> @enderror
                            @endforeach
                            <button type="button" class="btn btn-sm btn-info mt-2" wire:click="addFeature"><i class="ri-add-line align-bottom me-1"></i> Add Feature</button>
                            @error('features') <span class="text-danger d-block mt-1">{{ $message }}</span> @enderror
                        </div>

                        {{-- Stripe Price ID --}}
                        <div class="mb-3">
                            <label for="stripePriceId" class="form-label">Stripe Price ID</label>
                            <input type="text" class="form-control" id="stripePriceId" placeholder="Optional Stripe price ID" wire:model.defer="stripe_price_id">
                            <small class="text-muted">Required if you are integrating with Stripe for subscriptions.</small>
                            @error('stripe_price_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Is Active & Sort Order --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check form-switch form-switch-success mt-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="planIsActive" wire:model.defer="is_active">
                                    <label class="form-check-label" for="planIsActive">Is Active?</label>
                                </div>
                                @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="sortOrder" class="form-label">Sort Order <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="sortOrder" placeholder="e.g., 0, 1, 2" wire:model.defer="sort_order">
                                <small class="text-muted">Lower numbers appear first in lists.</small>
                                @error('sort_order') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                {{ $plan ? 'Update Plan' : 'Create Plan' }}
                            </button>
                            <a href="{{ route('admin.plan.index') }}" class="btn btn-light waves-effect waves-light" wire:navigate>Cancel</a>
                        </div>
                    </form>

                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>