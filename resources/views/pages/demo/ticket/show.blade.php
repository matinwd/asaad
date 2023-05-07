@extends('layouts.main',['activeMenu' => 4])

@section('title','Support Center / Ticket #' . (rand(111,999).rand(111,999)))

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Back To Tickets</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column flex-xl-row p-7">
                <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                    <div class="mb-0">
                        <div class="d-flex align-items-center mb-12">
                            <span class="svg-icon svg-icon-4qx svg-icon-success ms-n2 me-3">
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
														</span>
                            <div class="d-flex flex-column">
                                <h1 class="text-gray-800 fw-bold">Question Test ?</h1>
                                <div class="">
                                    <span class="fw-bold text-muted me-6">Product:
																<a href="#" class="text-muted text-hover-primary">Package Pro</a></span>
                                    <span class="fw-bold text-muted me-6">By:
																<a href="#" class="text-muted text-hover-primary">MohamadReza Mokhtari</a></span>
                                    <span class="fw-bold text-muted">Created:
																<span
                                                                    class="fw-bolder text-gray-600 me-1">3 Hours ago</span>(10.06.2022 at 5:03 PM)</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="mb-15 fs-5 fw-normal text-gray-800">
                                <div class="mb-5 fs-5">Hello,</div>
                                <div class="mb-10">When you’re done bundling, you should decide on the order of the
                                    topics your article. In most cases, you can decide to order thematically. For
                                    instance, if you want to discuss various aspects or angles of the main topic of your
                                    blog post. But you can also order your text chronologically or didactically.
                                </div>
                                <div class="mb-10">
                                    <div class="highlight">
                                        <button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">
                                            copy
                                        </button>
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                   href="#kt_highlight_61b9d2e16ef21" role="tab">JAVASCRIPT</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                   href="#kt_highlight_61b9d2e16ef2a" role="tab">HTML</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_highlight_61b9d2e16ef21"
                                                 role="tabpanel">
                                                <div class="highlight-code">
																				<pre class="language-javascript">
<code class="language-javascript">// Element to indecate
var button = document.querySelector("#kt_button_1");

// Handle button click event
button.addEventListener("click", function() {
// Activate indicator
button.setAttribute("data-kt-indicator", "on");

// Disable indicator after 3 seconds
setTimeout(function() {
    button.removeAttribute("data-kt-indicator");
}, 3000);
});</code>
</pre>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_highlight_61b9d2e16ef2a" role="tabpanel">
                                                <div class="highlight-code">
																				<pre class="language-html">
<code class="language-html">&lt;button type="button" class="btn btn-primary me-10" id="kt_button_1"&gt;
&lt;span class="indicator-label"&gt;
    Submit
&lt;/span&gt;
&lt;span class="indicator-progress"&gt;
    Please wait...
    &lt;span class="spinner-border spinner-border-sm align-middle ms-2"&gt;&lt;/span&gt;
