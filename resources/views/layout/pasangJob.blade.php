	@extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
	@section('menu')
	<!-- Team Section -->
	<div class="w3-container" style="padding:20px" id="team">
		<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
			<div class="w3-col l2 m6 w3-margin-bottom"></div>

			<div class="w3-col l8 m6 w3-margin-bottom">
				<h2 class="judul">Pasang Job</h2>
				
				<form action="/job/create" method="POST" role="form">
					{{ csrf_field() }}
		  			<input class="w3-input w3-border w3-round" name="title" type="text" placeholder="Judul Job">
		  			<input class="w3-input w3-border w3-round" name="price" type="number" placeholder="Masukkan Bayaran">
		  			<textarea class="w3-input w3-border w3-round" placeholder="Masukkan Deskripsi Job" rows="5" name="description"></textarea>
		  			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
		  			<!-- <input type="submit" class="w3-btn w3-black w3-block" value="Submit"> -->
		  			<button type="submit" class="w3-btn w3-black w3-block">Buat</button>
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
