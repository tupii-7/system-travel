@extends('layouts.app')

@section('title', $destination->name . ' - System Travel')

@section('content')
    <section class="bg-gradient-to-br from-sky-50 via-blue-50 to-slate-100">
        <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            <a href="{{ route('destinations.index') }}" class="inline-flex items-center font-semibold text-blue-600 transition hover:text-blue-700">
                <span aria-hidden="true" class="mr-2">←</span>
                Kembali ke destinasi
            </a>
        </div>
    </section>

    <section class="mx-auto max-w-5xl px-4 py-10 sm:px-6 lg:px-8">
        <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
            <div class="flex min-h-64 items-end bg-gradient-to-br from-blue-100 via-sky-100 to-slate-100 p-6 sm:min-h-80 sm:p-10">
                <div>
                    <span class="inline-flex rounded-full bg-white/80 px-3 py-1 text-sm font-semibold text-blue-700">{{ $destination->category->name }}</span>
                    <h1 class="mt-4 text-4xl font-black tracking-tight text-slate-900 sm:text-5xl">{{ $destination->name }}</h1>
                    <p class="mt-3 text-lg font-medium text-slate-700">{{ $destination->location }}</p>
                </div>
            </div>

            <div class="grid gap-10 p-6 sm:p-10 lg:grid-cols-[1fr_280px]">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Tentang destinasi</h2>
                    <p class="mt-4 text-base leading-8 text-slate-600">{{ $destination->description }}</p>
                </div>

                <dl class="space-y-5 rounded-2xl bg-slate-50 p-5">
                    <div>
                        <dt class="text-sm text-slate-500">Harga tiket</dt>
                        <dd class="mt-1 text-xl font-bold text-blue-700">Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-slate-500">Jam buka</dt>
                        <dd class="mt-1 font-semibold text-slate-800">{{ $destination->opening_hours ?: 'Tidak tersedia' }}</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-slate-500">Lokasi</dt>
                        <dd class="mt-1 font-semibold text-slate-800">{{ $destination->location }}</dd>
                    </div>
                </dl>
            </div>
        </article>
    </section>
@endsection
