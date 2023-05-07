<!DOCTYPE html>
<html lang="en">
@includeIf('partials.head')
<body id="kt_body" class="dark-mode">

<div class="d-flex flex-column flex-root" id="vApp">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid" id="main">
        <div class="d-lg-flex d-none flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
             style="background-color: #1E1E2D">
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <div class="d-flex flex-row-fluid flex-column text-center p-10 pb-5">
                    <a href="https://finomate.io" class="py-5">
                        <img alt="Logo" src="{{ asset('static/img/logos/logo-basic.svg') }}" class="h-125px"/>
                    </a>
                    <h1 class="fw-bolder fs-2qx mb-5" style="color: #2bbbb1;">Welcome to Finomate</h1>
                    <p class="fw-bold fs-2 m-0" style="color: #1e938d;">YOUR SMART TRADING MATE</p>
                </div>
                <div
                    class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-top min-h-100px min-h-lg-350px"
                    style="background-image: url({{ asset('temp/auth-2.svg') }});margin-bottom: 2rem"></div>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row-fluid pb-10">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                    <a href="https://finomate.io" class="d-block d-lg-none mb-10 mb-md-5 text-center">
                        <img alt="Logo" src="{{ asset('static/img/logos/logo-type-2.svg') }}" class="h-75px"/>
                    </a>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

@includeIf('partials.scripts')
</body>
</html>
