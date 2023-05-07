@php($actions = $actions ?? true)
<div class="card wallet-card">
    <div class="card-body wallet-card-body">
        <div class="balance-box d-block">
            <h5 class="balance-text">Your Balance</h5>
            <h5 class="balance-value mb-0 mt-2">{{ $balance ?? auth()->user()->wallet_balance }} <sub
                    class="balance-symbol">USDT</sub></h5>
        </div>
    </div>
    @if($actions)
        <div class="card-footer border-0 d-flex justify-content-center">
            <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_deposit"
                    class="btn btn-primary mx-3">
                <i class="fa fa-arrow-up"></i>
                Deposit
            </button>
            <button type="button" disabled
                    class="btn btn-primary mx-">
                <i class="fa fa-arrow-down"></i>
                Withdraw
            </button>
            {{--
                        <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_withdraw"
                                class="btn btn-primary mx-">
                            <i class="fa fa-arrow-down"></i>
                            Withdraw
                        </button>
            --}}
        </div>
    @endif
</div>
