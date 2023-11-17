<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UTS Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS Laravel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/product') }}">Produk</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    {{-- form --}}
    <div class="container">
        <h1 class="judul-form">Form Tambah Produk</h1>
        <form>
            <div class="row">
                <div class="col-lg">
                    <div class="mb-3">
                        <label class="form-label">Kode Produk</label>
                        <input type="text" class="form-control" placeholder="Input Kode Produk">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Input Nama Produk">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="mb-3">
                        @php
                            $nilai_awal = 0;
                        @endphp
                        <label class="form-label">Jenis Produk</label>
                        <select class="form-select">
                            @for ($i = 0; $i < $jumlah; $i++)
                                <option>{{ $jenis_produk[$i] }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" placeholder="Input Harga">
                    </div>
                </div>
                <div class="col-lg">
                    <div class="d-grid gap-2 button-rwt">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
