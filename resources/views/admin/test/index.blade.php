@extends('admin.layouts.app')

@section('title', 'Test Index')

@push('styles')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <x-subheader title="Test Index">
        <div class="dropdown dropdown-inline mr-2">
            <a href="{{ route('admin.test.index')}}" class="mr-2 btn btn-primary font-weight-bolder">Create</a>
            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
            <!--begin::Dropdown Menu-->
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi flex-column navi-hover py-2">
                    <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-print"></i>
                                        </span>
                            <span class="navi-text">Print</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-copy"></i>
                                        </span>
                            <span class="navi-text">Copy</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-excel-o"></i>
                                        </span>
                            <span class="navi-text">Excel</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-text-o"></i>
                                        </span>
                            <span class="navi-text">CSV</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                                        <span class="navi-icon">
                                            <i class="la la-file-pdf-o"></i>
                                        </span>
                            <span class="navi-text">PDF</span>
                        </a>
                    </li>
                </ul>
                <!--end::Navigation-->
            </div>
            <!--end::Dropdown Menu-->
        </div>
    </x-subheader>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div class="row px-5 mb-1 d-flex">
                        <div class="flex-grow-1 tw-m-3">
                            <input type="text" class="form-control datatable-input" id="username" placeholder="Username"
                                   data-col-index="0">
                        </div>
                        <div class="flex-grow-1 tw-m-3">
                            <input type="text" class="form-control datatable-input" id="email" placeholder="Email"
                                   data-col-index="2">
                        </div>
                        <div class="flex-grow-1 tw-m-3">
                            <input type="text" class="form-control datatable-input" id="phone" placeholder="Phone"
                                   data-col-index="1">
                        </div>
                        @if(!session('selectedBranch'))
                        <div class="flex-grow-1 tw-m-3">
                            <select class="form-control datatable-input" id="branch">
                                <option value="">Select Branch</option>
                                {{-- @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        @endif
                        <div class="flex-grow-1 tw-m-3">
                            <select class="form-control datatable-input" id="status">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                        <div class="mb-lg-0 mb-4 tw-m-3">
                            <button type="button" id="subBtn"
                                    class="btn btn-primary btn-primary--icon tw-mr-2 tw-rounded"><i
                                    class="fa fa-search"></i></button>
                            <button type="button" id="clearBtn"
                                    class="btn btn-secondary btn-secondary--icon tw-rounded"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                {{$dataTable->table(['class'=>'table table-bordered table-checkable dataTable dtr-inline'], false)}}
                <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@push('scripts')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5') }}"></script>
    <script>
        function getUrlParameter(name) {
                name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
                var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
                var results = regex.exec(location.search);
                return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };
    </script>

    {{$dataTable->scripts()}}
@endpush