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
            <div class="post">
                <h3>Post Title</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eius fugit ipsum pariatur ullam. Asperiores consectetur corporis cupiditate doloribus in labore ............</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eius fugit ipsum pariatur ullam. Asperiores consectetur corporis cupiditate doloribus in labore ............</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eius fugit ipsum pariatur ullam. Asperiores consectetur corporis cupiditate doloribus in labore ............</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h1>SideBar</h1>
        </div>
    </div>
@endsection
