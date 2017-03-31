@extends('app')
@section('title', '|Homepage')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog</h1>
                <p class="lead">Thank you so much for visiting . This is Laravel Blog .Please read the Latest blog</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div><!-- End of header .row--->

    <div class="row">
        <div class="col-md-8" >
            @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p class="lead"> {{ substr($post->body, 0 , 300)}} {{ strlen( $post->body) > 300 ? "......"  : ""}}  </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
          @endforeach

        </div>
        <div class="col-md-3 col-md-offset-1">
            <h1>SideBar</h1>
        </div>
    </div>
@endsection
