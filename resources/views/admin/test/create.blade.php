@extends('admin.layouts.app')

@section('title', 'Test Index')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <x-subheader title="Test Create" breadcrumb="admin,test|index,create">
        <a href="{{ route('admin.test.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
            <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
            <div class="btn-group">
                <button type="submit" class="btn btn-primary font-weight-bolder" form="kt_form">
                    <i class="ki ki-check icon-sm"></i>Submit</button>
            </div>
    </x-subheader>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection