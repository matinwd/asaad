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
    <section id="vApp">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.menus.update',$menu) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                @foreach (\App\Helper::activeLanguages() as $i => $lang)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $i == 0 ? "active" : "" }}"
                                           id="{{ $lang->code }}-lang-tab" data-toggle="pill"
                                           href="#{{ $lang->code }}_lang">
                                            <i class="flag-icon flag-icon-{{ $lang->flag }}"></i>
                                            {{ $lang->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @foreach (\App\Helper::activeLanguages() as $i => $lang)
                                    <div class="tab-pane {{ $i == 0 ? "active" : "" }}" id="{{ $lang->code }}_lang">
                                        <menu-items input-name="{{ $lang->code }}[items]" :current-items="{{ json_encode($menu->translateOrDefault($lang->code)->vue_items ?? []) }}">
                                        </menu-items>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">بروزرسانی</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
