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
    <link href="/assets/css/pembayaran-style.css" rel="stylesheet" />
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

                <h2>Pembayaran</h2>
                <form class="mt-4 mb-4" action="{{ route('postPembayaran.user') }}" method="post">
                    @csrf
                    <input type="hidden" name="kode_pemesanan" value="{{ $kode_pemesanan }}">
                    <div class="alamat">
                        <p>Alamat Pengiriman : {{ $alamat }}</p>
                    </div>
                    <div class="row">
                        <div class="metode">
                            <div class="pengiriman">
                                <h3>Pilih Metode Pengiriman:</h3>
                                <hr>
                                <div class="container">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="metode_pengiriman"
                                            value="PCP/POS/JNE/EMS/TIKI/J&T/KGP (REGULAR)" id="paket">
                                        <label class="form-check-label" for="paket">Paket (Jnt, Jne, Tiki,
                                            Dll)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="metode_pengiriman"
                                            value="Ambil di Apotek" id="ambil-di-apotek">
                                        <label class="form-check-label" for="ambil-di-apotek">Ambil di Apotek</label>
                                        <p><b>Apotek Mitra Farma</b> <br> Jl.Kelapapati Tengah No.90, Klp. Pati, Kec.
                                            Bengkalis, Kab. Bengkalis - Riau (28711) </p>
                                    </div>
                                </div>

                            </div>

                            <div class="pembayaran">
                                <h3>Pilih Metode Pembayaran:</h3>
                                <hr>
                                <div class="container">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="metode_pembayaran"
                                            value="Transfer Bank" id="paket">
                                        <label class="form-check-label" for="paket">Transfer Bank</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="metode_pembayaran"
                                            value="Bayar Di tempat (COD)" id="ambil-di-apotek">
                                        <label class="form-check-label" for="ambil-di-apotek">Bayar Ditempat.
                                            COD</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="konfirmasi col-md-5">
                            <div class="detail col-md-5">
                                <h3>Detail Belanja:</h3>
                                <hr>

                                <table class="table">
                                    <tr>
                                        <td><img class="gambar" src="{{ asset('images/' . $gambarObat) }}"
                                                alt="Gambar Item"></td>
                                        <td>{{ $namaObat }}</td>
                                        <td>{{ $kuantitas }}</td>
                                        <td>Rp. {{ $hargaObat }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="ringkasan">
                                <h3>Ringkasan Belanja:</h3>
                                <hr>
                                <div class="row">
                                    <table class="ml-5">
                                        <tr>
                                            <td class="mb-3 col-md-6">Total Harga Barang</td>
                                            <td class=""><input class="form-control" name="total_harga_barang"
                                                    type="text" value="{{ $hargaObat }}" readonly></td>
                                        </tr>
                                        <tr>
                                            <td class="mb-3 col-md-6">Total Belanja</td>
                                            <td class=""><input class="form-control" name="total_belanja"
                                                    value="{{ $totalHarga }}" type="text" readonly></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row submit">
                                <button type="submit" class="btn btn-warning">konfirmasi Pemesanan</button>
                            </div>


                        </div>
                    </div>

                    <br>

                    <br>
                </form>
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
