@extends('layouts.app')


@section('content')

<h1>EDIT POST</h1>
<form method="POST" action="/posts/{{ $post->id }}">
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" placeholder="put title" value="{{ $post->title }}">
    {{ csrf_field() }}
    <input type="submit" name="submit">

</form>

<form method="POST" action="/posts/{{ $post->id }}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="submit" value="DELETE">
    {{ csrf_field() }}
</form>

@endsection





@section('footer')
    
@endsection