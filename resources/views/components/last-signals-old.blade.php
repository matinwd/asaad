<div class="card card-flush h-md-100">
    <div class="card-header pt-7">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-gray-900">Opportunity</span>
            {{--            <span class="text-gray-600 mt-2 fw-bold fs-6">Updated {{ $tuls->diffForHumans() }}</span>--}}
        </h3>
        <div class="card-toolbar">
            <a href="javascript:"
               class="btn btn-sm btn-light"
               data-kt-menu-trigger="click">
                <div class="d-inline svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none">
                        <path
                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                            fill="black"/>
                    </svg>
                </div>
                Filter
            </a>
            <div class="menu menu-sub menu-sub-dropdown w-350px w-md-400px" data-kt-menu="true"
                 id="kt_menu_61b9d251087d5">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                </div>
                <!--end::Header-->
                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->
                <!--begin::Form-->
                <form action="">
                    <input type="hidden" name="page" value="1">
                    <div class="px-7 py-5">
                        <div class="mb-10">
                            <label class="form-label fw-bold">Pair : </label>
                            <div>
                                <input type="text"
                                       class="form-control form-control-sm form-control-solid"
                                       name="query" value="{{ request('query') }}"/>
                            </div>
                            <!--end::Input-->
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-bold">Strategy :</label>
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_61b9d251087d5"
                                        data-allow-clear="true" name="strategy_id">
                                    <option></option>
                                    <option
                                        value="all" {{ request('strategy_id','all') == 'all' ? 'selected' : '' }}>
                                        All
                                    </option>
                                    @foreach ($strategies as $strategy)
                                        <option
                                            value="{{ $strategy->id }}" {{ request('strategy_id','all') == $strategy->id ? 'selected' : '' }}>{{ $strategy->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-bold">TimeFrame :</label>
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_61b9d251087d5"
                                        data-allow-clear="true" multiple name="time_frame[]">
                                    <option></option>
                                    @foreach ($timeFrames as $item)
                                        <option
                                            value="{{ $item }}" {{ in_array($item,request('time_frame',[])) ? 'selected' : '' }}>{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Postion Side :</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="nav-group nav-group-fluid">
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="position_side"
                                           value="all" {{ request('position_side','all') == 'all' ? 'checked' : '' }}/>
                                    <span
                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="position_side"
                                           value="BUY" {{ strtoupper(request('position_side','all')) == 'BUY' ? 'checked' : '' }}/>
                                    <span
                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">BUY</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="position_side"
                                           value="SELL" {{ strtoupper(request('position_side','all')) == 'SELL' ? 'checked' : '' }}/>
                                    <span
                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">SELL</span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="buttonn"
                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Cancel
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <div class="card-body pt-6">
        <div class="table-responsive">
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <thead>
                <tr class="fs-7 fw-bolder text-gray-700 border-bottom-0">
                    <th class="p-0 pb-3 min-w-175px text-start">Pair</th>
                    <th class="p-0 pb-3 min-w-100px">Position Side</th>
                    <th class="p-0 pb-3 min-w-150px">Candle Time</th>
                    <th class="p-0 pb-3 min-w-100px">Time Frame</th>
                    <th class="p-0 pb-3 min-w-150px">Exchange</th>
                    <th class="p-0 pb-3 min-w-150px">Strategy</th>
                    <th class="p-0 pb-3 w-50px text-end"></th>
                </tr>
                </thead>
                <tbody>
                @forelse ($signals as $signal)
                    <tr>
                        <td>
                            <a target="_blank" href="{{ $signal->fino_chart }}">
                                <div class="position-relative ps-6 pe-3 py-2">
                                    <div
                                        class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-{{ $signal->position_side == 'BUY' ? 'success' : 'danger' }}"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-50px me-4">
                                            @if($signal->pair->logoid)
                                                <img alt="Pic"
                                                     src="{{ $signal->pair->logo }}"/>
                                            @else
                                                <span
                                                    class="symbol-label bg-{{ $signal->pair->logo_color }} text-inverse-{{ $signal->pair->logo_color }} fw-bolder">
                                                {{ $signal->pair->logo_character }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                            <span
                                                class="text-start text-gray-900 fw-bolder text-hover-primary mb-1 fs-6">{{ $signal->pair->symbol }}</span>
                                            <span
                                                class="text-gray-600 fw-bold d-block fs-7">{{ $signal->pair->description }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </td>
                        <td>
                            @if($signal->position_side == 'BUY')
                                <span class="badge badge-success fs-base p-4">BUY</span>
                            @else
                                <span class="badge badge-danger fs-base p-4">SELL</span>
                            @endif
                        </td>
                        <td>
                            <span class="text-gray-700 fw-bolder fs-6">
                                {{ $signal->candle_time->format('d M Y, H:i:s') }}
                            </span>
                        </td>
                        <td>
                            <span class="text-gray-700 fw-bolder fs-6">{{ $signal->time_frame }}</span>
                        </td>
                        <td>
                            <span class="text-gray-900 fw-bolder fs-6">Binance</span>
                        </td>
                        {{--
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
                        --}}
                        <td>
                            <span class="text-gray-700 fw-bolder fs-6">{{ $signal->strategy->name }}</span>
                        </td>
                        <td>
                            <a href="{{ $signal->fino_chart }}" target="_blank"
                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <div class="svg-icon svg-icon-5 svg-icon-gray-700">
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
                                </div>
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
    @if ($signals->lastPage() > 1)
        <div class="card-footer">
            {!! $signals->appends([
'query' => request('query'),
'strategy_id' => request('strategy_id'),
'time_frame' => request('time_frame'),
'position_side' => request('position_side')
])->render() !!}
        </div>
    @endif
</div>
