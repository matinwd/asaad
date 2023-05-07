<div class="d-flex align-items-stretch" id="kt_header_nav">
    <div class="header-menu align-items-stretch" data-kt-drawer="true"
         data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}"
         data-kt-drawer-overlay="true"
         data-kt-drawer-width="{default:'200px', '300px': '250px'}"
         data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
         data-kt-swapper="true" data-kt-swapper-mode="prepend"
         data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <div
            class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
            id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item me-lg-1">
                <a class="menu-link {{ $activeMenu == 1 ? 'active' : '' }} py-3"
                   href="{{ route('admin.dashboard') }}">
                    <span class="menu-title">Dashboard</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
            <div class="menu-item me-lg-1">
                <a href="{{ route('admin.users.index') }}"
                   class="menu-link py-3 {{ $activeMenu == 2 ? 'active' : '' }}">
                    <span class="menu-title">Users</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>


{{--            <div class="menu-item me-lg-1">--}}
{{--                <a href="{{ route('admin.billings.index') }}"--}}
{{--                   class="menu-link py-3 {{ $activeMenu == 3 ? 'active' : '' }}">--}}
{{--                    <span class="menu-title">Billings</span>--}}
{{--                    <span class="menu-arrow d-lg-none"></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="menu-item me-lg-1">--}}
{{--                <a href="{{ route('admin.subscriptions.index') }}"--}}
{{--                   class="menu-link py-3 {{ $activeMenu == 4 ? 'active' : '' }}">--}}
{{--                    <span class="menu-title">Subscriptions</span>--}}
{{--                    <span class="menu-arrow d-lg-none"></span>--}}
{{--                </a>--}}
{{--            </div>--}}
            {{--
                        <div class="menu-item me-lg-1">
                            <a href="{{ route('admin.plans.index') }}"
                               class="menu-link py-3 {{ $activeMenu == 5 ? 'active' : '' }}">
                                <span class="menu-title">Plans</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </a>
                        </div>
            --}}
{{--            <div class="menu-item me-lg-1">--}}
{{--                <a href="{{ route('admin.tickets.index') }}"--}}
{{--                   class="menu-link py-3 {{ $activeMenu == 6 ? 'active' : '' }}">--}}
{{--                    <span class="menu-title">Tickets</span>--}}
{{--                    <span class="menu-arrow d-lg-none"></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="menu-item me-lg-1">--}}
{{--                <a href="{{ route('admin.pairs.index') }}"--}}
{{--                   class="menu-link py-3 {{ $activeMenu == 10 ? 'active' : '' }}">--}}

{{--                    <span class="menu-title">Pairs</span>--}}
{{--                    <span class="menu-arrow d-lg-none"></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="menu-item me-lg-1">--}}
{{--                <a href="{{ route('admin.wallets.index') }}"--}}
{{--                   class="menu-link py-3 {{ $activeMenu == 12 ? 'active' : '' }}">--}}

{{--                    <span class="menu-title">Wallets</span>--}}
{{--                    <span class="menu-arrow d-lg-none"></span>--}}
{{--                </a>--}}
{{--            </div>--}}

            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="{{ $activeMenu == 13 || $activeMenu == 15 ? 'here' : ''  }} menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="#">
                    <span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                    <span class="menu-title">Products</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link py-3 {{ $activeMenu == 15 ? 'active' : ''  }}" href="">

															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
																		<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black"></path>
																		<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                            <span class="menu-title">Products</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link py-3 {{ $activeMenu == 13 ? 'active' : ''  }}" href="">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black"></path>
																		<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black"></path>
																		<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                            <span class="menu-title">Categories</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="{{ $activeMenu == 13 || $activeMenu == 15 ? 'here' : ''  }} menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="#">
                    <span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                    <span class="menu-title">Pages</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link py-3 {{ $activeMenu == 15 ? 'active' : ''  }}" href="">

															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
																		<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black"></path>
																		<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                            <span class="menu-title">Pages</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link py-3 {{ $activeMenu == 13 ? 'active' : ''  }}" href="">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black"></path>
																		<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black"></path>
																		<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                            <span class="menu-title">Forms</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="{{ $activeMenu == 13 || $activeMenu == 15 ? 'here' : ''  }} menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="#">
                    <span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                    <span class="menu-title">Manage</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link py-3 {{ $activeMenu == 15 ? 'active' : ''  }}" href="">

															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
																		<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black"></path>
																		<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                            <span class="menu-title">Comments</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link py-3 {{ $activeMenu == 13 ? 'active' : ''  }}" href="">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black"></path>
																		<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black"></path>
																		<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black"></path>
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                            <span class="menu-title">Questions</span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="menu-item me-lg-1">
                <a href="{{ route('admin.users.index') }}"
                   class="menu-link py-3 {{ $activeMenu == 2 ? 'active' : '' }}">
                    <span class="menu-title">Sliders</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
            <div class="menu-item me-lg-1">
                <a href="{{ route('admin.users.index') }}"
                   class="menu-link py-3 {{ $activeMenu == 2 ? 'active' : '' }}">
                    <span class="menu-title">Settings</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a>
            </div>
{{--                        <div class="menu-item me-lg-1">--}}
{{--                            <a href="{{ route('admin.notification.create') }}"--}}
{{--                               class="menu-link py-3 {{ $activeMenu == 5 ? 'active' : '' }}">--}}
{{--                                <span class="menu-title">Notifications</span>--}}
{{--                                <span class="menu-arrow d-lg-none"></span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
        </div>
    </div>
</div>
