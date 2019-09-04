@extends('layouts.app')


@section('content')

<h1><a href="/posts/{{ $post->id }}/edit">{{ $post->title }}</a></h1>

@endsection





@section('footer')
    
@endsection