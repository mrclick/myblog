@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-info">Go back</a>    
<h1>{{ $posts->title }}</h1>    
    <div class="">
        {{ $posts->body }}
    </div>
    <hr>
    <small>Written on {{ $posts->created_at }}</small>
@endsection