@extends('layouts.app')

@section('title', 'System Travel - Jelajahi Indonesia')

@section('content')
    <section class="relative overflow-hidden bg-gradient-to-br from-sky-50 via-blue-50 to-slate-100">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.12),transparent_40%)]"></div>

        <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-16 sm:px-6 lg:grid-cols-12 lg:px-8 lg:py-24">
            <div class="lg:col-span-7 lg:pt-8">
                <span class="inline-flex rounded-full border border-blue-200 bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700">
                    Explore Indonesia ✨
                </span>

                <h1 class="mt-5 text-4xl font-black tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                    Jelajahi Destinasi Impianmu
                </h1>

                <p class="mt-5 max-w-xl text-lg leading-8 text-slate-600">
                    Temukan destinasi wisata terbaik, susun itinerary perjalananmu, dan pesan tiket dengan cara yang lebih cepat, mudah, dan menyenangkan.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ url('/destinations') }}" class="inline-flex items-center rounded-full bg-blue-600 px-6 py-3 text-base font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">
                        Jelajahi Destinasi
                    </a>
                    <a href="#" class="inline-flex items-center rounded-full border border-slate-300 bg-white px-6 py-3 text-base font-semibold text-slate-700 transition hover:border-slate-400 hover:text-slate-900">
                        Buat Itinerary
                    </a>
                </div>

                <div class="mt-8 flex flex-wrap gap-4 text-sm text-slate-600">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-600">✓</span>
                        1.200+ destinasi
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-600">✓</span>
                        Booking cepat
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 text-xs font-bold text-emerald-600">✓</span>
                        Harga transparan
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/60 sm:p-8">
                    <div class="mb-6 flex items-center justify-between">
                        <h2 class="text-2xl font-bold text-slate-900">Cari Destinasi</h2>
                        <span class="rounded-full bg-blue-100 px-2.5 py-1 text-xs font-semibold text-blue-700">Ready</span>
                    </div>

                    <form action="{{ url('/destinations') }}" method="GET" class="space-y-5">
                        <div>
                            <label for="search" class="mb-2 block text-sm font-semibold text-slate-700">Nama destinasi</label>
                            <input
                                type="text"
                                id="search"
                                name="search"
                                class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                                placeholder="Contoh: Pantai Bali"
                            >
                        </div>

                        <div>
                            <label for="category" class="mb-2 block text-sm font-semibold text-slate-700">Kategori</label>
                            <select
                                id="category"
                                name="category"
                                class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100"
                            >
                                <option value="">Semua kategori</option>
                                <option value="alam">Wisata Alam</option>
                                <option value="budaya">Wisata Budaya</option>
                                <option value="kuliner">Kuliner</option>
                                <option value="rekreasi">Rekreasi</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full rounded-2xl bg-blue-600 px-4 py-3 text-base font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">
                            Cari Destinasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <div class="mb-12 text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">Kenapa memilih kami</p>
            <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-4xl">Fitur System Travel</h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-100 text-2xl">📍</div>
                <h3 class="mb-3 text-xl font-bold text-slate-900">Destinasi</h3>
                <p class="text-base leading-7 text-slate-600">
                    Temukan tempat wisata terbaik sesuai kebutuhan, budget, dan lokasi favoritmu.
                </p>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-100 text-2xl">🗺️</div>
                <h3 class="mb-3 text-xl font-bold text-slate-900">Itinerary</h3>
                <p class="text-base leading-7 text-slate-600">
                    Susun rencana perjalanan dengan urutan destinasi yang lebih praktis dan efisien.
                </p>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-100 text-2xl">🎫</div>
                <h3 class="mb-3 text-xl font-bold text-slate-900">Booking</h3>
                <p class="text-base leading-7 text-slate-600">
                    Pesan tiket wisata dengan proses cepat, aman, dan tanpa ribet di banyak platform.
                </p>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-pink-100 text-2xl">⭐</div>
                <h3 class="mb-3 text-xl font-bold text-slate-900">Pilihan Terbaik</h3>
                <p class="text-base leading-7 text-slate-600">
                    Dapatkan rekomendasi destinasi populer berbasis rating dan review dari traveler lain.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 pb-20 sm:px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-3">
            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
                <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-6">
                    <span class="inline-flex rounded-full bg-white/80 px-2.5 py-1 text-xs font-semibold text-blue-700">Trending</span>
                    <h3 class="mt-5 text-2xl font-bold text-slate-900">Bali</h3>
                    <p class="mt-2 text-slate-700">Pantai, sunset, kuliner, dan liburan santai.</p>
                </div>
                <div class="p-6">
                    <p class="mb-4 text-sm text-slate-500">Mulai dari Rp 450.000</p>
                    <a href="{{ url('/destinations') }}" class="inline-flex rounded-full border border-blue-600 px-4 py-2 text-sm font-semibold text-blue-600 transition hover:bg-blue-600 hover:text-white">Lihat detail</a>
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
                <div class="bg-gradient-to-br from-emerald-100 to-emerald-200 p-6">
                    <span class="inline-flex rounded-full bg-white/80 px-2.5 py-1 text-xs font-semibold text-emerald-700">Favorit</span>
                    <h3 class="mt-5 text-2xl font-bold text-slate-900">Labuan Bajo</h3>
                    <p class="mt-2 text-slate-700">Eksplorasi alam dan pemandangan laut yang menakjubkan.</p>
                </div>
                <div class="p-6">
                    <p class="mb-4 text-sm text-slate-500">Mulai dari Rp 600.000</p>
                    <a href="{{ url('/destinations') }}" class="inline-flex rounded-full border border-blue-600 px-4 py-2 text-sm font-semibold text-blue-600 transition hover:bg-blue-600 hover:text-white">Lihat detail</a>
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
                <div class="bg-gradient-to-br from-amber-100 to-yellow-200 p-6">
                    <span class="inline-flex rounded-full bg-white/80 px-2.5 py-1 text-xs font-semibold text-amber-700">Baru</span>
                    <h3 class="mt-5 text-2xl font-bold text-slate-900">Yogyakarta</h3>
                    <p class="mt-2 text-slate-700">Budaya, sejarah, dan kuliner yang tak terlupakan.</p>
                </div>
                <div class="p-6">
                    <p class="mb-4 text-sm text-slate-500">Mulai dari Rp 350.000</p>
                    <a href="{{ url('/destinations') }}" class="inline-flex rounded-full border border-blue-600 px-4 py-2 text-sm font-semibold text-blue-600 transition hover:bg-blue-600 hover:text-white">Lihat detail</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 pb-20 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-gradient-to-r from-blue-600 to-sky-500 p-8 text-white shadow-xl shadow-blue-600/20 sm:p-10">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-medium text-blue-100">Mulai perjalananmu sekarang</p>
                    <h3 class="mt-2 text-2xl font-bold sm:text-3xl">Rencanakan liburan impianmu bersama System Travel</h3>
                </div>
                <a href="{{ url('/destinations') }}" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-base font-semibold text-blue-700 transition hover:bg-slate-100">
                    Lihat Destinasi
                </a>
            </div>
        </div>
    </section>
@endsection
