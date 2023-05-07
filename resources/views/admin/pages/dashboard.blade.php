@extends('layouts.main',['activeMenu' => 1])

@section('title','Dashboard')

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.users.create') }}" class="btn btn-success" id="kt_toolbar_primary_button">Create New
            User</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 mb-5">
            <a href="{{ route('admin.users.index') }}" class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <i class="fa fa-users fs-3x"></i>
                    <div class="d-flex flex-column">
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Users : </div>
{{--                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Users : {{ number_format($usersCount) }}</div>--}}
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="#" class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <i class="bi bi-coin fs-3x"></i>
                    <div class="d-flex flex-column">
{{--                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Pairs : {{ number_format($pairsCount) }}</div>--}}
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Pairs </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-5">
            <a href="#" class="card card-xxl-stretch bg-body">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="svg-icon svg-icon-success svg-icon-2hx ms-n1 flex-grow-1">
                        <i class="bi bi-bar-chart-line fs-3x"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Signals</div>
{{--                        <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Signals--}}
{{--                            : {{ number_format($signalsCount) }}</div>--}}
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row my-10">
        <div class="col-xl-12">
{{--            <x-admin.new-users/>--}}
        </div>
    </div>
    <div class="row my-10">
        <div class="col-xl-12">
{{--            <x-admin.new-tickets/>--}}
        </div>
    </div>
    <div class="row my-10">
        <div class="col-xl-12">
{{--            <x-last-signals/>--}}
        </div>
    </div>
@stop

@section('scripts')
{{--    <script src="{{ mix('static/js/pages/last_signals.js') }}"></script>--}}
@stop

@section('page-scripts')
    <script type="text/javascript">
        $('.show-alert-delete-box').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                confirmButtonText: 'Yes, delete it!',
                showCloseButton: true,
                showCancelButton: true,
                customClass: {
                    cancelButton: "btn btn-secondary",
                    confirmButton: "btn btn-primary"
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@stop
