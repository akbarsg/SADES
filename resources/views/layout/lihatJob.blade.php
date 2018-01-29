@extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
@section('menu')
<!-- Team Section -->
<div class="w3-container" style="padding:20px" id="team">
	<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
		<div class="w3-col l2 m6 w3-margin-bottom"></div>

		<div class="w3-col l8 m6 w3-margin-bottom">
			@if(Auth::user()->role == 1)
			@if($myJobs != '[]')
			<h2 class="judul">Job Saya</h2>
			@foreach($myJobs as $myJob)
			<div class="w3-card-2">
				<div class="w3-container">
					<h3>{{ $myJob->title }}
						@if($myJob->final == 0)
							@if($myJob->accepted == 1)
								<small style="color: green">
								Prototype Anda telah diterima! Segera unggah desain akhir.
								</small>
							@else
								<small style="color: gray">
								Prototype Anda belum diterima oleh konsumen.
								</small>
							@endif
						@elseif($myJob->final == 1)
							<small style="color: green">
							Anda telah mengunggah desain akhir.
							</small>
						@endif
					</h3>
					<p class="w3-opacity">Rp{{ $myJob->price }}</p>
					<p>{{ $myJob->description }}</p>
					@if($myJob->final == 0)
						@if($myJob->accepted == 0)
						<p><input class="button btnDetail" type="button" name="lihatDetail" value="Detail Job" onclick="window.location = '/job/{{ Auth::user()->id }}/{{ $myJob->id }}';"></p>
						@elseif($myJob->accepted == 1)
						<p><input class="button btnDetail" type="button" name="lihatDetail" value="Unggah Desain Akhir" onclick="window.location = '/job/{{ Auth::user()->id }}/{{ $myJob->id }}';"></p>
						@endif
					@elseif($myJob->final == 1)
						
					@endif
				</div>
			</div>
			@endforeach
			@endif
			@endif

			<h2 class="judul">Daftar Job</h2>
			@foreach($jobs as $job)
			<div class="w3-card-2">
				<div class="w3-container">
					<h3>{{ $job->title }}
						
							
							@if($job->accepted == 1)
								@if(Auth::user()->role == 1)
								<small style="color: red">
									Tidak tersedia atau sudah diambil
								@elseif(Auth::user()->role == 2)
								<small style="color: green">
									Anda sudah menerima prototype dari freelancer pada job ini!
								@endif
							@endif
						</small>
					</h3>
					<p class="w3-opacity">Rp{{ $job->price }}</p>
					<p>{{ $job->description }}</p>
					@if(Auth::user()->role == 1)
					@if($job->accepted == 0)
					<p><input class="button btnDetail" type="button" name="lihatDetail" value="Detail Job" onclick="window.location = '/job/{{ Auth::user()->id }}/{{ $job->id }}';"></p>
					@endif
					@else
						<p><input class="button btnDetail" type="button" name="lihatDetail" value="Detail Job" onclick="window.location = '/job/{{ Auth::user()->id }}/{{ $job->id }}';"></p>
					@endif
				</div>
			</div>
			@endforeach

			<br>
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
