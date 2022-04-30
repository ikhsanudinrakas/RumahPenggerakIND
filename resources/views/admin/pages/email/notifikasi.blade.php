<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul ?? 'Notifikasi' }}</title>
</head>
<body>
    <h1>{{ $judul }}</h1>
    <p>
        {{ $deskripsi }}
    </p>

    <p class="mt-5">
        <div>
            Hormat Kami,
        </div>
        <br><br>
        <div class="mt-4">
            {{ env('APP_NAME') }}
        </div>
    </p>
</body>
</html>
