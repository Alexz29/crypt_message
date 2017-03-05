@extends('layouts.default')

@section('content')

    <div class="row ">
        <div class="col-md-4 col-md-offset-4">
            <div class="col-xs-7"><h2>It is work !)</h2></div>
            <div class="col-xs-5">
                <a class="btn btn-primary" href="{{ route('Messages.index') }}">Start</a>
            </div>
        </div>
    </div>

@endsection