<!DOCTYPE html>
<html lang="en">

<head>
	@include('includes.head')
</head>

<body id="root">
	<div class="page-wraper">
		{{-- <div id="loading-icon-bx"></div> --}}
		<!-- Header Top ==== -->
		@include('includes.nav')
		<!-- Header Top END ==== -->
		<!-- Content -->
		@yield('page_content')
		<!-- Content END-->
		<!-- Footer ==== -->
		@include('includes.foot')
		<!-- Footer END ==== -->
	</div>

	@if (env('APP_ENV') == 'local')
		<script async id="__bs_script__" src="https://localhost:12719/browser-sync/browser-sync-client.js?v=2.26.10"></script>
	@endif
	{{-- yaw owusu class 3 owop, class test --}}
</body>

</html>
