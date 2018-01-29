@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
   </div> -->

   <div class="container">
    <div class="row">
     <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
       <div class="panel-heading">Dashboard</div>

       <div class="panel-body">
        <ul>
         @if (Auth::user()->role == 0)
         <h3>Pilih role Anda:</h3>
         <li><a href="/k/{{ Auth::user()->id }}">Konsumen</a></li>
         <li><a href="/f/{{ Auth::user()->id }}">Freelancer</a></li>
         @elseif (Auth::user()->role == 1)
         <li><a href="/job">Lihat Daftar Job</a></li>
         <!-- <li><a href="#" onclick="document.getElementById('hapusAkun').style.display='block'">Hapus Akun Anda</a></li> -->
         
         @elseif (Auth::user()->role == 2)
         <li><a href="/job/create">Buat job baru</a></li>
         <li><a href="/job/{{ Auth::user()->id }}">Lihat Job yang Anda Tawarkan</a></li>
         @endif

         @if (Auth::user()->role != 0)
         <li><a href="/profil/{{ Auth::user()->id }}">Lihat Profil</a></li>
         <li><a href="/profil/edit">Edit Profil</a></li>
         <li><a href="#" data-toggle="modal" data-target="#hapusAkun">Hapus Akun Anda</a></li>
         @endif
        </ul>

       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Modal -->
<div id="hapusAkun" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Akun</h4>
      </div>
      <div class="modal-body">
       <h3>Anda yakin ingin menghapus Akun Anda di SADES?</h3>
        <p>Setelah dihapus, akun SADES Anda tidak dapat diakses kembali.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <a href="/hapusAkun" class="btn btn-danger">Hapus!</a>
      </div>
    </div>

  </div>
</div>

   <!-- Modal -->
   <!-- <div id="hapusAkun" class="w3-modal w3-animate-opacity"> -->


    <!-- Modal content-->
    <!-- <div class="w3-modal-content w3-card-4">
     <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('hapusAkun').style.display='none'" 
      class="w3-button w3-large w3-display-topright">&times;</span>
      <h2>Hapus Akun</h2>
     </header>
     <div class="w3-container">
      <h3>Apakah Anda yakin ingin menghapus Akun di SADES?</h3>
      <p>Setelah dihapus, akun Anda tidak dapat dikembalikan</p>
      <a href="/hapusAkun" class="w3-button w3-red">Hapus!</a>
      <br />
     </div>
    </div>


   </div> -->
   @endsection
