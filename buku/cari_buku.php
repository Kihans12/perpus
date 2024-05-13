<?php
    include "../config/koneksi.php";

    $i = 0;
    $keywords = mysqli_real_escape_string($koneksi, $_GET['keyword']);
    $keywords_arr = explode(" ", $keywords);

    $sql = "SELECT * FROM buku WHERE ";
    $where_clause = "";

    foreach ($keywords_arr as $keyword) {
        if ($where_clause != "") {
            $where_clause .= " AND ";
        }
        $where_clause .= "(id LIKE '%$keyword%' OR isbn LIKE '%$keyword%' OR kategori LIKE '%$keyword%' OR judul_buku LIKE '%$keyword%' OR pencipta LIKE '%$keyword%' OR penerbit LIKE '%$keyword%')";
    }

    $tampil = mysqli_query($koneksi, $sql . $where_clause);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data Buku</title>
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
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
                        <h1 class="mt-4">Cari Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Buku</li>
                            <li class="breadcrumb-item active">Cari Buku</li>
                            
                        </ol>
                        
        
                        <!-- Row Layout -->
                        <div class="row">
                        </div>
                        <div class="row">
                            <!-- layout Search-->
                            <form action="cari_buku.php" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                            <div class="col-sm-3 mb-4">
                                <div class="input-group " role="group">
                                    <input class="form-control" name="keyword" type="text" placeholder="Cari Data Buku" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                            
                        </div>
                            
                            
                            
                        </div>
                        <!-- Akhir Row Layout -->
                        <!-- Row Chart -->
                        <div class="row">

                        </div>

                        <div class="container-fluid">
                            
                            <div class="card border-success mb-3" >
                                <div class="card-header">Hasil Pencarian : keyword "<b><?=$keyword?></b>"</div>
                                <div class="card-body text-success">
                                    <div class="row">
                                        <div class="col-md-6 mb-2 ">
                                            <a href='data_buku.php' class='btn btn-warning'> Kembali</a>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID</th>
                                                        <th>ISBN</th>
                                                        <th>Kategori</th>
                                                        <th>Judul Buku</th>
                                                        <th>Pencipta</th>
                                                        <th>Penerbit</th>
                                                        <th>Tahun Terbit</th>
                                                        <th>Jumlah</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                            </tbody>
                                            <?php
                                            while($data=mysqli_fetch_array($tampil)){ $i++;
                                            ?>
                                            <tr>
                                                <td><?=$i?></td>
                                                <td><?=$data['id']?></td>
                                                <td><?=$data['isbn']?></td>
                                                <td><?=$data['kategori']?></td>
                                                <td><?=$data['judul_buku']?></td>
                                                <td><?=$data['pencipta']?></td>
                                                <td><?=$data['penerbit']?></td>
                                                <td><?=$data['tahun_terbit']?></td>
                                                <td><?=$data['jumlah']?></td>
                                                <td><?=$data['status']?></td>
                                                <td>
                                                    <a href="edit_buku.php?id=<?=$data['id']?>" class='btn btn-primary'>Edit</a>
                                                    <a href="delete_buku.php?id=<?=$data['id']?>" class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </main>
                    <!-- footer -->
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
        


</body>
</html>