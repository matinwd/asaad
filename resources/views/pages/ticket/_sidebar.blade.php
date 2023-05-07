<div class="flex-column flex-lg-row-auto w-100 mw-lg-300px mw-xxl-350px">
    <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
        <h2 class="text-dark fw-bolder mb-11">More Channels</h2>
        <div class="d-flex align-items-center mb-10">
            <i class="bi bi-file-earmark-text text-primary fs-1 me-5"></i>
            <div class="d-flex flex-column">
                <h5 class="text-gray-800 fw-bolder">Project Briefing</h5>
                <div class="fw-bold">
                    <span class="text-muted">Check out our</span>
                    <a href="#" class="link-primary">Support Policy</a>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-10">
            <i class="bi bi-chat-square-text-fill text-primary fs-1 me-5"></i>
            <div class="d-flex flex-column">
                <h5 class="text-gray-800 fw-bolder">More to discuss?</h5>
                <div class="fw-bold">
                    <span class="text-muted">Email us to</span>
                    <a href="#" class="link-primary">support@finomate.com</a>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-10">
            <i class="bi bi-twitter text-primary fs-1 me-5"></i>
            <div class="d-flex flex-column">
                <h5 class="text-gray-800 fw-bolder">Latest News</h5>
                <div class="fw-bold">
                    <span class="text-muted">Follow us at</span>
                    <a href="#" class="link-primary">finomate Twitter</a>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-telegram text-primary fs-1 me-5"></i>
            <div class="d-flex flex-column">
                <h5 class="text-gray-800 fw-bolder">Telegram Join</h5>
                <div class="fw-bold">
                    <span class="text-muted">Our Teleram</span>
                    <a href="#" class="link-primary">finomate Channel</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
        <h1 class="fw-bolder text-dark mb-9">Documentation</h1>
        @for ($i = 0; $i < 10; $i++)
            <div class="d-flex align-items-center {{ $i != 9 ? 'mb-6' : '' }}">
                <div class="svg-icon svg-icon-2 ms-n1 me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z"
                            fill="black"/>
                    </svg>
                </div>
                <a href="#"
                   class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Item {{ $i + 1 }}</a>
            </div>
        @endfor
    </div>
</div>
