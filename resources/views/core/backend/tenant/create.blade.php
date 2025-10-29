@extends('core.backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Widgets</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Velzon</a></li>
                    <li class="breadcrumb-item active">Widgets</li>
                </ol>
            </div>

        </div>
    </div>
</div>


<livewire:core.backend.tenant.manage />
@endsection