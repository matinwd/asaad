@extends('layouts.main',['activeMenu' => 4])

@section('title','Support Center / Tickets')

@section('page-styles')
    <style>
        td, th {
            text-align: center !important;
        }
    </style>
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('tickets.create') }}" class="btn btn-success">
            Create Ticket
        </a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column flex-xl-row p-7">
                <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                    <div class="mb-0">
                        <form method="get" class="form mb-15">
                            <div class="position-relative">
                                <div
                                    class="svg-icon svg-icon-1 svg-icon-primary position-absolute top-50 translate-middle ms-9">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223"
                                              width="8.15546" height="2" rx="1"
                                              transform="rotate(45 17.0365 15.1223)"
                                              fill="black"/>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black"/>
                                    </svg>
                                </div>
                                <input type="text" class="form-control form-control-lg form-control-solid ps-14"
                                       name="id" value="{{ request('id') }}" placeholder="Search"/>
                            </div>
                        </form>
                        <div class="table-responsive mb-10">
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
                                @forelse ($tickets as $tIndex => $ticket)
                                    <tr>
                                        <td>{{ $ticket->id }}</td>
                                        <td class="text-start">
                                            <a href="{{ route('tickets.show',$ticket) }}" class="text-white">
                                                {{ $ticket->subject }}
                                            </a>
                                        </td>
                                        <td>{{ $ticket->department->name }}</td>
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
                                @if ($tickets->lastPage() > 1)
                                    <tfoot>
                                    <tr>
                                        <td colspan="10">
                                            {!! $tickets->appends(['id' => request('id')])->render() !!}
                                        </td>
                                    </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
{{--                @includeIf('pages.ticket._sidebar')--}}
            </div>
        </div>
    </div>
@stop

@section('page-scripts')
@stop
