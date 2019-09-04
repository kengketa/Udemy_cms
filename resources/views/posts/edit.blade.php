@extends('layouts.app')


@section('content')

<h1>EDIT POST</h1>


{!! Form::model($post,['method'=>'PATCH', 'action'=>['PostsController@update',$post->id]]) !!}
    

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::submit('update Post',['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}

{!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}

    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

{!! Form::close() !!}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection





@section('footer')
    
@endsection