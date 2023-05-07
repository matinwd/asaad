@extends('layouts.main',['activeMenu' => 2])

@section('title','Products / Create Product')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.products.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <form id="kt_modal_add_product_form" enctype="multipart/form-data" class="form" method="post"
          action="{{ route('admin.products.store') }}">
    <div class="modal fade" id="kt_modal_new_address" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->

{{--                <form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="kt_modal_new_address_form">--}}
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_new_address_header">
                        <!--begin::Modal title-->
                        <h2>Add discount or Special Price Period</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
														</svg>
													</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px" style="max-height: 222px;">
                            <!--begin::Notice-->
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-info rounded border-warning border border-dashed mb-9 p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-dark me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
															</svg>
														</span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">Info</h4>
                                        <div class="fs-6 text-gray-700">Here, You can add Discount or Any Special Price</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--end::Notice-->
                            <!--begin::Input group-->
                            <div class="row mb-5">
                                <!--begin::Col-->
                                <div class="col-md-12 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold mb-2">Discount</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="17.00" name="discount">
                                    @error('discount')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="row">
                                    <div class="mb-10">
                                        <label class="form-label fw-bold">Discount Status :</label>
                                        @error('discount_type')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                        <div class="nav-group nav-group-fluid">
                                            <label>
                                                <input type="radio" name="discount_type" value="fixed" class="btn-check">
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Fixed</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="discount_type" value="percent" class="btn-check">
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Percent</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <hr>
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-md-12 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold mb-2">Special Price</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="" name="special_price">
                                    @error('special_price')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="row">
                                    <div class="mb-10">
                                        <label class="form-label fw-bold">Special Price Status :</label>
                                        <div class="nav-group nav-group-fluid">
                                            <label>
                                                <input type="radio" name="special_price_type" value="fixed" class="btn-check">
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Fixed</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="special_price_type" value="percent" class="btn-check">
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Percent</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-5">

                                <div class="row">
                                    <div class="d-flex flex-column mb-8 col-md-6">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="">Special Price Start Date</span>
                                        </label>
                                        <input type="date" name="special_price_start" value="" class="form-control form-control-solid">
                                    </div>
                                    <div class="d-flex flex-column mb-8 col-md-6">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="">Special Price End Date</span>
                                        </label>
                                        <input type="date" name="special_price_end" value="" class="form-control form-control-solid">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="button" id="kt_modal_new_address_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                    <div></div>
                <!--end::Form-->
            </div>
        </div>
    </div>
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
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Name (EN)</label>
                                            <input type="text" name="en[name]"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="Product Name" value="{{ old('en.name') }}"/>
                                            @error('en.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Description (EN)</label>
                                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[description]" id="description" cols="30" rows="10">
                                                {{ old('en.description') }}
                                            </textarea>
                                            @error('en.description')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="fw-bold fs-6 mb-2">Return Policy (EN)</label>
                                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[return_policy]" id="return_policy" cols="30" rows="10">
                                                                                                {{ old('en.return_policy') }}
                                            </textarea>
                                            @error('en.return_policy')
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
                                                   placeholder="{{ __('Product Name') }}" value="{{ old('de.name') }}"/>
                                            @error('de.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Description (DE)</label>
                                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[description]" id="description" cols="30" rows="10">
                                                {{old('de.description')}}
                                            </textarea>
                                            @error('de.description')
                                            <div class="invalid-feedback d-block">
                                                {{ str_replace('de.description','Dutch Description',$message) }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="fw-bold fs-6 mb-2">Return Policy (DE)</label>
                                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[return_policy]" id="return_policy" cols="30" rows="10">
                                                                                                {{old('de.return_policy')}}
                                            </textarea>
                                            @error('de.return_policy')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row mb-7">
                            <div class="col">
                                <label class="required fw-bold fs-6 mb-2">Slug</label>
                                <input type="text" name="slug"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="the-post-slug-for-url" value="{{ old('slug') }}"/>
                                @error('slug')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                                <div class="col">
                                    <label class="required fw-bold fs-6 mb-2">Tags (Separate with comma)</label>
                                    <input type="text" name="tags" class="form-control form-control-solid mb-3 mb-lg-0"
                                           placeholder="hygienic,treatment" value="{{ old('tags') }}"/>
                                    @error('tags')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="fv-row mb-7">
                                <label multiple="multiple" class="required fw-bold fs-6 mb-2">Images</label>
                                <input type="file"  multiple name="images[]" class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="example@domain.com" value="{{ old('images') }}"/>
                                @error('images')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Price Status :</label>
                                    <div class="nav-group nav-group-fluid">
                                        <label>
                                            <input onchange="checkPriceInput()" type="radio" name="price_status" value="0" class="btn-check">
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Coming Soon</span>
                                        </label>
                                        <label>
                                            <input  onchange="checkPriceInput()" type="radio" name="price_status" value="1" checked class="btn-check">
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Normal</span>
                                        </label>
                                        <label>
                                            <input  onchange="checkPriceInput()" type="radio" name="price_status" value="2" class="btn-check">
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Call</span>
                                        </label>
                                        <label>
                                            <input  onchange="checkPriceInput()" type="radio" name="price_status" value="3" class="btn-check">
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Stop Build</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="fv-row mb-7" id="price_wrapper">
                                <label class="fw-bold fs-6 mb-2">Price - <a href="#" class="" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Add Discount</a></label>
                                <input type="text" name="price"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="180.00 USD" value="{{ old('price') }}"/>
                                @error('price')
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
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Visible</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="visibility" value="0" class="btn-check">
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Hidden</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fv-row mb-7" id="price_wrapper">
                                <label class="fw-bold fs-6 mb-2">Categories</label>
                                <select type="text" name="categories[]" multiple
                                        class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">>
                                    <option value="">Please select an option</option>
                                    @foreach($categories ?? [] as $category)
                                        <option value="{{$category->id}}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('price')
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

@section('page-scripts')


    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <script src="assets/plugins/global/plugins.bundle.js"></script>


    <script>


            function checkPriceInput(){
            if(document.querySelector('[name="price_status"]:checked').value != 1){
                document.getElementById('price_wrapper').classList.add('d-none')
                document.getElementById('price_wrapper').value = '';
            }
            else {
                if( document.getElementById('price_wrapper').classList.contains('d-none')) {
                    document.getElementById('price_wrapper').classList.remove('d-none')
                }
            }
        }
         checkPriceInput();

    </script>
@stop
