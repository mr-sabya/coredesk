<div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        {{ $tenant ? 'Edit Tenant: ' . $tenant->name : 'Create New Tenant' }}
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
                        {{-- Tenant ID --}}
                        <div class="mb-3">
                            <label for="tenantIdField" class="form-label">Tenant ID <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control"
                                id="tenantIdField"
                                placeholder="Enter unique tenant ID (e.g., acmecorp)"
                                wire:model.live="tenant_id_field"
                                {{ $tenant ? 'readonly' : '' }}>
                            @error('tenant_id_field') <span class="text-danger">{{ $message }}</span> @enderror
                            <small class="text-muted">This ID is used internally and for the primary domain. Cannot be changed after creation.</small>
                        </div>

                        {{-- Tenant Name --}}
                        <div class="mb-3">
                            <label for="tenantName" class="form-label">Tenant Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="tenantName" placeholder="Enter tenant name" wire:model.defer="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Primary Contact Email --}}
                        <div class="mb-3">
                            <label for="primaryContactEmail" class="form-label">Primary Contact Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="primaryContactEmail" placeholder="Enter contact email" wire:model.defer="primary_contact_email">
                            @error('primary_contact_email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Industry --}}
                        <div class="mb-3">
                            <label for="industry" class="form-label">Industry</label>
                            <input type="text" class="form-control" id="industry" placeholder="e.g., Technology, Retail" wire:model.defer="industry">
                            @error('industry') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Logo Upload with Preview --}}
                        <div class="mb-3">
                            <label for="logoUpload" class="form-label">Tenant Logo</label>
                            <input type="file" class="form-control" id="logoUpload" wire:model="logo_file">
                            @error('logo_file') <span class="text-danger">{{ $message }}</span> @enderror

                            <div class="mt-2">
                                @if ($logo_file)
                                <p class="mb-1">New Logo Preview:</p>
                                <img src="{{ $logo_file->temporaryUrl() }}" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                                @elseif ($existing_logo_path)
                                <p class="mb-1">Current Logo:</p>
                                <img src="{{ Storage::disk('public')->url($existing_logo_path) }}" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                                @endif
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- Domain Name (Full Domain) --}}
                        <div class="mb-3">
                            <label for="domainName" class="form-label">Primary Domain (Full) <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control"
                                id="domainName"
                                placeholder="e.g., acmecorp.localhost or acmecorp.yourdomain.com"
                                wire:model.live="domain_name">
                            <small class="text-muted">Enter the full primary domain for the tenant (e.g., `acmecorp.localhost` or `acmecorp.yourdomain.com`). This must be unique.</small>
                            @error('domain_name') <span class="text-danger d-block mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                {{ $tenant ? 'Update Tenant' : 'Create Tenant' }}
                            </button>
                            <a href="{{ route('admin.tenant.index') }}" class="btn btn-light waves-effect waves-light" wire:navigate>Cancel</a>
                        </div>
                    </form>

                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>