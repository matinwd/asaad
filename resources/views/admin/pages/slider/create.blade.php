@extends('layouts.main',['activeMenu' => 2])

@section('title','Sliders / Create Slider')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.sliders.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <form id="kt_modal_add_slider_form" enctype="multipart/form-data" class="form" method="post"
          action="{{ route('admin.sliders.store') }}">

    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">

                        @csrf
                        <div class="d-flex flex-column scroll-y me-n7 pe-7">

                            <div class="fv-row mb-7">


                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                    <li class="nav-item p-1">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">En</a>
                                    </li>
                                    <li class="nav-item p-1">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">De</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="kt_tab_pane_1" role="tabpanel">
                                        <div class="fv-row">
                                            <label class="required fw-bold fs-6 mb-2">Name (EN)</label>
                                            <input type="text" name="en[name]"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="Slider Name" value="{{ old('en.name') }}"/>
                                            @error('en.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                        <div class="fv-row">
                                            <label class="required fw-bold fs-6 mb-2">Name (DE)</label>
                                            <input type="text" name="de[name]"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Slider Name') }}" value="{{ old('de.name') }}"/>
                                            @error('de.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>


                                    </div>
                                </div>


                            </div>

                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Images</label>
                                <input type="file" name="images" class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="example@domain.com" value="{{ old('images') }}"/>
                                @error('images')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="fv-row mb-7">
                                <div class="row">
                                    <div class="mb-10">
                                        <label class="required form-label fw-bold">Visibility Status :</label>
                                        <div class="nav-group nav-group-fluid">
                                            <label class="">
                                                <input checked type="radio" name="visibility" value="1" class="btn-check">
                                                <span class="btn btn-lg btn-color-muted btn-active btn-active-primary">Visible</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="visibility" value="0" class="btn-check">
                                                <span class="btn btn-lg btn-color-muted btn-active btn-active-warning px-4">Hidden</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fv-row">
                                <label class="required fw-bold fs-6 mb-2">Order (position)</label>
                                <input type="text" name="order"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="{{ __('Slider Position') }}" value="{{ old('order') }}"/>
                                @error('order')
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
                </div>
            </div>
        </div>
    </div>
    </form>

@stop
