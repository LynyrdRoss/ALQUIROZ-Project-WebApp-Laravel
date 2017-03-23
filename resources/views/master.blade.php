<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootflat.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
</head>

<body>
    @if ($flash = session('message'))
        <div class="alert alert-success flash-message" role="alert">
            {{ $flash }}
        </div>
    @endif

    <div class="container">

      	<div class="row">
        	@yield('content')

        	@include('partials.sidebar')

     	</div><!-- /.row -->

    </div><!-- /.container -->

    @include('partials.footer')

    <script>
    $('div.alert').not('.alert-important').delay(3500).fadeOut(2800);

    // function showeditform(id) {
    //     $("id").show();
    // }

    // $(document).ready(function() {

    //     $("#edit-caret").click(function() {
    //         $("#form").show();
    //     });

    //     $("#form").hide();
    // });

    </script>

</body>
</html>
