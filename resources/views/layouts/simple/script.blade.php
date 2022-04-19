<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- Bootstrap js-->

<script src="{{asset('assets/js/bootstrap5/js/bootstrap.bundle.min.js')}}"></script>


<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script id="menu" src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
@livewireScripts
@powerGridScripts
@yield('script')
@yield('after_script')
@stack('chart_script')
@if(Route::current()->getName() != 'popover') 
	<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endif

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
{{--<script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>--}}


{{-- @if(Route::current()->getName() == 'index') 
	<script src="{{asset('assets/js/layout-change.js')}}"></script>
@endif --}}