@extends('layouts.main',['activeMenu' => 5])

@section('title','Account Settings')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary" id="kt_toolbar_primary_button">Back To
            Dashboard</a>
    </div>
@stop

@section('content')
    <x-user-header :activeMenu="3"/>

    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_profile_details" aria-expanded="true"
             aria-controls="kt_account_profile_details">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
        </div>
        <div id="kt_account_settings_profile_details" class="collapse show">
            <form id="kt_account_profile_details_form2" class="form" method="post">
                @csrf
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">First Name</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="first_name"
                                   class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                   placeholder="First name"
                                   value="{{ old('first_name',auth()->user()->first_name) }}"/>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Last Name</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="last_name"
                                   class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                   placeholder="Last Name"
                                   value="{{ old('last_name',auth()->user()->last_name) }}"/>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit2">Save Changes
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_signin_method">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Sign-in Method</h3>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_signin_method" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Email Address-->
                <div class="d-flex flex-wrap align-items-center">
                    <!--begin::Label-->
                    <div id="kt_signin_email">
                        <div class="fs-6 fw-bolder mb-1">Email Address</div>
                        <div class="fw-bold text-gray-600">{{ auth()->user()->email }}</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Edit-->
                    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                        <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                            <div class="row mb-6">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="fv-row mb-0">
                                        <label for="email-js" class="form-label fs-6 fw-bolder mb-3">Enter New Email
                                            Address</label>
                                        <input type="email" class="form-control form-control-lg form-control-solid"
                                               id="email-js" placeholder="Email Address" name="email"
                                               value="{{ auth()->user()->email }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update
                                    Email
                                </button>
                                <button id="kt_signin_cancel" type="button"
                                        class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel
                                </button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Edit-->
                    <!--begin::Action-->
                    <div id="kt_signin_email_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Change Email</button>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Email Address-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Password-->
                <div class="d-flex flex-wrap align-items-center mb-10">
                    <!--begin::Label-->
                    <div id="kt_signin_password">
                        <div class="fs-6 fw-bolder mb-1">Password</div>
                        <div class="fw-bold text-gray-600">************</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Edit-->
                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                        <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                            <div class="row mb-1">
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid"
                                               name="currentpassword" id="currentpassword"/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid"
                                               name="newpassword" id="newpassword"/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0">
                                        <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid"
                                               name="confirmpassword" id="confirmpassword"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                            <div class="d-flex">
                                <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update
                                    Password
                                </button>
                                <button id="kt_password_cancel" type="button"
                                        class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel
                                </button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Edit-->
                    <!--begin::Action-->
                    <div id="kt_signin_password_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Password-->
                <!--begin::Notice-->
                {{--                @includeIf('pages.account.partials.two_auth')--}}
                <!--end::Notice-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Content-->
    </div>

    @includeIf('pages.account.partials.notification_settings')
    {{--    @includeIf('pages.account.partials.deactive_account')--}}

    @includeIf('pages.account.partials.modal_upgrade_plan')
@stop

@section('scripts')
    <script src="{{ mix('static/js/pages/upgrade-plan.js') }}"></script>
@stop
@section('page-scripts')
    {{--    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>--}}
    <script src="{{ asset('assets/js/custom/account/settings/signin-methods.js') }}"></script>
    {{--    <script src="{{ asset('assets/js/custom/account/settings/profile-details.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/js/custom/account/settings/deactivate-account.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>--}}
    {{--    <script src="{{ asset('assets/js/custom/modals/two-factor-authentication.js') }}"></script>--}}
@stop
