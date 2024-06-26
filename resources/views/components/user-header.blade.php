<div class="card mb-5 mb-xl-10">
    <div class="card-body pt-9 pb-0">
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <img src="{{ asset('temp/avatar-blank.png') }}" alt="image"/>
                    <div
                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                </div>
            </div>
            <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-2">
                                <span class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">
                                    {{ auth()->user()->full_name }}
                                </span>
                            <a href="#">
                                <div class="svg-icon svg-icon-1 svg-icon-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                         height="24px" viewBox="0 0 24 24">
                                        <path
                                            d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                            fill="#00A3FF"/>
                                        <path class="permanent"
                                              d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                              fill="white"/>
                                    </svg>
                                </div>
                            </a>
                            @if(auth()->user()->have_premium_plan)
                                <span
                                    class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ auth()->user()->active_plan->plan->name }}</span>
                            @else
                                <a href="javascript:;"
                                   class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3"
                                   data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a>
                            @endif
                        </div>
                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                            <span class="d-flex align-items-center text-gray-600 text-hover-primary mb-2">
                                    <div class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                  d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                  fill="black"/>
                                            <path
                                                d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                fill="black"/>
                                        </svg>
                                    </div>
                                {{ auth()->user()->email }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap flex-stack">
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <div class="d-flex flex-wrap">
                            @if($havePremiumPlan)
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                    @php($var = now()->diffInDays($activePlan->expire_at))
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder" data-kt-countup="true"
                                             data-kt-countup-value="{{ $var }}"
                                             data-kt-countup-suffix=" Days">{{ $var }}
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Remaining days</div>
                                </div>
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                    @php($var = $activePlan->plan->days)
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder" data-kt-countup="true"
                                             data-kt-countup-value="{{ $var }}"
                                             data-kt-countup-suffix=" Days">
                                            0
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Service Time</div>
                                </div>
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder">
                                            {{ $activePlan->start_at->format('d M , Y') }}
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Service Start Date</div>
                                </div>
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder">
                                            {{ $activePlan->expire_at->format('d M , Y') }}
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Expired At</div>
                                </div>
                            @else
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                        <?php
                                        $var = now()->diffInDays($authenticatable->created_at->addDays(7));
                                        if ($var >= 7 || $var == 0)
                                            $var = 0;
                                        else
                                            $var = 0;
                                        ?>
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder" data-kt-countup="true"
                                             data-kt-countup-value="{{ $var }}"
                                             data-kt-countup-suffix=" Days">{{ $var }}
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Remaining days</div>
                                </div>
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder" data-kt-countup="true"
                                             data-kt-countup-value="7"
                                             data-kt-countup-suffix=" Days - Trial">
                                            0
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Service Time</div>
                                </div>
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder">
                                            {{ $authenticatable->created_at->format('d M , Y') }}
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Service Start Date</div>
                                </div>
                                <div
                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bolder">
                                            {{ $authenticatable->created_at->addDays(7)->format('d M , Y') }}
                                        </div>
                                    </div>
                                    <div class="fw-bold fs-6 text-gray-500">Expired At</div>
                                </div>
                                {{--
                                                                <div
                                                                    class="col-auto border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="fs-2 fw-bolder">
                                                                            Trial PLAN
                                                                        </div>
                                                                    </div>
                                                                    <div class="fw-bold fs-6 text-gray-500">{{ $authenticatable->is_trial ? 1 : 0 }} || {{ now()->floatDiffInRealDays($authenticatable->created_at) }}</div>
                                                                </div>
                                --}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ $activeMenu == 1 ? 'active' : '' }}"
                   href="{{ route('profile') }}">Overview</a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ $activeMenu == 2 ? 'active' : '' }}"
                   href="{{ route('billing') }}">Billing</a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ $activeMenu == 3 ? 'active' : '' }}"
                   href="{{ route('settings') }}">Settings</a>
            </li>
        </ul>
    </div>
</div>
