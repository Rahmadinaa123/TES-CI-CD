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
                        <a class="nav-link active" href="{{ route('user.tentang') }}" aria-current="page">Tentang
                            Kami</a>
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
                    <h2 class="text-center">Tentang Kami</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-10" style="margin:auto">
                        </div>
                    </div>

                    <h3>SELAMAT DATANG DI SMART FARMA</h3>
                    <p><b>Profil Smart Farma:</b><br>
                        Sistem Smart Farma berinisiatif untuk mengingkatkan efektivitas dalam layanan penjualan obat
                        dengan memanfaatkan system inovasi berbasis website. Menghadapi tentang di mana pelanggan harus
                        datang langsung ke Apotel untuk membeli dan memesan obat, Solusi ini dirancang untuk memberikan
                        kemudahan kepada pelanggan
                        Melalui website ini pelanggan dapat dengan mudah menelusuri katalog obat, memilih produk yang
                        diinginkan, dan menyelesaikan proses pembelian secara virtual. Sistem ini juga memfasilitasi
                        berbagai opsi pembayaran, baik melalui pick up, COD, maupum transfer</p>
                    <p><b> Tujuan Smart Farma:</b><br>
                        Smart Farma bertujuan untuk membuat obat-obatan lebih mudah diakses oleh
                        pelanggan, terutama bagi mereka yang memiliki keterbatasan mobilitas atau tinggal di daerah yang
                        sulit dijangkau secara fisik, dan menyediakan informasi yang lengkap dan jelas tentang setiap
                        produk obat, termasuk deskripsi, dosis, dan efek samping, untuk memberikan pemahaman yang baik
                        kepada pelanggan, serta dapat meningkatkan efisiensi operasional dengan menggunakan teknologi
                        untuk manajemen persediaan yang baik, pemrosesan pembayaran yang cepat, dan
                        pengiriman yang efisien</p>
                    <p><b>Manfaat Smart Farma:</b><br>
                        Smart Farma memiliki beberapa manfaat, yaitu:
                        <br>
                        1. Akses Mudah
                        Pelanggan dapat dengan mudah mengakses berbagai jenis obat-obatan tanpa harus pergi ke Apotek
                        <br>
                        2. Infromasi yang lengkap
                        Pelanggan mendapatkan informasi lengkap dan jelas tentang setiap produk, termasuk dosis, efek
                        samping dll <br>
                        3. Kemudahan berbelanja
                        Kemudahan berbelanja obat-obatan dari rumah mereka sendiri, tanpa perlu melakukan perjalanan ke
                        tempat fisik <br>
                        4. Pilihan yang luas
                        Dapat memilih berbagai obat-obatan dan produk Kesehatan tanpa terbatas stok yang tersedia pada
                        Apotek fisik <br>
                        5. Pelayanan pelanggan yang responsive
                        Layanan pelanggan yang responsive dan mudah diakses untuk menjawab pertanyaan atau menangani
                        masalah pelanggan
                    </p>
                    <p><b>Kontak:</b><br>
                        Kunjungi kami di [Alamat Kantor] atau hubungi kami di [082283889637] untuk pertanyaan lebih
                        lanjut.
                        [Email : smartfarma01@gmail.com ]</p>
                    <p><b>Ikuti Kami:</b><br>
                        Dapatkan update terbaru, tips kesehatan, dan promosi eksklusif dengan mengikuti kami di media
                        sosial kami: [Ig : smartfarmaaa].</p>
                    <p>Terima kasih telah memilih Smart Farma sebagai mitra kesehatan dan kesejahteraan Anda. Kami
                        berkomitmen untuk terus berinovasi demi meningkatkan kualitas hidup Anda.

                        <br><br>
                        Salam Sehat<br>
                        Tim Smart Farma
                    </p>
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
