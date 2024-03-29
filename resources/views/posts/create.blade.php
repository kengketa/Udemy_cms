@extends('layouts.app')


@section('content')
<h1>CREATE POST</h1>

{!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}
    

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>
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