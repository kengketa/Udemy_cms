@extends('layouts.app')


@section('content')
<h1>CREATE POST</h1>
<form method="POST" action="/posts">
    <input type="text" name="title" placeholder="put title">
    {{ csrf_field() }}
    <input type="submit" name="submit">

</form>
    
@endsection



@section('footer')
    
@endsection