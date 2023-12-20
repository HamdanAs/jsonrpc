<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="antialiased">
    <div class="container mt-5">
        <h4>Tabel Data</h4>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pitch</th>
                    <th scope="col">Yaw</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Panjang</th>
                    <th scope="col">Lebar</th>
                    <th scope="col">Luas</th>
                    <th scope="col">Keliling</th>
                    <th scope="col">Latensi</th>
                    <th scope="col">Waktu Dikirim</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persegis as $persegi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $persegi->pitch }}</td>
                    <td>{{ $persegi->yaw }}</td>
                    <td>{{ $persegi->roll }}</td>
                    <td>{{ $persegi->panjang }}</td>
                    <td>{{ $persegi->lebar }}</td>
                    <td>{{ $persegi->luas }}</td>
                    <td>{{ $persegi->keliling }}</td>
                    <td>{{ $persegi->latensi }}</td>
                    <td>{{ $persegi->waktu_kirim }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
