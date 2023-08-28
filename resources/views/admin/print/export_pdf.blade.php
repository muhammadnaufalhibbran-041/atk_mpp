<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laporan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h3 style="text-align: center">laporan mpp</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Name Barang</th>
                    <th scope="col">Stok Barang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $x)

                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $x->kategori->nama_kategori }}</td>
                    <td>{{ $x->nama_barang }}</td>
                    <td>{{ $x->stok_barang }}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
