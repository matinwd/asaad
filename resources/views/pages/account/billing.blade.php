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
    <x-user-header :activeMenu="2"/>

    <div class="card mb-5 mb-xl-10">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @if($havePremiumPlan)
                        <h3 class="mb-2">Active until {{ $activePlan->expire_at->format(' M d, Y') }}</h3>
                        <p class="fs-6 text-gray-600 fw-bold mb-6 mb-lg-15">We will send you a notification upon
                            Subscription expiration</p>
                        <div class="fs-5 mb-2">
                            <span class="text-gray-800 fw-bolder me-1">${{ $activePlan->plan->price }}</span>
                            /
                            <span class="text-gray-600 fw-bold">{{ $activePlan->plan->days }} Days</span>
                        </div>
                    @else
                        <h3 class="mb-2">Trial Plan (7Days) ...</h3>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end pb-0 px-0">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade
                    Plan
                </button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header card-header-stretch border-bottom border-gray-200">
            <div class="card-title">
                <h3 class="fw-bolder m-0">Billing History</h3>
            </div>
        </div>
        <div class="table-responsive">
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
                @foreach ($billings as $billing)
                    <tr>
                        <td>{{ $billing->id }}</td>
                        <td>{{ $billing->issue_date->format('M D , Y') }}</td>
                        <td>{{ $billing->description }}</td>
                        <td>${{ number_format($billing->total) }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @includeIf('pages.account.partials.modal_upgrade_plan')
@stop

@section('scripts')
    <script src="{{ mix('static/js/pages/upgrade-plan.js') }}"></script>
@stop

@section('page-scripts')
    <script src="{{ asset('assets/js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/two-factor-authentication.js') }}"></script>
    @if(request('op',0) == 1)
        <script>
            setTimeout(function () {
                $('#kt_modal_upgrade_plan').modal('show');
            }, 1000);
        </script>
    @endif
@stop
