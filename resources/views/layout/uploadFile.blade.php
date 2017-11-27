	@extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
	@section('menu')
	<!-- Team Section -->
	<div class="w3-container" style="padding:20px">
		<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
			<div class="w3-col l2 m6 w3-margin-bottom"></div>

			<div class="w3-col l8 m6 w3-margin-bottom">
				<h2 class="judul">Upload File</h2>
				
				<form action="">
		  			<textarea class="w3-input w3-border w3-round" placeholder="Masukkan Deskripsi File" rows="5"></textarea>
		  			
		  			<div class="w3-row w3-section">
						<div class="w3-col" style="width:725px">
					      <input class="w3-input w3-border" name="file" type="text">
						</div>
					    <div class="w3-rest">
					    	<input type="button" class="w3-btn w3-dark-grey" value="Browse" style="width: 120px;">
					    </div>
					</div>

		  			<input type="button" class="w3-btn w3-black w3-block" value="Submit">


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
