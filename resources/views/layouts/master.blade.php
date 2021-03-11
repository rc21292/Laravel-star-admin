<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Laravel Admin Panel">
	<meta name="author" content="StarAdminLaravel">
	<meta name="keywords" content="staradmin, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.addons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/shared/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
</head>
<body>
	<div class="container-scroller">
		@include('partials.navbar')
		<div class="container-fluid page-body-wrapper">
			@include('partials.sidebar')
			<div class="main-panel">
				@yield('content')
				<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</div>
		</div>
	</div>
	@include('partials.script')
</body>