{{--<div class="card card-flush h-md-100">
    <div class="card-header pt-7">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-gray-900">New Users</span>
        </h3>
        <div class="card-toolbar">
            <a href="{{ route('admin.users.index') }}"
               class="btn btn-sm btn-light">
                <i class="bi bi-list"></i>
                Show All
            </a>
        </div>
    </div>
    <div class="card-body pt-6">
        <div class="table-responsive">
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <!--begin::Table head-->
                <thead>
                <tr class="fs-7 fw-bolder text-gray-700 border-bottom-0">
                    <th class="p-0 pb-3 min-w-175px text-start">Name</th>
                    <th class="p-0 pb-3 min-w-100px">Email</th>
                    <th class="p-0 pb-3 min-w-150px">Created At</th>
                    <th class="p-0 pb-3 w-50px text-end"></th>
                </tr>
                </thead>
                <tbody>
                @forelse ($signals as $signal)
                    <tr>
                        <td>
                            <div class="position-relative ps-6 pe-3 py-2">
                                <div
                                    class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-{{ $signal->position_side == 'BUY' ? 'success' : 'danger' }}"></div>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-4">
                                        <img
                                            src="{{ $signal->pair->logo }}"
                                            class="" alt=""/>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                           class="text-start text-gray-900 fw-bolder text-hover-primary mb-1 fs-6">{{ $signal->pair->symbol }}</a>
                                        <span
                                            class="text-gray-600 fw-bold d-block fs-7">{{ $signal->pair->description }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            @if($signal->position_side == 'BUY')
                                <span class="badge badge-success fs-base p-4">BUY</span>
                            @else
                                <span class="badge badge-danger fs-base p-4">SELL</span>
                            @endif
                        </td>
                        <td>
                                        <span
                                            class="text-gray-700 fw-bolder fs-6">{{ $signal->candle_time->format('Y-m-d H:i:s') }}</span>
                        </td>
                        <td>
                            <span class="text-gray-700 fw-bolder fs-6">{{ $signal->time_frame }}</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="symbol symbol-30px me-2">
                                    <img src="https://s3-symbol-logo.tradingview.com/provider/binance.svg"
                                         alt="">
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#"
                                       class="text-start text-gray-900 fw-bolder text-hover-primary mb-1 fs-6">Binance</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-gray-700 fw-bolder fs-6">{{ $signal->strategy->name }}</span>
                        </td>
                        <td>
                            <a href="{{ route('chart',$signal->code) }}"
                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor"/>
																			<path opacity="0.3"
                                                                                  d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                  fill="currentColor"/>
																		</svg>
																	</span>
                                <!--end::Svg Icon-->
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">Not Item Found || Not Item Exists</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>--}}

<div class="card card-flush h-md-100">
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                          height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                          fill="currentColor"/>
													<path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="currentColor"/>
												</svg>
											</span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-user-table-filter="search"
                       class="form-control form-control-solid w-250px ps-14" placeholder="Search user"/>
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path
                                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                                        fill="currentColor"/>
												</svg>
											</span>
                    <!--end::Svg Icon-->Filter
                </button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Content-->
                    <div class="px-7 py-5" data-kt-user-table-filter="form">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">Role:</label>
                            <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-kt-user-table-filter="role" data-hide-search="true">
                                <option></option>
                                <option value="Administrator">Administrator</option>
                                <option value="Analyst">Analyst</option>
                                <option value="Developer">Developer</option>
                                <option value="Support">Support</option>
                                <option value="Trial">Trial</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">Two Step Verification:</label>
                            <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-kt-user-table-filter="two-step" data-hide-search="true">
                                <option></option>
                                <option value="Enabled">Enabled</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                    data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset
                            </button>
                            <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true"
                                    data-kt-user-table-filter="filter">Apply
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Menu 1-->
                <!--end::Filter-->
                <!--begin::Export-->
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_export_users">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                    <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1"
                                                          transform="rotate(90 12.75 4.25)" fill="currentColor"/>
													<path
                                                        d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                        fill="currentColor"/>
													<path
                                                        d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                        fill="#C4C4C4"/>
												</svg>
											</span>
                    <!--end::Svg Icon-->Export
                </button>
                <!--end::Export-->
                <!--begin::Add user-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_user">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                          rx="1" transform="rotate(-90 11.364 20.364)"
                                                          fill="currentColor"/>
													<rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                          fill="currentColor"/>
												</svg>
											</span>
                    <!--end::Svg Icon-->Add User
                </button>
                <!--end::Add user-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                </div>
                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete
                    Selected
                </button>
            </div>
            <!--end::Group actions-->
            <!--begin::Modal - Adjust Balance-->
            <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Export Users</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                          height="2" rx="1"
                                                                          transform="rotate(-45 6 17.3137)"
                                                                          fill="currentColor"/>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                          transform="rotate(45 7.41422 6)"
                                                                          fill="currentColor"/>
																</svg>
															</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_modal_export_users_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="role" data-control="select2" data-placeholder="Select a role"
                                            data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                        <option></option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Analyst">Analyst</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Support">Support</option>
                                        <option value="Trial">Trial</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold form-label mb-2">Select Export Format:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="format" data-control="select2" data-placeholder="Select a format"
                                            data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                        <option></option>
                                        <option value="excel">Excel</option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                        Discard
                                    </button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
																	<span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->
            <!--begin::Modal - Add task-->
            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_user_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add User</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                          height="2" rx="1"
                                                                          transform="rotate(-45 6 17.3137)"
                                                                          fill="currentColor"/>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                          transform="rotate(45 7.41422 6)"
                                                                          fill="currentColor"/>
																</svg>
															</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_modal_add_user_form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                     data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                     data-kt-scroll-max-height="auto"
                                     data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                     data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                        <!--end::Label-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                             style="background-image: url('/metronic8/demo2/assets/media/svg/avatars/blank.svg')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                 style="background-image: url(/metronic8/demo2/assets/media/avatars/300-6.jpg);"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
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
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
																			<i class="bi bi-x fs-2"></i>
																		</span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
																			<i class="bi bi-x fs-2"></i>
																		</span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="user_name"
                                               class="form-control form-control-solid mb-3 mb-lg-0"
                                               placeholder="Full name" value="Emma Smith"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" name="user_email"
                                               class="form-control form-control-solid mb-3 mb-lg-0"
                                               placeholder="example@domain.com" value="smith@kpmg.com"/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-5">Role</label>
                                        <!--end::Label-->
                                        <!--begin::Roles-->
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                       value="0" id="kt_modal_update_role_option_0" checked='checked'/>
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bolder text-gray-800">Administrator</div>
                                                    <div class="text-gray-600">Best for business owners and company
                                                        administrators
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                       value="1" id="kt_modal_update_role_option_1"/>
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                    <div class="fw-bolder text-gray-800">Developer</div>
                                                    <div class="text-gray-600">Best for developers or people primarily
                                                        using the API
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                       value="2" id="kt_modal_update_role_option_2"/>
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                    <div class="fw-bolder text-gray-800">Analyst</div>
                                                    <div class="text-gray-600">Best for people who need full access to
                                                        analytics data, but don't need to update business settings
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                       value="3" id="kt_modal_update_role_option_3"/>
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                    <div class="fw-bolder text-gray-800">Support</div>
                                                    <div class="text-gray-600">Best for employees who regularly refund
                                                        payments and respond to disputes
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                       value="4" id="kt_modal_update_role_option_4"/>
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                    <div class="fw-bolder text-gray-800">Trial</div>
                                                    <div class="text-gray-600">Best for people who need to preview
                                                        content data, but don't need to make any updates
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <!--end::Roles-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                        Discard
                                    </button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
																	<span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Add task-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <div class="card-body py-4">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
            <thead>
            <!--begin::Table row-->
            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                               data-kt-check-target="#kt_table_users .form-check-input" value="1"/>
                    </div>
                </th>
                <th class="min-w-125px">User</th>
                <th class="min-w-125px">Role</th>
                <th class="min-w-125px">Last login</th>
                <th class="min-w-125px">Two-step</th>
                <th class="min-w-125px">Joined Date</th>
                <th class="text-end min-w-100px">Actions</th>
            </tr>
            <!--end::Table row-->
            </thead>
            <tbody class="text-gray-600 fw-bold">
            <tr>
                <!--begin::Checkbox-->
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1"/>
                    </div>
                </td>
                <!--end::Checkbox-->
                <!--begin::User=-->
                <td class="d-flex align-items-center">
                    <!--begin:: Avatar -->
                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html">
                            <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                        </a>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::User details-->
                    <div class="d-flex flex-column">
                        <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html"
                           class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                        <span>melody@altbox.com</span>
                    </div>
                    <!--begin::User details-->
                </td>
                <!--end::User=-->
                <!--begin::Role=-->
                <td>Analyst</td>
                <!--end::Role=-->
                <!--begin::Last login=-->
                <td>
                    <div class="badge badge-light fw-bolder">20 mins ago</div>
                </td>
                <!--end::Last login=-->
                <!--begin::Two step=-->
                <td>
                    <div class="badge badge-light-success fw-bolder">Enabled</div>
                </td>
                <!--end::Two step=-->
                <!--begin::Joined-->
                <td>24 Jun 2022, 8:43 pm</td>
                <!--begin::Joined-->
                <!--begin::Action=-->
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
                       data-kt-menu-placement="bottom-end">Actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                        <!--end::Svg Icon--></a>
                    <!--begin::Menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html"
                               class="menu-link px-3">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
                <!--end::Action=-->
            </tr>
            <tr>
                <!--begin::Checkbox-->
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1"/>
                    </div>
                </td>
                <!--end::Checkbox-->
                <!--begin::User=-->
                <td class="d-flex align-items-center">
                    <!--begin:: Avatar -->
                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html">
                            <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                        </a>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::User details-->
                    <div class="d-flex flex-column">
                        <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html"
                           class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                        <span>mik@pex.com</span>
                    </div>
                    <!--begin::User details-->
                </td>
                <!--end::User=-->
                <!--begin::Role=-->
                <td>Administrator</td>
                <!--end::Role=-->
                <!--begin::Last login=-->
                <td>
                    <div class="badge badge-light fw-bolder">5 days ago</div>
                </td>
                <!--end::Last login=-->
                <!--begin::Two step=-->
                <td></td>
                <!--end::Two step=-->
                <!--begin::Joined-->
                <td>10 Nov 2022, 9:23 pm</td>
                <!--begin::Joined-->
                <!--begin::Action=-->
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
                       data-kt-menu-placement="bottom-end">Actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                        <!--end::Svg Icon--></a>
                    <!--begin::Menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html"
                               class="menu-link px-3">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
                <!--end::Action=-->
            </tr>
            <tr>
                <!--begin::Checkbox-->
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1"/>
                    </div>
                </td>
                <!--end::Checkbox-->
                <!--begin::User=-->
                <td class="d-flex align-items-center">
                    <!--begin:: Avatar -->
                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html">
                            <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                        </a>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::User details-->
                    <div class="d-flex flex-column">
                        <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html"
                           class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                        <span>owen.neil@gmail.com</span>
                    </div>
                    <!--begin::User details-->
                </td>
                <!--end::User=-->
                <!--begin::Role=-->
                <td>Analyst</td>
                <!--end::Role=-->
                <!--begin::Last login=-->
                <td>
                    <div class="badge badge-light fw-bolder">20 mins ago</div>
                </td>
                <!--end::Last login=-->
                <!--begin::Two step=-->
                <td>
                    <div class="badge badge-light-success fw-bolder">Enabled</div>
                </td>
                <!--end::Two step=-->
                <!--begin::Joined-->
                <td>20 Jun 2022, 11:30 am</td>
                <!--begin::Joined-->
                <!--begin::Action=-->
                <td class="text-end">
                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
                       data-kt-menu-placement="bottom-end">Actions
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                        <span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                        <!--end::Svg Icon--></a>
                    <!--begin::Menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="/metronic8/demo2/../demo2/apps/user-management/users/view.html"
                               class="menu-link px-3">Edit</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </td>
                <!--end::Action=-->
            </tr>
            </tbody>
        </table>
    </div>
</div>
