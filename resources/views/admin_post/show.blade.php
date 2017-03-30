@extends('app')

@section('title', '|View Post')

@section('content')
   <div class="row">
       <div class="col-md-8">
           <h1>{{ $post->title }}</h1>
           <p class="lead">{{ $post->body }}</p>
       </div>

   </div>
@endsection

