@extends('app')
@section('title', '|Contact')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact  Me</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="">Subject:</label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Subject">
                </div>
                <div class="form-group">
                    <label for="email">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">

            </form>
        </div>
    </div>

@endsection