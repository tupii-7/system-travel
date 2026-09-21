@extends('layouts.app')

@section('title', 'System Travel - Jelajahi Indonesia')

@section('content')

    <!-- Hero Section -->
    <section class="bg-light py-5">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <h1 class="display-5 fw-bold">
                        Jelajahi Destinasi Impianmu
                    </h1>

                    <p class="lead text-muted mt-3">
                        Temukan destinasi wisata, susun perjalanan,
                        dan pesan tiket dengan mudah melalui System Travel.
                    </p>

                    <div class="mt-4">
                        <a href="#" class="btn btn-primary btn-lg">
                            Jelajahi Destinasi
                        </a>

                        <a href="#" class="btn btn-outline-secondary btn-lg ms-2">
                            Buat Itinerary
                        </a>
                    </div>

                </div>

                <div class="col-lg-5 mt-4 mt-lg-0">

                    <div class="card shadow-sm">
                        <div class="card-body p-4">

                            <h4 class="fw-bold mb-3">
                                Cari Destinasi
                            </h4>

                            <form action="#" method="GET">

                                <div class="mb-3">
                                    <label for="search" class="form-label">
                                        Nama destinasi
                                    </label>

                                    <input
                                        type="text"
                                        id="search"
                                        name="search"
                                        class="form-control"
                                        placeholder="Contoh: Pantai..."
                                    >
                                </div>

                                <div class="mb-3">
                                    <label for="category" class="form-label">
                                        Kategori
                                    </label>

                                    <select
                                        id="category"
                                        name="category"
                                        class="form-select"
                                    >
                                        <option value="">
                                            Semua kategori
                                        </option>

                                        <option value="alam">
                                            Wisata Alam
                                        </option>

                                        <option value="budaya">
                                            Wisata Budaya
                                        </option>

                                        <option value="kuliner">
                                            Kuliner
                                        </option>

                                        <option value="rekreasi">
                                            Rekreasi
                                        </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    Cari Destinasi
                                </button>

                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Feature Section -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Fitur System Travel
                </h2>

                <p class="text-muted">
                    Semua kebutuhan perjalanan dalam satu sistem.
                </p>
            </div>


            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">

                            <h4 class="fw-bold">
                                Destinasi
                            </h4>

                            <p class="text-muted">
                                Cari dan temukan berbagai destinasi wisata
                                berdasarkan kategori, harga, lokasi, dan rating.
                            </p>

                            <a href="#" class="btn btn-outline-primary">
                                Lihat Destinasi
                            </a>

                        </div>
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">

                            <h4 class="fw-bold">
                                Itinerary
                            </h4>

                            <p class="text-muted">
                                Susun urutan perjalanan dan destinasi yang
                                ingin dikunjungi dalam satu perjalanan.
                            </p>

                            <a href="#" class="btn btn-outline-primary">
                                Buat Itinerary
                            </a>

                        </div>
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">

                            <h4 class="fw-bold">
                                Booking
                            </h4>

                            <p class="text-muted">
                                Pesan tiket wisata dan simpan e-ticket
                                secara langsung melalui sistem.
                            </p>

                            <a href="#" class="btn btn-outline-primary">
                                Lihat Booking
                            </a>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection