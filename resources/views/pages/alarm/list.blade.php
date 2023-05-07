@extends('layouts.main',['activeMenu' => 3])

@section('title','Alarm')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a @click="addAlertBtn" href="javascript:;" class="btn btn-success">Create Alarm</a>
    </div>
@stop

@section('content')
    <div class="row g-6 g-xl-9">
        @forelse ($alarms as $index => $alarm)
            <div class="col-sm-6 col-xl-4">
                <div class="card h-100">
                    <div class="card-header flex-nowrap border-0 pt-9">
                        <div class="card-title m-0">
                            @if($alarm->source == 'exchange')
                                <div class="symbol symbol-45px w-45px bg-light me-5">
                                    <img src="https://s3-symbol-logo.tradingview.com/provider/binance.svg" alt="image"
                                         class=""/>
                                </div>
                            @else
                                <div class="symbol symbol-45px symbol-circle w-45px me-5">
                                    <span
                                        class="symbol-label bg-light-danger text-danger fw-bold">{{ strtoupper($alarm->watch_list->name[0]) }}</span>
                                </div>
                            @endif
                            <a href="javascript:"
                               class="fs-4 fw-bold text-hover-primary text-gray-700 m-0">{{ $alarm->watch_list->name ?? $alarm->exchange->name }}</a>
                        </div>
                        <div class="card-toolbar">
                            <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary2 btn-active-light-primary"
                                    data-kt-menu-trigger="click">
                                <div class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                         height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                  fill="currentColor"/>
                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                  fill="currentColor" opacity="0.3"/>
                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                  fill="currentColor" opacity="0.3"/>
                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                  fill="currentColor" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                data-kt-menu="true">
                                {{--
                                                                <div class="menu-item px-3 my-1">
                                                                    <a href="{{ route('alarms.edit',$alarm) }}" class="menu-link px-3">Edit</a>
                                                                </div>
                                --}}
                                <div class="menu-item px-3 my-1">
                                    <form method="POST" action="{{ route('alarms.destroy',$alarm) }}">
                                        @csrf
                                        @method('delete')
                                        <a href="javascript:" class="menu-link px-3 show-alert-delete-box">Delete
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                        <!--begin::Heading-->
                        <div class="fs-2tx fw-bolder mb-3">{{ $alarm->name }}</div>
                        <!--end::Heading-->
                        <div class="d-flex align-items-center fw-bold mt-5">
                            @foreach ($alarm->strategies as $strategy)
                                <span class="badge bg-light text-gray-700 px-3 py-2 ms-2">{{ $strategy->name }}</span>
                            @endforeach
                        </div>
                        <div class="d-flex align-items-center fw-bold my-5">
                            @foreach (explode(',',$alarm->time_frame) as $timeFrame)
                                <span class="badge bg-light text-gray-700 px-3 py-2 ms-2">{{ $timeFrame }}</span>
                            @endforeach
                        </div>
                        <div class="d-flex align-items-center fw-bold">
                            @if($alarm->opportunity == 'SELL')
                                <span class="badge badge-light-danger px-3 py-2 ms-2">SELL</span>
                            @elseif($alarm->opportunity == 'BUY')
                                <span class="badge badge-light-success px-3 py-2 ms-2">BUY</span>
                            @else
                                <span class="badge badge-light-primary px-3 py-2 ms-2">BOTH</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="card border-hover-primary">
                    <div class="card-body min-h-300px justify-content-center d-flex align-items-center">
                        <p class="text-gray-800 fw-bold fs-5 d-flex">
                            Not Item Found || Not Item Exists
                        </p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    {!! $alarms->render() !!}
    @includeIf('pages.alarm.partial-telegram_modal')
@stop

@section('scripts')
    <script>
        let alertCreateUrl = "{{ route('alarms.create') }}";
        let telegramId = parseInt("{{ auth()->user()->telegram_id }}");
    </script>
    <script src="{{ mix('static/js/pages/add_alarms.js') }}"></script>
@stop
@section('page-scripts')
    <script type="text/javascript">
        $('.show-alert-delete-box').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure you want to delete this Alarm?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                confirmButtonText: 'Yes, delete it!',
                showCloseButton: true,
                showCancelButton: true,
                customClass: {
                    cancelButton: "btn btn-secondary",
                    confirmButton: "btn btn-primary"
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@stop

