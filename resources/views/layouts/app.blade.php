<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel first app</title>

        <!-- add app css file (auto looks in public folder) -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    </head>

    <body>
    @include('inc.navbar')
        <!-- content goes here -->

<div class="container">

    <!-- if statement via blade include the showcase only if on the first page i.e / -->
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif


    <div class="row">
        <div class="col-md-8 col-lg-8">
            <!-- display errors here -->
            @include('inc.messages')
            @yield('content')
        </div>

        <div class="col-md-4 col-lg-4">
            <!-- include sidebar -->
            @include('inc.sidebar')
        </div>
    </div>

</div>

    <footer id="footer" class="text-center">
        <p>Copyright &; 2018</p>
    </footer>

    </body>


</html>