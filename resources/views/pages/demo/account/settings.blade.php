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
    @includeIf('pages.account.partials.header',['activeMenu' => 3])
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_profile_details" aria-expanded="true"
             aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_profile_details_form2" class="form" method="post">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                 style="background-image: url({{ asset('assets/media/avatars/blank.png') }})">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                     style="background-image: url({{ asset('assets/media/avatars/150-26.jpg') }})"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="avatar_remove"/>
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="first_name"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="First name" value="{{ old('first_name',auth()->user()->first_name) }}"/>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="last_name"
                                           class="form-control form-control-lg form-control-solid"
                                           placeholder="Last name" value="{{ old('last_name',auth()->user()->last_name) }}"/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
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
                                        <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Email
                                            Address</label>
                                        <input type="email" class="form-control form-control-lg form-control-solid"
                                               id="emailaddress" placeholder="Email Address" name="emailaddress"
                                               value="{{ auth()->user()->email }}"/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="fv-row mb-0">
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid"
                                               name="confirmemailpassword" id="confirmemailpassword"/>
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
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                          fill="black"/>
													<path
                                                        d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                                        fill="black"/>
												</svg>
											</span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                        <!--begin::Content-->
                        <div class="mb-3 mb-md-0 fw-bold">
                            <h4 class="text-gray-900 fw-bolder">Secure Your Account</h4>
                            <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of
                                security to your account. To log in, in addition you'll need to provide a 6 digit code
                            </div>
                        </div>
                        <!--end::Content-->
                        <!--begin::Action-->
                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal"
                           data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Content-->
    </div>
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_connected_accounts" aria-expanded="true"
             aria-controls="kt_account_connected_accounts">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Connected Accounts</h3>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_connected_accounts" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Notice-->
                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
                                                          fill="black"/>
													<path
                                                        d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
                                                        fill="black"/>
												</svg>
											</span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1">
                        <!--begin::Content-->
                        <div class="fw-bold">
                            <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to
                                your account. To log in, in you'll need to provide a 4 digit amazing code.
                                <a href="#" class="fw-bolder">Learn More</a></div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Notice-->
                <!--begin::Items-->
                <div class="py-2">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <div class="d-flex">
                            <img src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="w-30px me-6"
                                 alt=""/>
                            <div class="d-flex flex-column">
                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
                                <div class="fs-6 fw-bold text-gray-400">Plan properly your workflow</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="form-check form-check-solid form-switch">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch"
                                       checked="checked"/>
                                <label class="form-check-label" for="googleswitch"></label>
                            </div>
                        </div>
                    </div>
                    <!--end::Item-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <div class="d-flex">
                            <img src="{{ asset('assets/media/svg/brand-logos/github.svg') }}" class="w-30px me-6"
                                 alt=""/>
                            <div class="d-flex flex-column">
                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
                                <div class="fs-6 fw-bold text-gray-400">Keep eye on on your Repositories</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="form-check form-check-solid form-switch">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch"
                                       checked="checked"/>
                                <label class="form-check-label" for="githubswitch"></label>
                            </div>
                        </div>
                    </div>
                    <!--end::Item-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <div class="d-flex">
                            <img src="/assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt=""/>
                            <div class="d-flex flex-column">
                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
                                <div class="fs-6 fw-bold text-gray-400">Integrate Projects Discussions</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="form-check form-check-solid form-switch">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch"/>
                                <label class="form-check-label" for="slackswitch"></label>
                            </div>
                        </div>
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                <button class="btn btn-primary">Save Changes</button>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Content-->
    </div>
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_email_preferences" aria-expanded="true"
             aria-controls="kt_account_email_preferences">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Notificatios Preferences</h3>
            </div>
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_email_preferences" class="collapse show">
            <!--begin::Form-->
            <form class="form">
                <!--begin::Card body-->
                <div class="card-body border-top px-9 py-9">
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1"/>
                        <!--end::Input-->
                        <!--begin::Label-->
                        <div class="form-check-label d-flex flex-column align-items-start">
                            <span class="fw-bolder fs-5 mb-0">Item 1</span>
                            <span class="text-muted fs-6">Text Item 1</span>
                        </div>
                        <!--end::Label-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]"
                               checked="checked" value="1"/>
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bolder fs-5 mb-0">Item 2</span>
													<span class="text-muted fs-6">Text Item 2</span>
												</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1"/>
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bolder fs-5 mb-0">Item 3</span>
													<span class="text-muted fs-6">Text Item 3</span>
												</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]"
                               checked="checked" value="1"/>
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bolder fs-5 mb-0">Item 4</span>
													<span class="text-muted fs-6">Text Item 4</span>
												</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1"/>
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bolder fs-5 mb-0">Item 5</span>
													<span class="text-muted fs-6">Text Item 5</span>
												</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]"
                               checked="checked" value="1"/>
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bolder fs-5 mb-0">Item 6</span>
													<span class="text-muted fs-6">Text Item 6</span>
												</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Option-->
                    <!--begin::Option-->
                    <label class="form-check form-check-custom form-check-solid align-items-start">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1"/>
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bolder fs-5 mb-0">Item 7</span>
													<span class="text-muted fs-6">Text Item 7</span>
												</span>
                        <!--end::Label-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button class="btn btn-primary px-6">Save Changes</button>
                </div>
                <!--end::Card footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Notifications</h3>
            </div>
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_notifications" class="collapse show">
            <!--begin::Form-->
            <form class="form">
                <!--begin::Card body-->
                <div class="card-body border-top px-9 pt-3 pb-4">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-row-dashed border-gray-300 align-middle gy-6">
                            <tbody class="fs-6 fw-bold">
                            <tr>
                                <td class="min-w-250px fs-4 fw-bolder">Item 1</td>
                                <td class="w-125px">
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="kt_settings_notification_email" checked="checked"
                                               data-kt-check="true"
                                               data-kt-check-target="[data-kt-settings-notification=email]"/>
                                        <label class="form-check-label ps-2"
                                               for="kt_settings_notification_email">Email</label>
                                    </div>
                                </td>
                                <td class="w-125px">
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                               id="kt_settings_notification_phone" checked="checked"
                                               data-kt-check="true"
                                               data-kt-check-target="[data-kt-settings-notification=phone]"/>
                                        <label class="form-check-label ps-2"
                                               for="kt_settings_notification_phone">Phone</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Item 2</td>
                                <td>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="billing1"
                                               checked="checked" data-kt-settings-notification="email"/>
                                        <label class="form-check-label ps-2" for="billing1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="billing2"
                                               checked="checked" data-kt-settings-notification="phone"/>
                                        <label class="form-check-label ps-2" for="billing2"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Item 3</td>
                                <td>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="team1"
                                               checked="checked" data-kt-settings-notification="email"/>
                                        <label class="form-check-label ps-2" for="team1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="team2"
                                               data-kt-settings-notification="phone"/>
                                        <label class="form-check-label ps-2" for="team2"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Item 4</td>
                                <td>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="project1"
                                               data-kt-settings-notification="email"/>
                                        <label class="form-check-label ps-2" for="project1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="project2"
                                               checked="checked" data-kt-settings-notification="phone"/>
                                        <label class="form-check-label ps-2" for="project2"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">Item 5</td>
                                <td class="border-bottom-0">
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="newsletter1"
                                               data-kt-settings-notification="email"/>
                                        <label class="form-check-label ps-2" for="newsletter1"></label>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" id="newsletter2"
                                               data-kt-settings-notification="phone"/>
                                        <label class="form-check-label ps-2" for="newsletter2"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button class="btn btn-primary px-6">Save Changes</button>
                </div>
                <!--end::Card footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Deactivate Account</h3>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_deactivate" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_deactivate_form" class="form">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                              fill="black"/>
														<rect x="11" y="14" width="7" height="2" rx="1"
                                                              transform="rotate(-90 11 14)" fill="black"/>
														<rect x="11" y="17" width="2" height="2" rx="1"
                                                              transform="rotate(-90 11 17)" fill="black"/>
													</svg>
												</span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-bold">
                                <h4 class="text-gray-900 fw-bolder">You Are Deactivating Your Account</h4>
                                <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your
                                    email or phone number when you reset yousignr password.
                                    <br/>
                                    <a class="fw-bolder" href="#">Learn more</a></div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--begin::Form input row-->
                    <div class="form-check form-check-solid fv-row">
                        <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate"/>
                        <label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm my account
                            deactivation</label>
                    </div>
                    <!--end::Form input row-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-bold">
                        Deactivate Account
                    </button>
                </div>
                <!--end::Card footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>

    <div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
        <!--begin::Modal header-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header flex-stack">
                    <!--begin::Title-->
                    <h2>Choose An Authentication Method</h2>
                    <!--end::Title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                    <!--begin::Options-->
                    <div data-kt-element="options">
                        <!--begin::Notice-->
                        <p class="text-muted fs-5 fw-bold mb-10">In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
                        <!--end::Notice-->
                        <!--begin::Wrapper-->
                        <div class="pb-10">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
                            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                <span class="svg-icon svg-icon-4x me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
															</svg>
														</span>
                                <!--end::Svg Icon-->
                                <span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-3">Authenticator Apps</span>
															<span class="text-muted fw-bold fs-6">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
														</span>
                            </label>
                            <!--end::Option-->
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                <span class="svg-icon svg-icon-4x me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
																<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
															</svg>
														</span>
                                <!--end::Svg Icon-->
                                <span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-3">SMS</span>
															<span class="text-muted fw-bold fs-6">We will send a code via SMS if you need to use your backup login method.</span>
														</span>
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Options-->
                        <!--begin::Action-->
                        <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
                        <!--end::Action-->
                    </div>
                    <!--end::Options-->
                    <!--begin::Apps-->
                    <div class="d-none" data-kt-element="apps">
                        <!--begin::Heading-->
                        <h3 class="text-dark fw-bolder mb-7">Authenticator Apps</h3>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <div class="text-gray-500 fw-bold fs-6 mb-10">Using an authenticator app like
                            <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                            <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                            <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                            <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
                            <!--begin::QR code image-->
                            <div class="pt-5 text-center">
                                <img src="assets/media/misc/qr.png" alt="" class="mw-150px" />
                            </div>
                            <!--end::QR code image--></div>
                        <!--end::Description-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
														</svg>
													</span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-bold">
                                    <div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
                                        <div class="fw-bolder text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div></div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--begin::Form-->
                        <form data-kt-element="apps-form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center">
                                <button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Options-->
                    <!--begin::SMS-->
                    <div class="d-none" data-kt-element="sms">
                        <!--begin::Heading-->
                        <h3 class="text-dark fw-bolder fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
                        <!--end::Heading-->
                        <!--begin::Notice-->
                        <div class="text-muted fw-bold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
                        <!--end::Notice-->
                        <!--begin::Form-->
                        <form data-kt-element="sms-form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center">
                                <button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::SMS-->
                </div>
                <!--begin::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal header-->
    </div>
    @includeIf('pages.account.partials.modal_upgrade_plan')
@stop

@section('page-scripts')
    <script src="{{ asset('assets/js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
{{--    <script src="assets/js/custom/apps/chat/chat.js"></script>--}}
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
{{--    <script src="assets/js/custom/modals/create-app.js"></script>--}}
{{--    <script src="assets/js/custom/modals/offer-a-deal/type.js"></script>--}}
{{--    <script src="assets/js/custom/modals/offer-a-deal/details.js"></script>--}}
{{--    <script src="assets/js/custom/modals/offer-a-deal/finance.js"></script>--}}
{{--    <script src="assets/js/custom/modals/offer-a-deal/complete.js"></script>--}}
{{--    <script src="assets/js/custom/modals/offer-a-deal/main.js"></script>--}}
    <script src="{{ asset('assets/js/custom/modals/two-factor-authentication.js') }}"></script>
{{--    <script src="assets/js/custom/modals/users-search.js"></script>--}}
@stop
