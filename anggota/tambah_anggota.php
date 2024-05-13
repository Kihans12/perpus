<?php

// koneksi database
$conn = mysqli_connect('localhost', 'root', '', 'dbperpus');

// cek nis
if (isset($_POST['nis'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    

    $query = "SELECT nis FROM anggota WHERE nis = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $nis);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('NIS Anggota Sudah Terdaftar, Coba Lagi !!');</script>";
    } else {
        $query = "INSERT INTO anggota (nis, nama, jenis_kelamin, kelas) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $nis, $nama, $jenis_kelamin, $kelas);
        $stmt->execute();

        // Redirect to the same page after data is saved
        header("Location: daftar_anggota.php");
    }
}

// tampilkan data
$query = "SELECT nis FROM anggota";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

?>

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
                                    <a class="nav-link" href="daftar_anggota.php">Daftar Anggota</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">----</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
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
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">401 Page</a>
                                            <a class="nav-link" href="404.php">404 Page</a>
                                            <a class="nav-link" href="500.php">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
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
                        <h1 class="mt-4">Tambah Data Anggota</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Anggota</li>
                            <li class="breadcrumb-item active">Tambah Anggota</li>
                            
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
                                Tambah Data Anggota
                            </div>
                            <div class="card-body text-success">
                            <div class="row">
                            <div class="col-md-6 ">
                                <form method="POST" action="">
                                <div class="mb-3 mt-3-1">
                                    <label for="nis" class="form-label">No NIS :</label>
                                    <input type="number" name="nis" class="form-control" id="nis" placeholder="Masukkan NIS Siswa" required>
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="nama" class="form-label">Nama :</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Siswa" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 ">
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis_kelamin :</label>
                                    <select for="jenis_kelamin" name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                        <option value=""> -- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki"> Laki-laki</option>
                                        <option value="Perempuan"> Perempuan</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3 mt-3">
                                    <label for="kelas" class="form-label">Kelas :</label>
                                    <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan Kelas Siswa" required>  
                                </div>
                                <div class="mb-3">
                                    <a href="daftar_anggota.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Simpan</button>
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
