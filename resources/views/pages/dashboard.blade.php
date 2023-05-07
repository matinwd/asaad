@extends('layouts.main',['activeMenu' => 1])

@section('title','Dashboard')

@section('page-styles')
    {{--
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">
        <style>
            td, th {
                text-align: center !important;
            }
        </style>
    --}}
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('tickets.create') }}" class="btn btn-success" id="kt_toolbar_primary_button">Create Ticket</a>
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
            <a @click="addAlertBtn" href="javascript:" class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <i class="bi bi-alarm fs-3x"></i>
                    <div class="d-flex flex-column">
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Add Alarm</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            {{--
                        <a target="_blank" href="https://t.me/FinoMateBot?start={{ auth()->id() }}"
                           class="card card-xxl-stretch bg-body">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="svg-icon svg-icon-success svg-icon-2hx ms-n1 flex-grow-1">
                                    <i class="bi bi-telegram fs-3x"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Telegram Join</div>
                                </div>
                            </div>
                        </a>
            --}}
            <a target="_blank" href="https://chart.finomate.io"
               class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="svg-icon svg-icon-success svg-icon-2hx ms-n1 flex-grow-1">
                        <i class="bi bi-bar-chart-line fs-3x"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">FinoChart</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-10 mb-10">
        <div class="col-xl-12">
            <x-last-signals/>
        </div>
    </div>
    @includeIf('pages.alarm.partial-telegram_modal')
@stop

@section('scripts')
    <script src="{{ mix('static/js/pages/last_signals.js') }}"></script>
    <script>
        let alertCreateUrl = "#";
        let telegramId = parseInt("{{ auth()->user()->telegram_id }}");
    </script>
    <script src="{{ mix('static/js/pages/add_alarms.js') }}"></script>
@stop
