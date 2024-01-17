<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <style>
        /* public/css/styles.css atau tambahkan langsung pada tag <style> di dalam file view */
        .card {
            /* Pastikan ukuran card tetap */
            height: 100%;
        }

        .product-image {
            /* Menyesuaikan ukuran gambar */
            max-height: 200px;
            width: 100%;
            object-fit: contain;
            /* Menggunakan contain untuk menjaga gambar tidak terpotong */
        }

        #navbarHead {
            background-color: lightskyblue;
        }

        #carouselExampleIndicators {
            max-width: 100%;
            /* Set your preferred maximum width */
            margin: auto;
            /* Center the carousel */
        }

        .custom-carousel-image {
            width: 100%;
            /* Set your preferred width */
            height: auto;
            /* Maintain the aspect ratio */
            /* Additional styles if needed */
        }

        .proses {
            border: 1px solid black;
            /* Menambahkan border pada formulir */
            padding: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar" id="navbarHead" aria-label="Dark offcanvas navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.png" alt="Smart Farma Logo" width="100" height="100">
                SMART FARMA
            </a>
            <div class="d-flex justify-content-between">
                <form style="margin-right: 20px" class="d-flex" role="search">

                </form>
                <div>
                    <a href="/logout" class="btn btn-primary">Logout</a>
                </div>
            </div>


        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.home') }}">Semua Kategori</a></li>
                            <li><a class="dropdown-item" href="{{ route('kategori.bebas') }}">Bebas</a></li>
                            <li><a class="dropdown-item" href="{{ route('kategori.bebasTerbatas') }}">Bebas Terbatas</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('kategori.keras') }}">Keras</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Riwayat Pemesanan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Tentang Kami</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="bi bi-person"></i> {{ Auth::user()->username }}</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <div>
        <section style="background-color: #eee;">
            <div class="container pt-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fadeshow" role="alert">
                        <strong>Berhasil!</strong> {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs- dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> {{ Session::get('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h2>Proses Pembelian</h2>
                <div class="row">
                    <div class="col md-8 proses">
                        <form method="POST" action="{{ route('admin.postPemesanan.user') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                            <div class="mb-3">
                                <label for="nama_pemesan">Nama Pemesan:</label>
                                <input type="text" id="nama_pemesan" name="nama_pemesan" class="form-control"
                                    value="{{ Auth::user()->username }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama_obat">Nama Obat:</label>
                                <input type="text" id="nama_obat" name="nama_obat" class="form-control"
                                    value="{{ $data->nama_obat }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="harga">Harga Obat:</label>
                                <input type="text" id="harga_obat" name="harga_obat" class="form-control"
                                    value="{{ $data->harga }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="gambar">Gambar:</label>
                                <input type="hidden" id="gambar" name="gambar" class="form-control"
                                    value="{{ $data->gambar }}" readonly>
                                <img src="{{ asset('images/' . $data->gambar) }}" class="card-img-top product-image"
                                    alt="{{ $data->name }}" />
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
                                <input type="date" id="tanggal_pemesanan" name="tanggal_pemesanan"
                                    class="form-control" value="{{ $currentDate }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="kuantitas">Kuantitas:</label>
                                <input type="number" id="kuantitas" name="kuantitas" class="form-control"
                                    placeholder="Masukkan jumlah" required oninput="updateTotalHarga()">
                            </div>
                            <div class="mb-3">
                                <label for="total_harga">Total Harga:</label>
                                <input type="number" id="total_harga" name="total_harga" class="form-control"
                                    placeholder="Masukkan jumlah" required readonly>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" id="waktu_pengiriman" name="waktu_pengiriman"
                                    class="form-control" value="-">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Pembelian</button>
                        </form>
                    </div>
                    <div class="col-md-4 ketentuan">
                        <h3 class="">Ketentuan</h3>
                        <p>
                            1. Pembelian Obat Minimal Rp 15.000,- <br>
                            2. Ongkir Sesuai Area Pemesanan <br>
                            3. Obat Yang Telah Dibeli Tidak Dapat Dikembalikan <br>
                        </p>

                    </div>
                </div>

            </div>
    </div>

    </div>
    </div>
    </div>
    </section>
    </div>

    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function updateTotalHarga() {
            var kuantitas = document.getElementById('kuantitas').value;
            var harga = parseFloat('{{ $data->harga }}'); // Assuming $data->harga is the unit price
            var totalHarga = kuantitas * harga;
            document.getElementById('total_harga').value = totalHarga.toFixed(3);
        }
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
