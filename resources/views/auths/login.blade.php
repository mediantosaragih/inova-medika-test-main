<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body style="background-color:#CDCDCD"  >
	<!-- WRAPPER -->
	<div id="wrapper" >
		<div class="vertical-align-wrap" >
			<div class="vertical-align-middle" >
				<div class="auth-box "style="border-radius:50px;">
					<div class="left">
						<div class="content" >
							<div class="header">
								<div class="logo text-center"></div>
								<h1 style="size:12px;">Login</h1>
							</div>
							<form class="form-auth-small" action="/postlogin" method="POST" >
                                  {{csrf_field()}}
                                  <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email" type="email" class="form-control" id="signin-email" style="border-radius: 100px" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" style="border-radius: 100px" id="signin-password" placeholder="Password">
								</div>
								<div class="form-group clearfix">

								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius: 100px; background-color:#145285">LOGIN</button>
								<div class="card-footer">

                    <p class="text-center">Belum punya akun? <a href="{{route('register') }}">Register</a> sekarang!</p>
                </div>
							</form>

						</div>
					</div>
					<div class="right"  style="background-color:#145285; border-radius:50px" >
						<div class="content text" >
							<center><h1 class="heading">PT. Inova Medika Solusindo</h1></center>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
