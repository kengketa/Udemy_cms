@extends('layouts.app')


@section('content')

<a href="/posts/create">CREATE NEW</a>

<ul>
    @foreach ($posts as $post)
        
        <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>

    @endforeach

</ul>

@endsection





@section('footer')
    
@endsection