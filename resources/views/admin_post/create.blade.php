@extends('app')
@section('title', '| Create New Post')
@section('stylesheets')

  {!! Html::style('css/parsley.css') !!}
@endsection
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
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=>'']) !!}
               {{Form::label('title', 'Title :')}}
               {{ Form::text('title', null,array('class' => 'form-control', 'required' => '', 'maxLength'=> '255')) }}

                {{Form::label('body', 'Post Body:')}}
                {{Form::textarea('body', null, array('class'=>'form-control', 'required' => ''))}}

                {{Form::submit('create Post', array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
 {!! Html::script('js/parsley.min.js') !!}
@endsection