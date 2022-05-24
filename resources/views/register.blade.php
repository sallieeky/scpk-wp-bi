<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="{{ asset("template") }}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset("template") }}/css/datepicker3.css" rel="stylesheet">
	<link href="{{ asset("template") }}/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ asset("template") }}/js/html5shiv.js"></script>
	<script src="{{ asset("template") }}/js/respond.min.js"></script>
	<![endif]-->

	<style>
		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		/* Firefox */
		input[type=number] {
			-moz-appearance: textfield;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row ">
			<div class="col-xs-12 col-sm-12 col-md-12 ">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Buat akun anda terlebih dahulu</div>
					<div class="panel-body">
						<form role="form" action="/register" method="POST">
						@csrf
							<div class="row">
								<div class="col-md-4">
										<div class="form-group">
											<label>Nama</label>
											<input class="form-control" placeholder="Nama" name="nama" type="text" autofocus>
										</div>
								</div>
								<div class="col-md-4">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" placeholder="E-mail" name="email" type="email">
										</div>
								</div>
								<div class="col-md-4">
										<div class="form-group">
											<label>Password</label>
											<input class="form-control" placeholder="Password" name="password" type="password">
										</div>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>IPK</label>
										<input class="form-control" placeholder="IPK" name="ipk" type="text">
									</div>
									<div class="form-group">
										<label>Jumlah Saudara Kandung</label>
										<input class="form-control" placeholder="Jumlah Saudara Kandung" name="jml_tanggungan" type="number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>UKT</label>
										<input class="form-control" placeholder="UKT" name="ukt" type="number">
									</div>
									<div class="form-group">
										<label>Penghasilan Orang Tua</label>
										<input class="form-control" placeholder="Penghasilan Orang Tua" name="penghasilan_ortu" type="number">
									</div>
								</div>
							</div>
							<button class="btn btn-primary">Daftar</button>
							<a href="/login" class="btn btn-outline-primary pull-right">Sudah memiliki akun?</a>

						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->	
	</div>
	

<script src="{{ asset("template") }}/js/jquery-1.11.1.min.js"></script>
	<script src="{{ asset("template") }}/js/bootstrap.min.js"></script>
</body>
</html>
