	@extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
	@section('menu')
	<!-- Team Section -->
	<div class="w3-container" style="padding:20px">
		<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
			<div class="w3-col l2 m6 w3-margin-bottom"></div>

			<div class="w3-col l8 m6 w3-margin-bottom">
				<h2 class="judul">Edit Profil</h2>
				
				<form action="">
		  			<input class="w3-input w3-border" name="name" type="text" placeholder="Nama">
		  			<input class="w3-input w3-border" name="email" type="text" placeholder="Email">
		  			<input class="w3-input w3-border" name="password" type="password">
		  			<input class="w3-input w3-border" name="re-password" type="password">
		  			
		  			<div class="w3-row-padding">
						<div class="w3-half">
		  					<input type="button" class="w3-btn w3-red w3-block" value="Kembali">
						</div>
						<div class="w3-half">
		  					<input type="button" class="w3-btn w3-green w3-block" value="Submit">
						</div>
					</div>


				</form>
			</div>

			<div class="w3-col l2 m6 w3-margin-bottom"></div>
		</div>
	</div>


	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-64">
		<p>Powered by Kelompok 7</p>
	</footer>

	@endsection
