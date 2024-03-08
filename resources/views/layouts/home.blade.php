<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>@lang('app.name')</title> --}}
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ $appIcon }}">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <main id="root">
        @yield('content')
    </main>
</body>

<!-- Scripts -->
<script src="/js/app.js" defer></script>
@yield('extra_scripts')

</html>
