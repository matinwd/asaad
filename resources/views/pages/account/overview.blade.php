@extends('layouts.main',['activeMenu' => 5])

@section('title','Account Overview')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary" id="kt_toolbar_primary_button">
            Back To Dashboard
        </a>
    </div>
@stop

@section('content')
    <x-user-header :activeMenu="1"/>

    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
            <a href="{{ route('settings') }}" class="btn btn-primary align-self-center">Edit Profile</a>
        </div>
        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">First Name</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->first_name }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Last Name</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->last_name }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">
                    Email
                </label>
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{ auth()->user()->email }}</span>
                    <span
                        class="badge badge-{{ auth()->user()->hasVerifiedEmail() ? 'success' : 'danger' }}">{{ auth()->user()->hasVerifiedEmail() ? 'Verified' : 'No Validation' }}</span> {{--Verified--}}
                </div>
            </div>
        </div>
    </div>

    @includeIf('pages.account.partials.modal_upgrade_plan')
@stop

@section('scripts')
    <script src="{{ mix('static/js/pages/upgrade-plan.js') }}"></script>
@stop

@section('page-scripts')
@stop
