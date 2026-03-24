<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('admin-assets/favicon.png') }}" />

    <title>@yield('title', 'Admin')</title>

    <link rel="stylesheet" crossorigin href="{{ asset('admin-assets/assets/index-DQbFX4P2.css') }}">
</head>

<body class="dark:bg-gray-900">
    @yield('content')

    <script type="module" crossorigin src="{{ asset('admin-assets/assets/index-DHwys0Yh.js') }}"></script>
</body>

</html>
