<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'System Travel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased">
    <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/80 backdrop-blur-md">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ url('/') }}" class="text-xl font-black tracking-tight text-slate-900">
                System Travel
            </a>

            <div class="hidden items-center gap-8 md:flex">
                <a href="{{ url('/') }}" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">Home</a>
                <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">Destinasi</a>
                <a href="#" class="text-sm font-medium text-slate-600 transition hover:text-blue-600">Itinerary</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="#" class="hidden rounded-full border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-blue-500 hover:text-blue-600 sm:inline-flex">
                    Login
                </a>
                <button type="button" class="inline-flex rounded-full border border-slate-300 p-2 text-slate-700 md:hidden" aria-label="Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-slate-200 bg-white">
        <div class="mx-auto max-w-7xl px-4 py-8 text-center text-sm text-slate-500 sm:px-6 lg:px-8">
            &copy; {{ date('Y') }} System Travel. Semua hak dilindungi.
        </div>
    </footer>
</body>
</html>