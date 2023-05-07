@extends('layouts.main',['activeMenu' => 3])

@section('title','Create Alarm')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('alarms.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary"
           id="kt_toolbar_primary_button">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">
                    <form id="kt_modal_new_alarm_form" class="form" method="post" action="{{ route('alarms.store') }}">
                        @csrf
                        <div class="row">
                            <div class="d-flex flex-column mb-8 col-md-6 col-12">
                                <label class="fs-6 fw-bold mb-2">Name</label>
                                <input type="text" class="form-control form-control-solid" name="name"
                                       value="{{ old('name') }}" autofocus>
                            </div>
                            <div class="d-flex flex-column mb-8 col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Source</span>
                                </label>
                                <div class="nav-group nav-group-fluid">
                                    <label>
                                        <input v-model="source" type="radio" class="btn-check" name="source"
                                               value="watch_list" {{ old('source','watch_list') == 'watch_list' ? 'checked' : '' }}/>
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">WatchList</span>
                                    </label>
                                    <label>
                                        <input v-model="source" type="radio" class="btn-check" name="source"
                                               value="exchange" {{ old('source','watch_list') == 'exchange' ? 'checked' : '' }}/>
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Exchange</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex flex-column mb-8 col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">TimeFrame</span>
                                </label>
                                <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select a TimeFrame"
                                        data-allow-clear="true" multiple name="time_frame[]">
                                    <option></option>
                                    @foreach ($timeFrames as $item)
                                        <option
                                            value="{{ $item }}" {{ in_array($item,old('time_frame',[])) ? 'selected' : '' }}>{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div v-if="source == 'watch_list'" class="d-flex flex-column mb-8 col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">WatchList</span>
                                </label>
                                <select class="form-select form-select-solid" name="watch_list_id">
                                    @foreach ($watchLists ?? [] as $watchList)
                                        <option
                                            value="{{ $watchList->id }}">{{ $watchList->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div v-if="source == 'exchange'" class="d-flex flex-column mb-8 col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Exchange</span>
                                </label>
                                <select class="form-select form-select-solid"
                                        name="exchange_id">
                                    @foreach ($exchanges ?? [] as $exchange)
                                        <option
                                            value="{{ $exchange->id }}">{{ $exchange->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-flex flex-column mb-8 col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Strategy</span>
                                </label>
                                <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select a Strategy"
                                        data-allow-clear="true" multiple name="strategy_ids[]">
                                    <option></option>
                                    @foreach ($strategies ?? [] as $strategy)
                                        <option
                                            value="{{ $strategy->id }}" {{--{{ old('strategy_id','all') == $strategy->id ? 'selected' : '' }}--}}>{{ $strategy->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex flex-column mb-8 col-md-6 col-12">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Opportunity</span>
                                </label>
                                <div class="nav-group nav-group-fluid">
                                    <label>
                                        <input type="radio" class="btn-check" name="opportunity"
                                               value="both" {{ old('opportunity','both') == 'both' ? 'checked' : '' }}/>
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">Both</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="opportunity"
                                               value="buy" {{ strtoupper(old('opportunity','both')) == 'BUY' ? 'checked' : '' }}/>
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">BUY</span>
                                    </label>
                                    <label>
                                        <input type="radio" class="btn-check" name="opportunity"
                                               value="sell" {{ strtoupper(old('opportunity','both')) == 'SELL' ? 'checked' : '' }}/>
                                        <span
                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">SELL</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="reset" id="kt_frm_new_alarm_cancel" class="btn btn-light me-3">
                                Reset
                            </button>
                            <button type="submit" id="kt_frm_new_alarm_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">
                                    Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        mixins.push({
            data() {
                return {
                    source: 'watch_list',
                }
            },
        });
    </script>
@stop

