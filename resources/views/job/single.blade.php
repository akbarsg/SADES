@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Job</div>

                <div class="panel-body">
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

                    <h2>{{ $job->title }} Rp<small>{{ $job->price }}</small></h2>

                    <p>{{ $job->description }}</p>

                    @if(Auth::user()->role == 1)

                    @if($job->taken == 0)
                    <form action="/job/ambil" method="post">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        {{ csrf_field() }}
                        <input type="submit" name="submit" value="Ambil Job">
                    </form>
                    @else
                    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#unggah">Unggah Prototype</button>
                    @endif
                    
                    @else
                    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#lihat">Lihat Prototype</button> -->
                    <a href="/job/{{ $job->user_id }}/{{ $job->id }}/prototype" class="btn btn-info btn-md">Lihat Prototype</a>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="unggah" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                    {!! Form::open(array('route' => 'image.upload.post','files'=>true)) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::file('image', array('class' => 'form-control')) !!}
                            {!! Form::hidden('job_id', $job->id) !!}
                            {!! Form::hidden('user_id', Auth::user()->id) !!}
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="lihat" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


</div>
@endsection
