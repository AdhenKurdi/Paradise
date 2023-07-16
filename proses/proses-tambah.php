<?php
    include('assets/connection.php');
    if(isset($_POST['submit'])) {
        $nama = $_POST['namahotel'];
        $deskripsi = $_POST['deskripsi'];
        $created_at = date('Y-m-d H:i:s');
        $del_flage = 0;
        $mark_flage = 0;
        include('assets/file.php');

        $statement = mysqli_query($connection,"INSERT INTO tb_hotel (NAMA,GAMBAR,DESKRIPSI,CREATED_AT,DEL_FLAGE) 
        VALUES ('$nama','$upload','$deskripsi',to_date('$created_at','yyyy-mm-dd hh24:mi:ss'),'$del_flage')");

        if(!file_exists($newfile)) {
            if($uploadOk == 1) {  
                move_uploaded_file($_FILES['gambarhotel']['tmp_name'],$newfile);
                if {
                    $_SESSION['message'] = '<div class="alert alert-success" role="alert">Upload Data Sukses</div>';
                    header('location:menu-admin.php');
                }  
            }else{
                $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Upload Data Gagal / File Bukan Image</div>';
                header('location:tambah.php');
            }
        }else {
            $_SESSION['message'] = '<div class="alert alert-danger" role="alert">File Sudah Ada</div>';
            header('location:tambah.php');
        }
    }
?>