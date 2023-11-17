<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | Tabel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/form') }}">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- table list mahasiswa -->
    <!-- <div class="display-mhs">
        <div class="container">
            <h1>Coming <span>Soon</span></h1>
        </div>
    </div> -->

    <div class="display-mhs table-responsive">
        <div class="container">
            <h1>Welcome <span>To</span> Mahasiswa List</h1>

            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Npm</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $data_awal = 0;
                    @endphp
                    @for ($i = 0; $i < $jumlah; $i++)
                    <tr>
                        <th scope="row">{{ $no[$i] }}</th>
                        <td>{{ $nama[$i] }}</td>
                        <td>{{ $npm[$i] }}</td>
                        <td>{{ $jurusan[$i] }}</td>
                        <td>{{ $kelas[$i]}}</td>
                        <td>{{ $tgl_lahir[$i] }}</td>
                        <td>{{ $tmp_lahir[$i] }}</td>
                        <td><button class="btn btn-primary">Edit</button></td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>