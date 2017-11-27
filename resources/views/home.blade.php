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
                        <li><a href="/k/{{ Auth::user()->id }}">Konsumen</a></li>
                        <li><a href="/f/{{ Auth::user()->id }}">Freelancer</a></li>
                    @elseif (Auth::user()->role == 1)
                        <li><a href="/job">Lihat Daftar Job</a></li>
                    @elseif (Auth::user()->role == 2)
                        <li><a href="/job/create">Buat job baru</a></li>
                        <li><a href="/job/{{ Auth::user()->id }}">Lihat Job yang Anda Tawarkan</a></li>
                    @endif

                    @if (Auth::user()->role != 0)
                        <li><a href="/profil">Lihat Profil</a></li>
                        <li><a href="/editProfil">Edit Profil</a></li>
                    @endif
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
