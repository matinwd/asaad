@extends('layouts.main',['activeMenu' => 4])

@section('title','Support Center / Tickets')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="#" class="btn btn-success" id="kt_toolbar_primary_button">Create Ticket</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column flex-xl-row p-7">
                <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                    <div class="mb-0">
                        <form method="post" action="#" class="form mb-15">
                            <div class="position-relative">
                                <span
                                    class="svg-icon svg-icon-1 svg-icon-primary position-absolute top-50 translate-middle ms-9">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223"
                                                                          width="8.15546" height="2" rx="1"
                                                                          transform="rotate(45 17.0365 15.1223)"
                                                                          fill="black"/>
																	<path
                                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                        fill="black"/>
																</svg>
															</span>
                                <input type="text" class="form-control form-control-lg form-control-solid ps-14"
                                       name="search" value="" placeholder="Search"/>
                            </div>
                        </form>
                        <h1 class="text-dark mb-10">Public Tickets</h1>
                        <div class="mb-10">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="d-flex mb-10">
                                    <div
                                        class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 {{ $i % 3 == 0 ? 'svg-icon-warning' : 'svg-icon-success' }}">
                                        @if($i % 3 == 0)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                 height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                      d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z"
                                                      fill="black"/>
                                                <rect x="11" y="19" width="10" height="2" rx="1"
                                                      transform="rotate(-90 11 19)" fill="black"/>
                                                <rect x="7" y="13" width="10" height="2" rx="1"
                                                      fill="black"/>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                      fill="black"/>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                 height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                      d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z"
                                                      fill="black"/>
                                                <path
                                                    d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z"
                                                    fill="black"/>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                      fill="black"/>
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="{{ route('tickets.show',$i + 1) }}"
                                               class="text-dark text-hover-primary fs-4 me-3 fw-bold">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua?
                                            </a>
                                            <span class="badge badge-light my-1">Department {{ rand(1,9) }}</span>
                                        </div>
                                        <span class="text-muted fw-bold fs-6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </span>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <ul class="pagination">
                            <li class="page-item previous disabled">
                                <a href="#" class="page-link">
                                    <i class="previous"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">6</a>
                            </li>
                            <li class="page-item next">
                                <a href="#" class="page-link">
                                    <i class="next"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-column flex-lg-row-auto w-100 mw-lg-300px mw-xxl-350px">
                    <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                        <h2 class="text-dark fw-bolder mb-11">More Channels</h2>
                        <div class="d-flex align-items-center mb-10">
                            <i class="bi bi-file-earmark-text text-primary fs-1 me-5"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bolder">Project Briefing</h5>
                                <div class="fw-bold">
                                    <span class="text-muted">Check out our</span>
                                    <a href="#" class="link-primary">Support Policy</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-10">
                            <i class="bi bi-chat-square-text-fill text-primary fs-1 me-5"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bolder">More to discuss?</h5>
                                <div class="fw-bold">
                                    <span class="text-muted">Email us to</span>
                                    <a href="#" class="link-primary">support@finomate.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-10">
                            <i class="bi bi-twitter text-primary fs-1 me-5"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bolder">Latest News</h5>
                                <div class="fw-bold">
                                    <span class="text-muted">Follow us at</span>
                                    <a href="#" class="link-primary">finomate Twitter</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-telegram text-primary fs-1 me-5"></i>
                            <div class="d-flex flex-column">
                                <h5 class="text-gray-800 fw-bolder">Telegram Join</h5>
                                <div class="fw-bold">
                                    <span class="text-muted">Our Teleram</span>
                                    <a href="#" class="link-primary">finomate Channel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                        <h1 class="fw-bolder text-dark mb-9">Documentation</h1>
                        @for ($i = 0; $i < 10; $i++)
                            <div class="d-flex align-items-center {{ $i != 9 ? 'mb-6' : '' }}">
                                <div class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                                            fill="black"/>
                                    </svg>
                                </div>
                                <a href="#"
                                   class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Item {{ $i + 1 }}</a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <div class="modal-content rounded">
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                              rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
														<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                              transform="rotate(45 7.41422 6)" fill="black"/>
													</svg>
												</span>
                    </div>
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <form id="kt_modal_new_ticket_form" class="form" action="#">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Create Ticket</h1>
                            <div class="text-gray-400 fw-bold fs-5">If you need more info, please check
                                <a href="" class="fw-bolder link-primary">Support Guidelines</a>.
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Subject</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                   title="Specify a subject for your issue"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid"
                                   placeholder="Enter your ticket subject" name="subject"/>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Product</label>
                                <select class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" data-placeholder="Select a product" name="product">
                                    <option value="">Select a product...</option>
                                    <option value="1">HTML Theme</option>
                                    <option value="1">Angular App</option>
                                    <option value="1">Vue App</option>
                                    <option value="1">React Theme</option>
                                    <option value="1">Figma UI Kit</option>
                                    <option value="3">Laravel App</option>
                                    <option value="4">Blazor App</option>
                                    <option value="5">Django App</option>
                                </select>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Assign</label>
                                <select class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" data-placeholder="Select a Team Member" name="user">
                                    <option value="">Select a user...</option>
                                    <option value="1">Karina Clark</option>
                                    <option value="2">Robert Doe</option>
                                    <option value="3">Niel Owen</option>
                                    <option value="4">Olivia Wild</option>
                                    <option value="5">Sean Bean</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Status</label>
                                <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Open" data-hide-search="true">
                                    <option value=""></option>
                                    <option value="1" selected="selected">Open</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Resolved</option>
                                    <option value="3">Closed</option>
                                </select>
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                <div class="position-relative d-flex align-items-center">
                                    <div class="symbol symbol-20px me-4 position-absolute ms-4">
																<span class="symbol-label bg-secondary">
																	<span class="svg-icon">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none">
																			<rect x="2" y="2" width="9" height="9"
                                                                                  rx="2" fill="black"/>
																			<rect opacity="0.3" x="13" y="2" width="9"
                                                                                  height="9" rx="2" fill="black"/>
																			<rect opacity="0.3" x="13" y="13" width="9"
                                                                                  height="9" rx="2" fill="black"/>
																			<rect opacity="0.3" x="2" y="13" width="9"
                                                                                  height="9" rx="2" fill="black"/>
																		</svg>
																	</span>
																</span>
                                    </div>
                                    <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                                           name="due_date"/>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="fs-6 fw-bold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="4" name="description"
                                      placeholder="Type your ticket description"></textarea>
                        </div>
                        <div class="fv-row mb-8">
                            <label class="fs-6 fw-bold mb-2">Attachments</label>
                            <div class="dropzone" id="kt_modal_create_ticket_attachments">
                                <div class="dz-message needsclick align-items-center">
                                    <span class="svg-icon svg-icon-3hx svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
                                                                          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
                                                                          fill="black"/>
																	<path
                                                                        d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
                                                                        fill="black"/>
																	<path
                                                                        d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
                                                                        fill="black"/>
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                          fill="black"/>
																</svg>
															</span>
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to
                                            upload.</h3>
                                        <span class="fw-bold fs-7 text-gray-400">Upload up to 10 files</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack">
                                <div class="fw-bold me-5">
                                    <label class="fs-6">Notifications</label>
                                    <div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                               name="notifications[]" value="email" checked="checked"/>
                                        <span class="form-check-label fw-bold">Email</span>
                                    </label>
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                               name="notifications[]" value="phone"/>
                                        <span class="form-check-label fw-bold">Phone</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel
                            </button>
                            <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
														<span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-scripts')
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
@stop
