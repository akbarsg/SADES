@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Job</div>

                <div class="panel-body">
                    @foreach($jobs as $job)
                        <li><a href="/job/{{ Auth::user()->id }}/{{ $job->id }}">{{ $job->title }}</a></li>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
