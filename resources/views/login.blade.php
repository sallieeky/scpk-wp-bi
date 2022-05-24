<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beasiswa Bank Indonesia - Login</title>
	<link href="{{ asset("template") }}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset("template") }}/css/datepicker3.css" rel="stylesheet">
	<link href="{{ asset("template") }}/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ asset("template") }}/js/html5shiv.js"></script>
	<script src="{{ asset("template") }}/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="/login" method="POST">
            @csrf
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password">
							</div>
              @if(session("error"))
              <div class="alert bg-danger mt-3">
                {{ session("error") }}
              </div>
              @endif
							<button type="submit" class="btn btn-primary">Login</button>
							<a href="/register" class="btn btn-outline-primary pull-right">Belum memiliki akun?</a>
            </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="{{ asset("template") }}/js/jquery-1.11.1.min.js"></script>
	<script src="{{ asset("template") }}/js/bootstrap.min.js"></script>
</body>
</html>
