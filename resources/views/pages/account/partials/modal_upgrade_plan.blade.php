<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded">
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
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20 min-h-500px">
                <div class="mb-5 text-center">
                    <h1 class="mb-2">Upgrade a Plan</h1>
                    <div v-if="step == 2 && balance < plan_price" class="text-muted fw-bold fs-5 mt-5">
                        Your wallet does not have enough balance, please use the pay button and charge your wallet then
                        try again to premium the account.
                    </div>
                    <div v-if="step == 2 && balance >= plan_price" class="text-muted fw-bold fs-5 mt-5">
                        Your wallet hase enough balance. You can upgrade your account to premium by using the pay
                        button.
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div v-show="step == 1" class="row mt-10">
                        <div class="col-lg-6">
                            <div class="nav flex-column">
                                <div
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-5"
                                    data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_premium_a"
                                    @click="plan_id = 2">
                                    <div class="d-flex align-items-center me-2">
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" v-model="plan_id" value="2"
                                                   checked="checked"/>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">PREMIUM</h2>
                                            <div class="fw-bold opacity-50">60 Days</div>
                                        </div>
                                    </div>
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-2x fw-bolder">45</span>
                                    </div>
                                </div>
                                <div
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-5"
                                    data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_premium_b"
                                    @click="plan_id = 3">
                                    <div class="d-flex align-items-center me-2">
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" v-model="plan_id"
                                                   value="3"/>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">EXTENDED
                                                <span class="badge badge-light-success ms-2 fs-7">Most popular</span>
                                            </h2>
                                            <div class="fw-bold opacity-50">180 Days</div>
                                        </div>
                                    </div>
                                    <span class="ms-10 discount-border">
                                        <span class="mb-2">$</span>
                                        <span class="fs-2x fw-bolder">135</span>
                                    </span>
                                    <div>
                                        <span class="mb-2">$</span>
                                        <span class="fs-2x fw-bolder">115</span>
                                    </div>
                                </div>
                                <div
                                    class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6"
                                    data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise"
                                    @click="plan_id = 4">
                                    <div class="d-flex align-items-center me-2">
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" v-model="plan_id" value="4"/>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                Enterprise</h2>
                                        </div>
                                    </div>
                                    <div class="ms-5">
                                        <a href="mailto:marketing@finomate.io" class="btn btn-sm btn-primary">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tab-content rounded h-100 bg-light px-10 py-5">
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_premium_a">
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark mb-0">What’s in Premium Plan?</h2>
                                    </div>
                                    <div class="pt-1">
                                        <div class="d-flex align-items-center mb-5">
                                            <span
                                                class="fw-bold fs-5 text-gray-700 flex-grow-1">All Markets <small
                                                    class="fs-7">(Available)</small></span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">All Strategies</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span
                                                class="fw-bold fs-5 text-gray-700 flex-grow-1">More than 80 cois</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Pairs</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span
                                                class="fw-bold fs-5 text-gray-700 flex-grow-1">+12 TimeFrames</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Divergence <small
                                                class="fs-7">(Automatic Checking)</small></span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                        <span
                                            class="fw-bold fs-5 text-gray-700 flex-grow-1">24/7 Customer Support</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none"><rect opacity="0.3" x="2" y="2"
                                                                                           width="20" height="20"
                                                                                           rx="10" fill="black"/><path
                                                        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                        fill="black"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                        <span
                                            class="fw-bold fs-5 text-gray-700 flex-grow-1">24/7 Customer Support</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_upgrade_plan_premium_b">
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark mb-0">What’s in Premium Plan?</h2>
                                    </div>
                                    <div class="pt-1">
                                        <div class="d-flex align-items-center mb-5">
                                            <span
                                                class="fw-bold fs-5 text-gray-700 flex-grow-1">All Markets <small
                                                    class="fs-7">(Available)</small></span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">All Strategies</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span
                                                class="fw-bold fs-5 text-gray-700 flex-grow-1">More than 80 cois</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Pairs</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <span
                                                class="fw-bold fs-5 text-gray-700 flex-grow-1">+12 TimeFrames</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Divergence <small
                                                class="fs-7">(Automatic Checking)</small></span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                        <span
                                            class="fw-bold fs-5 text-gray-700 flex-grow-1">Notification And Alerts</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                        <span
                                            class="fw-bold fs-5 text-gray-700 flex-grow-1">24/7 Customer Support</span>
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="24" height="24"
                                                                                 viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.3" x="2" y="2"
                                                                                      width="20" height="20" rx="10"
                                                                                      fill="black"/>
																				<path
                                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                                    fill="black"/>
																			</svg>
																		</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <div class="pb-10">
                                        <span class="fw-bold fs-5 text-gray-900 flex-grow-1">
                                            For all of the organizations that need addition features, control, and support.
                                        </span>
                                    </div>
                                    <div class="pt-10">
                                        <span class="fw-bold fs-5 text-gray-900 flex-grow-1">
                                            Let's talk to get a price estimate
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-show="step == 2" class="row mt-10">
                        @includeIf('pages.wallet.partials.wallet-card',['actions' => false])
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex flex-center flex-row-fluid pt-12" v-if="step == 1">
                    <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" @click="step = 2" v-if="plan_id == 2 || plan_id == 3">
                        Next
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-if="plan_id == 0 || plan_id == 4">Ok
                    </button>
                </div>
                <div class="d-flex flex-center flex-row-fluid pt-12" v-if="step == 2">
                    <button type="button" class="btn btn-light me-3" @click="step = 1">Back</button>
                    <button type="button" class="btn btn-primary" @click="goToWallet" v-if="balance < plan_price">Go To
                        MyWallet
                    </button>
                    <button type="button" class="btn btn-primary" @click="pay" v-if="balance >= plan_price">Pay</button>
                </div>
            </div>
        </div>
    </div>
</div>
