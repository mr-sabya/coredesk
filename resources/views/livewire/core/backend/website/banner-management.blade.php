<div>
    <div class="row">
        <div class="col-lg-8"> {{-- Increased column width for more space --}}
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        {{ $banner_exists ? 'Edit Global Banner' : 'Create Global Banner' }}
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

                    <form wire:submit.prevent="saveBanner"> {{-- Changed to saveBanner --}}

                        {{-- News Tag --}}
                        <div class="mb-3">
                            <label for="newsTag" class="form-label">News Tag</label>
                            <input type="text"
                                class="form-control"
                                id="newsTag"
                                placeholder="e.g., NEWS, UPDATE"
                                wire:model.defer="news_tag">
                            @error('news_tag') <span class="text-danger">{{ $message }}</span> @enderror
                            <small class="text-muted">The small tag text (e.g., "NEWS") in the banner.</small>
                        </div>

                        {{-- News Text --}}
                        <div class="mb-3">
                            <label for="newsText" class="form-label">News Text</label>
                            <input type="text"
                                class="form-control"
                                id="newsText"
                                placeholder="e.g., Submit referrals online start now."
                                wire:model.defer="news_text">
                            @error('news_text') <span class="text-danger">{{ $message }}</span> @enderror
                            <small class="text-muted">The main text next to the news tag.</small>
                        </div>

                        {{-- Title --}}
                        <div class="mb-3">
                            <label for="bannerTitle" class="form-label">Banner Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="bannerTitle" placeholder="Enter banner main title" wire:model.defer="title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="bannerDescription" class="form-label">Banner Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="bannerDescription" rows="3" placeholder="Enter banner description" wire:model.defer="description"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Image Upload with Preview --}}
                        <div class="mb-3">
                            <label for="bannerImageUpload" class="form-label">Banner Image</label>
                            <input type="file" class="form-control" id="bannerImageUpload" wire:model="new_image">
                            @error('new_image') <span class="text-danger">{{ $message }}</span> @enderror

                            <div class="mt-2">
                                @if ($new_image)
                                <p class="mb-1">New Image Preview:</p>
                                
                                @if(is_object($new_image) && method_exists($new_image, 'temporaryUrl'))
                                    <img src="{{ $new_image->temporaryUrl() }}" class="img-thumbnail" style="max-width: 250px; max-height: 150px; object-fit: contain;">
                                @else
                                    <p>Cannot display preview.</p>
                                @endif
                                
                                @elseif ($current_image_path)
                                <p class="mb-1">Current Image:</p>
                                <img src="{{ url('storage/' . $current_image_path) }}" class="img-thumbnail" style="max-width: 250px; max-height: 150px; object-fit: contain;">
                                @endif
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <span wire:loading.remove wire:target="saveBanner">{{ $banner_exists ? 'Update Banner' : 'Create Banner' }}</span>
                                <span wire:loading wire:target="saveBanner">Saving...</span>
                            </button>
                            {{-- Consider if you need a cancel button for a single banner --}}
                            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-light waves-effect waves-light" wire:navigate>Cancel</a> --}}
                        </div>
                    </form>

                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>