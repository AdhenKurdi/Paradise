<?php

include("assets/connection.php");
if (!$_SESSION['login']) {
    header("location: assets/header-admin.php");
}
$statement = mysqli_query($connection, "SELECT * FROM tb_admin");

while($row = mysqli_fetch_array($statement)) {
    $id = $row['ID_ADMIN'];
    $username = $row['USERNAME'];
    $password = $row['PASSWORD'];
    $gambar = $row['GAMBAR'];
   
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <?php include('assets/header.php');?>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/sidebar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>

        <!--wrapper start-->
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
                                <h3 class="text-end">Pengaturan Profil</h3>
                            </div>
                    </div>
                </nav>
                <div class="pt-1">
                <?php if(!empty($_SESSION['message'])){
                        echo $_SESSION['message'];
                        $_SESSION['message'] = null;
                    }
                ?>
                    <div class="card mt-2">
                        <form action="proses-profile.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_SESSION['admin_id']; ?>" placeholder="contoh" required>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto Profil</label>
                                    <br><img src="img2/<?php echo $_SESSION['admin_profile']?>" width="150px" class="rounded-circle img-thumbnail shadow-sm">
                                    <input type="file" class="form-control p-2"  style="border:none" id="gambar" name="gambarhotel" placeholder="Pilih file...">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" placeholder="Ketik username baru..." required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn" onclick="return confirm('Apakah Anda Yakin Mengganti Profil?')" style="background: cadetblue; color: white;" value="Ubah Data">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
    </div>  
        <?php include('assets/js.php');?>
    </body>