@extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
@section('menu')
<!-- Team Section -->
<div class="w3-container" style="padding:20px" id="team">
	<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
		<div class="w3-col l2 m6 w3-margin-bottom">
			
		</div>
		<div class="w3-col l8 m6 w3-margin-bottom">
			<h2 class="judul">Prototype {{ $proposals[0]->title }}</h2>
			<ul>
				@foreach($proposals as $proposal)
				<li>
					<a href="/images/{{ $proposal->link }}">Download prototype oleh {{ $proposal->name }}</a> 
					<b>
						
						<a href="/prototype/acc/{{ $proposal->id }}" class="">Terima</a>
						
					</b>
				</li>
				@endforeach
			</ul>

			
		</div>

		<div class="w3-col l2 m6 w3-margin-bottom"></div>
	</div>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
	<p>Powered by Kelompok 7</p>
</footer>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
@endsection
