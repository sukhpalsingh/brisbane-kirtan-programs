<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="full-height">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Brisbane Kirtan Programs') }}</title>

        <link href="/build/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body class="rgba-blue-grey-slight">
        <div id="logo-panel" class="container-fluid text-center">
            <nav id="main-nav" class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}"><strong>{{ config('app.name', 'Brisbane Kirtan Programs') }}</strong></a>
            </nav>
        </div>

        @include('layouts.partials._notifications')

        <div class="container-fluid mb-3">
            <div class="col-sm-12">
                @yield('content')
            </div>
        </div>
        <script src="/build/js/app.js" type="text/javascript"></script>
        @yield('scripts')
    </body>
</html>

