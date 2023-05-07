@extends('layouts.main',['activeMenu' => 2])

@section('title','WatchList')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('watchLists.create') }}" class="btn btn-success">Create Watch List</a>
    </div>
@stop

@section('content')
    <div class="row g-6 g-xl-9">
        @forelse ($watchLists as $watchList)
            <div class="col-md-6 col-xl-4">
                <div class="card border-hover-primary">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">{{ $watchList->name }}</span>
                        </h3>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
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
                                <!--end::Svg Icon-->
                            </button>
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                data-kt-menu="true">
                                <div class="menu-item px-3 my-1">
                                    <a href="{{ route('watchLists.edit',$watchList) }}" class="menu-link px-3">Edit</a>
                                </div>
                                <div class="menu-item px-3 my-1">
                                    <form method="POST" action="{{ route('watchLists.destroy',$watchList) }}">
                                        @csrf
                                        @method('delete')
                                        <a href="javascript:" class="menu-link px-3 show-alert-delete-box">Delete
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        @isset($watchList->description)
                            <p class="text-gray-400 fw-bold fs-5 mt-1 mb-10">
                                {{ $watchList->description }}
                            </p>
                        @endisset
                        <div class="symbol-group symbol-hover mb-10">
                            @foreach ($watchList->pairs()->limit(5)->get() as $pair)
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                     title="{{ $pair->symbol }} | {{ $pair->description }}">
                                    @if($pair->logoid)
                                        <img alt="Pic"
                                             src="{{ $pair->logo }}"/>
                                    @else
                                        <span
                                            class="symbol-label bg-{{ $pair->logo_color }} text-inverse-{{ $pair->logo_color }} fw-bolder">
                                                {{ $pair->logo_character }}
                                            </span>
                                    @endif
                                </div>
                            @endforeach
                            @if($watchList->pairs()->count() > 5)
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                     data-bs-target="#kt_modal_view_pairs">
                                <span
                                    class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+{{ $watchList->pairs()->count() - 5 }}</span>
                                </div>
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
    {!! $watchLists->render() !!}
    @if($watchLists->count() > 0)
        <div class="modal fade" id="kt_modal_view_pairs" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                              rx="1" transform="rotate(-45 6 17.3137)"
                                                              fill="currentColor"/>
														<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                              transform="rotate(45 7.41422 6)" fill="currentColor"/>
													</svg>
												</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <!--begin::Heading-->
                        <div class="text-center mb-13">
                            <h1 class="mb-3">Browse Pairs</h1>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Pairs-->
                        <div class="mb-15">
                            <!--begin::List-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                @foreach ($watchLists[0]->pairs as $pair)
                                    <div
                                        class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px symbol-circle">
                                                @if($pair->logoid)
                                                    <img alt="Pic"
                                                         src="{{ $pair->logo }}"/>
                                                @else
                                                    <span
                                                        class="symbol-label bg-{{ $pair->logo_color }} text-inverse-{{ $pair->logo_color }} fw-bolder">{{ $pair->logo_character }}</span>
                                                @endif
                                            </div>
                                            <div class="ms-6">
                                                <a href="javascript:"
                                                   class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">
                                                    {{ $pair->symbol }}
                                                </a>
                                                <div class="fw-bold text-muted">{{ $pair->description }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Pairs-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
    @endif
@stop

@section('page-scripts')
    <script type="text/javascript">
        $('.show-alert-delete-box').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure you want to delete this WatchList?",
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
