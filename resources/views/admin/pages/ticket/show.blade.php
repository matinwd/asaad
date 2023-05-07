@extends('layouts.main',['activeMenu' => 6])

@section('title','Ticket / Ticket #' . $ticket->id)

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.tickets.index') }}" class="btn btn-secondary">Back To Tickets</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column flex-xl-row p-7">
                <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                    <div class="mb-0">
                        <div class="d-flex align-items-center mb-12">
                            <div class="d-flex flex-column">
                                <h1 class="text-gray-800 fw-bold">
                                    {{ $ticket->subject }}
                                </h1>
                                <div class="">
                                    <span class="fw-bold me-6 badge badge-light-{{ $ticket->status_class }}">
                                        {{ $ticket->status_text }}
                                    </span>
                                    <span class="fw-bold me-6 badge badge-light">
                                        {{ $ticket->department->name }}
                                    </span>
                                    <span class="fw-bold me-6 badge badge-light" title="Created At"
                                          data-bs-toggle="tooltip">
                                        {{ $ticket->created_at }}
                                    </span>
                                    <span class="fw-bold me-6 badge badge-light" title="Updated At"
                                          data-bs-toggle="tooltip">
                                        {{ $ticket->updated_at }}
                                    </span>
                                </div>
                                <hr>
                                <div>
                                    {{ $ticket->user->full_name }} / <a
                                        href="malti:{{ $ticket->user->email }}">{{ $ticket->user->email }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="mb-15 fs-5 fw-normal text-gray-800">
                                {{ nl2br($ticket->description) }}
                            </div>
                        </div>
                        <div class="mb-5">
                            @foreach ($ticket->messages as $mIndex => $message)
                                @php($isMyMessage = ($message->user_id == auth()->id()) || is_null($message->user_id))
                                <div class="{{ $isMyMessage ? 'ms-20' : 'me-20' }} mb-9">
                                    <div class="card card-bordered w-auto">
                                        <div class="card-body">
                                            <div class="w-100 d-flex flex-stack mb-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-5">
                                                        @if($message->user_id)
                                                            <div
                                                                class="symbol-label fs-1 fw-bolder badge-secondary bg-light-{{ $message->user->avatar_color }}
                                                                    text-{{ $message->user->avatar_color }}">
                                                                {{ $message->user->avatar_character }}
                                                            </div>
                                                        @else
                                                            <div
                                                                class="symbol-label fs-1 fw-bolder bg-light-info text-info">
                                                                B
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column fw-bold fs-5 text-gray-600 text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-gray-800 fw-bolder fs-5 me-3">
                                                                {{ $message->user_id ? $message->user->full_name : 'FinoBot' }}
                                                            </span>
                                                        </div>
                                                        <span class="text-muted fw-bold fs-6">
                                                            {{ $ticket->updated_at->shortRelativeDiffForHumans() }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="fw-normal fs-5 text-gray-700 m-0">{{ $message->text }}</p>
                                            <hr>
                                            @foreach ($message->attachments ?? [] as $index => $item)
                                                <a href="javascript:;" class="btn btn-sm btn-secondary mx-2"
                                                   data-kt-menu-trigger="click">
                                                    File {{ $index + 1 }}
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
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <div class="menu-item px-3">
                                                        <a target="_blank"
                                                           href="{{ asset('storage/tickets/' . $message->user_id . '/' . basename($item)) }}"
                                                           class="menu-link px-3">Show</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a download
                                                           href="{{ asset('storage/tickets/' . $message->user_id . '/' . basename($item)) }}"
                                                           class="menu-link px-3">Download</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-15">
                            <form id="frm" action="{{ route('admin.tickets.update',$ticket) }}" method="post">
                                @csrf
                                @method('patch')
                                <textarea
                                    class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7"
                                    rows="6" name="message" placeholder="Message ..."></textarea>
                                <button type="submit"
                                        class="btn btn-primary mt-n20 mb-20 position-relative float-end me-7">
                                    Send
                                </button>
                                <div class="w-200px mt-n20 mb-20 position-relative float-end me-7">
                                    <select
                                        class="form-select w-auto form-control-solid"
                                        data-kt-select2="true"
                                        data-placeholder="Select Status"
                                        name="status">
                                        @foreach (\App\Models\Ticket::$statusArray as $index => $item)
                                            <option value="{{ $index }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-scripts')
@stop
