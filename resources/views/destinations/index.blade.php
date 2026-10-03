@extends('layouts.app')

@section('content')

    <h1>Destinasi Wisata</h1>

    @foreach ($destinations as $destination)

        <div>
            <h2>{{ $destination->name }}</h2>

            <p>
                Kategori:
                {{ $destination->category->name }}
            </p>

            <p>
                {{ $destination->description }}
            </p>

            <p>
                Harga tiket:
                Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
            </p>

            <p>
                Jam buka:
                {{ $destination->opening_hours }}
            </p>

            <p>
                Lokasi:
                {{ $destination->location }}
            </p>

            <hr>

        </div>

    @endforeach

@endsection