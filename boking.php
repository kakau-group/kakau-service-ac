<?php
  include("atas.php");
?>

      <div class="slider-item py-5" style="background-image: url('assets/img/kakau-laundry-semuajumbotron.png');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="text-white">Boking</h1>
            </div>
          </div>
        </div>
      </div>

<section>
      <div class="card-body">

              <form method="post" action="proses_boking.php" name="myForm" onsubmit="return validateForm()" class="showcase" >
              
              <div class="container">
                <main>
                  <div class="py-5 text-center">
                  <img class="d-block mx-auto mb-4" src="img/mengapa.png" alt="" width="80" height="70">
                    <h2>Pesan Kakau Service AC Sekarang Juga</h2>
                    <p class="lead">Anda dapat melakukan pemesanan melalui telepon, whatsapp atau dengan cara mengisi form pemesanan dibawah ini.</p>
                  </div>
              
                  <div class="row g-3">
                  
                    <div class="col-md-7 col-lg-8">
                      <h4 class="mb-3">Untuk Pemesanan Dapat Mengisi Form Dibawah Ini.</h4>
                      <form class="needs-validation" novalidate>
                        <div class="row g-3">

                        <div class="col-12">
                            <label for="text" class="form-label">Nama Lengkap</label>
                            <input type="text"  name="nama_pelanggan" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                          </div>

                        <div class="col-12">
                            <label for="text" class="form-label">Alamat Lengkap</label>
                            <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap"></textarea>
                        </div>

                        <div class="col-12">
                              <label for="number" class="form-label">No Telpon/HP (Support WA)</label>
                              <input type="number"  name="no_hp" class="form-control" id="exampleFormControlInput1" placeholder="No Telpon/HP (Support WA)">
                          </div>
                          
                        <div class="col-12">
                              <label for="text" class="form-label">Jenis Layanan</label>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_layanan" value="Cuci-AC">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Cuci AC
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_layanan" value="Cuci-Besar-AC-Split-(Overhaul)">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Cuci Besar AC Split (Overhaul)
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_layanan" value="Perbaikan-AC">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Perbaikan AC
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="jenis_layanan" value="Instalasi-AC">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Instalasi AC
                                  </label>
                              </div>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Masalah</label>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="masalah" value="AC-tidak-dingin">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  AC tidak dingin
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="masalah" value="AC-berbau-tidak-sedap">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  AC berbau tidak sedap
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="masalah" value="AC-ada-kebocoran-(air menetes)">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  AC ada kebocoran (air menetes)
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="masalah" value="Lainnya">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Lainnya
                                  </label>
                              </div>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Jumlah</label>
                              <input type="text"  name="jumlah" class="form-control" id="exampleFormControlInput1" placeholder="jumlah">
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Merk</label>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="merk" value="Daikin">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Daikin
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="merk" value="Samsung">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Samsung
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="merk" value="LG">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  LG
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="merk" value="Sharp">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Sharp
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="merk" value="Panasonic">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Panasonic
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="merk" value="Gree">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Gree
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="merk" value="Lainnya">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  Lainnya
                                  </label>
                              </div>
                          </div>

                          <div class="col-12">
                              <label for="date" class="form-label">Tanggal
                              </label>
                              <input type="date"  name="tanggal" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir">
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Waktu</label>
                              <select class="form-control"  name="waktu" aria-label="Default select example">
                                  <option value="08:00">08:00</option>
                                  <option value="08:00">09:00</option>
                                  <option value="08:00">10:00</option>
                                  <option value="08:00">11:00</option>
                                  <option value="08:00">12:00</option>
                                  <option value="08:00">13:00</option>
                                  <option value="08:00">14:00</option>
                                  <option value="08:00">15:00</option>
                                  <option value="08:00">16:00</option>
                                  <option value="08:00">17:00</option>
                                  <option value="08:00">18:00</option>
                              </select>
                          </div>

                        <div class="col-12">
                          <hr>
                          <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
          </form>   
        </div>
      </body>
    <div class="card-body">
  </div>
<div class="card-body">
</div>
</section>


<script>
      function validateForm() {
        var x = document.forms["myForm"]["nama_lengkap"].value;
        if (x == "" || x == null) {
          alert("Nama Lengkap Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["alamat"].value;
        if (x == "" || x == null) {
          alert("Alamat Lengkap Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["no_hp"].value;
        if (x == "" || x == null) {
          alert("No Telpon Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["jenis_layana"].value;
        if (x == "" || x == null) {
          alert("Jenis Layanan Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["masalah"].value;
        if (x == "" || x == null) {
          alert("Masalah Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["jumlah"].value;
        if (x == "" || x == null) {
          alert("Jumlah Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["merk"].value;
        if (x == "" || x == null) {
          alert("Merk Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["tanggal"].value;
        if (x == "" || x == null) {
          alert("Tanggal Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["waktu"].value;
        if (x == "" || x == null) {
          alert("Waktu Harus diisi terlebih dahulu !");
          return false;
        }
       
      }
    </script>


<?php
include("contact.php");
?>

<?php
include("bawah.php");
?>
