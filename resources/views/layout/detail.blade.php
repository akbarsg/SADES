@extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
@section('menu')
<!-- Team Section -->
<div class="w3-container" style="padding:20px" id="team">
	<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
		<div class="w3-col l2 m6 w3-margin-bottom"></div>

		<div class="w3-col l8 m6 w3-margin-bottom">
			@if ($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{ $message }}</strong>
			</div>
			<img src="images/{{ Session::get('image') }}">
			@endif

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<h2 class="judul">{{ $job->title }}</h2>
			<a href=""><p class="w3-center w3-large">Rp{{ $job->price }}</p></a>
			<h3>Deskripsi:</h3>
			<p>{{ $job->description }}</p>
			<hr>
			@if(Auth::user()->role == 1)

				@if($job->taken == 0)
					<form action="/job/ambil" method="post">
						<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
						<input type="hidden" name="job_id" value="{{ $job->id }}">
						{{ csrf_field() }}
						<input type="submit" class="button" name="submit" value="Ambil Job">
					</form>
				@else

					@if($proposed == '[]')
						<button type="button" class="button" onclick="document.getElementById('unggah').style.display='block'">Unggah Prototype</button>
					@else
						@if($proposed[0]->accepted == 0)
							<p>Anda telah mengunggah prototype. Anda dapat mengunggah hasil desain akhir jika konsumen telah menerima prototype Anda.</p>
							<b><a href="/images/{{ $proposed[0]->link }}">Download prototype Anda</a></b>
						@else
							@if($proposed[0]->final == 0)
								@if($isPaid == 0)
									<p>Prototype Anda telah diterima oleh konsumen!</p>
									<button type="button" class="button" onclick="document.getElementById('unggahAkhir').style.display='block'">Unggah Hasil Desain Akhir</button>
								@else
									<p>Job telah berakhir!</p>
								@endif
							@else
								<b><p>Anda telah mengunggah hasil desain akhir. Tunggu pembayaran oleh konsumen.</p></b>
							@endif
						@endif
					@endif
				@endif

			@else 
			<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#lihat">Lihat Prototype</button> -->
				@if($proposed == '[]')
					<p>Belum ada freelancer yang mengunggah prototype untuk job ini.</p>
				@else
					@if($proposed[0]->accepted == 1)
						<h3>Prototype yang Anda Terima:</h3>
						<p>Oleh {{ $proposed[0]->name }} <b><a href="/images/{{ $proposed[0]->link }}">Download Prototype</a></b></p>
						@if($proposed[0]->final == 1)
							<h3>Desain Akhir yang Anda Terima:</h3>
							<p>{{ $proposed[0]->name }} telah mengunggah hasil desain akhir. <b><a href="/images/{{ $proposed[0]->link_final }}">Download Desain Akhir</a></b></p>
							@if($isPaid == 0)
								<br>
								<button type="button" class="button" onclick="document.getElementById('bayar').style.display='block'">Terima dan Bayar</button>
							@else
								<p>Job telah berakhir!</p>
							@endif
						@else
							<p>Freelancer ini belum mengunggah hasil desain akhir.</p>
						@endif
						
					@else
						<a href="/prototype/{{ $job->id }}" class="button">Lihat Prototype</a>
					@endif
				@endif

					
			@endif

			<!-- <button class="button" id="ambilJob">Ambil Job</button> -->
		</div>

		<div class="w3-col l2 m6 w3-margin-bottom"></div>
	</div>
</div>

<!-- Modal -->
<div id="unggah" class="w3-modal w3-animate-opacity">


	<!-- Modal content-->
	<div class="w3-modal-content w3-card-4">
		<header class="w3-container w3-teal"> 
			<span onclick="document.getElementById('unggah').style.display='none'" 
			class="w3-button w3-large w3-display-topright">&times;</span>
			<h2>Unggah Prototype Desain</h2>
		</header>
		<div class="w3-container">
			<p>Unggah file Anda di sini.</p>
			{!! Form::open(array('route' => 'image.upload.post','files'=>true)) !!}
			
					{!! Form::file('image', array('class' => 'form-control')) !!}
					{!! Form::hidden('job_id', $job->id) !!}
					{!! Form::hidden('user_id', Auth::user()->id) !!}
				
					<button type="submit" class="w3-button w3-green">Unggah</button>
				
			
			{!! Form::close() !!}
			<br />
		</div>
	</div>


</div>
@if($proposed != '[]')
<div id="unggahAkhir" class="w3-modal w3-animate-opacity">


	<!-- Modal content-->
	<div class="w3-modal-content w3-card-4">
		<header class="w3-container w3-teal"> 
			<span onclick="document.getElementById('unggahAkhir').style.display='none'" 
			class="w3-button w3-large w3-display-topright">&times;</span>
			<h2>Unggah Hasil Desain Akhir</h2>
		</header>
		<div class="w3-container">
			<p>Unggah file Anda di sini.</p>
			{!! Form::open(array('route' => 'image.upload.post.final','files'=>true)) !!}
			
					{!! Form::file('image', array('class' => 'form-control')) !!}
					{!! Form::hidden('job_id', $job->id) !!}
					{!! Form::hidden('user_id', Auth::user()->id) !!}
					
					{!! Form::hidden('proposal_id', $proposed[0]->id) !!}

				
					<button type="submit" class="w3-button w3-green">Unggah</button>
				
			
			{!! Form::close() !!}
			<br />
		</div>
	</div>
</div>
@endif

<div id="lihat" class="w3-modal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="w3-modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Lihat Prototype</h4>
			</div>
			<div class="modal-body">
				<p>Some text in the modal.</p>
				{!! Form::open(array('route' => 'image.upload.post','files'=>true)) !!}

				<div class="row">

					<div class="col-md-6">

						{!! Form::file('image', array('class' => 'form-control')) !!}


					</div>

					<div class="col-md-6">

						<button type="submit" class="btn btn-success">Upload</button>

					</div>

				</div>

				{!! Form::close() !!}
			</div>
		</div>

	</div>
</div>

@if($proposed != '[]')
<div id="bayar" class="w3-modal w3-animate-opacity">


	<!-- Modal content-->
	<div class="w3-modal-content w3-card-4">
		<header class="w3-container w3-teal"> 
			<span onclick="document.getElementById('bayar').style.display='none'" 
			class="w3-button w3-large w3-display-topright">&times;</span>
			<h2>Pembayaran</h2>
		</header>
		<div class="w3-container">
			@php
				
			@endphp
			<p>Saldo Anda: Rp{{ $balance }}</p>
			<p>Harga desain: Rp{{ $job->price }}</p>
			<p>Saldo setelah membayar: <b>Rp{{ $balance - $job->price }}</b></p>
			
			<a href="/job/bayar/{{ $proposed[0]->id }}" class="w3-button w3-green">Bayar</a>
			<br />
			<br />
		</div>
	</div>
</div>
@endif


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
	<p>Powered by Kelompok 7</p>
</footer>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
@endsection
