@extends('app')
@section('title', '| Create New Post')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
               {{Form::label('title', 'Title :')}}
               {{ Form::text('title', null,array('class' => 'form-control')) }}

                {{Form::label('body', 'Post Body:')}}
                {{Form::textarea('body', null, array('class'=>'form-control'))}}

                {{Form::submit('create Post', array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection