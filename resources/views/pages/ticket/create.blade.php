@extends('layouts.main',['activeMenu' => 4])

@section('title','Support Center / Create Ticket')

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Back To Tickets</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form class="form" method="post" action="{{ route('tickets.store') }}">
                @csrf
                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Subject</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                           title="Specify a subject for your issue"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid"
                           placeholder="Enter your ticket subject" name="subject" value="{{ old('subject') }}"/>
                    @error('subject')
                    <div class="invalid-feedback d-block">
                        {{ $error }}
                    </div>
                    @enderror
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="required fs-6 fw-bold mb-2">Department</label>
                    <select class="form-select form-select-solid" data-control="select2"
                            data-hide-search="true" data-placeholder="Select a Department"
                            name="department_id">
                        <option disabled selected>Select a department...</option>
                        @foreach ($departmentns as $dIndex => $department)
                            <option
                                {{ old('department_id') == $department->id ? 'selected' : null }} value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                    <div class="invalid-feedback d-block">
                        {{ $error }}
                    </div>
                    @enderror
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="required fs-6 fw-bold mb-2">Description</label>
                    <textarea class="form-control form-control-solid" rows="2" name="description"
                              placeholder="Type your ticket description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-block">
                        {{ $error }}
                    </div>
                    @enderror
                </div>
                <div class="fv-row mb-8">
                    <label class="fs-6 fw-bold mb-2">Attachments</label>
                    <div class="dropzone" id="kt_ticket_attachments">
                        <div class="dz-message needsclick align-items-center">
                            <div class="svg-icon svg-icon-3hx svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                     height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
                                          fill="black"/>
                                    <path
                                        d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
                                        fill="black"/>
                                    <path
                                        d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
                                        fill="black"/>
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                          fill="black"/>
                                </svg>
                            </div>
                            <div class="ms-4">
                                <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to
                                    upload.</h3>
                                <span class="fw-bold fs-7 text-gray-400">Upload up to 10 files</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="reset" class="btn btn-light me-3">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('page-scripts')
    {{--    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>--}}
    <script src="{{ asset('assets/js/custom/apps/support-center/tickets/create.js') }}"></script>
@stop
