<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brisbane Kirtan Programs</title>

        <link href="build/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <nav id="main-nav" class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><strong>Brisbane Kirtan Programs</strong></a>
                <div class="float-right">
                    <a href="/login" class="btn btn-primary btn-rounded btn-sm waves-effect waves-light"><strong>Login</strong></a>
                </div>
            </nav>

            <nav class="navbar navbar-expand-md navbar-inverse navbar-dark cyan accent-4">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div id="mainmenu" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link waves-effect waves-light" href="/">
                                    Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light" href="/programs">
                                    Programs
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="col-sm-12">
                @yield('content')
            </div>
        </div>
        <script src="build/js/app.js" type="text/javascript"></script>
    </body>
</html>