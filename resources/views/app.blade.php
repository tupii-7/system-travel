<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'System Travel' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav>
        <a href="{{ url('/') }}">System Travel</a>

        <a href="{{ url('/destinations') }}">
            Destinasi
        </a>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>