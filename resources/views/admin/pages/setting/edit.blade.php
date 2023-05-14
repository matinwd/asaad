@extends('layouts.main',['activeMenu' => 2])

@section('title','Sliders / Create Slider')

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.sliders.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')


    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
        <li class="nav-item p-1">
            <a class="nav-link  text-white active" data-bs-toggle="tab" href="#kt_tab_pane_1">Common Settings</a>
        </li>
        <li class="nav-item p-1">
            <a class="nav-link text-white " data-bs-toggle="tab" href="#kt_tab_pane_2">Menus Settings</a>
        </li>
        <li class="nav-item p-1">
            <a class="nav-link text-white " data-bs-toggle="tab" href="#kt_tab_pane_3">Pages Settings</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade active show" id="kt_tab_pane_1" role="tabpanel">
            <form id="kt_modal_add_slider_form" enctype="multipart/form-data" class="form" method="post"
                  action="{{ route('admin.settings.common') }}">


                <div class="row g-6 g-xl-9">
                    <div class="col-12">
                        <div class="card border-hover-primary">

                            <div class="card-body min-h-300px">




                                <div class="d-flex flex-column scroll-y me-n7 pe-7">
                                    <h3 class="text-right">
                                        Address and Details
                                    </h3>

                                    <div class="fv-row mb-7">


                                        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                            <li class="nav-item p-1">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_language_common_addresses_1">En</a>
                                            </li>
                                            <li class="nav-item p-1">
                                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_language_common_addresses_2">De</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="myTabCommonAddressLanguage">
                                            <div class="tab-pane fade active show" id="kt_tab_language_common_addresses_1" role="tabpanel">
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Title</label>
                                                    <input type="text" name="en[title]"
                                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                                           placeholder="{{ __('Title') }}" value="{{ old('en.title',$settings['title']->translate('en')->value) }}"/>
                                                    @error('en.title')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Description (EN)</label>
                                                    <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[description]" id="description" cols="30" rows="10">{{ old('en.description',$settings['description']->translate('en')->value) }}</textarea>
                                                    @error('en.description')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Address (EN)</label>
                                                    <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[address]" id="address" cols="30" rows="10">{{ old('en.address',$settings['address']->translate('en')->value) }}</textarea>
                                                    @error('en.address')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_tab_language_common_addresses_2" role="tabpanel">
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Title (DE)</label>
                                                    <input type="text" name="de[title]"
                                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                                           placeholder="{{ __('Title') }}" value="{{ old('de.title',$settings['title']->translate('de')->value) }}"/>
                                                    @error('de.title')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Description (DE)</label>
                                                    <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[description]" id="description" cols="30" rows="10">{{old('de.description',$settings['description']->translate('de')->value)}}</textarea>
                                                    @error('de.description')
                                                    <div class="invalid-feedback d-block">
                                                        {{ str_replace('de.description','Dutch Description',$message) }}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Address (DE)</label>
                                                    <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[address]" id="address" cols="30" rows="10">{{ old('de.address',$settings['address']->translate('de')->value) }}</textarea>
                                                    @error('de.address')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <hr>

                                    <h3 class="text-right mb-5">
                                        Contact ways
                                    </h3>

                                    <div class="row mb-7">
                                         <div class="col">
                                             <label class="required fw-bold fs-6 mb-2">Email</label>
                                             <input type="text" name="email"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="{{ __('Email') }}" value="{{ old('email',$settings['email']->value) }}"/>
                                             @error('email')
                                             <div class="invalid-feedback d-block">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                         </div>
                                         <div class="col">
                                             <label class="required fw-bold fs-6 mb-2">Mobile</label>
                                             <input type="text" name="mobile"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="{{ __('Mobile Phone Number') }}" value="{{ old('mobile',$settings['mobile']->value) }}"/>
                                             @error('mobile')
                                             <div class="invalid-feedback d-block">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                         </div>
                                    </div>
                                    <div class="row mb-7">
                                         <div class="col">
                                             <label class="required fw-bold fs-6 mb-2">Landline 1</label>
                                             <input type="text" name="landline"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="{{ __('Landline ') }}" value="{{ old('landline1',$settings['landline']->value) }}"/>
                                             @error('landline')
                                             <div class="invalid-feedback d-block">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                         </div>
                                        <div class="col">
                                            <label class="fw-bold fs-6 mb-2">Landline 2</label>
                                            <input type="text" name="landline2"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Landline 2') }}" value="{{ old('landline2',$settings['landline2']->value) }}"/>
                                            @error('landline2')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label class="required fw-bold fs-6 mb-2">Fax</label>
                                            <input type="text" name="fax"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Fax') }}" value="{{ old('fax',$settings['fax']->value) }}"/>
                                            @error('fax')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <hr>


                                    <h3 class="text-right  mb-5">
                                        Social Media
                                    </h3>

                                    <div class="row mb-7">
                                         <div class="col">
                                             <label class="required fw-bold fs-6 mb-2">Telegram</label>
                                             <input type="text" name="telegram"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="{{ __('Telegram ID') }}" value="{{ old('telegram',$settings['telegram']->value) }}"/>
                                             @error('telegram')
                                             <div class="invalid-feedback d-block">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                         </div>
                                         <div class="col">
                                             <label class="required fw-bold fs-6 mb-2">Instagram</label>
                                             <input type="text" name="instagram"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="{{ __('Mobile Phone Number') }}" value="{{ old('instagram',$settings['instagram']->value) }}"/>
                                             @error('instagram')
                                             <div class="invalid-feedback d-block">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                         </div>
                                    </div>
                                    <div class="row mb-7">
                                         <div class="col">
                                             <label class="required fw-bold fs-6 mb-2">Linked In</label>
                                             <input type="text" name="linkedin"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="{{ __('Linked In ID') }}" value="{{ old('linkedin',$settings['linkedin']->value) }}"/>
                                             @error('linkedin')
                                             <div class="invalid-feedback d-block">
                                                 {{ $message }}
                                             </div>
                                             @enderror
                                         </div>
                                        <div class="col">
                                            <label class="fw-bold fs-6 mb-2">Whatsapp</label>
                                            <input type="text" name="whatsapp"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Whatsapp') }}" value="{{ old('whatsapp',$settings['whatsapp']->value) }}"/>
                                            @error('whatsapp')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                      {{--  <div class="col">
                                            <label class="required fw-bold fs-6 mb-2">Twitter</label>
                                            <input type="text" name="twitter"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Twitter') }}" value="{{ old('twitter',$settings['twitter']->value) }}"/>
                                            @error('twitter')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>--}}
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
        </div>
        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
            <form id="kt_modal_add_slider_form" enctype="multipart/form-data" class="form" method="post"
                  action="{{ route('admin.settings.menus') }}">


                <div class="row g-6 g-xl-9">
                    <div class="col-12">
                        <div class="card border-hover-primary">
                            <div class="card-body min-h-300px">

                                @method('put')
                                @csrf


                                <div class="d-flex flex-column scroll-y me-n7 pe-7">


                                    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                        <li class="nav-item p-1">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_language_menus_1">En</a>
                                        </li>
                                        <li class="nav-item p-1">
                                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_language_menus_2">De</a>
                                        </li>
                                    </ul>


                                    <div class="tab-content" id="myTabCommonAddressLanguage">
                                        <div class="tab-pane fade active show" id="kt_tab_language_menus_1" role="tabpanel">
                                            @foreach($settings['menus']->translate('en')->value    as $key => $menu)

                                                @php($id = rand(100,1000000))
                                                <div class="row" id="menu{{$id}}">
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <input style="display: block" type="text" name="menu[{{$id}}][name]"
                                                                   class="form-control mb-3"
                                                                   placeholder="نام منو"
                                                                   value="{{ $menu->name }}"
                                                                   aria-label="Username">

                                                            @error('menu.'.$id.'.name')<p
                                                                class="error">{{ $errors->first('menu.'.$id.'.name') }}</p>@endif
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <input style="display: block" type="text" name="menu[{{$id}}][url]"
                                                                   class="form-control mb-3"
                                                                   placeholder="آدرس منو"
                                                                   value="{{ $menu->url }}"
                                                                   aria-label="Username">

                                                            @error('menu.'.$id.'.url')<p
                                                                class="error">{{ $errors->first('menu.'.$id.'.url') }}</p>@endif
                                                        </div>

                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <button class="btn btn-danger"
                                                                    onclick="removeMenu({{$id}})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_language_menus_2" role="tabpanel">
                                            @foreach(($settings['menus']->translate('de')->value)    as $key => $menu)

                                                @php($id = rand(100,1000000))
                                                <div class="row" id="menu{{$id}}">
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <input style="display: block" type="text" name="menu[{{$id}}][name]"
                                                                   class="form-control mb-3"
                                                                   placeholder="نام منو"
                                                                   value="{{ $menu->name }}"
                                                                   aria-label="Username">

                                                            @error('menu.'.$id.'.name')<p
                                                                class="error">{{ $errors->first('menu.'.$id.'.name') }}</p>@endif
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <input style="display: block" type="text" name="menu[{{$id}}][url]"
                                                                   class="form-control mb-3"
                                                                   placeholder="آدرس منو"
                                                                   value="{{ $menu->url }}"
                                                                   aria-label="Username">

                                                            @error('menu.'.$id.'.url')<p
                                                                class="error">{{ $errors->first('menu.'.$id.'.url') }}</p>@endif
                                                        </div>

                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <button class="btn btn-danger"
                                                                    onclick="removeMenu({{$id}})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>
                                            @endforeach
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
            </form>
        </div>
        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
            <form id="kt_modal_add_slider_form" enctype="multipart/form-data" class="form" method="post"
                  action="{{ route('admin.settings.pages') }}">


                <div class="row g-6 g-xl-9">
                    <div class="col-12">
                        <div class="card border-hover-primary">
                            <div class="card-body min-h-300px">

                                @method('put')
                                @csrf
                                <div class="d-flex flex-column scroll-y me-n7 pe-7">


                                    <!--begin::Accordion-->
                                    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                        <!--begin::Item-->
                                        <div class="mb-5">
                                            <!--begin::Header-->
                                            <div class="accordion-header py-3 d-flex" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1">
                                                <span class="accordion-icon">
                                                    <span class="svg-icon svg-icon-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
																	</svg>
                                                    </span>
                                                </span>
            <h3 class="fs-4 fw-bold mb-0 ms-4">{{ __('Contact page') }}</h3>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div id="kt_accordion_2_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#kt_accordion_2">
                                                <div class="fv-row mb-7">
                                                    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_about_language_pages_1">En</a>
                                                        </li>
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_about_language_pages_2">De</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content" id="myTabCommonAddressLanguage">
                                                        <div class="tab-pane fade active show" id="kt_tab_about_language_pages_1" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="en[contact][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('en.contact.title',($settings['contact']->translate('en')->value)->title) }}"/>
                                                                @error('en.contact.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Description (EN)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[contact][description]" id="en_contact_description" cols="30" rows="10">{{ old('en.contact.description',$settings['contact']->translate('en')->value)->description }}</textarea>
                                                                @error('en.contact.description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Form Title</label>
                                                                <input type="text" name="en[contact][form_title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('en.contact.form_title',($settings['contact']->translate('en')->value)->form_title) }}"/>
                                                                @error('en.contact.form_title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Form Description (EN)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[contact][form_description]" id="description" cols="30" rows="10">{{ old('en.contact.form_description',$settings['contact']->translate('en')->value)->form_description }}</textarea>
                                                                @error('en.contact.form_description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>


                                                        </div>
                                                        <div class="tab-pane fade" id="kt_tab_about_language_pages_2" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="de[contact][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('de.contact.title',($settings['contact']->translate('de')->value)->title) }}"/>
                                                                @error('de.contact.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Description (DE)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[contact][description]" id="en_contact_description" cols="30" rows="10">{{ old('de.contact.description',$settings['contact']->translate('de')->value)->description }}</textarea>
                                                                @error('de.contact.description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Form Title</label>
                                                                <input type="text" name="de[contact][form_title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('de.contact.form_title',($settings['contact']->translate('de')->value)->form_title) }}"/>
                                                                @error('de.contact.form_title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Form Description (DE)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[contact][form_description]" id="description" cols="30" rows="10">{{ old('de.contact.form_description',$settings['contact']->translate('de')->value)->form_description }}</textarea>
                                                                @error('de.contact.form_description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="required fw-bold fs-6 mb-2">Map Address link</label>
                                                    <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="contact[mapurl]" id="contact_mapurl" cols="30" rows="10">{{ old('contact.mapurl',$settings['contact']->value)->mapurl }}</textarea>
                                                    @error('contact.mapurl')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <img src="{{ storage_path($settings['contact']->value->header_image)  }}" alt="">
                                                    <label multiple="multiple" class="required fw-bold fs-6 mb-2">Header Image</label>
                                                    <input type="file"  name="images" class="form-control form-control-solid mb-3 mb-lg-0"
                                                           placeholder="example@domain.com" value="{{ old('images') }}"/>
                                                    @error('images')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="mb-5">
                                            <!--begin::Header-->
                                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_2">
                                                <span class="accordion-icon"><span class="svg-icon svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
																	</svg></span></span>
            <h3 class="fs-4 fw-bold mb-0 ms-4">{{ __('About Page') }}</h3>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div id="kt_accordion_2_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                                                <div class="fv-row mb-7">
                                                    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_contact_language_pages_1">En</a>
                                                        </li>
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_contact_language_pages_2">De</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content" id="myTabCommonAddressLanguage">
                                                        <div class="tab-pane fade active show" id="kt_tab_contact_language_pages_1" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="en[about][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('en.about.title',($settings['about']->translate('en')->value)->title) }}"/>
                                                                @error('en.about.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Description (EN)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[about][description]" id="en_contact_description" cols="30" rows="10">{{ old('en.about.description',$settings['about']->translate('en')->value)->description }}</textarea>
                                                                @error('en.about.description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Middle Title</label>
                                                                <input type="text" name="en[about][middle_title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('en.about.middle_title',($settings['about']->translate('en')->value)->middle_title) }}"/>
                                                                @error('en.about.middle_title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Middle Description (EN)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="en[about][middle_description]" id="description" cols="30" rows="10">{{ old('en.about.middle_description',$settings['about']->translate('en')->value)->middle_description }}</textarea>
                                                                @error('en.about.middle_description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>


                                                        </div>
                                                        <div class="tab-pane fade" id="kt_tab_contact_language_pages_2" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="de[about][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('de.about.title',($settings['about']->translate('de')->value)->title) }}"/>
                                                                @error('de.about.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Description (DE)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[about][description]" id="en_contact_description" cols="30" rows="10">{{ old('de.about.description',$settings['about']->translate('de')->value)->description }}</textarea>
                                                                @error('de.about.description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Middle Title (DE)</label>
                                                                <input type="text" name="de[about][middle_title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('de.about.middle_title',($settings['about']->translate('de')->value)->middle_title) }}"/>
                                                                @error('de.about.middle_title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Middle Description (DE)</label>
                                                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="de[about][middle_description]" id="description" cols="30" rows="10">{{ old('de.about.middle_description',$settings['about']->translate('de')->value)->middle_description }}</textarea>
                                                                @error('de.about.middle_description')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="fv-row mb-7">
                                                    <img src="{{ storage_path($settings['about']->value->header_image)  }}" alt="">
                                                    <label multiple="multiple" class="required fw-bold fs-6 mb-2">Header Image</label>
                                                    <input type="file"  name="about[header_image]" class="form-control form-control-solid mb-3 mb-lg-0"
                                                           placeholder="example@domain.com" value="{{ old('images') }}"/>
                                                    @error('images')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="fv-row mb-7">
                                                    <img src="{{ storage_path($settings['about']->value->middle_image)  }}" alt="">
                                                    <label multiple="multiple" class="required fw-bold fs-6 mb-2">Middle Image</label>
                                                    <input type="file"  name="about[middle_image]" class="form-control form-control-solid mb-3 mb-lg-0"
                                                           placeholder="example@domain.com" value="{{ old('images') }}"/>
                                                    @error('about.middle_image')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="mb-5">
                                            <!--begin::Header-->
                                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_4">
                                                <span class="accordion-icon"><span class="svg-icon svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
																	</svg></span></span>
            <h3 class="fs-4 fw-bold mb-0 ms-4">{{ __('Faq page') }}</h3>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div id="kt_accordion_2_item_4" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                                                <div class="fv-row mb-7">
                                                    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_products_language_pages_1">En</a>
                                                        </li>
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_products_language_pages_2">De</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content" id="myTabCommonAddressLanguage">
                                                        <div class="tab-pane fade active show" id="kt_tab_products_language_pages_1" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="en[faq][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('en.faq.title',($settings['faq']->translate('en')->value)->title) }}"/>
                                                                @error('en.faq.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>



                                                        </div>
                                                        <div class="tab-pane fade" id="kt_tab_products_language_pages_2" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="de[faq][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('de.faq.title',($settings['faq']->translate('de')->value)->title) }}"/>
                                                                @error('de.faq.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="fv-row mb-7">
                                                    <img src="{{ storage_path($settings['faq']->value->header_image)  }}" alt="">
                                                    <label multiple="multiple" class="required fw-bold fs-6 mb-2">Header Image</label>
                                                    <input type="file"  name="faq[header_image]" class="form-control form-control-solid mb-3 mb-lg-0"
                                                           placeholder="example@domain.com" value="{{ old('images') }}"/>
                                                    @error('images')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-5">
                                            <!--begin::Header-->
                                            <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_3">
                                                <span class="accordion-icon"><span class="svg-icon svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																		<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
																	</svg></span></span>
            <h3 class="fs-4 fw-bold mb-0 ms-4">{{ __('Products page') }}</h3>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div id="kt_accordion_2_item_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                                                <div class="fv-row mb-7">
                                                    <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_products_language_pages_1">En</a>
                                                        </li>
                                                        <li class="nav-item p-1">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_products_language_pages_2">De</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content" id="myTabCommonAddressLanguage">
                                                        <div class="tab-pane fade active show" id="kt_tab_products_language_pages_1" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="en[products][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('en.products.title',($settings['products']->translate('en')->value)->title) }}"/>
                                                                @error('en.products.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>



                                                        </div>
                                                        <div class="tab-pane fade" id="kt_tab_products_language_pages_2" role="tabpanel">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-bold fs-6 mb-2">Page Title</label>
                                                                <input type="text" name="de[products][title]"
                                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                                       placeholder="{{ __('Title') }}" value="{{ old('de.products.title',($settings['products']->translate('de')->value)->title) }}"/>
                                                                @error('de.products.title')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="fv-row mb-7">
                                                    <img src="{{ storage_path($settings['products']->value->header_image)  }}" alt="">
                                                    <label multiple="multiple" class="required fw-bold fs-6 mb-2">Header Image</label>
                                                    <input type="file"  name="products[header_image]" class="form-control form-control-solid mb-3 mb-lg-0"
                                                           placeholder="example@domain.com" value="{{ old('images') }}"/>
                                                    @error('images')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Accordion-->




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


        </div>
    </div>





@stop


@section('page-scripts')
        <script>
        function removeMenu(id){
            document.getElementById('menu' + id).remove();
        }

        function randomIntFromInterval(min, max) { // min and max included
            return Math.floor(Math.random() * (max - min + 1) + min)
        }


        function addMenu(){
            let id = randomIntFromInterval(100,1000000);
            document.getElementById('menusRow').innerHTML += `<div class="row" id="menu${id}">
                                                    <div class="col-4">
                                                        <div class="mb-3">
                                                            <input style="display: block" type="text" name="menu[${id}][name]" class="form-control mb-3" placeholder="نام منو" value="" aria-label="Username">

                                                                                                                    </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <input style="display: block" type="text" name="menu[${id}][url]" class="form-control mb-3" placeholder="آدرس منو" value="" aria-label="Username">

                                                                                                                    </div>

                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mb-3">
                                                            <button class="btn btn-danger" onclick="removeMenu(860070)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                            </button>
                                                        </div>

                                                    </div>

                                                </div>`;
        }

    </script>
    @endsection
