@extends('layouts.app')

@section('title', 'Destinasi Wisata - System Travel')

@section('content')
    <section class="bg-gradient-to-br from-sky-50 via-blue-50 to-slate-100">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">Jelajahi Indonesia</p>
            <h1 class="mt-3 text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">Destinasi Wisata</h1>
            <p class="mt-4 max-w-2xl text-lg leading-8 text-slate-600">
                Temukan tempat terbaik untuk perjalanan berikutnya sesuai minat dan lokasi favoritmu.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <form action="{{ route('destinations.index') }}" method="GET" class="grid gap-4 rounded-3xl border border-slate-200 bg-white p-5 shadow-sm md:grid-cols-[1fr_240px_auto] md:items-end">
            <div>
                <label for="search" class="mb-2 block text-sm font-semibold text-slate-700">Cari destinasi</label>
                <input type="search" id="search" name="search" value="{{ $search }}" placeholder="Nama, lokasi, atau deskripsi" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100">
            </div>
            <div>
                <label for="category" class="mb-2 block text-sm font-semibold text-slate-700">Kategori</label>
                <select id="category" name="category" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-700 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100">
                    <option value="">Semua kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->name }}" @selected($categoryName === $category->name)>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="rounded-2xl bg-blue-600 px-6 py-3 font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">Terapkan Filter</button>
        </form>

        <div class="mt-10 flex items-end justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Pilihan destinasi</h2>
                <p class="mt-1 text-sm text-slate-500">{{ $destinations->count() }} destinasi ditemukan</p>
            </div>
            @if ($search !== '' || $categoryName !== '')
                <a href="{{ route('destinations.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Reset filter</a>
            @endif
        </div>

        @if ($destinations->isEmpty())
            <div class="mt-6 rounded-3xl border border-dashed border-slate-300 bg-slate-50 px-6 py-14 text-center">
                <h3 class="text-xl font-bold text-slate-900">Destinasi tidak ditemukan</h3>
                <p class="mt-2 text-slate-600">Coba gunakan kata kunci atau kategori yang berbeda.</p>
            </div>
        @else
            <div class="mt-6 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($destinations as $destination)
                    <article class="flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                        <div class="flex h-36 items-end bg-gradient-to-br from-blue-100 via-sky-100 to-slate-100 p-5">
                            <span class="rounded-full bg-white/80 px-3 py-1 text-xs font-semibold text-blue-700">{{ $destination->category->name }}</span>
                        </div>
                        <div class="flex flex-1 flex-col p-6">
                            <h3 class="text-xl font-bold text-slate-900">
                                <a href="{{ route('destinations.show', $destination) }}" class="transition hover:text-blue-600">{{ $destination->name }}</a>
                            </h3>
                            <p class="mt-3 line-clamp-3 text-sm leading-6 text-slate-600">{{ $destination->description }}</p>
                            <dl class="mt-5 space-y-2 text-sm text-slate-500">
                                <div class="flex justify-between gap-4"><dt>Lokasi</dt><dd class="font-medium text-slate-700">{{ $destination->location }}</dd></div>
                                <div class="flex justify-between gap-4"><dt>Jam buka</dt><dd class="font-medium text-slate-700">{{ $destination->opening_hours ?: 'Tidak tersedia' }}</dd></div>
                                <div class="flex justify-between gap-4"><dt>Tiket</dt><dd class="font-semibold text-blue-700">Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}</dd></div>
                            </dl>
                            <a href="{{ route('destinations.show', $destination) }}" class="mt-6 inline-flex items-center font-semibold text-blue-600 transition hover:text-blue-700">
                                Lihat detail
                                <span aria-hidden="true" class="ml-2">→</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </section>
@endsection
