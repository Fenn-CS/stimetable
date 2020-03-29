<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{trans('app.name')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <link rel="manifest" href="/manifest.json">

    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Montserrat);
        @import url(https://fonts.googleapis.com/css?family=Arvo);

        h1 {
            font-family: 'Montserrat', sans-serif;
        }

        a {
            color: #6c3483;
        }

        a:hover {
            color: #6c3483;
        }

        .jumbotron {
            color: #fff;
            background-color: #6c3483;
        }

        .image-container {
            position: relative;
            display: inline-block;
            width: 100px;
            height: 100px;
            background-size: cover;
            background-position: center center;
            border-radius: 4px;
            font-size: 80px;
        }

        #inspire {
            font-family: 'Arvo', serif;
        }

        .panel {
            text-align: center;
            border: none;
            box-shadow: none;
        }

        .btn-primary {
            color: white;
            font-size: 15px;
        }
    </style>

</head>

<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>
                <img class="hidden-xs hidden-sm" style="max-width: 100px;" src="{{ asset('images/stt.png') }}" />
                {{ trans('welcome.jumbotron.title') }}
            </h1>
            <p class="hidden-xs" id="inspire">{{ trans('welcome.jumbotron.description') }}</p>
            <div class="row">
                <div class="col-xs-12">
                    <span class="btn-group">
                        <a href="{{ route('welcome') }}" class="btn btn-success">Home</a>
                        <a href="{{ route('timetable') }}" class="btn btn-light">My Time Table</a>
                    </span>
                </div>
            </div>
        </header>

        <!-- Features -->
        <div class="row">
            @yield('content')
        </div>
        <!-- /.row -->
    </div>
</body>
<!-- Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>