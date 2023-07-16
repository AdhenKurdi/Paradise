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
    
    <body class="body-booking">
    
        <header style="background-color: blue;">
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="index.html" style="color: white;"><span class="mr-2">Paradise</span><i
                            class=""></i></a>
                </nav>
            </div>
        </header>
    
        <main>
    
            <section class="section-1-booking">
                <div class="container mt-5 mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Hotel Booking</h3>
                            <p>Isi form dibawah untuk Pemesanan</p>
                            <h5 class="mt-5">Informasi Anda</h5>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="section-2-booking">
                <div class="container">
                  <div class="row row-cols-1 row-cols-md-2">
                    <div class="col-md-8">
                        <div class="card shadow rounded mb-3">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="inputAddress" style="font-weight: 500;">Nama Pemesan</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Paradise">
                                <small id="passwordHelpInline" class="text-muted">
                                  Sesuai seperti pada Passport atau KTP (tanpa title maupun karakter unik)
                                </small>
                              </div>
                              <div class="form-group">
                                <label for="inputAddress" style="font-weight: 500;">Email</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="paradise@gmail.com">
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
                              <div class="form-row">
                                <div class="form-group col-4 col-sm-8 col-md-4">
                                  <label for="inputState">Region</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Pilih...</option>
                                    <option>Afrika</option>
                                    <option>Dubai</option>
                                    <option>Indonesia</option>
                                    <option>Jepang</option>
                                    <option>Philiphine</option>
                                    <option>Rusia</option>
                                    <option>Arab</option>
                                  </select>
                                </div>
                                <div class="form-group col-8 col-sm-8 col-md-8">
                                  <label for="inputCity">Nomor Handphone</label>
                                  <input class="form-control" type="text" placeholder="08123456789">
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                                      <label class="custom-control-label" for="customRadioInline1">Saya Pemesan</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                                      <label class="custom-control-label" for="customRadioInline2">Saya memesan untuk Orang lain</label>
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow rounded">
                            <div class="card-body">
                              <h5><i class="fas fa-hotel"></i><span class="ml-2">Hotel Harper Malioboro</span></h5>
                              <div class="row pt-3">
                                <div class="col-md-4">
                                  <p class="text-muted">Check-in</p>
                                </div>
                                <div class="col-md-8 p-0">
                                  <p>Senin, 8 Nov 2021, dari 14:00</p>
                                </div>
                                <div class="col-md-4">
                                  <p class="text-muted">Check-out</p>
                                </div>
                                <div class="col-md-8 p-0">
                                  <p>Selasa, 9 Nov 2021, Sebelum 12:00</p>
                                </div>
                              </div>
                              <h6>(1x) Kamar Twinbed Luxury Hanya "sertifikat Surat Tes Swab atau Swab/ PCR ke-2 yang Diperlukan"</h6>
                              <div class="row">
                                <div class="col-md-6">
                                  <small class="text-muted">Tamu per kamar</small>
                                </div>
                                <div class="col-md-6">
                                  <small>2 Tamu</small>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <small class="text-muted">Jenis tempat tidur</small>
                                </div>
                                <div class="col-md-6">
                                  <small>1 tempat tidur kembar</small>
                                </div>
                              </div>
                              <hr size="1" color="blue">
                              <div class="row pt-3">
                                <div class="col-md-6">
                                  <img src="./img/Hotel10.jpg" alt="error" class="w-100 text-center">
                                </div>
                                <div class="col-md-6">
                                  <p class="text-secondary"><i class="fas fa-utensils"></i><span
                                    class="ml-2">Tanpa Sarapan</span>
                                  </p>
                                  <p class="text-success"><i class="fas fa-wifi"></i><span
                                    class="ml-2">WiFi</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              </section>
    
              <section class="section-3-booking mb-5">
                <div class="container">
                  <h5 class="mt-5">Permintaan Khusus</h5>
                  <div class="col-md-8 shadow p-3 mb-5 bg-white rounded">
                    <div class="alert alert-secondary" role="alert">
                      Punya permintaan khusus? Tanyakan, dan properti akan melakukan yang terbaik untuk memenuhi keinginan Anda. (Perhatikan bahwa permintaan khusus tidak dijamin dan dapat dikenakan biaya)
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox mt-2">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Ruang Bebas Rokok</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label" for="customCheck2">Lantai Tinggi (Lt.3+)</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck3">
                          <label class="custom-control-label" for="customCheck3" data-toggle="collapse" href="#collapseExampleCin" role="button" aria-expanded="false" aria-controls="collapseExample">Waktu Check-in</label>
                          <div class="collapse" id="collapseExampleCin">
                            <div class="card card-body p-0 w-75 mt-2" style="border: none;">
                              <div class="form-group">
                                <input class="form-control" type="time">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox mt-2">
                          <input type="checkbox" class="custom-control-input" id="customCheck5">
                          <label class="custom-control-label" for="customCheck5">Kamar Penghubung</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck6">
                          <label class="custom-control-label" for="customCheck6">Lantai Rendah (Lt.3-)</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck7">
                          <label class="custom-control-label" for="customCheck7" data-toggle="collapse" href="#collapseExampleCout" role="button" aria-expanded="false" aria-controls="collapseExample">Waktu Check-out</label>
                          <div class="collapse" id="collapseExampleCout">
                            <div class="card card-body p-0 w-75 mt-2" style="border: none;">
                              <div class="form-group">
                                <input class="form-control" type="time">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="custom-control custom-checkbox mt-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck4">
                          <label class="custom-control-label" for="customCheck4" data-toggle="collapse" href="#collapseExampleLain" role="button" aria-expanded="false" aria-controls="collapseExample">Lainnya</label>
                        </div>
                        <div class="collapse" id="collapseExampleLain">
                          <div class="card card-body" style="border: none;">
                            <div class="form-group">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="0-100"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
    
              <section class="section-4-booking mb-5">
                <div class="container">
                  <h5 class="mt-5">Asuransi untuk Anda</h5>
                  <div class="col-md-8 shadow p-3 mb-5 bg-white rounded">
                    <div class="custom-control custom-checkbox mt-2">
                      <input type="checkbox" class="custom-control-input" id="customCheckCovid">
                      <label class="custom-control-label" for="customCheckCovid">Asuransi COVID-19 Hotel</label>
                    </div>
                    <small>Dapatkan perlindungan COVID-19 yang komprehensif yang mencakup rawat inap, biaya pemeriksaan medis (termasuk Rapid atau PCR Swab Test), dan banyak lagi.</small>
                    <hr width="25%" size="1" color="teal" align="left">
                    <p><i class="fas fa-check text-success"></i><span class="ml-2">Cakupan hingga Rp 2.000.000 untuk rawat inap akibat COVID-19</span></p>
                    <p><i class="fas fa-check text-success"></i><span class="ml-2">Cakupan hingga Rp 500.000 untuk biaya medical check up</span></p>
                    <p><i class="fas fa-check text-success"></i><span class="ml-2">Santunan Rp 8.000.000 untuk kematian akibat COVID-19</span></p>
                    <div class="col-md-12 text-right">
                      <h5>Rp 35.000</h5>
                    </div>
                  </div>
                </div>
              </section>
    
              <section class="section-5-booking mb-5">
                <div class="container">
                  <h5 class="mt-5">Detail Harga</h5>
                  <div class="col-md-8 shadow p-3 mb-5 bg-white rounded">
                    <div class="row">
                      <div class="col-md-9">
                        <p>(1x) Kamar Twinbed Luxury Hanya "sertifikat Surat Tes Swab/PCR Ke-2/ PCR yang Diperlukan" (1 malam)</p>
                      </div>
                      <div class="col-md-3 text-right">
                        <p>Rp 500.000</p>
                      </div>
                      <div class="col-md-9">
                        <p>Pajak dan biaya lain</p>
                      </div>
                      <div class="col-md-3 text-right">
                        <p>Rp 104.132</p>
                      </div>
                      <div class="col-md-9">
                        <p>Asuransi COVID-19 Hotel</p>
                      </div>
                      <div class="col-md-3 text-right">
                        <p>Rp 20.000</p>
                      </div>
                    </div>
                    <hr color="teal" size="1">
                    <div class="row">
                      <div class="col-md-9">
                        <h5>Total Pembayaran</h5>
                      </div>
                      <div class="col-md-3 text-right">
                        <h5>Rp 620.000</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-8">
                        <small>Dengan mengklik tombol ini, Anda mengakui bahwa Anda telah membaca dan menyetujui Syarat &Ketentuan dan Kebijakan Privasi Paradise.</small>
                      </div>
                      <div class="col-md-4">
                        <button type="button" class="btn-8-detail btn w-100" data-toggle="modal" data-target="#exampleModalPay">Lanjutkan Pembayaran</button>
                        <div class="modal fade" id="exampleModalPay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="row no-gutters">
                              <div class="col-md-12">
                                <div class="alert alert-warning shadow my-3" role="alert" style="border-radius: 20px">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true" style="color:#856404">&times;</span>
                                  </button>
                                  <div class="text-center">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16"  class="m-1 bi bi-cone-striped" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M9.97 4.88l.953 3.811C10.159 8.878 9.14 9 8 9c-1.14 0-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
                                    </svg>
                                  </div>
                                  <p style="font-size:18px" class="mb-0 font-weight-light"><b class="mr-1">Warning:</b>This action will be available soon, do something else it can make you happy.</p>
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
    
        <footer>
    
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