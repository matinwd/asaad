<table class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-muted fw-bolder fs-7 gs-0">
        <th class="min-w-125px">Product</th>
        <th class="min-w-125px">Visibility</th>
        <th class="min-w-125px">Discount</th>
        <th class="min-w-125px">View Count</th>
        <th class="min-w-125px">Created Date</th>
        <th class="text-end min-w-100px"></th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-bold">
    @foreach ($products as $uIndex => $product)
        <tr>
            <td class="d-flex align-items-center">
                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                    <a href="#">
                        <div
                            class="symbol-label fs-3 bg-light-{{ $product->avatar_color }} text-{{ $product->avatar_color }}">
                            <img class="h-60px w-60px rounded" src="{{ url($product->first_image) }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <a href="#"
                       class="text-gray-800 text-hover-primary mb-1">{{ $product->translate('en')->name }}</a>
                    <span>{{ $product->price  && $product->price_status == 1 ? $product->price : $product->price_status_text }}</span>
                </div>
            </td>
            <td>
                <div class="badge {{$product->visibility == 1 ? 'badge-light-success' : 'badge-light-info'}} fw-bolder">
                    {{ $product->visibility_status_text }}
                </div>
            </td>
            <td>
                    <div class="badge badge-light">
                        {{ $product->discount > 0 ? $product->discount : '_' }}
                    </div>
            </td>

            <td>{{ $product->view_count }}</td>
            <td>{{ $product->created_at->diffForHumans() }}</td>
            <td class="text-end">
                <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
                   data-kt-menu-placement="bottom-end">Actions
                    <div class="svg-icon svg-icon-5 m-0 d-inline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none">
                            <path
                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                fill="currentColor"/>
                        </svg>
                    </div>
                </a>
                <div
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-auto py-4"
                    data-kt-menu="true">
                    <div class="menu-item px-3">
                        <a href="{{ route('admin.products.edit',$product) }}"
                           class="menu-link px-3">Edit</a>
                    </div>
                    <div class="menu-item px-3">
                        <form method="POST" action="{{ route('admin.products.destroy',$product) }}">
                            @csrf
                            @method('delete')
                            <a href="javascript:" class="menu-link px-3 show-alert-delete-box">
                                Delete
                            </a>
                        </form>
                    </div>
                    <div class="menu-item px-3">
                        <form method="POST" action="{{ route('admin.products.hide',$product->id) }}">
                            @csrf
                            @method('put')
                            <button type="submit" href="javascript:" class="btn btn-sm menu-link px-3">
                                {{ $product->visibility == '1' ? 'Hide it' : 'Visible' }}
                            </button>
                        </form>
                    </div>
                </div>
            </td>
            <!--end::Action=-->
        </tr>
    @endforeach
    </tbody>
</table>
