@extends('layouts.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
@section('menu')
<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
	<div class="w3-display-left w3-text-white" style="padding:48px">
		<span class="w3-jumbo w3-hide-small">Sayembara Desain</span><br>
		<span class="w3-xxlarge w3-hide-large w3-hide-medium">Sayembara Desain</span><br>
		<span class="w3-large">Mencari desain untuk disayembarakan</span><br>
		<input class="button" type="button" name="lihatJob" value="Lihat Job" onclick="window.location = 'lihatJob';">
	</div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
	<h3 class="w3-center">ABOUT THE COMPANY</h3>
	<p class="w3-center w3-large">Key features of our company</p>
	<div class="w3-row-padding w3-center" style="margin-top:64px">
		<div class="w3-quarter">
			<i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
			<p class="w3-large">Responsive</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
		</div>
		<div class="w3-quarter">
			<i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
			<p class="w3-large">Passion</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
		</div>
		<div class="w3-quarter">
			<i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
			<p class="w3-large">Design</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
		</div>
		<div class="w3-quarter">
			<i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
			<p class="w3-large">Support</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
		</div>
	</div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:100px 16px" id="team">
	<h3 class="w3-center">THE TEAM</h3>
	<p class="w3-center w3-large">The ones who runs this company</p>
	<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
		<div class="w3-col l1 m6 w3-margin-bottom"></div>

		<div class="w3-col l2 m6 w3-margin-bottom">
			<div class="w3-card-2">
				<img src="/w3images/team2.jpg" alt="John" style="width:100%">
				<div class="w3-container">
					<h3>Aulia Akbar Setyogomo</h3>
					<p class="w3-opacity">Documentation</p>
					<p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
					<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
				</div>
			</div>
		</div>

		<div class="w3-col l2 m6 w3-margin-bottom">
			<div class="w3-card-2">
				<img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
				<div class="w3-container">
					<h3>Agung Wahyu Setio Budi</h3>
					<p class="w3-opacity">System Analist</p>
					<p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
					<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
				</div>
			</div>
		</div>
		
		<div class="w3-col l2 m6 w3-margin-bottom">
			<div class="w3-card-2">
				<img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
				<div class="w3-container">
					<h3>Chandra Yogi Adhitama</h3>
					<p class="w3-opacity">Project Manager</p>
					<p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
					<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
				</div>
			</div>
		</div>
		
		<div class="w3-col l2 m6 w3-margin-bottom">
			<div class="w3-card-2">
				<img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
				<div class="w3-container">
					<h3>Moh. Zulfiqar Naufal M</h3>
					<p class="w3-opacity">Programer</p>
					<p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
					<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
				</div>
			</div>
		</div>

		<div class="w3-col l2 m6 w3-margin-bottom">
			<div class="w3-card-2">
				<img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
				<div class="w3-container">
					<h3>Pindo Bagus Adiatmaja</h3>
					<p class="w3-opacity">Documentation</p>
					<p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
					<p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
				</div>
			</div>
		</div>

		<div class="w3-col l1 m6 w3-margin-bottom"></div>
	</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
	<p>Powered by Kelompok 7</p>
</footer>

@endsection