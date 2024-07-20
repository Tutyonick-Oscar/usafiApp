<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-signin-client_id" content="570424383171-pllavaku2docnia8h0v11vhnhj9gvm4g.apps.googleusercontent.com.apps.googleusercontent.com">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"rel="stylesheet"/>
        @vite('resources/css/app.css')
        @livewireStyles
        <title>@yield('title')</title>
    </head>
    <body class="bg-[#073529]">
        @yield('content')
        @livewireScripts
    </body>
</html>