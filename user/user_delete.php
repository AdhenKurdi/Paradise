<?php

include('assets/connection.php');
if(isset($_GET['id'])) {
    $id_user = $_GET['id'];
    $deleted_at = date('Y-m-d H:i:s');
    $del_flage = 1;
    $statement = ($connection, "UPDATE tb_user SET DELETED_AT=TO_DATE('$deleted_at','yyyy-mm-dd hh24:mi:ss'), DEL_FLAGE='$del_flage' WHERE ID_USER='$id_user'");
    if{
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Hapus Data Berhasil</div>';
        header('location:admin_hotel.php');
    }else{
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Hapus Data Gagal</div>';
        header('location:admin_hotel.php');
    }
}
?>