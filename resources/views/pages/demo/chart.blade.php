@extends('layouts.main')

@section('title','Chart')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary" id="kt_toolbar_primary_button">Back To Dashboard</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-left">
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
                        <div class="col-md-4 text-left d-flex align-items-center">
                            <span>Position Side :</span>
                            @if($signal->position_side == 'BUY')
                                <span class="badge badge-success fs-base p-4 ms-5">BUY</span>
                            @else
                                <span class="badge badge-danger fs-base p-4 ms-5">SELL</span>
                            @endif
                        </div>
                        <div class="col-md-4 text-left d-flex align-items-center">
                            <span>Candle Time :</span>
                            <div class="text-gray-700 fw-bolder fs-6 ms-5">{{ $signal->candle_time->format('Y-m-d H:i:s') }}</div>
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-4 text-left d-flex align-items-center">
                            <span>Time Frame :</span>
                            <div class="text-gray-700 fw-bolder fs-6 ms-5">{{ $signal->time_frame }}</div>
                        </div>
                        <div class="col-md-4 text-left d-flex align-items-center">
                            <span>Exchange :</span>
                            <div class="ms-5 d-flex">
                                <div class="symbol symbol-30px me-2">
                                    <img src="https://s3-symbol-logo.tradingview.com/provider/binance.svg"
                                         alt="">
                                </div>
                                <div class="d-flex justify-content-center flex-column">
                                    <span class="text-gray-700 fw-bolder fs-6">Binance</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-left d-flex align-items-center">
                            <span>Strategy :</span>
                            <span class="ms-5 text-gray-700 fw-bolder fs-6">{{ $signal->strategy->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-10 mb-10">
        <div class="col-xl-12">
            <div class="card card-flush h-md-100 p-0">
                <div class="card-body p-0">
                    <iframe src="http://chart.finomate.io/?signal_id={{ $signal->code }}&symbol={{ $signal->pair->symbol }}&timeframe={{ $signal->time_frame }}"
                            frameborder="0" width="100%" height="800px"></iframe>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-scripts')
@stop
