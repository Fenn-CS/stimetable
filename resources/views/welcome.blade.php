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
            color:  #6c3483;
        }

        a:hover {
            color:  #6c3483;
        }

        .jumbotron {
            color: #fff;
            background-color:  #6c3483;
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
                        <a href="{{ route('register') }}" class="btn btn-success">Let's Start</a>
                        <a href="{{ route('login') }}" class="btn btn-light">Login</a>
                    </span>
                </div>
            </div>
        </header>

        <!-- Features -->
        <div class="row">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail panel">
                    <div class="image-container">
                        <i class="fa fa-shopping-cart" style="color:#009bae;"></i>
                    </div>
                    <div class="caption">
                        <a href="{{ route('shops') }}"><h3>{{trans('welcome.feature.1.title')}}</h3></a>
                        <p>{{trans('welcome.feature.1.content')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail panel">
                    <div class="image-container">
                        <i class="fa fa-share" style="color:#ff6c22;"></i>
                    </div>
                    <div class="caption">
                        <a href="{{ route('exchange') }}"><h3>{{trans('welcome.feature.2.title')}}</h3></a>
                        <p>{{trans('welcome.feature.2.content')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail panel">
                    <div class="image-container">
                        <i class="fa fa-gift" style="color:#ffc935;"></i>
                    </div>
                    <div class="caption">
                        <a href="{{ route('charity') }}"><h3>{{trans('welcome.feature.3.title')}}</h3></a>
                        <p>{{trans('welcome.feature.3.content')}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail panel">
                    <div class="image-container">
                        <i class="fa fa-medkit" style="color:#f33c65;"></i>
                    </div>
                    <div class="caption">
                        <a href="{{ route('centers') }}"><h3>{{trans('welcome.feature.4.title')}}</h3></a>
                        <p>{{trans('welcome.feature.4.content')}}</p>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div>
</body>
<!-- Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>