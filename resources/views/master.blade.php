<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scotch.io GuestBook</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-findcond">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">GuestBook</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="{{ route('sign') }}">Sign the GuestBook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>