<!doctype html>
<html>

<head>
    <title>@yield('title', 'Laracasts')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</body>
</html>
