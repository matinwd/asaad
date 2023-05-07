@extends('layouts.main',['activeMenu' => 2])

@section('title','Users / Create User')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.users.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">
                    <form id="kt_modal_add_user_form" class="form" method="post"
                          action="{{ route('admin.users.update',$user) }}">
                        @csrf
                        @method('put')
                        <div class="d-flex flex-column scroll-y me-n7 pe-7">

                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">First Name</label>
                                <input type="text" name="first_name"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="First Name" value="{{ old('first_name',$user->first_name) }}"/>
                                @error('first_name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Last Name</label>
                                <input type="text" name="last_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="Last Name" value="{{ old('last_name',$user->last_name) }}"/>
                                @error('last_name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Email</label>
                                <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="example@domain.com" value="{{ old('email',$user->email) }}"/>
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Password</label>
                                <input type="password" name="password"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="******" value="{{ old('password') }}"/>
                                @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
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
@stop
