<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Practice</title>
        <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="{{ mix('resources/js/app.js') }}" defer></script>
        <script src="{{ mix('resources/js/header.js') }}" defer></script>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        @include('parts.header')
        @yield('content')
        @include('parts.footer')
    </body>
</html>
