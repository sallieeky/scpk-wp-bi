<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beasiswa Bank Indonesia</title>
	<link href="{{ asset("template") }}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset("template") }}/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ asset("template") }}/css/datepicker3.css" rel="stylesheet">
	<link href="{{ asset("template") }}/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="{{ asset("template") }}/https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ asset("template") }}/js/html5shiv.js"></script>
	<script src="{{ asset("template") }}/js/respond.min.js"></script>
	<![endif]-->

	@yield('css')
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/">Beasiswa<span> Bank Indonesia</span></a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{ Auth::user()->nama }}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="/"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			@if(Auth::user()->role == "admin")
				<li><a href="/kelola-akun"><em class="fa fa-user"></em> Kelola Akun</a></li>
			@endif
			<li><a href="/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ asset("template") }}/#">
					<em class="fa fa-home"></em>
				</a></li>
			</ol>
		</div><!--/.row-->
    
    @yield("content")

	</div>	<!--/.main-->


  
	<script src="{{ asset("template") }}/js/jquery-1.11.1.min.js"></script>
	<script src="{{ asset("template") }}/js/bootstrap.min.js"></script>
	<script src="{{ asset("template") }}/js/chart.min.js"></script>
	<script src="{{ asset("template") }}/js/chart-data.js"></script>
	<script src="{{ asset("template") }}/js/easypiechart.js"></script>
	<script src="{{ asset("template") }}/js/easypiechart-data.js"></script>
	<script src="{{ asset("template") }}/js/bootstrap-datepicker.js"></script>
	<script src="{{ asset("template") }}/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
	@yield('script')
</body>
</html>