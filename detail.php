<?php

include('assets/connection.php');
if (!$_SESSION['user_login']) {
    header("location: login.php");
}
$statement = mysqli_query($connection, "SELECT * FROM tb_hotel WHERE ID_HOTEL =".$_GET['id']);

while($row = mysqli_fetch_array($statement)){
    $id_hotel = $row['ID_HOTEL'];
    $nama = $row['NAMA'];
    $gambar = $row['GAMBAR'];
    $deskripsi = $row['DESKRIPSI'];
    $harga = $row['HARGA'];
}

$get_data = mysqli_query($connection, "SELECT * FROM tb_transaksi
INNER JOIN tb_user ON tb_user.ID_USER = tb_transaksi.ID_USER WHERE tb_transaksi.ID_HOTEL =".$_GET['id']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paradise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f9355065a6.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container p-0">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.html" style="color: white;"><span class="mr-2">Paradise</span><i
                        class="fas fa-hotel"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html" style="color: white;">Home</a>
                        </li>
                        <li class="nav-item custom-nav">
                            <a class="nav-link" href="#" style="color: white;">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Sign Up</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Sign In</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-3" style="color: white;">FAQ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>

        <section class="section-1-detail">
            <div class="container mt-5 mb-5">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="bc text-decoration-none"><i
                                    class="fas fa-home"></i><span class="ml-2">Home</span></a></li>
                        <li class="breadcrumb-item"><a href="#" class="bc text-decoration-none">Detail</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hotel Harper Mallioboro</li>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="section-2-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Hotel Harper Mallioboro</h3>
                        <a href="#" class="hotel-sec-2 text-decoration-none">Hotel</a>
                        <span class="detail-rating fas fa-star"></span>
                        <span class="detail-rating fas fa-star"></span>
                        <span class="detail-rating fas fa-star"></span>
                        <span class="detail-rating fas fa-star"></span>
                        <span class="detail-rating fas fa-star"></span>
                        <p class="text-black-50 mt-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="ml-1">Jl. P. Mangkubumi No.52, Gowongan, Kec. Jetis, Kota Yogyakarta, 
                                Daerah Istimewa Yogyakarta 55232</span>
                        </p>
                        <p class="">
                            <i class="detail-shield fas fa-shield-virus"></i>
                            <span class="ml-1">Semua Staff telah melakukan Vaksinansi COVID-19</span>
                        </p>
                        <hr color="black" size="2" align="left" class="mb-4">
                    </div>
                </div>
            </div>
        </section>

        <section class="sectio-3-detail">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-8">
                        <img src="./img/Hotel3.jpg" alt="" class="img-detail w-100 mb-3">
                    </div>
                    <div class="col-md-4">
                        <div class="column">
                            <img src="./img/Hotel5.jpg" alt="" class="img-detail w-100">
                            <img src="./img/Hotel7.jpeg" alt="" class="img-detail w-100 mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-4-detail">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Paradise</h4>
                        <h5 style="color: blue;"><i class="fas fa-door-open"></i><span class="ml-2">8.9 Exellent</span>
                        </h5>
                        <p>10.549 Ulasan Kepuasan Pelanggan</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <p>Harga kamar per malam mulai dari</p>
                        <h4 style="color: orangered;">Rp500.000</h4>
                        <a href="#section-8-detail" class="btn-room-detail btn w-75" role="button">Pilih Sekarang</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-5-detail mb-5" style="background-color: rgb(243, 243, 243);">
            <div class="container">
                <h4 class="pt-5">Ulasan Pemesan Terpopuler</h4>
                <div id="carouselExampleControls" class="carousel slide p-5" data-ride="carousel">
                    <div class="car-section-2 carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="card col-12 col-sm-12 col-md-6 p-0 mb-3 mr-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="./img/Janne.jpg" alt="..." class="w-100">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-12 col-sm-12 col-md-6 p-0 mb-3 mr-3 d-none d-md-block">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="./img/Janne1.jpg" alt="..." class="w-100">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card col-12 col-sm-12 col-md-6 p-0 mb-3 mr-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="./img/Janne4.jpg" alt="..." class="w-100">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-12 col-sm-12 col-md-6 p-0 mb-3 mr-3 d-none d-md-block">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="./img/Janne3.jpg" alt="..." class="w-100">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="hotel-prev carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="hotel-next carousel-control-next" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="section-6-detail mb-5">
            <div class="container">
                <h4>Fasilitas</h4>
                <div class="row-6-detail row">
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <div class="column">
                            <i class="fas fa-fan"></i>
                            <p>Full AC</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <div class="column">
                            <i class="fas fa-utensils"></i>
                            <p>Restoran</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <div class="column">
                            <i class="fas fa-clock"></i>
                            <p>Pelayanan 24 jam</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <div class="column">
                            <i class="fas fa-parking"></i>
                            <p>Parkir</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <div class="column">
                            <i class="fas fa-wifi"></i>
                            <p>WiFi</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <div class="column">
                            <i class="fas fa-dungeon"></i>
                            <p>Lift</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-7-detail mb-5">
            <div class="container">
                <h4>Informasi Lokasi</h4>
                <p class="text-black-50">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="ml-1">Jl. P. Mangkubumi No.52, Gowongan, Kec. Jetis, 
                        Kota Yogyakarta, Daerah Istimewa Yogyakarta 55232</span>
                <div class="map-7-detail embed-responsive embed-responsive-21by9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31623.89782348527!2d110.35404336632602!3d-7.791176231453982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58300c106aa1%3A0xcbf872b8a6bb84a1!2sHotel%20Harper%20Malioboro!5e0!3m2!1sid!2sid!4v1635955316356!5m2!1sid!2sid" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                </p>
                <div class="row mt-4">
                    <div class="col-12 col-sm-6 col-md-6">
                        <h5>Tempat Terdekat</h5>
                        <div class="col-md-12 mt-3">
                            <div class="column">
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-rest fas fa-utensils"></i><span class="ml-3">Roaster & Bear</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>13m</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-bag fas fa-shopping-bag"></i><span class="ml-3">Mall Mallioboro
                                             Yogyakarta</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>1500m</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-hospital fas fa-clinic-medical"></i><span class="ml-3">Rumah Sakit Bethesda 
                                            Yogyakarta</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>1600m</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-bank fas fa-hand-holding-usd"></i><span class="ml-3">PermataBank KC 
                                            Pangeran Mangkubumi</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>180m</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <h5>Populer di Daerah</h5>
                        <div class="col-md-12 mt-3">
                            <div class="column">
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-bank fas fa-tree"></i><span class="ml-3">Jl. Malioboro</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>1400m</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-museum fas fa-palette"></i><span class="ml-3">Monumen Yogya 
                                            Kembali</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>5500m</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-rest fas fa-subway"></i><span class="ml-3">Stasiun Yogyakarta</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>750m</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <p><i class="icon-museum fas fa-palette"></i><span class="ml-3">Museum Gembira 
                                            Loka Zoo</span></p>
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 text-right">
                                        <p>7000m</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section section-8-detail mb-5" id="section-8-detail" style="background-color: rgb(243, 243, 243);">
            <div class="container pt-5 pb-5">
                <div class="wrapper-8-detail p-3">
                    <h4>Luxury</h4>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-md-4">
                            <div class="card shadow-sm rounded mb-3">
                                <img src="./img/Hotel7.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"><i class="fas fa-ruler"></i><span class="ml-2">30.0 m^2</span></p>
                                    <p class="card-8-detail card-text">Pembuat Kopi / Teh</p>
                                    <p class="card-8-detail card-text">Penyejuk Ruangan (AC)</p>
                                    <p class="card-8-detail card-text">Bathtup</p>
                                    <button type="button" class="btn-8-detail btn w-100" data-toggle="modal"
                                        data-target="#exampleModalDetail">Lihat Detail Kamar</button>
                                    <div class="modal fade" id="exampleModalDetail" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Kamar Luxury
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card" style="border: none;">
                                                        <div class="row no-gutters">
                                                            <div class="col-md-8">
                                                                <img src="./img/Hotel8.jpg" alt="..."
                                                                    class="w-100">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card-body">
                                                                    <h6 class="card-title">Informasi Kamar</h6>
                                                                    <p class="card-text"><i class="fas fa-bed"></i><span class="ml-2">1 Tempat Tidur Kembar</span></p>
                                                                    <p class="card-text"><i class="fas fa-user-friends"></i><span class="ml-2">2 Tamu</span></p>
                                                                    <p class="card-text"><i class="fas fa-ruler"></i><span class="ml-2">30.0 m^2</span></p>
                                                                    <hr size="1" color="black">
                                                                    <h6 class="card-title">Tentang Ruangan Ini</h6>
                                                                    <p class="p-0">1. Tamu harus menunjukkan 2 Sertifikat Vaksinasi atau surat tes SWAB yang Diperlukan.</p>
                                                                    <p class="p-0">2. Karena Pandemi Covid -19 Sarapan Prasmanan
                                                                         kami akan diinformasikan pada saat check-in.</p>
                                                                     <p class="p-o">3. Kolam renang dibuka dilarang untuk membuat kerumunan ,masuk bergantian
                                                                          tetap menjaga jarak dan kebersihan untuk mengurangi penularan COVID-19.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <p class="text-muted">mulai dari<span class="ml-1 mr-1" style="color: orangered;">Rp500.000</span>/kamar/malam</p>
                                                    <button type="button" class="btn-8-detail btn"data-dismiss="modal">Lihat Pilihan Kamar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card shadow-sm rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Kamar Twinbed Luxury Hanya "sertifikat Surat Tes Swab/pcr
                                        Ke-2 yang Diperlukan"</h5>
                                    <p class="card-text">
                                        <i class="fas fa-bed"></i>
                                        <span class="ml-2">1 Tempat Tidur Kembar</span>
                                        <i class="fas fa-user-friends ml-5"></i>
                                        <span class="ml-2">2 Tamu</span>
                                        <hr size="1" color="black">
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="text-secondary"><i class="fas fa-utensils"></i><span
                                                    class="ml-2">Tanpa Sarapan</span></p>
                                            <p class="text-success"><i class="fas fa-wifi"></i><span
                                                    class="ml-2">WiFi</span></p>
                                            <p class="text-success"><i class="fas fa-smoking"></i><span
                                                    class="ml-2">Bebas Rokok</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-success"><i class="fas fa-clipboard-list"></i><span
                                                    class="ml-2">Pembatalan Gratis</span></p>
                                            <p class="text-success"><i class="fas fa-calendar-alt"></i><span
                                                    class="ml-2">Ubah Jadwal</span></p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <h4 style="color: orangered;">Rp500.000</h4>
                                            <p class="text-muted">/kamar/malam</p>
                                            <p class="text-primary">Termasuk pajak</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p><i class="fas fa-tags"></i><span class="ml-2">Cicilan tersedia untuk
                                                    pemengang kartu kredit</span></p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="./booking.html" class="btn-room-detail btn" role="button">Pesan
                                                Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm rounded mt-3">
                                <div class="card-body">
                                    <h5 class="card-title">Kamar Twinbed Luxury With Breakfast Hanya "sertifikat Surat
                                        Tes Swab/pcr Ke-2 yang Diperlukan"</h5>
                                    <p class="card-text">
                                        <i class="fas fa-bed"></i>
                                        <span class="ml-2">1 Tempat Tidur Kembar</span>
                                        <i class="fas fa-user-friends ml-5"></i>
                                        <span class="ml-2">2 Tamu</span>
                                        <hr size="1" color="black">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="text-success"><i class="fas fa-utensils"></i><span
                                                    class="ml-2">Sarapan Gratis</span></p>
                                            <p class="text-success"><i class="fas fa-wifi"></i><span
                                                    class="ml-2">WiFi</span></p>
                                            <p class="text-success"><i class="fas fa-smoking"></i><span
                                                    class="ml-2">Bebas Rokok</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-success"><i class="fas fa-clipboard-list"></i><span
                                                    class="ml-2">Pembatalan Gratis</span></p>
                                            <p class="text-success"><i class="fas fa-calendar-alt"></i><span
                                                    class="ml-2">Ubah Jadwal</span></p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <h4 style="color: orangered;">Rp700.000</h4>
                                            <p class="text-muted">/kamar/malam</p>
                                            <p class="text-primary">Termasuk pajak</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p><i class="fas fa-tags"></i><span class="ml-2">Cicilan tersedia untuk
                                                    pemengang kartu kredit</span></p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <a href="./booking.html" class="btn-room-detail btn" role="button">Pesan
                                                Sekarang</a>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-9-detail mb-5">
            <div class="container">
                <h4>Ulasan oleh pengguna Paradises</h4>
                <p>Berdasarkan<span class="ml-2 mr-2" style="font-weight: 500;">12.345</span>review</p>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-12 col-md-3">
                                <h6>Kebersihan</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star-half-alt"></span>
                            </div>
                        </div>
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-6 col-md-3">
                                <h6>Kenyamanan</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="far fa-star"></span>
                            </div>
                        </div>
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-6 col-md-3">
                                <h6>Makanan</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="far fa-star"></span>
                            </div>
                        </div>
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-6 col-md-3">
                                <h6>Tempat</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-12 col-md-3">
                                <h6>Mantap</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="progress">
                                    <div class="progress-detail progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div>
                            </div>
                        </div>
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-12 col-md-3">
                                <h6>Bagus</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="progress">
                                    <div class="progress-detail progress-bar" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">52%</div>
                                  </div>
                            </div>
                        </div>
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-12 col-md-3">
                                <h6>Memuaskan</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="progress">
                                    <div class="progress-detail progress-bar" role="progressbar" style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100">23%</div>
                                  </div>
                            </div>
                        </div>
                        <div class="row" style="color: blue;">
                            <div class="col-12 col-sm-12 col-md-3">
                                <h6>Jelek</h6>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="progress">
                                    <div class="progress-detail progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 mt-4">
                        <div class="media p-2" style="border: blue solid 1px; border-radius: 5px;">
                            <img src="./img/Janne3.jpg" class="mr-3 w-25 rounded" alt="...">
                            <div class="media-body">
                              <h5 class="mt-2">Jane</h5>
                              <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="media p-2" style="border: blue solid 1px; border-radius: 5px;">
                            <img src="./img/Eimi.jpg" class="mr-3 w-25 rounded" alt="...">
                            <div class="media-body">
                              <h5 class="mt-2">Eimi</h5>
                              <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-primary mt-5" role="alert">
                    Perlu menunjukkan hasil tes negatif COVID-19 saat check-in di akomodasi. Silakan hubungi hotel untuk informasi lebih lanjut sebelum kedatangan Anda.
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="col-md-12 pt-5" style="background-color:blue;">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <h6 style="color: white;">Partner Pembayaran</h4>
                            <img src="./img/bank1.png" alt="..." class="footer-bank mb-2">
                            <img src="./img/bank2.png" alt="..." class="footer-bank mb-2">
                            <img src="./img/bank3.png" alt="..." class="footer-bank mb-2">
                            <img src="./img/bank4.png" alt="..." class="footer-bank mb-2">
                            <img src="./img/bank5.png" alt="..." class="footer-bank mb-2">
                            <img src="./img/bank6.png" alt="..." class="footer-bank mb-2">
                            <img src="./img/bank7.png" alt="..." class="footer-bank mb-2">
                            <img src="./img/bank8.png" alt="..." class="footer-bank mb-2">
                    </div>
                    <div class="col-12 col-sm-6 col-md-2">
                        <h6 style="color: white;">Sosial Media</h4>
                            <p><a href="https://facebook.com" class="footer-content" target="_blank"><i
                                        class="fab fa-facebook"></i><span class="ml-2">Facebook</span></a></p>
                            <p><a href="https://twitter.com" class="footer-content" target="_blank"><i
                                        class="fab fa-twitter"></i><span class="ml-2">Twitter</span></a></p>
                            <p><a href="https://instagram.com/" class="footer-content" target="_blank"><i
                                        class="fab fa-instagram"></i><span class="ml-2">Instagram</span></a></p>
                            <p><a href="https://github.com/" class="footer-content" target="_blank"><i
                                        class="fab fa-github"></i><span class="ml-2">Github</span></a></p>

                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h6 style="color: white;">Produk</h6>
                        <p><a href="#" class="footer-content">Hotel</a></p>
                        <p><a href="#" class="footer-content">Vila</a></p>
                        <p><a href="#" class="footer-content">Apartement</a></p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <h6 style="color: white;">Lainnya</h6>
                        <p><a href="#" class="footer-content">Tentang Kami</a></p>
                        <p><a href="#" class="footer-content">Kontak</a></p>
                        <p><a href="#" class="footer-content">Syarat dan Ketentuan</a></p>
                        <p><a href="#" class="footer-content">Kebijakan Privasi</a></p>
                        <p><a href="#" class="footer-content" data-toggle="modal" data-target="#exampleModal7"
                                data-whatever="@fat">Hubungi Kami</a></p>
                        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pesan Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Email</label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    placeholder="paradise@gmail.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Pesan</label>
                                                <textarea class="form-control" id="message-text"
                                                    placeholder="Ketik Sesuatu"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Kirim Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr color="white" size="5">
            <div class="col-md-12 text-center" style="color: white;">
                <p class="pb-5">Copyright &copy; 2021 Paradise</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>

</html>