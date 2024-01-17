<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMART FARMA</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMART FARMA</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.user') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dataObat') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Obat</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dataApoteker') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Apoteker</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dataPemesanan') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Pemesanan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dataPengiriman') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Pengiriman</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dataPembayaran') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Pembayaran</span></a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->username }}</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    <a href="{{ route('admin.dataObat') }}">
                        <i class="bi-arrow-left h1"></i>
                    </a>
                    <div class="container mt-3">
                        @if (Session::get('success'))
                            <div class="alert alert-success alert-dismissible fadeshow" role="alert">
                                <strong>Berhasil!</strong> {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs- dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::get('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Gagal!</strong> {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs- dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="{{ route('admin.dataPembayaran') }}"
                                class="btn btn-warning mx-auto d-block">Kembali</a>
                        </div>
                        <div class="col-sm-12"></div>
                        <h2 class="text-center">Detail Pembayaran</h2>
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
                                            <td><input class="form-control" id="admin" type="text"
                                                    value="2.000" readonly>
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
                        <p></p>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    </div>


    <!-- Content Row -->



    <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

    </div>

    <!-- End of Main Content -->
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; SMART FARMA 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

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


    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
