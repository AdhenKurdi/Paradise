<?php

include('../assets/connection.php');

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $created_at = date('Y-m-d H:i:s');
    $del_flage = 0;

    include('../assets/file.php');

    $statement = mysqli_query($connection, "INSERT INTO tb_user(NAMA, USERNAME, EMAIL, PASSWORD,  CREATED_AT, DEL_FLAGE, GAMBAR) VALUES
    ('$nama','$username', '$email', '$password', to_date('$created_at', 'yyyy-mm-dd hh24:mi:ss'), '$del_flage', '$upload')");
    
    if(!file_exists($newfile)) {
        if($uploadOk == 1) {  
            move_uploaded_file($_FILES['gambar']['tmp_name'],$newfile);
            if {
                $_SESSION['message'] = '<div class="alert alert-success" role="alert">Tambah Data User Berhasil</div>';
                header('location:../admin_user.php');
            } else {
                $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Upload Data Gagal / File Bukan Image</div>';
                header('location:../user_tambah.php');
            }
        }else{
            $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Upload Data Gagal / File Bukan Image</div>';
            header('location:../user_tambah.php');
        }
    }else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">File Sudah Ada</div>';
        header('location:../user_tambah.php');
    }

}

?>