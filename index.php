<?php

include('assets/connection.php');
if (!$_SESSION['user_login']) {
    header("location: login.php");
}
$statement = mysqli_query($connection, "SELECT * FROM tb_hotel WHERE DEL_FLAGE = 0");


$get_data = mysqli_query($connection, "SELECT * FROM tb_user WHERE ID_USER =".$_SESSION['user_id']);

$row = mysqli_fetch_array($get_data);
$_SESSION['user_gambar'] = $row['GAMBAR'];
$_SESSION['user_nama'] = $row['NAMA'];
$_SESSION['user_username'] = $row['USERNAME'];
$_SESSION['user_email'] = $row['EMAIL'];

$ulasan = mysqli_query($connection, "SELECT * FROM tb_transaksi INNER JOIN tb_user ON tb_user.ID_USER = tb_transaksi.ID_USER");


?>

<!DOCTYPE php>
<php lang="en">

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
        <a class="navbar-brand" href="index.php" style="color: white;"><span class="mr-2">Paradise</span><i 
            class="fas fa-hotel"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color: white;">Home</a>
            </li>
            <li class="nav-item custom-nav">
              <a class="nav-link" href="#" style="color: white;">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: white;">
                Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" data-toggle="modal" data-target="#modalsignin">Sign Up</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#modallogin">Log In</a>
                <?php
                include("assets/connection.php");
                if(isset($_SESSION['username'])){
                  echo "<a class='dropdown-item' href='logout.php'>Log Out</a>";
                }
                ?>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#section-3" style="color: white;">FAQ</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/Hotel1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <button class="btn-booking btn">Book Now</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/Hotel2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/Hotel3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <main>
    <section class="section-1">
      <div class="container">
        <form class="custom-form col-md-12 m-auto shadow p-3 mb-5 bg-white rounded" style="width: 70%;">
          <div class="form-group">
            <label for="inputAddress">Kota Tujuan, atau Nama Hotel</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Jl. P. Mangkubumi No.52, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55232">
          </div>
          <div class="form-row">
            <div class="form-group col-12 col-md-4">
              <label for="inputCity">Check-In</label>
              <input type="date" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-12 col-md-4">
              <label for="inputState">Durasi</label>
              <select id="inputState" class="form-control">
                <option selected>Pilih...</option>
                <option>1 Malam</option>
                <option>2 Malam</option>
                <option>3 Malam</option>
                <option>4 Malam</option>
                <option>5 Malam</option>
                <option>6 Malam</option>
                <option>7 Malam</option>
              </select>
            </div>
            <div class="form-group col-12 col-md-4">
              <label for="inputCity">Check-Out</label>
              <input class="form-control" id="disabledInput" type="text" placeholder="dd/mm/yyyy" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="inputCity">Tamu dan Kamar</label>
            <input type="text" class="form-control" id="inputCity" placeholder="2 Orang, dan 1 Kamar">
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <button type="submit" class="btn-cek btn w-100">Cek Ketersediaan</button>
        </form>
      </div>
    </section>

    <section class="section-2 mt-5 mb-5">
      <div class="container">
        <div class="col-md-12">
          <h3>Daftar Hotel</h3>
          <p>Nikmati Liburan Anda dengan Hotel di Indonesia</p>
          <hr color="black" size="2" width="45%" align="left" class="mb-4">
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="car-section-2 carousel-inner">
            <div class="carousel-item active">
              <div class="cards-wrapper">
                <div class="hotel-card card">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel4.jpg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">Hotel Harper Mallioboro</h5>
                      <p class="card-text">Some hotels that can be visited
                           to stay on your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 560.000</small>
                  </div>
                </div>
                <div class="hotel-card card d-none d-sm-block d-md-block">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel5.jpg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">Luxury Hotel</h5>
                      <p class="card-text">Some hotels that can be visited
                        to stay on 
                        your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 900.000</small>
                  </div>
                </div>
                <div class="hotel-card card d-none d-md-block">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel6.jpg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">Loonaria Hotel</h5>
                      <p class="card-text">Some hotels that can be visited
                        to stay on your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 780.000</small>
                  </div>
                </div>
                <div class="hotel-card card d-none d-md-block">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel7.jpeg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">Grand Aquila Hotel</h5>
                      <p class="card-text">Some hotels that can be visited
                        to stay on your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 730.000</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="cards-wrapper">
                <div class="hotel-card card">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel8.jpg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">Hilton Hotel</h5>
                      <p class="card-text">Some hotels that can be visited
                        to stay on your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 850.000</small>
                  </div>
                </div>
                <div class="hotel-card card d-none d-sm-block d-md-block">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel9.jpg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">Hotel Chain</h5>
                      <p class="card-text">Some hotels that can be visited
                        to stay on your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 630.000</small>
                  </div>
                </div>
                <div class="hotel-card card d-none d-md-block">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel10.jpg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">Grand Yogyakarta</h5>
                      <p class="card-text">Some hotels that can be visited
                        to stay on your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 450.000</small>
                  </div>
                </div>
                <div class="hotel-card card d-none d-md-block">
                  <a href="detail.php" class="text-decoration-none">
                    <img src="./img/Hotel11.jpg" class="card-img-top" alt="...">
                    <div class="hotel-card-body card-body">
                      <h5 class="card-title">OYO</h5>
                      <p class="card-text">Some hotels that can be visited
                        to stay on your pleasant holiday.</p>
                    </div>
                  </a>
                  <div class="card-footer mt-auto">
                    <small class="text-muted">Rp 190.000</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="hotel-prev carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="hotel-next carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </section>

    <section class="section-3 mt-5 mb-5" id="section-3">
      <div class="container">
        <div class="col-12 col-sm-12 col-md-12">
          <h3>Booking Hotel Dari Sekarang di Paradise</h3>
          <p>Nikmati Liburan Anda dengan Hotel di Indonesia</p>
          <hr color="black" size="2" width="45%" align="left" class="mb-4">
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6">
            <div class="card mb-3" style="border: none;">
              <div class="row no-gutters">
                <div class="col-4 col-sm-4 col-md-4">
                  <img src="./img/bank.png" alt="...">
                </div>
                <div class="col-12 col-sm-8 col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Berbagai Opsi Pembayaran</h5>
                    <p class="card-text">Melakukan Booking hotel dengan berbagai opsi pembayaran melalui Bank di Indonesia</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="card mb-3" style="border: none;">
              <div class="row no-gutters">
                <div class="col-12 col-sm-4 col-md-4">
                  <img src="./img/diskon.png" alt="...">
                </div>
                <div class="col-12 col-sm-8 col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Diskon Khusus</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6">
            <div class="card mb-3" style="border: none;">
              <div class="row no-gutters">
                <div class="col-12 col-sm-4 col-md-4">
                  <img src="./img/ulasan.png" alt="...">
                </div>
                <div class="col-12 col-sm-8 col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Ulasan Tamu</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6">
            <div class="card mb-3" style="border: none;">
              <div class="row no-gutters">
                <div class="col-12 col-sm-4 col-md-4">
                  <img src="./img/guarantee.png" alt="...">
                </div>
                <div class="col-12 col-sm-8 col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">StayGuarantee</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-4 mt-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Ulasan Kepuasan Pelanggan</h3>
            <p>Nikmati Liburan Anda dengan Hotel di Indonesia</p>
            <hr color="black" size="2" width="45%" align="left" class="mb-4">
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active text-center">
                  <div class="card">
                    <div class="card-img-top">
                      <img src="./img/Janne.jpg" alt="" class="img-fluid rounded-circle w-75 p-4">
                    </div>
                    <div class="card-body">
                      <h5>Jane</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua.
                      </p>
                      <a href="#" class="rating text-decoration-none" data-toggle="modal" data-target="#exampleModal6">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                      </a>
                      <p class="text-black-50">Freelance Youtube</p>
                      <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Ulasan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card mb-3" style="border: none;">
                                <div class="card-img-top">
                                  <img src="./img/Janne1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                  <h5>Jane</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.
                                  </p>
                                  <p>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                  </p>
                                  <p class="text-black-50">Freelance Youtube</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item text-center">
                  <div class="card mb-3">
                    <div class="card-img-top">
                      <img src="./img/Janne1.jpg" alt="" class="img-fluid rounded-circle w-75 p-4">
                    </div>
                    <div class="card-body">
                      <h5>Jane</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua.
                      </p>
                      <a href="#" class="rating text-decoration-none" data-toggle="modal" data-target="#exampleModal5">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                      </a>
                      <p class="text-black-50">Freelance Youtube</p>
                      <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Ulasan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card" style="border: none;">
                                <div class="card-img-top">
                                  <img src="./img/Janne2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                  <h5>Jane</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.
                                  </p>
                                  <p>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                  </p>
                                  <p class="text-black-50">Freelance Youtube</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 text-center">
            <div class="card shadow-sm mb-3 bg-white rounded">
              <div class="card-img-top">
                <img src="./img/Rowan Atkinson.jpeg" alt="" class="img-fluid rounded-pill w-75 p-4">
              </div>
              <div class="card-body">
                <h5>Rowan Atkinson</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="rating text-decoration-none" data-toggle="modal" data-target="#exampleModal">
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="far fa-star"></span>
                </a>
                <p class="text-black-50">Actor</p>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Ulasan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="card" style="border: none;">
                          <div class="card-img-top">
                            <img src="./img/Rowan Atkinson.jpeg" alt="" class="img-fluid">
                          </div>
                          <div class="card-body">
                            <h5>Rowan Atkinson</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                              tempor
                              incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>
                              <span class="fas fa-star"></span>
                              <span class="fas fa-star"></span>
                              <span class="fas fa-star"></span>
                              <span class="fas fa-star"></span>
                              <span class="far fa-star"></span>
                            </p>
                            <p class="text-black-50">Actor Mr.Bean</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3 text-center">
            <div class="card shadow-sm mb-3 bg-white rounded">
              <div class="card-img-top">
                <img src="./img/Eimi.jpg" alt="" class="img-fluid rounded-pill w-75 p-4">
              </div>
              <div class="card-body">
                <h5>Eimi</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="rating text-decoration-none" data-toggle="modal" data-target="#exampleModal2">
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="fas fa-star"></span>
                  <span class="far fa-star"></span>
                </a>
                <p class="text-black-50">Actrees Japan</p>
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Ulasan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="card" style="border: none;">
                          <div class="card-img-top">
                            <img src="./img/Eimi.jpg" alt="" class="img-fluid">
                          </div>
                          <div class="card-body">
                            <h5>Eimi</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                              tempor
                              incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>
                              <span class="fas fa-star"></span>
                              <span class="fas fa-star"></span>
                              <span class="fas fa-star"></span>
                              <span class="fas fa-star"></span>
                              <span class="far fa-star"></span>
                            </p>
                            <p class="text-black-50">Model</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active text-center">
                  <div class="card">
                    <div class="card-img-top">
                      <img src="./img/Janne3.jpg" alt="" class="img-fluid rounded-circle w-75 p-4">
                    </div>
                    <div class="card-body">
                      <h5>Jane</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua.
                      </p>
                      <a href="#" class="rating text-decoration-none" data-toggle="modal" data-target="#exampleModal3">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                      </a>
                      <p class="text-black-50">Freelance Youtube</p>
                      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Ulasan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card" style="border: none;">
                                <div class="card-img-top">
                                  <img src="./img/Janne4.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                  <h5>Jane</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.
                                  </p>
                                  <p>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                  </p>
                                  <p class="text-black-50">Selebgram</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item text-center">
                  <div class="card">
                    <div class="card-img-top">
                      <img src="./img/Janne4.jpg" alt="" class="img-fluid rounded-circle w-75 p-4">
                    </div>
                    <div class="card-body">
                      <h5>Jane</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua.
                      </p>
                      <a href="#" class="rating text-decoration-none" data-toggle="modal" data-target="#exampleModal4">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="far fa-star"></span>
                      </a>
                      <p class="text-black-50">Selebgram</p>
                      <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Ulasan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card" style="border: none;">
                                <div class="card-img-top">
                                  <img src="./img/Janne4.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                  <h5>Jane</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua.
                                  </p>
                                  <p>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                  </p>
                                  <p class="text-black-50">Selebgram</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
   <!-- Modal Login -->
   <div class="modal fade" id="modallogin" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog modal-dialog-centered modal-open" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalLabel2">Log In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <!-- <?php echo $pesan;?> -->
          <form id="loginform" method="POST" action="proses-signin.php">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="username" class="form-control" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Remember Me
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="submit" form="loginform" class="btn btn-success" name="login" value="login">Login</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Sign In -->
  <div class="modal fade" id="modalsignin" role="dialog" aria-labelledby="myModalLabel3">
    <div class="modal-dialog modal-dialog-centered modal-open" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalLabel3">Sign In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="inputAddress">Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-group c">
              <label for="inputAddress">Phone</label>
              <input type="text" class="form-control" id="inputPhone" placeholder="08123XXXX">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success">Sign In</button>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="col-md-12 pt-5" style="background-color: blue;">
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
                        <input type="text" class="form-control" id="recipient-name" placeholder="Paradise@gmail.com">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Pesan</label>
                        <textarea class="form-control" id="message-text" placeholder="Ketik Sesuatu"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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

</php>