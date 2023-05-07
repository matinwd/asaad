@extends('layouts.main',['activeMenu' => 1])

@section('title','Dashboard')

@section('page-styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        td, th {
            text-align: center !important;
        }
    </style>
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="#" class="btn btn-success" id="kt_toolbar_primary_button">Create Ticket</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 mb-5">
            <a href="#" class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <i class="bi bi-card-list fs-3x"></i>
                    <div class="d-flex flex-column">
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Add WatchList</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="#" class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <i class="bi bi-alarm fs-3x"></i>
                    <div class="d-flex flex-column">
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Add Alarm</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="https://t.me/FinoMateBot" class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="svg-icon svg-icon-success svg-icon-2hx ms-n1 flex-grow-1">
                        <i class="bi bi-telegram fs-3x"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Telegram Join</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-10 mb-10">
        <div class="col-xl-12">
            <div class="card card-flush h-md-100">
                <div class="card-header pt-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-gray-900">Last Signals</span>
                        <span class="text-gray-600 mt-2 fw-bold fs-6">Updated {{ $tuls->diffForHumans() }}</span>
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
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fw-bold">Contains the word : </label>
                                        <div>
                                            <input type="text"
                                                   class="form-control form-control-sm form-control-solid"
                                                   name="query" value="{{ request('query') }}"/>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
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
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fw-bold">TimeFrame :</label>
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61b9d251087d5"
                                                    data-allow-clear="true" multiple name="time_frame[]">
                                                <option></option>
                                                @foreach ($list as $item)
                                                    <option
                                                        value="{{ $item }}" {{ in_array($item,request('time_frame',[])) ? 'selected' : '' }}>{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
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
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
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
                            <!--begin::Table head-->
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
        </div>
    </div>
@stop

@section('page-scripts')
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
@stop
