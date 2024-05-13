<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan 7</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">PERPUSTAKAAN</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Hari Tanggal Bulan Tahun -->
            <a class="navbar-brand d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" style="font-family: 'Quicksand', sans-serif;">
                <script type='text/javascript'>
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    //
                </script>
            </a>
        </nav>
        <!-- Navbar-->

        <!-- Sidebar -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">MENU</div>
                            <a class="nav-link" href="../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">TAMPILAN</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data - Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../buku/data_buku.php">Data Buku</a>
                                    <a class="nav-link" href="../peminjaman/data_peminjaman.php">Data Peminjaman</a>
                                    <a class="nav-link" href="../pengembalian/data_pengembalian.php">Data Pengembalian</a>
                                    <a class="nav-link" href="../anggota/daftar_anggota.php">Data Anggota</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Lainnya
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Akun
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Informasi
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="laporan/laporan.php">Laporan Buku</a>
                                            <a class="nav-link" href="laporan/laporan.php">Peminjaman</a>
                                            <a class="nav-link" href="laporan/laporan.php">Anggota</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Lainnya</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Informasi Aplikasi
                            </a>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Admin Perpustakaan:</div>
                        SMAN 7 TASIKMALAYA
                    </div>
                </nav>
            </div>
            <!-- Akhir Sidebar -->

            <!-- Isi Dashboard -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Data Peminjaman</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Peminjaman</li>
                            <li class="breadcrumb-item active">Edit Peminjaman</li>
                            
                        </ol>
                        
        
                        <!-- Row Layout -->
                        <div class="row">
                            
                            
                            
                            
                        </div>
                        <!-- Akhir Row Layout -->
                        <!-- Row Chart -->
                        <div class="row">
                            
                        </div>
                        <!-- Data Table -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Data Peminjaman
                            </div>
                            <div class="card-body text-success">
                            <div class="row">
                            <div class="col-md-6 ">
                                <form method="POST" action="update_peminjaman.php">
                                <?php
                                include "../config/koneksi.php";
                                $id_pinjam = $_GET['id_pinjam'];
                                $tampil = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_pinjam='$id_pinjam'");
                                $data = mysqli_fetch_array($tampil);
                                ?>

                                <div class="mb-3 mt-3-1">
                                    <label for="id_pinjam" class="form-label">No ID Pinjam :</label>
                                    <input type="hidden" name="id_pinjam_tmp" value="<?= $data['id_pinjam'] ?>" class="form-control" id="id_pinjam_tmp" readonly>
                                    <input type="number" name="id_pinjam" value="<?= $data['id_pinjam'] ?>" class="form-control" id="id_pinjam"  required>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="identitas_peminjam" class="form-label">Identitas Peminjam :</label>
                                    <input type="text" name="identitas_peminjam" value="<?= $data['identitas_peminjam'] ?>" class="form-control" id="identitas_peminjam"  required>
                                </div>
                                <div class="mb-3">
                                    <label for="judul_buku" class="form-label">Judul Buku :</label>
                                    <input type="text" name="judul_buku" value="<?= $data['judul_buku'] ?>" class="form-control" id="judul_buku"  required>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-6 ">
                                <div class="mb-3">
                                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam :</label>
                                    <input type="date" name="tanggal_pinjam" value="<?= $data['tanggal_pinjam'] ?>" class="form-control" id="tanggal_pinjam"  readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="batas_pinjam" class="form-label">Batas Pinjam :</label>
                                    <input type="date" name="batas_pinjam" value="<?= $data['batas_pinjam'] ?>" class="form-control" id="batas_pinjam"  readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah :</label>
                                    <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" class="form-control" id="jumlah"  required>
                                </div>
                                
                                <div class="mb-3">
                                    <a href="data_peminjaman.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Perbaharui</button>
                                </div>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Footer -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SMA Negeri 7 Tasikmalaya</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
