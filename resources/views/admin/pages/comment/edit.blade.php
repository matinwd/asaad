@extends('layouts.main',['activeMenu' => 2])

@section('title','Comments / Create Comment')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.comments.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <form id="kt_modal_add_Comment_form" enctype="multipart/form-data" class="form" method="post"
          action="{{ route('admin.comments.update',$comment) }}">

    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">

                    @method('put')
                        @csrf
                        <div class="d-flex flex-column scroll-y me-n7 pe-7">

                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">User Name</label>
                                <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="User's Name.." value="{{ old('name',$comment->name) }}"/>
                                @error('en.description')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-bold fs-6 mb-2">Description</label>
                                <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="description" id="description" cols="30" rows="10">
                                                {{old('description',$comment->description)}}
                                            </textarea>
                                @error('description')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Comment Section:</label>
                                    <div class="nav-group nav-group-fluid">
                                        <label>
                                            <input {{ $comment->post_id ? '' : 'checked' }} onchange="checkCommentInput()" type="radio" name="comment_section" value="main" class="btn-check">
                                            <span class="btn btn-lg btn-color-muted btn-active btn-active-primary">Main Comment Section</span>
                                        </label>
                                        <label>
                                            <input  {{ $comment->post_id ? 'checked' : '' }}  onchange="checkCommentInput()" type="radio" name="comment_section" value="post" class="btn-check">
                                            <span class="btn btn-lg btn-color-muted btn-active btn-active-primary px-4">Post Comment</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="wrapper_post">
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Comment belongs to:</label>
                                    <select id="post_id" type="text" name="post_id"
                                            class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">>
                                        <option value="">Please select an option</option>
                                        @foreach($posts ?? [] as $post)
                                            <option value="{{$post->id}}">{{ $post->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="fv-row mb-7">
                                @foreach($comment->images ?? [] as $image)
                                    <img class="rounded w-100px" src="{{ url('storage/' . $image) }}" alt="">
                                @endforeach
                                    <br>
                                <label class="required fw-bold fs-6 mb-2">User Avatar Image</label>
                                <input type="file" name="images" class="form-control form-control-solid mb-3 mb-lg-0"/>
                                @error('images')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
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
    <script>
        function checkCommentInput(){
            if(document.querySelector('[name="comment_section"]:checked').value == "main"){
                document.getElementById('wrapper_post').classList.add('d-none')
                document.getElementById('post_id').value = ''
            }
            else {
                if(document.getElementById('wrapper_post').classList.contains('d-none')){
                    document.getElementById('wrapper_post').classList.remove('d-none')

                }
            }
        }

        checkCommentInput()
    </script>
@stop
