@extends('layouts.main',['activeMenu' => 2])

@section('title','Posts / Create Post')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <form id="kt_modal_add_post_form" enctype="multipart/form-data" class="form" method="post"
          action="{{ route('admin.posts.update',$post) }}">

    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">

                    @method('put')
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
                                                   placeholder="Post Name" value="{{ old('en.name',$post->translate('en')->name) }}"/>
                                            @error('en.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Description (EN)</label>
                                            <textarea class="form-control description-textarea form-control-solid mb-3 mb-lg-0" name="en[description]" id="description" cols="30" rows="10">
                                                {{ old('en.description',$post->translate('en')->description) }}
                                            </textarea>
                                            @error('en.description')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Tags (EN)</label>
                                            <input type="text" name="en[tags]"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Tags (Separate each tag with (,)) ') }}" value="{{ old('en.tags',$post->translate('en')->tags) }}"/>
                                            @error('en.tags')
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
                                                   placeholder="{{ __('Post Name') }}" value="{{ old('de.name',$post->translate('de')->name) }}"/>
                                            @error('de.name')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Description (DE)</label>
                                            <textarea class="form-control description-textarea form-control-solid mb-3 mb-lg-0" name="de[description]" id="description" cols="30" rows="10">
                                                {{old('de.description',$post->translate('de')->description) }}
                                            </textarea>
                                            @error('de.description')
                                            <div class="invalid-feedback d-block">
                                                {{ str_replace('de.description','Dutch Description',$message) }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="fv-row mb-7">
                                            <label class="required fw-bold fs-6 mb-2">Tags (DE)</label>
                                            <input type="text" name="de[tags]"
                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                   placeholder="{{ __('Tags (Separate each tag with (,))') }}" value="{{ old('de.tags',$post->translate('de')->tags) }}"/>
                                            @error('de.tags')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <hr>
                            <div class="row mb-7">
                            <div class="col">
                                <label class="required fw-bold fs-6 mb-2">Slug</label>
                                <input type="text" name="slug"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="the-post-slug-for-url" value="{{ old('slug',$post->slug) }}"/>
                                @error('slug')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            </div>

                            <div class="fv-row mb-7">
                                @foreach($post->images ?? [] as $image)
                                    <img class="w-100px rounded" src="{{ url('storage/' . $image) }}" alt="">
                                    @endforeach
                                    <br>
                                <label multiple="multiple" class="required fw-bold fs-6 mb-2">Images</label>
                                <input type="file"  multiple name="images[]" class="form-control form-control-solid mb-3 mb-lg-0"
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
                                                <input {{$post->visibility == 1 ? 'checked' : ''}} type="radio" name="visibility" value="1" class="btn-check">
                                                <span class="btn btn-lg btn-color-muted btn-active btn-active-primary">Visible</span>
                                            </label>

                                            <label>
                                                <input {{$post->visibility == 0 ? 'checked' : ''}}  type="radio" name="visibility" value="0" class="btn-check">
                                                <span class="btn btn-lg btn-color-muted btn-active btn-active-warning px-4">Hidden</span>
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
                                    <!-- todo | any catable model can have many cats so you have to check if multiple cats are selected -->
                                    @foreach($categories ?? [] as $category)
                                        <option {{  $post->categories()->contain($category->id)  ? 'checked' : '' }} value="{{$category->id}}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('categories')
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

    <script src="{{ asset("assets/plugins/custom/tinymce/tinymce.bundle.js") }}"></script>


    <script>


        tinymce.init({
            relative_urls: false,
            remove_script_host: false,
            skin: "oxide-dark",
            content_css : "dark",
            image_title: true,
            automatic_uploads: true,
            images_upload_url: "{{ url('admin/file-upload') }}",
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {title: file.name});
                    };
                };
                input.click();
            },
            selector: "textarea.description-textarea:not(.select2-search__field)",
            plugins: 'image emoticons textcolor link media lists table',
            menubar: 'insert',
            // heading_clear_tag : "p",
            // theme_advanced_buttons1_add_before : "h1,h2,h3,h4,h5,h6,separator",
            height: 750,
            toolbar: 'image anchor visualblocks heading | alignleft aligncenter alignright alignjustify | p h1 h2 h3 h4 h5 h6php  | emoticons ltr rtl forecolor backcolor undo redo | bold italic underline | code media link numlist bullist table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol'
        });
    </script>


@stop
