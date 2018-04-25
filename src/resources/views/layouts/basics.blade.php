<!doctype html>
<html lang="{{ app()->getLocale() }}" class="full-height">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Brisbane Kirtan Programs</title>

        <link href="/build/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body class="rgba-blue-grey-slight">
        <div id="logo-panel" class="container-fluid">
            <nav id="main-nav" class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><strong>Brisbane Kirtan Programs</strong></a>
                <div class="float-right">
                        @guest
                            <a href="/login" class="btn btn-dark cyan darken-2 btn-rounded btn-sm waves-effect waves-light"><strong>Login</strong></a>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                </div>
            </nav>
        </div>

        <nav class="navbar navbar-expand-md navbar-inverse navbar-dark cyan darken-3">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div id="mainmenu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                        <li
                            @if ($tab === 'home')
                                class="nav-item active"
                            @else
                                class="nav-item"
                            @endif
                        >
                            <a class="nav-link waves-effect waves-light" href="/">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li
                            @if ($tab === 'programs')
                                class="nav-item active"
                            @else
                                class="nav-item"
                            @endif
                        >
                            <a class="nav-link waves-effect waves-light" href="/programs">
                                Programs
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
        </div>
        <script src="/build/js/app.js" type="text/javascript"></script>
        @yield('scripts')
    </body>
</html>
