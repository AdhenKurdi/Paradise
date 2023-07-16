<?php 
include('assets/connection.php');
if(!isset($_SESSION['login'])) {
    header("location: index.php");
};
$statement = mysqli_query($connection, "SELECT * FROM tb_hotel WHERE DEL_FLAGE=0");

?>
<head>
    <?php include('assets/header-admin.php');?>
    <title>Admin Page</title>
</head>
<style>
    img{
        width: 130px;
    }
</style>
<?php include('assets/js.php');?>
<body>
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
                                <h3 class="text-end">Data-Data Hotel</h3>
                            </div>
                    </div>
                </nav>
                <div class="container">
                    <?php
                    if(!empty($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        $_SESSION['message'] = null;
                    }; 
                    ?>
                    <table class="table table-striped table-hover table-info">
                        <thead class="text-center">
                            <tr>
                            <th scope="col" style="width: 5px">No</th>
                            <th scope="col" style="width: 15vh">Nama Hotel</th>
                            <th scope="col">Gambar Hotel</th>
                            <th scope="col" style="width: 20vh">Deskripsi</th>
                            <th scope="col">Ubah</th>
                            <th scope="col">Delete Data</th>
                            
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php 
                        $no = 1;
                        while($row = mysqli_fetch_array($statement)) {         
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$row['NAMA']."</td>";
                        echo "<td><img src='img2/".$row['GAMBAR']."'></td>";
                        echo "<td>".$row['DESKRIPSI']."</td>";

                        echo '<td><a href="edit.php?id='.$row['ID_HOTEL'].'"><button class="btn btn-warning">Ubah</button></a>';
                        echo '<td><a href="deleted.php?id='.$row['ID_HOTEL'].'"><button class="btn btn-danger">Deleted</button></a>';
                        } ?>
                        </tbody>
                    </table>
                </div>   
            </div>
    </div>
</body>
</html>