@extends('layouts.main',['activeMenu' => 2])

@section('title','Categories / Create Category')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.questions.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <form id="kt_modal_add_question_form" enctype="multipart/form-data" class="form" method="post"
          action="{{ route('admin.questions.update',$question) }}">

    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">

                        @csrf
                    @method('put')
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
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Name (EN)</label>
                                            <input type="text" name="en[name]"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="Category Name" value="{{ old('en.name',$question->translate('en')->name) }}"/>
                                            @error('en.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Description (EN)</label>
                                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[description]" id="description" cols="30" rows="10">
                                                {{ old('en.description',$question->translate('en')->description) }}
                                            </textarea>
                                            @error('en.description')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Name (DE)</label>
                                            <input type="text" name="de[name]"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Category Name') }}" value="{{ old('de.name',$question->translate('de')->name) }}"/>
                                            @error('de.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Description (DE)</label>
                                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[description]" id="description" cols="30" rows="10">
                                                {{old('de.description',$question->translate('de')->description)}}
                                            </textarea>
                                            @error('de.description')
                                            <div class="invalid-feedback d-block">
                                                {{ str_replace('de.description','Dutch Description',$message) }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
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
    </div>
    </form>

@stop

@section('page-scripts')

@stop
