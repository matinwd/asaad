@extends('layouts.main',['activeMenu' => 5])

@section('title','Account Billing')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary" id="kt_toolbar_primary_button">Back To
            Dashboard</a>
    </div>
@stop

@section('content')
    @includeIf('pages.account.partials.header',['activeMenu' => 2])

    <div class="card mb-5 mb-xl-10">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <!--begin::Heading-->
                    <h3 class="mb-2">Active until Dec 09, 2021</h3>
                    <p class="fs-6 text-gray-600 fw-bold mb-6 mb-lg-15">We will send you a notification upon
                        Subscription expiration</p>
                    <!--end::Heading-->
                    <!--begin::Info-->
                    <div class="fs-5 mb-2">
                        <span class="text-gray-800 fw-bolder me-1">$99</span>
                        <span class="text-gray-600 fw-bold">Per Month</span>
                    </div>
                    <!--end::Info-->
                    <!--begin::Notice-->
                    <div class="fs-6 text-gray-600 fw-bold">Extended Pro Package. Up to 100 Symbols &amp; 10 TimeFrame
                    </div>
                    <!--end::Notice-->
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end pb-0 px-0">
                <a href="#" class="btn btn-light btn-active-light-primary me-2">Cancel Subscription</a>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade
                    Plan
                </button>
            </div>
        </div>
    </div>

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header card-header-stretch border-bottom border-gray-200">
            <div class="card-title">
                <h3 class="fw-bolder m-0">Billing History</h3>
            </div>
        </div>
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-bordered align-middle gy-4 gs-9">
                <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
                <tr>
                    <td class="min-w-150px">Id</td>
                    <td class="min-w-150px">Date</td>
                    <td class="min-w-250px">Description</td>
                    <td class="min-w-150px">Amount</td>
                    <td class="min-w-150px">Invoice</td>
                    <td></td>
                </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                @for ($i = 0; $i < 10; $i++)
                    @php($date = now()->subMonths($i))
                    <tr>
                        <td>{{ rand(111,999) . rand(111,999) . rand(111,999) . rand(111,999) }}</td>
                        <td>{{ $date->format('M D , Y') }}</td>
                        <td>
                            <a href="#">Invoice for {{ $date->format('F Y') }}</a>
                        </td>
                        <td>${{ rand(10,15) * 10 }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
            <!--end::Table-->
        </div>
    </div>

    @includeIf('pages.account.partials.modal_upgrade_plan')
@stop

@section('page-scripts')
    <script src="{{ asset('assets/js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    {{--    <script src="assets/js/custom/apps/chat/chat.js"></script>--}}
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
    {{--    <script src="assets/js/custom/modals/create-app.js"></script>--}}
    {{--    <script src="assets/js/custom/modals/offer-a-deal/type.js"></script>--}}
    {{--    <script src="assets/js/custom/modals/offer-a-deal/details.js"></script>--}}
    {{--    <script src="assets/js/custom/modals/offer-a-deal/finance.js"></script>--}}
    {{--    <script src="assets/js/custom/modals/offer-a-deal/complete.js"></script>--}}
    {{--    <script src="assets/js/custom/modals/offer-a-deal/main.js"></script>--}}
    <script src="{{ asset('assets/js/custom/modals/two-factor-authentication.js') }}"></script>
    {{--    <script src="assets/js/custom/modals/users-search.js"></script>--}}
@stop
