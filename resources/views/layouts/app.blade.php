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
                <a href="{{ route('home') }}" class="text-sm font-medium transition {{ request()->routeIs('home') ? 'text-blue-600' : 'text-slate-600 hover:text-blue-600' }}">Home</a>
                <a href="{{ route('destinations.index') }}" class="text-sm font-medium transition {{ request()->routeIs('destinations.*') ? 'text-blue-600' : 'text-slate-600 hover:text-blue-600' }}">Destinasi</a>
                <span class="cursor-not-allowed text-sm font-medium text-slate-400" title="Segera hadir">Itinerary</span>
            </div>

            <div class="flex items-center gap-3">
                <span class="hidden rounded-full border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-400 sm:inline-flex" title="Segera hadir">Login</span>
                <details class="relative md:hidden">
                    <summary class="list-none cursor-pointer rounded-full border border-slate-300 p-2 text-slate-700" aria-label="Buka menu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 7h16M4 12h16M4 17h16" />
                        </svg>
                    </summary>
                    <div class="absolute right-0 top-12 w-44 rounded-2xl border border-slate-200 bg-white p-2 shadow-lg">
                        <a href="{{ route('home') }}" class="block rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Home</a>
                        <a href="{{ route('destinations.index') }}" class="block rounded-xl px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Destinasi</a>
                        <span class="block rounded-xl px-3 py-2 text-sm font-medium text-slate-400">Itinerary (segera)</span>
                    </div>
                </details>
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