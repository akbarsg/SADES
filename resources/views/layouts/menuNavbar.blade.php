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
	body, html {
		height: 100%;
		line-height: 1.8;
	}
	/* Full height image header */
	.bgimg-1 {
		background-position: center;
		background-size: cover;
		background-image: url("img/banner.jpg");
		min-height: 100%;
	}
	.w3-bar .w3-button {
		padding: 16px;
	}
	.button {
		padding: 16px;
		background-color: #839CA9;
		border: none;
		border-bottom: 2px solid black;
		cursor: pointer;
		margin-top: 15px;
	}
	.button:hover{
		background-color: #FF6A00;;
		border-bottom: 2px solid #C90200;
		color: white;
	}
	.btnDetail{
		display: block;
		padding: 10px 20px 10px 20px;
	}
</style>
</head>
<body>
	<!-- Navbar (sit on top) -->
	<div class="w3-top">
		<div class="w3-bar w3-white w3-card-2" id="myNavbar">
			<a href="home" class="w3-bar-item w3-button w3-wide">SADES.COM</a>
			<!-- Right-sided navbar links -->
			<div class="w3-right w3-hide-small">
				<!-- <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PASANG JOB</a>
				<a href="login" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a> -->
				@if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Home</a>
                    @else
                        <a href="{{ route('login') }}" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Login</a>
                        <a href="{{ route('register') }}" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Register</a>
                    @endauth
                
            	@endif
			</div>
			<!-- Hide right-floated links on small screens and replace them with a menu icon -->

			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
				<i class="fa fa-bars"></i>
			</a>
		</div>
	</div>

	<!-- Sidebar on small screens when clicking the menu icon -->
	<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
		<a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">PASANG JOB</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>

	</nav>
	@yield('menu')
</body>
</html>