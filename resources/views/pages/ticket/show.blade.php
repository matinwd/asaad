@extends('layouts.main',['activeMenu' => 4])

@section('title','Support Center / Ticket #' . $ticket->id)

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Back To Tickets</a>
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
                                <h1 class="text-gray-800 fw-bold">{{ $ticket->subject }}</h1>
                                <div class="">
                                    <span class="fw-bold me-6 badge badge-light-{{ $ticket->status_class }}">
                                        {{ $ticket->status_text }}
                                    </span>
                                    <span class="fw-bold me-6 badge badge-light">
                                        {{ $ticket->department->name }}
                                    </span>
                                    <span class="fw-bold me-6 badge badge-light">
                                        {{ $ticket->updated_at }}
                                    </span>
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
                                @php($isMyMessage = $message->user_id == auth()->id())
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
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-15">
                            <form id="frm" action="{{ route('tickets.update',$ticket) }}" method="post">
                                @csrf
                                @method('patch')
                                <textarea
                                    class="form-control form-control-solid placeholder-gray-600 fw-bolder fs-4 ps-9 pt-7"
                                    rows="6" name="message" placeholder="Message ..."></textarea>
                                <button type="submit"
                                        class="btn btn-primary mt-n20 mb-20 position-relative float-end me-7">
                                    Send
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @includeIf('pages.ticket._sidebar')
            </div>
        </div>
    </div>
@stop

@section('page-scripts')
    <script>
        window.scrollTo(0, document.querySelector("#frm").offsetTop);
    </script>
@stop
