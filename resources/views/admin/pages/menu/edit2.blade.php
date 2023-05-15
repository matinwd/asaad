@extends('layouts.main',['activeMenu' => 2])

@section('title','Menus / Create Menu')

@section('page-styles')
@stop

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('admin.menus.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <div class="row g-6 g-xl-9">
        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
            @foreach(config('translatable.locales') as $key =>  $locale)
                <li class="nav-item p-1">
                    <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" href="#kt_tab_pane_{{$locale}}">{{ mb_strtoupper($locale) }}</a>
                </li>
            @endforeach
        </ul>

                                    <form id="kt_modal_add_menu_form" class="form" method="post"
                                          action="{{ route('admin.menus.update',$menu) }}">
        <div class="tab-content" id="myTabContent">

                                    @foreach(config('translatable.locales') as $key => $locale)

                <div class="tab-pane fade {{ $key == 0 ? 'active show' : '' }}" id="kt_tab_pane_{{ $locale }}" role="tabpanel">
                    <div class="row">
                        <div class="col-6">
                            <div class="card border-hover-primary">
                                <div class="card-body min-h-300px">
                                        @csrf
                                        @method('put')
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7">



                                            <div class="fv-row mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Name {{$locale}}</label>
                                                <input type="text" name="name"
                                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                                       placeholder="Url Name" value="{{ old('name',$menu->name) }}"/>
                                                @error('name')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fw-bold fs-6 mb-2">Url</label>
                                                <input type="text" name="url" class="form-control form-control-solid mb-3 mb-lg-0"
                                                       placeholder="Url.." value="{{ old('url',$menu->url) }}"/>
                                                @error('url')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="text-center pt-15">
                                            <button onclick="addMenu()" type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-hover-primary">
                                <div id="tree{{$locale}}" data-url="{{route('admin.menus.show',$menu->id)}}" class="card-body min-h-300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
                                        <div class="text-center pt-15">
                                            <button onclick="addMenu()" type="button" class="btn btn-primary">Submit</button>
                                        </div>
            </form>

        </div>
@stop

@section('page-scripts')
    <script src="{{ asset('assets/js/custom/tree.jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/jqtree.css')}}">
    <script>

        let langs  = ['en','de'];

        for (let i = 0; i < langs.length; i++){
            $('#tree' + langs[i]).tree({
                autoOpen: true,
                dragAndDrop: true,
                onCreateLi: function(node, $li) {
                    var $el = $li.find('.jqtree-element');

                    $el.html(
                        `
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-solid" type="text" value="${node.name}"/>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-solid" type="text" value="${node.url}"/>
                        </div>
                    </div>
                    `
                    );
                }
            });

        }



        function addMenu(){
            var $tree = $('#tree2').find('.jqtree-element');

            $tree.tree(
                'appendNode',
                {
                    name: document.getElementById('newName'),
                    id: 456
                },
            );
        }
    </script>

@stop

@section('page-styles')
    <style>
        ul.jqtree-tree .jqtree-title {
            color: #1c4257;
            vertical-align: middle;
            color: #fff !important;
            font-size: 20px !important;
        }

        ul.jqtree-tree .jqtree-toggler.jqtree-toggler-left {
            margin-right: 0.5em;
            color: #fff !important;
        }

        ul.jqtree-tree li.jqtree-selected > .jqtree-element, ul.jqtree-tree li.jqtree-selected > .jqtree-element:hover {
            border: 1px solid #e3e3e338;
            border-radius: 10px;
        }
    </style>
    @endsection
