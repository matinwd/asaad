<table class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-muted fw-bolder fs-7 gs-0">
        <th class="min-w-125px">ID</th>
        <th class="min-w-125px">Name</th>
        <th class="text-end min-w-100px"></th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-bold">
    @foreach ($menus as $uIndex => $menu)
        <tr>
            <td> {{ $menu->id }}</td>
            <td>{{ $menu->name }}</td>

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
                        <a href="{{ route('admin.menus.edit',$menu) }}"
                           class="menu-link px-3">Edit</a>
                    </div>

                </div>
            </td>
            <!--end::Action=-->
        </tr>
    @endforeach
    </tbody>
</table>
