<?php
    include('assets/connection.php');
    if(isset($_POST['submit'])) {
        $idhotel = @$_POST['idhotel'];
        $nama = @$_POST['namahotel'];
        $deskripsi = @$_POST['deskripsi'];
        $updated_at = date('Y-m-d H:i:s');
        include('assets/file.php');

        $statemendata = mysqli_query($connection,"SELECT * FROM tb_hotel WHERE ID_HOTEL = '".$idhotel."'");
      
        while($row = mysqli_fetch_array($statementdata)){
            $imagelama = $row['IMAGE'];
        }

        $statement = mysqli_query($connection,"UPDATE tb_hotel SET NAMA='$nama', DESKRIPSI='$deskripsi', UPDATED_AT=TO_DATE('$updated_at','yyyy-mm-dd hh24:mi:ss'), IMAGE='$upload' WHERE ID_HOTEL='$idhotel'");
        $statement2 = mysqli_query($connection,"UPDATE tb_hotel SET NAMA='$nama', DESKRIPSI='$deskripsi', UPDATED_AT=TO_DATE('$updated_at','yyyy-mm-dd hh24:mi:ss') WHERE ID_HOTEL='$idhotel'");

        if(move_uploaded_file($_FILES['gambarhotel']['tmp_name'],$newfile)) {
            if($uploadOk == 1) {
                unlink($file_path.$imagelama);     
            
                    $_SESSION['message'] = '<div class="alert alert-success" role="alert">Edit Data Sukses</div>';
                    header('location:menu-admin.php');
                }  
            }else{
                $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Edit Data Gagal / File Bukan Image</div>';
                header('location:edit.php');
            }
        }else{
            if(oci_execute($statement2)) {
                $_SESSION['message'] = '<div class="alert alert-success" role="alert">Edit Data Sukses</div>';
                header('location:menu-admin.php?$idhotel');
            }else{
                $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Edit Data Gagal</div>';
                header('location:menu-admin.php');
            }
        }
    }
?>