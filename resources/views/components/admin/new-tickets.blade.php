{{--
<div class="card card-flush h-md-100">
    <div class="card-header pt-7">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-gray-900">New Tickets</span>
        </h3>
        <div class="card-toolbar">
            <a href="javascript:"
               class="btn btn-sm btn-light"
               data-kt-menu-trigger="click">
                <i class="bi bi-list"></i>
                Show All
            </a>
        </div>
    </div>
    <div class="card-body pt-6">
        <div class="table-responsive">
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <thead>
                <tr class="fs-7 fw-bolder text-gray-700 border-bottom-0">
                    <th class="w-50px">#</th>
                    <th class="min-w-225px text-start">Subject</th>
                    <th class="min-w-175px">Department</th>
                    <th class="min-w-125px">Date</th>
                    <th class="min-w-100px">Status</th>
                    <th class="w-50px text-end"></th>
                </tr>
                </thead>
                <tbody>
                @forelse ($tickets ?? [] as $tIndex => $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td class="text-start">{{ $ticket->subject }}</td>
                        <td>
                            <div class="badge badge-light fw-bolder">
                                {{ $ticket->department->name }}
                            </div>
                        </td>
                        <td>
                                            <span
                                                class="text-gray-700 fw-bolder fs-6">{{ $ticket->updated_at->format('Y-m F d  H:i:s') }}</span>
                        </td>
                        <td>
                                            <span
                                                class="badge badge-light-{{ $ticket->status_class }}">{{ $ticket->status_text }}</span>
                        </td>
                        <td>
                            <a href="{{ route('tickets.show',$ticket) }}"
                               class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <div class="svg-icon svg-icon-5 svg-icon-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <path
                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                            fill="currentColor"/>
                                        <path opacity="0.3"
                                              d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                              fill="currentColor"/>
                                    </svg>
                                </div>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">Not Item Found || Not Item Exists</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
--}}

<div class="card card-flush h-md-100">
    <div class="card-header border-0 pt-6">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder text-gray-900">New Tickets</span>
        </h3>
        <div class="card-toolbar">
            <a href="{{ route('admin.tickets.index') }}"
               class="btn btn-sm btn-light">
                <i class="bi bi-list"></i>
                Show All
            </a>
        </div>
    </div>
    <div class="card-body py-4">
        @includeIf('admin.pages.ticket.partials.table')
    </div>
</div>
