@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-info">Go back</a>    
    <h1>{{ $posts->title }}</h1>
    <img src="/storage/cover_images/{{ $posts->cover_image }}" style="width:100%;">
    <br><br>    
    <div class="">
        {!! $posts->body !!}
    </div>
    <hr>
    <small>Written on {{ $posts->created_at }} by {{ $posts->user->name }}</small>
    <hr>
    {{-- checking logged in user & Giving access to edit --}}
    @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)     
            <a href="/posts/{{ $posts->id }}/edit" class="btn btn-info">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy', $posts->id],'method' => 'POST', 'class' => 'float-right']) !!}
                {{ Form::hidden('_method','DELETE') }}
                {{ Form::submit('DELETE',['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif
@endsection