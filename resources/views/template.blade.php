<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="main__content">
        <div class="child__content">
            @include('nav')
        </div>

        <div class="child__content__secition">
            @yield('content')
        </div>
    </div>
</body>
</html>