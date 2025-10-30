<div class="dashboard-wrap font-dm position-relative light-blue-banner">
    <div class="maxw-1250 mx-auto">
        <div class="container py-100">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center justify-content-center">
                    <h2 class="display6-size text-gray-900 fw-700 mb-lg-3 mb-3 mt-0 lh-5" data-aos="fade-up"
                        data-aos-duration="200">Welcome, {{ $user->name }}!</h2>
                    <p class="text-gray-700 fw-400 pe-lg-5" data-aos="fade-up" data-aos-duration="300">
                        Here's an overview of your account and recent activities.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center gy-4 gx-4 pt-lg-5 mt-4">
                <!-- Quick Stats / Info Cards -->
                <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="0">
                    <div class="d-flex flex-column p-4 bg-info rounded-4 text-white h-100">
                        <h3 class="fs-22 fw-500 mb-2">Total Tenants</h3>
                        <p class="text-gray-200 fw-400 mb-3 fs-16">The number of tenants you have access to.</p>
                        <div class="mt-auto d-flex align-items-end justify-content-between">
                            <h2 class="display5-size fw-700 lh-1 my-0">{{ $totalTenants }}</h2>
                            <a href="#" class="btn btn-sm btn-light rounded-pill px-3 py-2 text-info">View Tenants</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="100">
                    <div class="d-flex flex-column p-4 bg-gray-100 border border-gray-200 rounded-4 h-100">
                        <h3 class="fs-22 fw-600 text-gray-900 mb-2">Account Status</h3>
                        <p class="text-gray-700 fw-400 mb-3 fs-16">Your current subscription and user type.</p>
                        <div class="mt-auto d-flex align-items-end justify-content-between">
                            <span class="fs-4 fw-600 text-gray-900">{{ $user->is_super_admin ? 'Super Admin' : 'Basic User' }}</span>
                            <a href="{{ route('user.profile') }}" class="btn btn-sm bg-info rounded-pill px-3 py-2 text-white">Manage Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="200">
                    <div class="d-flex flex-column p-4 bg-gray-100 border border-gray-200 rounded-4 h-100">
                        <h3 class="fs-22 fw-600 text-gray-900 mb-2">Quick Actions</h3>
                        <p class="text-gray-700 fw-400 mb-3 fs-16">Jump to common tasks.</p>
                        <div class="mt-auto d-grid gap-2">
                            <a href="#" class="btn btn-outline-info bg-light2 text-white d-flex justify-content-between align-items-center mb-2">
                                Create New Tenant
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-outline-info bg-light2 text-white d-flex justify-content-between align-items-center">
                                View Billing
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Section -->
                <div class="col-lg-12 pt-5" data-aos="fade-up" data-aos-duration="500">
                    <div class="d-flex flex-column p-5 bg-gray-100 border border-gray-200 rounded-4">
                        <h3 class="fs-22 fw-600 text-gray-900 mb-4">Recent Activity</h3>
                        <ul class="list-unstyled">
                            @forelse ($recentActivity as $activity)
                            <li class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                                <span class="text-gray-700 fw-400 fs-16">{{ $activity['description'] }}</span>
                                <span class="text-gray-500 fs-14">{{ \Carbon\Carbon::parse($activity['date'])->diffForHumans() }}</span>
                            </li>
                            @empty
                            <li class="text-gray-700 fw-400 fs-16">No recent activity.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <!-- Your Tenants Section (Conditional) -->
                @if ($totalTenants > 0)
                <div class="col-lg-12 pt-5" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="d-flex flex-column p-5 bg-gray-100 border border-gray-200 rounded-4">
                        <h3 class="fs-22 fw-600 text-gray-900 mb-4">Your Tenants</h3>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->tenants as $tenant)
                                    <tr>
                                        <td>{{ $tenant->name }}</td>
                                        <td><span class="badge bg-info text-white">{{ $tenant->pivot->role }}</span></td>
                                        <td>{{ $tenant->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('tenants.show', $tenant) }}" class="btn btn-sm btn-outline-info">Manage</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="{{ route('tenants.index') }}" class="btn bg-info btn-lg rounded-2 pt-3 text-white border-0">View All Tenants</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div><!-- /Dashboard Overview Wrap -->