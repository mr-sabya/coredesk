<div>
    <!-- Billing Toggle -->
    <div class="d-flex flex-row gap-2 justify-content-center align-items-center pt-0 pb-65"
        x-data="{ initAOSToggle: false }" {{-- New Alpine data for the toggle --}}
        x-init="$nextTick(() => { if (!initAOSToggle) { AOS.init(); initAOSToggle = true; } })" {{-- New Alpine init --}}
        wire:ignore.self {{-- Add wire:ignore.self here to prevent Livewire from ever touching this root div --}}
        data-aos="fade-up" data-aos-delay="200" data-aos-duration="200">
        <span class="text-gray-900 fw-500 pt-1 fs-16">Bill monthly</span>
        <div class="form-check form-switch pt-0">
            <input class="form-check-input form-checked-success pt-0" type="checkbox" id="billing-toggle" wire:model.live="annualBilling">
            <label class="form-check-label mb-0" for="billing-toggle"></label>
        </div>
        <span class="text-gray-900 fw-500 pt-1 fs-16">Bill annually</span>
    </div>

    {{-- This div.row is where the plans are dynamically rendered, and where we need to control AOS re-initialization --}}
    <div class="row justify-content-center align-items-center"> {{-- This wire:ignore.self is crucial for the cards --}}

        @foreach ($plans as $index => $plan)
        @php
        $isMiddlePlan = $loop->iteration == 2;
        @endphp

        <div class="col-lg-4"
            x-data="{ initAOSCards: false }" {{-- Renamed for clarity, now specific to cards --}}
            x-init="$nextTick(() => { if (!initAOSCards) { AOS.init(); initAOSCards = true; } })"
            wire:ignore.self
            data-aos="fade-up"
            data-aos-duration="400"
            data-aos-delay="{{ 100 * ($index + 1) }}">
            <div class="d-flex flex-column p-5 gap-4 rounded-4
                    {{ $isMiddlePlan ? 'bg-deepblue text-white shadow-lg' : 'bg-gradient-darklight' }}"
                style="{{ $isMiddlePlan ? 'background-image: linear-gradient(to bottom, #1363D6, #0B3471);' : 'background-image: linear-gradient(to bottom, #F2F8FF, #E6F2FF);' }}">

                <div>
                    <h3 class="fw-600 {{ $isMiddlePlan ? 'text-white' : 'text-gray-900' }} display4-size">{{ $plan->name }}</h3>
                    <p class="fw-400 mb-0 fs-17 mt-1 {{ $isMiddlePlan ? 'text-white opacity-75' : 'text-gray-700' }}">
                        {{ $plan->description }}
                    </p>
                </div>

                <h4 class="display5-size fw-700 {{ $isMiddlePlan ? 'text-white' : 'text-gray-900' }} lh-1 mb-0">
                    <span class="price">
                        ${{ $annualBilling ? number_format($plan->annual_price, 0) : number_format($plan->price, 0) }}
                    </span>
                    <span class="fs-16 fw-500 {{ $isMiddlePlan ? 'text-white opacity-75' : 'text-gray-500' }} d-inline-block lh-1 ls-1">
                        / {{ $annualBilling ? 'year' : 'month' }}
                    </span>
                </h4>

                <div class="{{ $isMiddlePlan ? 'border-0' : 'border-top border-gray-200' }}"></div>
                <a href="pricing.html?plan={{ $plan->slug }}" class="btn btn-lg rounded-2 border-0 my-0
                        {{ $isMiddlePlan ? 'bg-white text-deepblue' : 'bg-deepblue text-white' }}">
                    <span>Start trial for 14 days</span>
                    @if (!$isMiddlePlan)
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="ms-2">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                    @endif
                </a>
                <div class="{{ $isMiddlePlan ? 'border-0' : 'border-top border-gray-200' }}"></div>

                <!-- Features List -->
                <div>
                    @foreach ($plan->features as $feature)
                    <p class="fw-400 mb-2 fs-16 d-flex align-items-center gap-2
                                {{ $isMiddlePlan ? 'text-white' : 'text-gray-900' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill {{ $isMiddlePlan ? 'text-white' : 'text-deepblue' }}" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                        </svg>
                        {{ $feature }}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>