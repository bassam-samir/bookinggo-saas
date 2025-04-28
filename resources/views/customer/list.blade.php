@extends('layouts.main')

@section('page-title')
    {{ __('Manage Customers') }}
@endsection
@section('page-breadcrumb')
    {{ __('Customers') }}
@endsection
@section('page-action')
    <div class="col-auto d-flex gap-2">
        @if (module_is_active('ImportExport'))
        @permission('customer import')
            @include('import-export::import.button', ['module' => 'customers'])
        @endpermission
        @permission('customer export')
            @include('import-export::export.button', ['module' => 'customers'])
        @endpermission
        @endif

       @permission('customer manage')
            <a href="{{ route('customer.index') }}" class="btn btn-sm btn-primary btn-icon" data-bs-toggle="tooltip"
                title="{{ __('Grid View') }}">
                <i class="ti ti-layout-grid text-white"></i>
            </a>
        @endpermission
        @permission('customer create')
            <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md"
                data-title="{{ __('Create New Customer') }}" data-url="{{ route('customer.create') }}" data-bs-toggle="tooltip"
                data-bs-original-title="{{ __('Create') }}">
                <i class="ti ti-plus"></i>
            </a>
        @endpermission
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <x-datatable :dataTable="$dataTable" />
        </div>
    </div>
@endsection
