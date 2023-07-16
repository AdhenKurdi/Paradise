<?php
    include('assets/connection.php');
    if(isset($_POST['submit'])) {
        $id = @$_POST['id'];
        $username = @$_POST['username'];
        $password = md5(@$_POST['password']);
        $updated_at = date('Y-m-d H:i:s');
        include('assets/file.php');

        $statemendata = mysqli_query($connection,"SELECT * FROM tb_admin WHERE ID_ADMIN = '".$id."'");
       
        $row = mysqli_fetch_array($statementdata);
        $imagelama = $row['IMAGE'];

        $statement1 = mysqli_query($connection,"SELECT * FROM tb_admin WHERE USERNAME='$username' and PASSWORD='$password'");
        
        mysqli_fetch($statement1);
        $cek = mysqli_num_rows($statement1);

        $statement = mysqli_query($connection,"UPDATE tb_admin SET UPDATED_AT=TO_DATE('$updated_at','yyyy-mm-dd hh24:mi:ss'), GAMBAR='$upload' WHERE ID_ADMIN='$id'");

        if($cek >= 0){
            if(move_uploaded_file($_FILES['gambarhotel']['tmp_name'],$newfile)) {
                if($uploadOk == 1) {
                    unlink($file_path.$_SESSION['admin_profil']);     
                  
                        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Edit Profil Sukses</div>';
                        header('location: profile-admin.php');
                    }  
                }else{
                    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Edit Profil Gagal / File Bukan Image</div>';
                    header('location: profile-admin.php');
                }
            }else{
                $_SESSION['message'] = '<div class="alert alert-success" role="alert">Edit Data Sukses</div>';
                header('location: menu-admin.php');
            }
        }else{
            $_SESSION['message'] = '<div class="alert alert-danger" role="alert">User Atau Password Salah"'.$cek.'"</div>';
            header("location: menu-admin.php");
        };
    }
?>