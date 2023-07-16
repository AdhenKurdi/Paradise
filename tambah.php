<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('assets/header-admin.php');?>
    <title>Tambah Data</title>
</head>
<?php 
include('assets/js.php');
include('assets/connection.php');
if(!isset($_SESSION['login'])) {
    header("location: index.php");
};
?>
<body>
    <nav id="sidebar" class="sidebar">
                <div class="sidebar-header">
                    <h3>Tes 123 </h3></h3>
                    <h6>Selamat Datang <?php echo $_SESSION['username']?></h6>
                </div>
                <ul class="nav flex-column" id="nav_accordion">
                    <li class="nav-item has-submenu">
                        <a class="nav-link"><i class="fas fa-book mx-2"></i>Data Hotel </a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="menu-admin.php">List Hotel</a></li>
                            <li><a class="nav-link" href="tambah.php">Tambah Hotel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#"><i class="fas fa-user mx-2"></i>Profile  </a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="#">Pengaturan Akun </a></li>
                            <li><a class="nav-link" href="#">Ganti Foto Profil </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-door-open mx-2"></i>Log Out </a>
                    </li>
                </ul>
            </nav>
    <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include('assets/sidebar.php'); ?>
            <!-- Page Content Holder -->
            <div id="content">
                <nav class="navbar navbar-default">
                    <div class="container">

                        <div class="navbar-header">
                            <div class="col-md-6">
                                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fas fa-list-ul"></i>
                                <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-11">
                                <h3 class="text-end">Tambah Data Hotel</h3>
                            </div>
                    </div>
                </nav>
                <div class="container col-md-4 mt-5 mb-5" style="background-color: orangered; border-radius: 10px;">
                  <h3 class="text-center">Input Data Hotel</h3>
                  <?php
                  if(!empty($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                  }; 
                  ?>
                    <form method="POST" action="proses-tambah.php" enctype="multipart/form-data">
                      <div class="mb-3">
                        <label for="exampleInputNama1" class="form-label">Nama Hotel</label>
                        <input type="nama" class="form-control" name="namahotel">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputJenisKelamin1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputJenisPekerjaan1" class="form-label">Gambar Hotel</label>
                        <input type="file" class="form-control" name="gambarhotel">
                      </div>
                      <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                      <a href="menu-admin.php"><button class="btn btn-danger" type="button">Cancel</button></a>
                    </form><br>
                </div> 
            </div>
    </div>  
</body>
</html>