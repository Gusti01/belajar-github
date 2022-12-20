<?php
include 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="covid-19.png">

  <title>Desa Batu Sempe</title>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</head>

<body>
  <header>
    <?php
    require 'navbar.php';
    ?>
  </header>
  <section class="mb-2" id="beranda" style="margin-top: 75px;">
    <div class="col-lg-5 position-absolute text-center ">
      <h2 class="judul display-4 ">SISTEM INFORMASI DESA BATU SEMPE INDAH</h2>
      <hr class="my-2 text-primary">
      <p class="subjudul">Desa Batu Sempe Indah merupakan salah satu desa yang terletak di Kecamatan Mataoleo, Kabupaten Bombana, Provinsi Sulawesi Tenggara.</p>
    </div>
    <img src="img/bg-1opacity.jpg" class="img-fluid" alt="" srcset="">
  </section>
  <section class="p-3 mt-5" id="profil">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="section-title text-primary">Profil Desa</h3>
      </div>
    </div>
    <div class="row mb-2 p-5 d-flex justify-content-center">
      <div class="col-lg-4 text-center">
        <img src="img/Lambang_Kabupaten_Bombana.png" class="img-fluid img-thumbnail border-0" alt="logo desa" srcset="">
      </div>
      <div class="paragraph col-lg-8">
        <h2 class="text-center">SELAMAT DATANG DI DESA BATU SEMPE INDAH</h2>
        Desa Batu Sempe Indah merupakan salah satu desa yang terletak di Provinsi Sulawesi Tenggara, Kabupaten Bombana, Kecamatan Mataoleo. Luas wilayah desa ini 348,19 Ha dengan jumlah penduduk sebanyak . Letak geografis yang berada di pesisir laut, desa ini adalah desa dengan luas garis pantai 3,774 Km. Menjadikan kebanyakan masyarakat dari desa ini mayoritas mata pencahariannya adalah sebagai nelayan.
      </div>
    </div>
  </section>
  <section class="p-3 mt-5" style="background-color: #DDDDDD;" id="letak">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="section-title text-primary">Letak Geografis</h3>
      </div>
    </div>
    <div class="row mb-2 p-5 d-flex justify-content-center">
      <div class="shadow-lg p-3 card-body rounded">
        <div class="p-2 embed-responsive embed-responsive-16by9 d-flex justify-content-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15902.891719731431!2d122.0921912973308!3d-4.817564805533529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da2e3d2216da959%3A0x6753363fccd4bbff!2sBatu%20Sempe%20Indah%2C%20Mata%20Oleo%2C%20Bombana%20Regency%2C%20South%20East%20Sulawesi!5e0!3m2!1sen!2sid!4v1663245931226!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <section class="p-3" id="informasi">
    <div class="row mt-5">
      <div class="col-lg-12 text-center">
        <h3 class="section-title text-primary">Informasi Penduduk</h3>
      </div>
    </div>
    <div class="row p-5 d-flex justify-content-center">
      <div class="col-lg-3 mb-2 mt-2">
        <div class="card p-3 shadow rounded-0 " style="max-width: 540px;">
          <div class="row">
            <div class="col-sm-3 text-center align-items-center">
              <span class="badge text-bg-primary rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                </svg>
              </span>
            </div>
            <div class="col-sm-9">
              <h5 class="card-title text-center">Jumlah Penduduk</h5>
              <p class="card-text text-center"><?= $mo[0]; ?> Orang</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-2 mt-2">
        <div class="card p-3 shadow rounded-0 " style="max-width: 540px;">
          <div class="row">
            <div class="col-sm-3 text-center align-items-center">
              <span class="badge text-bg-primary rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
              </span>
            </div>
            <div class="col-sm-9">
              <h5 class="card-title text-center">Jumlah KK</h5>
              <p class="card-text text-center"><?= $dapat[0]; ?> Orang</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-2 mt-2">
        <div class="card p-3 shadow rounded-0 " style="max-width: 540px;">
          <div class="row">
            <div class="col-sm-3 text-center align-items-center">
              <span class="badge text-bg-primary rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-gender-female" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5z" />
                </svg>
              </span>
            </div>
            <div class="col-sm-9">
              <h5 class="card-title text-center">Jumlah Perempuan</h5>
              <p class="card-text text-center"><?= $dapat1[0]; ?> Orang</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-2 mt-2">
        <div class="card p-3 shadow rounded-0 " style="max-width: 540px;">
          <div class="row">
            <div class="col-sm-3 text-center align-items-center">
              <span class="badge text-bg-primary rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-gender-male" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                </svg>
              </span>
            </div>
            <div class="col-sm-9">
              <h5 class="card-title text-center">Jumlah Laki-Laki</h5>
              <p class="card-text text-center"><?= $dapat2[0]; ?> Orang</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-3 mb-2" style="background-color: #DDDDDD;" id="berita">
    <div class="row mt-5 mb-5 text-center">
      <h3 class="section-title text-primary">Berita Desa</h3>
    </div>
    <div class="row p-2 mt-5 mb-5">
      <?php
      include "koneksi.php";
      $query = mysqli_query($db, 'SELECT * FROM berita');
      $result = array();
      while ($data = mysqli_fetch_array($query)) {
        $result[] = $data; //result dijadikan array 
      }
      //selanjutnya result array di foreach
      foreach ($result as $value) {
      ?>
        <div class="col-lg-3 mb-3 d-flex justify-content-centerd-flex justify-content-center ">
          <div class="card card1 rounded-0 " style="width: 18rem;">
            <img src="img/<?= $value['gambar']; ?>" class="card-img-top rounded-0" alt="...">
            <div class="card-body">
              <p class="card-text"><small class="text-muted"><em class="text-primary"><?= $value['tanggal']; ?></em></small></p>
              <p class="card-text"><?= $value['judul']; ?></p>
            </div>
            <div class="card-footer">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $value['id_berita']; ?>">
                Lihat Detail
              </button>
              <!-- Modal -->
              <div class="modal fade" id="modal<?= $value['id_berita']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><?= $value['judul']; ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <img src="img/<?= $value['gambar']; ?>" class="img-fluid" alt="">
                      <p><?= $value['isi_berita']; ?></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>

  </section>
  <section class="p-3 mb-2" id="sarana">
    <div class="row mt-5 mb-5 text-center">
      <h3 class="section-title text-primary">Sarana & Prasarana Desa</h3>
    </div>
    <div class="row mb-5 d-flex justify-content-center">
      <div class="col-lg-8">
        <div id="carouselExampleDark" class="carousel carousel-dark slide shadow-lg" data-bs-ride="carousel">
          <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div> -->
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="img/jalandesa.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">Jalan Desa Batu Sempe Indah</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/kantor.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">Balai Desa Batu Sempe Indah</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/dermaga.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">Dermaga Desa Batu Sempe Indah</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/dermaga1.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">Dermaga Desa Batu Sempe Indah</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/lap_voli.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">Lapangan Voli Desa Batu Sempe Indah</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/masjid.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">Masjid Babut Taqwa Desa Batu Sempe Indah</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/polindes3.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">Polindes Desa Batu Sempe Indah</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/sekolah1.JPG" class="img-fluid rounded d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-carousel">SDS Desa Batu Sempe Indah</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

  </section>
  <section class="p-3 mb-2" style="background-color: #DDDDDD;" id="struktur">
    <div class="container">
      <div class="row text-center">
        <h3 class="section-title text-primary mb-5 mt-5">Struktur Desa</h3>
        <img src="img/STRUKTUR PEMERINTAH DESA (1).png" class="img-fluid" alt="">
      </div>
    </div>
  </section>

  <footer class="bg-black">
    <div class=" p-3 mb-2 text-center">
      <h6 class="text-color">Website Desa Batu Sempe Indah - &copy; Copyright KKN REGULER BATCH 2 UHO 2022</h6>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script>
    $("document").ready(
      function() {

        $(".col-lg-3").hover(
          function() {
            $(this).animate({
              marginTop: "-=1%",
            }, 200);
          },
          function() {
            $(this).animate({
              marginTop: "0%",
            }, 200);
          }
        );
      });
  </script>

</body>

</html>