<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="/css/styles.css">

    {{-- Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Script --}}
    <script src="/js/scripts.js"></script>
</head>

<body>
    @yield('content')
    <footer>
        <p>Diamond Dogs &copy; 2023</p>
    </footer>
</body>

</html>
