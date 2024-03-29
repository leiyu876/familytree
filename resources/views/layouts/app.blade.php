<!DOCTYPE html>
<html>
	<head>
	  	<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<title>AdminLTE 2 | Blank Page</title>
	 	 <!-- Tell the browser to be responsive to screen width -->
	  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  
	  	<link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	  	<link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
	  	<link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
	  	<link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
	  	<link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css') }}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">

		@yield('content')

	<script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
	<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
	<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
	<script>
	 	$(document).ready(function () {
	    	$('.sidebar-menu').tree()
	  	})
	</script>
	</body>
</html>
