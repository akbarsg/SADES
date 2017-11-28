	@extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
	@section('menu')
	<!-- Team Section -->
	<div class="w3-container" style="padding:20px">
		<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
			<div class="w3-col l2 m6 w3-margin-bottom"></div>

			<div class="w3-col l8 m6 w3-margin-bottom">
				@if ($message = Session::get('success'))
					<p>{{ $message }}</p>
				@endif
				<div class="w3-container w3-center">
					<img src="/img/profil.png" style="width: 20%">
					<p>{{ $profil->name }}</p>
					@if($profil->role == 1)
						<p>Freelancer</p>
					@elseif($profil->role == 2)
						<p>Konsumen</p>
					@else
						<p>Belum memilih role</p>
					@endif
					<p>{{ $profil->email }}</p>
					<p>{{ $profil->rating }}</p>
					@if(Auth::user()->id != $profil->id && $profil->role == 1)
						@if($isRated == 0)
							<a href="/profil/rate/{{ $profil->id }}" class="w3-btn w3-green">Beri Rating!</a>
						@else
							<a href="#" class="w3-btn w3-black">Anda telah memberi rating!</a>
						@endif
					@endif
					@if(Auth::user()->id == $profil->id)
						<button class="w3-btn w3-black">Edit Profil</button>
					@endif
					
				</div>
				<br>
				<div class="w3-container" style="margin-top: 20px;">
					<div class="w3-col l3 m6 w3-margin-bottom">
						<div class="w3-card-2">
							<img src="/img/coba.png" style="width:100%">
						</div>
					</div>
					<div class="w3-col l3 m6 w3-margin-bottom">
						<div class="w3-card-2">
							<img src="/img/coba.png" style="width:100%">
						</div>
					</div>
					<div class="w3-col l3 m6 w3-margin-bottom">
						<div class="w3-card-2">
							<img src="/img/coba.png" style="width:100%">
						</div>
					</div>
					<div class="w3-col l3 m6 w3-margin-bottom">
						<div class="w3-card-2">
							<img src="/img/coba.png" style="width:100%">
						</div>
					</div>
				</div>
			</div>

			<div class="w3-col l2 m6 w3-margin-bottom"></div>
		</div>
	</div>


	<!-- Footer -->
	<footer class="w3-center w3-black w3-padding-64">
		<p>Powered by Kelompok 7</p>
	</footer>

	@endsection
