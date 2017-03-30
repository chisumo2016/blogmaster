<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>

<body>
<!-- Default  Nav Bar--->
@include('partials._navigation')


<div class="container">
    @yield('content')
    @include('partials._footer')
</div><!-- End of container --->


@include('partials._javascript')
</body>
</html>