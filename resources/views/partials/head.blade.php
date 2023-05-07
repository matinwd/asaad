<head>
    <title>@yield('title','Dashboard') | Finomate - Your Smart Trading Mate</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('static/img/favicon/favicon.ico') }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    @yield('page-styles')
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.dark.bundle.css') }}" rel="stylesheet" type="text/css"/>
    @yield('styles')
    <style>
        .menu-link.disabled img {
            filter: grayscale(1) !important;
        }

        .discount-border {
            position: relative;
            color: #f55;
        }

        .discount-border:before {
            position: absolute;
            content: "";
            border-top: 2px solid;
            transform: rotate(-12deg);
            width: 100%;
            top: 50%;
        }
    </style>
    {{-- wallet --}}
    <style>
        .wallet-card {
            background: transparent;
        }

        .wallet-card-body {
            background-image: url('{{ asset('static/img/wallet_bg.svg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            height: 30vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .balance-text {
            font-size: 2.5rem;
        }

        .balance-value {
            font-size: 3rem;
        }

        .balance-symbol {
            font-size: 2rem;
            color: #888;
        }

        @media (min-width: 300px) {
            .wallet-card-body {
                height: 15vh;
            }

            .balance-text {
                font-size: 1rem;
            }

            .balance-value {
                font-size: 1.5rem;
            }

            .balance-symbol {
                font-size: .75rem;
                color: #888;
            }
        }

        @media (min-width: 400px) {
            .wallet-card-body {
                height: 15vh;
            }

            .balance-text {
                font-size: 1.5rem;
            }

            .balance-value {
                font-size: 2rem;
            }

            .balance-symbol {
                font-size: 1rem;
                color: #888;
            }
        }

        @media (min-width: 500px) {
            .wallet-card-body {
                height: 22vh;
            }

            .balance-text {
                font-size: 2rem;
            }

            .balance-value {
                font-size: 2.5rem;
            }

            .balance-symbol {
                font-size: 1.5rem;
                color: #888;
            }
        }

        @media (min-width: 800px) {
            .wallet-card-body {
                height: 25vh;
            }

            .balance-text {
                font-size: 2.5rem;
            }

            .balance-value {
                font-size: 3rem;
            }

            .balance-symbol {
                font-size: 2rem;
                color: #888;
            }
        }

        @media (min-width: 1024px) {
            .wallet-card-body {
                height: 30vh;
            }

            .balance-text {
                font-size: 2.5rem;
            }

            .balance-value {
                font-size: 3rem;
            }

            .balance-symbol {
                font-size: 2rem;
                color: #888;
            }
        }
    </style>
</head>
