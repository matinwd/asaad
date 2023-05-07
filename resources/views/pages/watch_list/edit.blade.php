@extends('layouts.main',['activeMenu' => 2])

@section('title','Edit WatchList')

@section('actions')
    <div class="d-flex align-items-center py-3 py-md-1">
        <a href="{{ route('watchLists.index') }}" class="btn btn-custom btn-active-white btn-active-color-primary"
           id="kt_toolbar_primary_button">
            Back To List
        </a>
    </div>
@stop

@section('content')
    <div class="row g-6 g-xl-9">
        <div class="col-12">
            <div class="card border-hover-primary">
                <div class="card-body min-h-300px">
                    <form id="kt_modal_new_watchlist_form" class="form" method="post"
                          action="{{ route('watchLists.update',$watchList) }}">
                        @csrf
                        @method('patch')
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="fs-6 fw-bold mb-2">Name</label>
                            <input type="text" class="form-control form-control-solid" name="name"
                                   value="{{ old('name',$watchList->name) }}" autofocus>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="fs-6 fw-bold mb-2">Pairs</label>
                            <div class="input-group input-group-solid mb-5">
                                <input @click="openSearchBox" type="text" class="form-control cursor-pointer" readonly
                                       :value="selected_pairs.map(x => x.symbol)"/>
                                <div class="d-none">
                                    <input type="hidden" name="pairs[]" :value="pair.id" v-for="pair in selected_pairs">
                                </div>
                                <div class="input-group-text bg-success cursor-pointer">
                                    <a href="javascript:" data-bs-toggle="modal" data-bs-target="#kt_modal_pair_search"
                                       class="svg-icon svg-icon-white cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                  transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                  fill="currentColor"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="fs-6 fw-bold mb-2">Details (optical)</label>
                            <textarea class="form-control form-control-solid" rows="2"
                                      name="details">{{ old('details',$watchList->details) }}</textarea>
                        </div>
                        <div class="text-center">
                            <button type="reset" id="kt_frm_new_watchlist_cancel" class="btn btn-light me-3">
                                Cancel
                            </button>
                            <button type="submit" id="kt_frm_new_watchlist_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">
                                    Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kt_modal_pair_search" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <div class="modal-content rounded">
                <div class="modal-header p-0 pt-5 d-block">
                    <div class="justify-content-between d-flex px-5">
                        <h3>Pair Search</h3>
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <div class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                          rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="black"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="fv-row px-3 py-2" style="border-top : 1px solid #2B2B40">
                        <input id="txtbox-search" v-model="search_query" @keyUp="filterPairs" placeholder="Search"
                               class="form-control form-control-solid border-0 bg-transparent" type="text"
                               style="width:100%">
                    </div>
                </div>
                <div class="modal-body p-0 scroll-x">
                    <div id="pairs_box" class="min-h-400px">
                        <table class="table table-borderless table-hover table-striped">
                            <thead>
                            <tr class="text-gray-700">
                                <th class="px-5">Pair</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cursor-pointer" v-for="(pair,rIndex) in filter_pairs">
                                <td class="px-5 text-gray-800 text-hover-gray-900" @click="togglePair(pair)">
                                    <img class="rounded-circle w-30px me-3" alt="Pic" :src="pair.logo"/>
                                    @{{ pair.symbol }}
                                </td>
                                <td class="text-gray-800 text-hover-gray-900" @click="togglePair(pair)">
                                    @{{ pair.description }}
                                </td>
                                <td>
                                    <button v-if="selected_pairs.filter(x => x.id == pair.id).length == 0"
                                            class="btn btn-sm btn-secondary" @click="togglePair(pair)">
                                        <i class="fa fa-check"></i>
                                    </button>
                                    {{--                                    // "selected_pairs.filter(x => x.id == pair.id).length == 1"--}}
                                    {{--                                    "selected_pairs.filter(x => x.id == pair.id).length == 0"--}}

                                    <button v-if="selected_pairs.filter(x => x.id == pair.id).length == 1"
                                            class="btn btn-sm btn-secondary" @click="togglePair(pair)">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <button @click="clearSelectedPairs" type="button" class="btn btn-light me-3">Cancel</button>
                        <button data-bs-dismiss="modal" type="button" class="btn btn-primary">OK</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        mixins.push({
            data() {
                return {
                    search_query: null,
                    current_pairs: {!! json_encode($watchList->pairs->pluck('id')->toArray()) !!},
                    pairs_list: {!! json_encode($pairsList) !!},
                    filter_pairs: [],
                    selected_pairs: []
                }
            },
            methods: {
                filterPairs() {
                    this.filter_pairs = this.pairs_list.filter(item => {
                        let condition1 = (item.symbol.toUpperCase()).includes(this.search_query.toUpperCase());
                        let condition2 = (item.description.toUpperCase()).includes(this.search_query.toUpperCase());
                        return condition1 || condition2;
                    });
                },
                openSearchBox() {
                    $('#kt_modal_pair_search').modal('show');
                    $('#txtbox-search').focus();
                },
                togglePair(pair) {
                    if (this.selected_pairs.filter(item => item.id == pair.id).length == 0)
                        this.selected_pairs.push(pair);
                    else {
                        let index = this.selected_pairs.findIndex(item => item.id == pair.id);
                        this.selected_pairs.splice(index, 1);
                    }
                },
                clearSelectedPairs() {
                    this.selected_pairs = [];
                    $('#kt_modal_pair_search').modal('hide');
                }
            },
            created() {
                let thiz = this;

                this.filter_pairs = this.pairs_list;

                _.filter(this.pairs_list, function (item) {
                    return thiz.current_pairs.includes(item.id);
                }).forEach(function (item, index) {
                    thiz.selected_pairs.push(item);
                });
            }
        });
    </script>
@stop
@section('page-scripts')
    <script>
        $('#pairs_box').css('max-height', parseInt(window.outerHeight / 2));
    </script>
@stop
