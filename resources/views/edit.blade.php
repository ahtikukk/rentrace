@extends('layouts.main')

@section('title','Edit')
    
@section('content')

    <div class="container">

        {{ Form::open(['url' => 'foo/bar']) }}
            //
        {{ Form::close() }}



    </div>
       

@endsection