<div class="card card-flush h-md-100">
    <div class="card-header pt-7">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-gray-900">Opportunity</span>
        </h3>
        <div class="card-toolbar">
            <a @click="clearFilter = false;ls_filter = null_ls_filter;getData()" v-if="clearFilter" href="javascript:"
               class="btn btn-sm btn-light me-2">
                Clear Filter
            </a>
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
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                </div>
                <div class="separator border-gray-200"></div>
                <form id="last_signals_frm">
                    <div class="px-7 py-5">
                        <div class="mb-10">
                            <label class="form-label fw-bold">Pair : </label>
                            <div>
                                <input type="text"
                                       class="form-control form-control-sm form-control-solid"
                                       v-model="ls_filter.query"/>
                            </div>
                            <!--end::Input-->
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-bold">Strategy :</label>
                            <div>
                                <select class="form-select form-select-solid"
                                        name="strategy_id" v-model="ls_filter.strategy_id">
                                    <option
                                        value="all">
                                        All
                                    </option>
                                    @foreach ($strategies as $strategy)
                                        <option
                                            value="{{ $strategy->id }}">{{ $strategy->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-bold">TimeFrame :</label>
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_61b9d251087d5"
                                        data-allow-clear="true" multiple name="time_frames[]">
                                    <option></option>
                                    @foreach ($timeFrames as $item)
                                        <option
                                            value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-10">
                            <label class="form-label fw-bold">Postion Side :</label>
                            <div class="nav-group nav-group-fluid">
                                <label>
                                    <input type="radio" class="btn-check" v-model="ls_filter.position_side"
                                           value="all"/>
                                    <span
                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                </label>
                                <label>
                                    <input type="radio" class="btn-check" v-model="ls_filter.position_side"
                                           value="BUY"/>
                                    <span
                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">BUY</span>
                                </label>
                                <label>
                                    <input type="radio" class="btn-check" v-model="ls_filter.position_side"
                                           value="SELL"/>
                                    <span
                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">SELL</span>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button"
                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Cancel
                            </button>
                            <button type="button" @click="filter" type="buttonn" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body pt-6 min-h-600px">
        <h4 v-if="!loadingData && paginator.data.length == 0">
            Not Item Found || Not Item Exists
        </h4>
        <h4 v-if="loadingData">
            Search ...
        </h4>
        <div v-if="!loadingData && paginator.data.length != 0" class="table-responsive">
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <thead>
                <tr class="fs-7 fw-bolder text-gray-700 border-bottom-0">
                    <th class="p-0 pb-3 min-w-175px text-start">Pair</th>
                    <th class="p-0 pb-3 min-w-100px text-center">Position Side</th>
                    <th class="p-0 pb-3 min-w-150px text-center">Candle Time</th>
                    <th class="p-0 pb-3 min-w-100px text-center">Time Frame</th>
                    <th class="p-0 pb-3 min-w-150px text-center">Exchange</th>
                    <th class="p-0 pb-3 min-w-150px text-center">Strategy</th>
                    <th class="p-0 pb-3 w-50px text-end"></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(signal,sIndex) in paginator.data">
                    <td>
                        <a target="_blank" :href="signal.fino_chart" class="link-signal">
                            <div class="position-relative ps-6 pe-3 py-2">
                                <div
                                    :class="{'bg-success' : signal.position_side == 'BUY', 'bg-danger' : signal.position_side != 'BUY'}"
                                    class="position-absolute start-0 top-0 w-4px h-100 rounded-2"></div>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px me-4">
                                        <img v-if="signal.pair.logoid" alt="Pic"
                                             :src="signal.pair.logo"/>
                                        <span v-else
                                              class="symbol-label fw-bolder"
                                              :class="'bg-' + signal.pair.logo_color + ' text-inverse-' + signal.pair.logo_color">
                                                @{{ signal.pair.logo_character }}
                                            </span>
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                            <span
                                                class="text-start text-gray-900 fw-bolder text-hover-primary mb-1 fs-6">@{{ signal.pair.symbol }}</span>
                                        <span
                                            class="text-gray-600 fw-bold d-block fs-7">@{{ signal.pair.description }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </td>
                    <td class="text-center">
                        <span v-if="signal.position_side == 'BUY'" class="badge badge-success fs-base p-4">BUY</span>
                        <span v-else class="badge badge-danger fs-base p-4">SELL</span>
                    </td>
                    <td class="text-center">
                        <span class="text-gray-700 fw-bolder fs-6">
                            @{{ signal.candle_time | date('DD MMM Y, HH:mm') }}
                        </span>
                    </td>
                    <td class="text-center">
                        <span class="text-gray-700 fw-bolder fs-6">@{{ signal.time_frame }}</span>
                    </td>
                    <td class="text-center">
                        <span class="text-gray-900 fw-bolder fs-6">Binance</span>
                    </td>
                    <td class="text-center">
                        <span class="text-gray-700 fw-bolder fs-6">@{{ signal.strategy.name }}</span>
                    </td>
                    <td class="text-center">
                        <a :href="signal.fino_chart" target="_blank"
                           class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px link-signal">
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
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer"
         v-if="paginator.last_page > 1">
        <pagination :limit="5" :data="paginator" @pagination-change-page="getData"
                    align="center"></pagination>
    </div>
</div>
