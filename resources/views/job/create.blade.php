@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="/job/create" method="POST" role="form">
                        <legend>Buat Job Baru</legend>
                    
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" class="form-control" id="" placeholder="Judul" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea type="textarea" class="form-control" id="" placeholder="Deskripsi" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" class="form-control" id="" placeholder="Harga" name="price">
                        </div>

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">Buat</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
