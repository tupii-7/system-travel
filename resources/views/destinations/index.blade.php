<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Destinasi</title>
</head>

<body>

    <h1>Daftar Destinasi</h1>

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
                Harga:
                Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
            </p>

            <p>
                Lokasi:
                {{ $destination->location }}
            </p>

            <hr>
        </div>

    @endforeach

</body>
</html>