  @extends('layout.menuNavbar') <!-- extend ke core2 untuk setiap halaman -->
  @section('menu')

<div class="w3-container" style="padding:20px" id="team">
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
      <div class="w3-col l2 m6 w3-margin-bottom"></div>

      <div class="w3-col l8 m6 w3-margin-bottom">
        <h2 class="judul">Dashboard</h2>

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
         <li><a href="#" data-toggle="modal" onclick="document.getElementById('hapusAkun').style.display='block'">Hapus Akun Anda</a></li>
         @endif
        </ul>


     <div class="w3-col l2 m6 w3-margin-bottom"></div>
    </div>
   </div>
 </div>
</div>

   <!-- Modal -->
<div id="hapusAkun" class="w3-modal w3-animate-opacity">


  <!-- Modal content-->
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-red"> 
      <span onclick="document.getElementById('hapusAkun').style.display='none'" 
      class="w3-button w3-large w3-display-topright">&times;</span>
      <h2>Hapus Akun</h2>
    </header>
    <div class="w3-container">
       <h3>Anda yakin ingin menghapus Akun Anda di SADES?</h3>
        <p>Setelah dihapus, akun SADES Anda tidak dapat diakses kembali.</p>
      
        <a href="/hapusAkun" class="w3-button w3-red">Hapus!</a>
      </div>
      <br />
    </div>

  
</div>
  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    <p>Powered by Kelompok 7</p>
  </footer>

  @endsection