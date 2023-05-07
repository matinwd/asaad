@extends('layouts.main',['activeMenu' => 2])

@section('title','Products')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <div class="me-4">
            <a href="javascript:"
               class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary fw-bolder"
               data-kt-menu-trigger="click">
                <div class="d-inline svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none">
                        <path
                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                            fill="black"/>
                    </svg>
                </div>
                Filter
            </a>
            <div class="menu menu-sub menu-sub-dropdown w-350px w-md-400px" data-kt-menu="true">
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                </div>
                <div class="separator border-gray-200"></div>
                <form action="">
                    <input type="hidden" name="page" value="1">
                    <div class="px-7 py-5">
                        <div class="mb-10">
                            <label class="form-label fw-bold">Name : </label>
                            <div>
                                <input type="text"
                                       class="form-control form-control-sm form-control-solid"
                                       placeholder="Product name"
                                       name="name" value="{{ old('name',request('name')) }}"/>
                            </div>
                        </div>
                            <div class="mb-10">
                                <label class="form-label fw-bold">Visibility Status :</label>
                                <div class="nav-group nav-group-fluid">
                                    <label>
                                        <input {{ request('visibility') == null ? 'checked' : ''  }} type="radio" name="visibility" value="" class="btn-check">
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                    </label>
                                    <label>
                                        <input {{ request('visibility') == '1' ? 'checked' : ''  }} type="radio" name="visibility" value="1" class="btn-check">
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Visible</span>
                                    </label>
                                    <label>
                                        <input {{ request('visibility') === '0' && request('visibility') !== false ? 'checked' : ''  }} type="radio" name="visibility" value="0" class="btn-check">
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Hidden</span>
                                    </label>
                                </div>
                            </div>
                        <div class="d-flex justify-content-end">
                            <button type="buttonn"
                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Cancel
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <a href="{{ route('admin.products.create') }}" class="btn btn-success">Create Product</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-flush min-h-300px">
                <div class="card-body py-4">
                    @includeIf('admin.pages.product.partials.table',$products)
                </div>
                @if ($products->lastPage() > 1)
                    <div class="card-footer">
                        {!! $products->render() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('page-scripts')
    <script type="text/javascript">
        $('.show-alert-delete-box').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure you want to delete this record?",
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
