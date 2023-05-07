@extends('layouts.main',['activeMenu' => 10])


@section('title','Send Notification')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.pairs.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">
                    <form id="kt_modal_add_user_form" class="form" enctype="multipart/form-data" method="post"
                          action="{{ route('admin.notification.store') }}">
                        @csrf
                        <div class="d-flex flex-column scroll-y me-n7 pe-7">

                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Title</label>
                                <input type="text" name="title"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="Title of message" value="{{ old('title') }}"/>
                                @error('title')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="fv-row mb-7">
                                <label for="text" class="fw-bold fs-6 mb-2 required">Text</label>
                                <textarea name="text" id="text" class="form-control form-control-solid mb-3 mb-lg-0">
                                    {{ old('text') }}
                                </textarea>
                                @error('text')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="row">
                                <div class="d-flex flex-stack mb-8">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="fs-6 fw-bold">Send to all users</label>
                                        <div class="fs-7 fw-bold text-muted">If you check this button, your notification will send to all users</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input name="allUsers" onchange="toggleUsersBox()" class="form-check-input" id="allUsers" type="checkbox" value="1" checked="checked">
                                    </label>
                                    <!--end::Switch-->
                                </div>
                            </div>
                            <div class="row" id="usersRow">

                                <div class="d-flex flex-column mb-8 col-md-12">
                                    <label for="users"  class="required fs-6 fw-bold mb-2">Users to send</label>
                                    <select id="users" multiple class="form-select form-select-solid" data-kt-select2="true" data-control="select2"
                                            data-placeholder="Select a User" data-allow-clear="true"
                                            name="users">
                                        <option></option>
                                        @foreach ($users ?? [] as $dIndex => $user)
                                            <option
                                                {{ old('users',request('users')) == $user->id ? 'selected' : null }} value="{{ $user->id }}">{{ $user->full_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('users')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>


                        </div>
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page-scripts')
    <script>
        function toggleUsersBox(){
            if(document.getElementById('allUsers').checked){
                document.getElementById('usersRow').classList.add('d-none')
                return;
            }
            if(document.getElementById('usersRow').classList.contains('d-none')) {
                document.getElementById('usersRow').classList.remove('d-none')
            }


        }

        toggleUsersBox()
    </script>
@stop
