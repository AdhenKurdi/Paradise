<?php
include('assets/connection.php');
if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // menyeleksi data admin dengan username dan password yang sesuai
        $statement = mysqli_query($connection,"SELECT * FROM tb_admin WHERE USERNAME='$username' and PASSWORD='$password'");
        
        $row = mysqli_fetch_array($statement);

        $statement2 = mysqli_query($connection,"SELECT * FROM tb_user WHERE USERNAME='$username' and PASSWORD='$password'");

        $cek = mysqli_num_rows($statement);
        $cek2 = mysqli_num_rows($statement2);
        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['admin_login'] = true;
            $_SESSION['admin_id'] = $row['ID_ADMIN'];
            $_SESSION['admin_profile'] = $row['GAMBAR'];
            header("location:admin/menu_admin.php");
        }else if($cek2 > 0){
            $_SESSION['username'] = $username;
            $_SESSION['user_login'] = true;
            header("location:index.php");
        }else{
            header("location:login.php?pesan=gagal");
        };
    }else{
        die("Akses dilarang...");
}
?>