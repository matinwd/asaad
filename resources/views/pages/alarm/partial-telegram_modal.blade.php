<div class="modal fade" id="kt_modal_telegram" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-400px mw-lg-550px">
        <div class="modal-content rounded">
            <div class="modal-header p-0 pt-5 d-block border-0">
                <div class="justify-content-between d-flex px-5">
                    <h3 class="text-gray-900">Telegram Account</h3>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <div class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                      rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                      transform="rotate(45 7.41422 6)" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body py-0 px-5 scroll-x border-0">
                <p class="mb-0 fs-5 text-gray-800">
                    To use Telegram notification, we need to confirm your
                    <br>
                    account. Follow these steps to confirm your account:
                    <br>
                    1-Tap on following link that will take you to Finomate Telegram Bot
                    <br>
                    2- After opening Telegram chat, tap on "Start* Button.
                    <br>
                    3- Now click on below button "Check"
                    <br>
                    4- Wait for about 5 minutes for the Bot to confirm your account
                </p>
                <div class="mt-4 text-center">
                    <a target="_blank" href="https://t.me/FinoMateBot?start={{ auth()->id() }}"
                       @click="joinToTelegram"
                       class="btn btn-outline-secondary border rounded-pill text-gray-800">
                        <i class="bi bi-telegram fs-4" style="padding-bottom: 4px;"></i>
                        Telegram Bot
                    </a>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-primary" :disabled="disableAddAlertCheckStatus"
                        @click="checkTelegramId">Check
                </button>
            </div>
        </div>
    </div>
</div>
