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

        .text-right-custom {
            text-align: right;
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
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pemesanan.data') }}">Riwayat Pemesanan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page">Tentang Kami</a>
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
            <div class="container py-5">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="/RiwayatPemesanan" class="btn btn-warning mx-auto d-block">Kembali</a>
                    </div>
                    <h2 class="text-center">Detail Riwayat Pemesanan</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-5" style="margin:auto">
                            <table class="table" style="">
                                <tbody>
                                    <tr>
                                        <th class="col-md-5">Kode Pemesanan</th>
                                        <td>{{ $data->kode_pemesanan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-5">Tanggal Pemesanan</th>
                                        <td>{{ $data->tanggal_pemesanan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-5">Nama Pemesan</th>
                                        <td>{{ $data->nama_pemesan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-5">Alamat</th>
                                        <td>{{ $data->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-5">Metode Pembayaran</th>
                                        <td>{{ $data->metode_pembayaran }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-5">Metode Pengiriman</th>
                                        <td>{{ $data->metode_pengiriman }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-5">Status Pesanan</th>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5" style="margin:auto">
                            <table class="table" style="">
                                <tbody>
                                    <tr class="table table-success">
                                        <th class="col-md-5 text-center">Produk</th>
                                        <th class="col-md-3 text-center">Kuantitas</th>
                                        <th class="col-md-6 text-center">Harga</th>
                                    </tr>
                                    <tr>
                                        <td><img width="35%" class="gambar"
                                                src="{{ asset('images/' . $data->gambar) }}" alt="Gambar Item">
                                            {{ $data->obat }}</td>
                                        <td class="col-md-3 text-center">{{ $data->kuantitas }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right-custom">SubTotal :</td>
                                        <td></td>
                                        <td><input class="form-control col-md-12" type="text" id="subtotal"
                                                value="{{ $data->total_belanja }}" readonly>
                                    <tr>
                                        <td class="text-right-custom">Pengiriman :</td>
                                        <td></td>
                                        <td><input class="form-control" id="pengiriman" type="text"
                                                value="7.000" readonly>
                                    </tr>
                                    <tr>
                                        <td class="text-right-custom">Biaya Admin :</td>
                                        <td></td>
                                        <td><input class="form-control" id="admin" type="text" value="2.000"
                                                readonly>
                                    </tr>
                                    <tr>
                                        <th class="text-right-custom">Total :</th>
                                        <td></td>
                                        <td><input class="form-control total" id="total" type="text"
                                                value="" readonly></td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-sm-2">
                        @if ($data->status == 'menunggu pembayaran')
                            <a href="/halaman-transfer/" class="btn btn-success mx-auto d-block">Bayar Sekarang</a>
                        @elseif($data->status == 'sedang dikemas')
                            <a href="/batal" class="btn btn-danger mx-auto d-block">Batalkan
                                Pembayaran</a>
                        @elseif($data->status == 'dikirim')
                            <a href="/HubungiPenjual" class="btn btn-info mx-auto d-block">Hubungi Penjual</a>
                        @endif
                    </div>


                    <p></p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- Script JavaScript untuk menghitung total -->
    <!-- Tambahkan skrip berikut di akhir HTML, sebelum tag penutup </body> -->
    <script>
        // Fungsi untuk menghitung dan memperbarui total
        function updateTotal() {
            // Dapatkan nilai dari input
            var subtotal = parseFloat(document.getElementById('subtotal').value);
            var pengiriman = parseFloat(document.getElementById('pengiriman').value);
            var admin = parseFloat(document.getElementById('admin').value);

            // Hitung total
            var total = subtotal + pengiriman + admin;

            // Tampilkan total di input 'total'
            document.getElementById('total').value = total.toFixed(3); // Sesuaikan desimal sesuai kebutuhan
        }

        // Panggil fungsi updateTotal saat halaman dimuat
        window.onload = updateTotal;

        // Jika Anda ingin menghitung ulang total saat salah satu nilai input berubah, tambahkan event listener
        document.getElementById('subtotal').addEventListener('input', updateTotal);
        document.getElementById('pengiriman').addEventListener('input', updateTotal);
        document.getElementById('admin').addEventListener('input', updateTotal);
    </script>


</body>

</html>
