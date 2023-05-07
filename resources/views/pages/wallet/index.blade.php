@extends('layouts.main',['activeMenu' => 6])

@section('title','Wallet')

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back To Dashboard</a>
    </div>
@stop

@section('styles')
@endsection

@section('content')
    @includeIf('pages.wallet.partials.wallet-card')

    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-row-bordered">
                <thead>
                <tr class="table-light">
                    <th class="ps-3">Transaction Number</th>
                    <th>Date and Time</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @forelse($transactions as $tIndex => $transaction)
                    <tr>
                        <td class="ps-3">{{ $transaction->number }}</td>
                        <td>{{ $transaction->created_at->format('M d , Y , H:i') }}</td>
                        <td>
                            @if($transaction->type == 2)
                                -
                            @endif
                            {{ $transaction->amount }}
                        </td>
                        <td>
                            {{ $transaction->status }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="10">No Records...</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @includeIf('pages.wallet.partials.deposit_modal')
    @includeIf('pages.wallet.partials.withdraw_modal')
@stop
