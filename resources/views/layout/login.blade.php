<!DOCTYPE html>
<html>
<head>
	<title>Sayembara Desain</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
		body {
			background: url(/img/bg.jpg) no-repeat center top;
		}
		.w3-input {
			margin-top: 30px;
		}
		.w3-btn {
			margin-top: 30px;
		}
		p {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="w3-container" style="padding:20px" id="team">
		<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
			<div class="w3-col l4 m6 w3-margin-bottom"></div>

			<div class="w3-col l4 m6 w3-margin-bottom">	
				<img src="/img/logo.png" width="100%" top>
				<form method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
		  			<input class="w3-input" type="text" placeholder="E-Mail" name="email" value="{{ old('email') }}"></p>
		  			<input class="w3-input" type="password" placeholder="Password" name="password" value="{{ old('password') }}"></p>
		  			<label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
		  			<p>Belum mempunyai akun? <a href="register">Klik Disini</a></p>
		  			<input class="w3-btn w3-black w3-block" type="submit" name="btnLogin" value="Login">
				</form>
			</div>

			<div class="w3-col l4 m6 w3-margin-bottom"></div>
		</div>
	</div>
</body>
</html>