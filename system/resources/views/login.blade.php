<!DOCTYPE html>
<html>
<head>
	<title>Login || Sign Up Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body id="bg-login">
	<div class="log-1">
		<h2>Masuk</h2><hr>
			<form action="" method="POST">
				<label>E-mail</label>
				<input type="text" name="user" placeholder="Username" class="input-control">
				<label>Password</label>
				<input type="password" name="pass" placeholder="Password" class="input-control">
				<div class="tombol">
					<button class="btn"><a href="{{url('beranda')}}">Masuk</a></button>
				</div>
				<div class="sign">
				Belum Punya akun? <a href="{{url('signup')}}">Daftar</a>
				</div>

			</form>
	</div>
</body>