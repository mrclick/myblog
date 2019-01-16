@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-info">Go back</a>    
<h1>{{ $posts->title }}</h1>    
    <div class="">
        {!! $posts->body !!}
    </div>
    <hr>
    <small>Written on {{ $posts->created_at }}</small>
    <hr>
    <a href="/posts/{{ $posts->id }}/edit" class="btn btn-info">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $posts->id],'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::submit('DELETE',['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection