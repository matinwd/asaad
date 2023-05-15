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
                    <form action="{{ route('cms.menus.update',$menu) }}" method="post">
                        @csrf
                        @method('patch')
                                <ul class="nav nav-pills">
                                    @foreach (\App\Helpers\Helper::activeLanguages() as $i => $lang)
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
                                    @foreach (\App\Helpers\Helper::activeLanguages() as $i => $lang)
                                        <div class="tab-pane {{ $i == 0 ? "active" : "" }}" id="{{ $lang->code }}_lang">
                                            <menu-items input-name="{{ $lang->code }}[items]" :current-items="{{ json_encode($menu->translateOrDefault($lang->code)->vue_items ?? []) }}">
                                            </menu-items>
                                        </div>
                                    @endforeach
                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">بروزرسانی</button>
                            </div>
                    </form>
                </div>
        </div>
        </div>
    </div>
@stop

@section('page-scripts')
    <script src="{{ asset('assets/css/tree.jquery.js') }}"></script>
@stop
