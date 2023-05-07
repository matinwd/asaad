<div class="modal fade" id="kt_modal_deposit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-700px modal-dialog-centered">
        <div class="modal-content rounded">
            <form action="{{ route('wallet.deposit') }}" method="post">
                @csrf
                <div class="modal-header justify-content-end border-0 pb-0">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                  transform="rotate(-45 6 17.3137)" fill="black"/>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                  fill="black"/>
                        </svg>
                    </span>
                    </div>
                </div>
                <div class="modal-body pt-0 px-5 px-xl-20">
                    <div class="mb-5 text-center">
                        <h1 class="mb-2">Deposit</h1>
                        {{--
                                            <div class="text-muted fw-bold fs-5 mt-5">
                                                To upgrade the price plan, the amount of each plan (48.5$ for a one-month subscription and 97$
                                                for a three-month subscription)
                                                Send to the wallet address below and upload the screenshot of the deposit to us so that your
                                                account can be upgraded.
                                            </div>
                        --}}
                    </div>
                    <div class="d-flex flex-column mt-10">
                        <div class="row">
                            <div class="d-flex flex-column mb-8 col-12">
                                <label for="js-amount" class="fs-6 fw-bold mb-2">Amount</label>
                                <div class="input-group input-group-solid">
                                    <input id="js-amount" type="tel" class="form-control form-control-solid"
                                           name="amount"
                                           value="{{ old('amount') }}" autofocus placeholder="0"/>
                                    <div class="input-group-text">
                                        USDT
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex flex-center flex-row-fluid">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            OK
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
