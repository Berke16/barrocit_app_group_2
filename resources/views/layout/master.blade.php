<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Barroc IT.</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        @include('layout.nav')
        @yield('content')
        @include('layout.scripts')
        <footer>
            <h1 class="subhead text-center">SOFTWARE FOR REAL.</h1>
            <p class="text-center">&copy; BARROC IT |  2017</p>
        </footer>
    </body>
</html>