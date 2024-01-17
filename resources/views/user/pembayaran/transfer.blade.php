<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Pembayaran</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <style>
        .bukti {
            border: 1px solid black;
            /* Menambahkan border pada formulir */
        }

        .bg-green {
            background-color: green;
            /* Ganti warna hijau sesuai keinginan */
            padding: 10px;
            /* Sesuaikan padding sesuai kebutuhan */
            color: white;
            margin-bottom: 20px;
            /* Sesuaikan warna teks sesuai kebutuhan */
        }

        .bg-blue {
            background-color: blue;
            /* Ganti warna biru sesuai keinginan */
            padding: 10px;
            /* Sesuaikan padding sesuai kebutuhan */
            color: white;
            /* Sesuaikan warna teks sesuai kebutuhan */
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
                        <a class="nav-link" href="{{ route('user.pemesanan.data') }}">Riwayat Pemesanan</a>
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
        <section>
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

                <div class="container">
                    <div class="row">
                        <h2 class="text-center">Silahkan Melakukan Transfer Melalui Nomor Rekening Di Bawah Ini</h2>
                        <hr>
                        <!-- Kolom kiri -->
                        <div class="col-md-6">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body bg-green">
                                    <h5 class="card-title">BRI</h5>
                                    <h6 class="card-subtitle mb-2">A. n Rahmadina</h6>
                                    <p class="card-text">13613131863</p>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-body bg-blue">
                                    <h5 class="card-title">BSI</h5>
                                    <h6 class="card-subtitle mb-2">A. n Suci Alhanum</h6>
                                    <p class="card-text">13613131863</p>
                                </div>
                            </div>

                        </div>


                        <!-- Kolom kanan -->
                        <div class="col-md-6">
                            <div class="pb-3bukti">
                                <h2 class="mb-4 text-center">Form Upload Bukti Pembayaran</h2>

                                <form action="{{ route('postBuktiTf.user') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- Ini digunakan jika Anda menggunakan Laravel untuk mengamankan formulir -->

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <input type="hidden" id="tanggal_pembayaran" name="tanggal_pembayaran"
                                                class="form-control" value="{{ $currentDate }}" readonly>
                                        </div>
                                        <label for="bukti_pembayaran">Kode Pemesanan:</label>
                                        <input type="text" class="form-control" id="bukti_pembayaran"
                                            name="kode_pemesanan" accept="image/*" required>
                                        <small class="form-text text-muted">Kode pemesanan lihat di riwayat pemesanan
                                            ->detail</small> <br> <br>
                                        <label for="bukti_pembayaran">Bukti Pembayaran:</label>
                                        <input type="file" class="form-control-file" id="bukti_pembayaran"
                                            name="bukti_pembayaran" accept="image/*" required> <br>
                                        <small class="form-text text-muted">File harus berupa gambar (jpeg, jpg, png,
                                            dll.)</small>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Unggah Bukti Pembayaran</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


    </div>

    </div>
    </div>
    </div>
    </section>
    </div>
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
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2024. All Rights Reserved.</p>
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