&lt;/span&gt;
&lt;/button&gt;</code>
</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-10">In the above example we’re discussing, ordering topics thematically
                                    makes the most sense.
                                </div>
                                <div class="m-0">Than you,
                                    <br/>Jerry
                                </div>
                            </div>
{{--
                            <div class="row mb-7">
                                <div class="col-md-3 fv-row mb-3">
                                    <label class="fs-6 fw-bold mb-2">Product</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" name="product">
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
                                <div class="col-md-3 fv-row mb-3">
                                    <label class="fs-6 fw-bold mb-2">Assign To</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Assign to" name="user">
                                        <option value="1" selected="selected">Karina Clark</option>
                                        <option value="2">Robert Doe</option>
                                        <option value="3">Niel Owen</option>
                                        <option value="4">Olivia Wild</option>
                                        <option value="5">Sean Bean</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 fv-row mb-3">
                                    <label class="fs-6 fw-bold mb-2">Status</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                            data-placeholder="Status" data-hide-search="true">
                                        <option value="1" selected="selected">Open</option>
                                        <option value="2">Pending</option>
                                        <option value="3">Resolved</option>
                                        <option value="3">Closed</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 fv-row mb-3">
                                    <label class="fs-6 fw-bold mb-2">Priority</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                            data-placeholder="Open" data-hide-search="true">
                                        <option value="1" selected="selected">Low</option>
                                        <option value="2">Medium</option>
                                        <option value="3">High</option>
                                        <option value="3">Urgent</option>
                                    </select>
                                </div>
                            </div>
--}}
                        </div>
                        <div class="mb-5">
                            <div class="mb-9">
                                <div class="card card-bordered w-100">
                                    <div class="card-body">
                                        <div class="w-100 d-flex flex-stack mb-8">
                                            <div class="d-flex align-items-center f">
                                                <div class="symbol symbol-50px me-5">
                                                    <div
                                                        class="symbol-label fs-1 fw-bolder bg-light-success text-success">
                                                        S
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column fw-bold fs-5 text-gray-600 text-dark">
                                                    <div class="d-flex align-items-center">
                                                        <a href="../../demo2/dist/pages/profile/overview.html"
                                                           class="text-gray-800 fw-bolder text-hover-primary fs-5 me-3">Sandra
                                                            Piquet</a>
                                                        <span class="m-0"></span>
                                                    </div>
                                                    <span class="text-muted fw-bold fs-6">2 Days ago</span>
                                                </div>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bolder">
                                                    Reply
                                                </button>
                                            </div>
                                        </div>
                                        <p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers,
                                            developers, QA and UX Previously we designed everything ourselves.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-9">
                                <div class="card card-bordered w-100">
                                    <div class="card-body">
                                        <div class="w-100 d-flex flex-stack mb-8">
                                            <div class="d-flex align-items-center f">
                                                <div class="symbol symbol-50px me-5">
                                                    <div class="symbol-label fs-1 fw-bolder bg-light-info text-info">B
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column fw-bold fs-5 text-gray-600 text-dark">
                                                    <div class="d-flex align-items-center">
                                                        <a href="../../demo2/dist/pages/profile/overview.html"
                                                           class="text-gray-800 fw-bolder text-hover-primary fs-5 me-3">Bob
                                                            Clarcson</a>
                                                        <span class="badge badge-light-danger">Author</span>
                                                    </div>
                                                    <span class="text-muted fw-bold fs-6">4 Days ago</span>
                                                </div>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bolder">
                                                    Reply
                                                </button>
                                            </div>
                                        </div>
                                        <p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers,
                                            developers, QA and UX Previously we designed everything ourselves.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ms-9 mb-9">
                                <div class="card card-bordered w-100">
                                    <div class="card-body">
                                        <div class="w-100 d-flex flex-stack mb-8">
                                            <div class="d-flex align-items-center f">
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="{{ asset('assets/media/avatars/150-2.jpg') }}" alt=""/>
                                                </div>
                                                <div class="d-flex flex-column fw-bold fs-5 text-gray-600 text-dark">
                                                    <div class="d-flex align-items-center">
                                                        <a href="#"
                                                           class="text-gray-800 fw-bolder text-hover-primary fs-5 me-3">Matthew</a>
                                                        <span class="m-0"></span>
                                                    </div>
                                                    <span class="text-muted fw-bold fs-6">3 Days ago</span>
                                                </div>
                                            </div>
                                            <div class="m-0">
                                                <button
                                                    class="btn btn-color-gray-400 btn-active-color-primary p-0 fw-bolder">
                                                    Reply
                                                </button>
                                            </div>
                                        </div>
                                        <p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers,
                                            developers, QA and UX Previously we designed everything ourselves.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-hidden position-relative card-rounded">
                                <div class="ribbon ribbon-triangle ribbon-top-start border-success">
                                    <div class="ribbon-icon mt-n5 ms-n6">
                                        <i class="bi bi-check2 fs-2 text-white"></i>
                                    </div>
                                </div>
                                <div class="card card-bordered w-100">
                                    <div class="card-body">
                                        <div class="w-100 d-flex flex-stack mb-8">
                                            <div class="d-flex align-items-center f">
                                                <div class="symbol symbol-50px me-5">
                                                    <div
                                                        class="symbol-label fs-1 fw-bolder bg-light-primary text-primary">
                                                        B
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column fw-bold fs-5 text-gray-600 text-dark">
                                                    <div class="d-flex align-items-center">
                                                        <a href="../../demo2/dist/pages/profile/overview.html"
                                                           class="text-gray-800 fw-bolder text-hover-primary fs-5 me-3">Boris</a>
                                                        <span class="m-0"></span>
                                                    </div>
                                                    <span class="text-muted fw-bold fs-6">6 Days ago</span>
                                                </div>
                                            </div>
                                            <div class="m-0">
                                                <button type="button"
                                                        class="btn btn-sm btn-icon btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                                                        data-kt-menu-placement="top-end">
                                                    <span class="svg-icon svg-icon-1">
																					<svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
																						<rect x="10" y="10" width="4"
                                                                                              height="4" rx="2"
                                                                                              fill="black"/>
																						<rect x="17" y="10" width="4"
                                                                                              height="4" rx="2"
                                                                                              fill="black"/>
																						<rect x="3" y="10" width="4"
                                                                                              height="4" rx="2"
                                                                                              fill="black"/>
																					</svg>
																				</span>
                                                </button>
                                                <div
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                            Quick Actions
                                                        </div>
                                                    </div>
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                         data-kt-menu-placement="right-start">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="fw-normal fs-5 text-gray-700 m-0">I run a team of 20 product managers,
                                            developers, QA and UX Previously we designed everything ourselves.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-15">
                                <textarea
                                    class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7"
                                    rows="6" name="message" placeholder="Message ..."></textarea>
                            <button type="submit"
                                    class="btn btn-primary mt-n20 mb-20 position-relative float-end me-7">Send
                            </button>
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
@stop

@section('page-scripts')
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
@stop
