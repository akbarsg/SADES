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
		.w3-radio {
			margin: 10px;
		}
		p {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="w3-container" style="padding:20px">
		<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
			<div class="w3-col l4 m6 w3-margin-bottom"></div>

			<div class="w3-col l4 m6 w3-margin-bottom">	
				<img src="/img/logo.png" width="100%" top>
				<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
		  			<input class="w3-input" name="name" value="{{ old('name') }}" type="text" placeholder="Nama Lengkap"></p>
		  			<input class="w3-input" name="email" value="{{ old('email') }}" type="text" placeholder="Email"></p>
		  			<input class="w3-input" name="password" type="password" placeholder="Type Password"></p>
		  			<input class="w3-input" name="password_confirmation" type="password" placeholder="Re-Type Password"></p>
		  			<!-- <input class="w3-btn w3-black w3-block" type="button" name="btnLogin" value="Submit"> -->
		  			<button class="w3-btn w3-black w3-block" type="submit" class="btn btn-primary">Daftar</button>
				</form>
			</div>

			<div class="w3-col l4 m6 w3-margin-bottom"></div>
		</div>
	</div>
</body>
</html>