<script>var hostUrl = "{{ asset('assets') }}/";</script>

<script>
    let mixins = [];
    let useVue = false;
</script>

@yield('scripts')

@if(config('app.debug'))
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
@else
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
@endif

<script src="{{ mix('static/js/app.js') }}"></script>
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

@yield('page-scripts')

@include('flash::message')
