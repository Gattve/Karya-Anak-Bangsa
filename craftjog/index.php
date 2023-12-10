<?php
include_once 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
  <title>CraftJog</title>
  <style>
    /* Mengubah ukuran sudut tombol */
    .custom-btn {
      border-radius: 25px;
      /* Atur radius sudut sesuai keinginan */
    }
  </style>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Landing/img/logo-hitam0.png" alt="Logo" height="30" />
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <div class="nav-list">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" href="">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/craftjog/view/belanja.php">Belanja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/craftjog/view/event-workshop.php">Event/Workshop</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#goexplore" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" aria-haspopup="true">Go Explore</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="/craftjog/view/article.php">Article</a></li>
                <li class="dropdown-item"><a href="/craftjog/view/interactive-map.php">Interactive Maps</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/craftjog/view/communities.php">Komunitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/craftjog/view/about-us.php">About Us</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="navbar-nav ml-auto">
        <div class="nav-right">
          <form class="form-inline">
            <input class="form-control ml-auto" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <a class="nav-item nav-link" href="#" onclick="toggleSearchBox()">
            <img src="Landing/img/magnifying-glass-solid.svg" alt="Search Icon" width="20" height="20" />
          </a>
          <a class="nav-item nav-link" href="#">
            <img src="Landing/img/cart-shopping-solid.svg" alt="Cart Icon" width="20" height="20" />
          </a>
          <a class="nav-item nav-link" href="/craftjog/view/admin/dashboard.php">
            <img src="Landing/img/user-regular.svg" alt="User Icon" width="20" height="20" />
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Landing Start -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <p class="animated fadeInDown mt-5" style="animation-delay: 1s">Selamat Datang di</p>
          <h5 class="animated fadeInDown" style="animation-delay: 1s" id="aksara">ꦪꦺꦴꦒꦾꦏꦂꦠ</h5>
          <p class="animated fadeInUp" style="animation-delay: 2s">Dapatkan kemudahan untuk mengakses informasi terkait
            budaya & kerajinan khas Yogyakarta</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <h5 class="animated fadeInDown" style="animation-delay: 1s">Yogyakarta</h5>
          <p class="animated fadeInUp" style="animation-delay: 2s">Ekplorasi Budaya, Temukan Kerajinan Tangan Terbaik
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Landing End -->

  <!-- Produk Terbaik Start -->
  <section id="produk-terbaik" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">#Produk Terbaik</h2>
          <hr class="my-4" />
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <?php
        $result = mysqli_query($conn, "SELECT CraftID, CraftName, CraftImage, Price FROM crafts");
        $counter = 0;
        while ($row = mysqli_fetch_array($result)):
          ?>
          <div class="col-lg-3 col-md-6 align-items-stretch">
            <div class="card mb-4">
              <img src="<?= $row['CraftImage'] ?>" alt="" class="card-img-top" style="object-fit:cover; height:200px" />
              <div class="card-body">
                <h5 class="card-title text-center">
                  <?= $row['CraftName'] ?>
                </h5>
                <p class="card-text text-center" id="price">
                  IDR
                  <?= $row['Price'] ?>
                </p>
                <div class="text-center fs-6">
                  <a href="/craftjog/view/product-detail.php?id=<?php echo $row['CraftID']; ?>" class="btn fs-6">Info
                    Selengkapnya</a>
                </div>

                <div class="button text-center">
                  <button class="btn btn-outline-dark custom-btn btn-sm" id="card-btn">Tambah ke Keranjang</button>
                  <button class="btn btn-dark custom-btn btn-sm" id="card-btn">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <?php
          $counter++;
          if ($counter >= 4) {
            break;
          }
        endwhile;

        if (!$result) {
          die("Query failed: " . mysqli_error($conn));
        }
        ?>
      </div>
    </div>
  </section>
  <!-- Produk Terbaik End -->

  <!-- Kerajinan Tangan Start -->
  <div class="container-fluide poster col-lg-12 col-md-12 col-sm-12">
    <div class="p-title">
      <h1>Kerajinan Tangan</h1>
    </div>

    <nav class="navbar navbar-expand-lg navk">
      <div class="container">
        <button class="navbar-toggler navk" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navk"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav navk">
            <li class="nav-item navk">
              <a class="nav-link" href="#">Batik</a>
            </li>
            <li class="nav-item navk">
              <a class="nav-link" href="#">Wayang Kulit</a>
            </li>
            <li class="nav-item navk">
              <a class="nav-link" href="#">Gerabah</a>
            </li>
            <li class="nav-item navk">
              <a class="nav-link" href="#">Tenun</a>
            </li>
            <li class="nav-item navk">
              <a class="nav-link" href="#">Anyaman</a>
            </li>
            <li class="nav-item navk">
              <a class="nav-link" href="#">Kerajinan Batu</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="p-footer">
      <div class="footer-text">
        <h5>Simbol Kebesaran dan Kebudayaan Indonesia</h5>
        <p>BATIK | HERITAGE</p>
        <button class="btn beli custom-btn">Beli Sekarang</button>
      </div>
    </div>
  </div>
  <!-- Kerajinan Tangan End -->

  <!-- Testimoni Start -->
  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row title pt-5 justify-content-center">
      <h2>Ulasan Pengguna</h2>
    </div>

    <div class="row justify-content-center">
      <p>Ulasan dari para pengunjung dan mitra yang menggunakan website ini</p>
    </div>
    <div class="row">
      <?php
      $result = mysqli_query($conn, "SELECT FullName, Profil, Reviews FROM userreviews");
      $counter = 0;
      while ($row = mysqli_fetch_array($result)):
        ?>
        <div class="col-lg-3 col-md-6">
          <img src="<?= $row['Profil'] ?>" alt="Lingkaran" class="bd-placeholder-img rounded-circle mb-3"
            style="object-fit:cover; width:140px" width="140" height="140">
          <p>
            <?= $row['Reviews'] ?>
          </p>
          <p><a class="" href="#">
              <?= $row['FullName'] ?>
            </a></p>
        </div><!-- /.col-lg-3 -->
        <?php
        $counter++;
        if ($counter >= 4) {
          break;
        }
      endwhile;

      if (!$result) {
        die("Query failed: " . mysqli_error($conn));
      }
      ?>
    </div>
  </div>
  <!-- Testimoni End -->

  <!-- Footer Start -->
  <div class="container-fluide footerk border-top">
    <footer class="py-5">
      <div class="row row-cols-1 row-cols-md-2 py-5">
        <div class="col-md-3 mb-3">
          <img class="logo-hitam" src="Landing/img/logo-hitam0.png" />
          <p class="tagline">Explore the miracle.</p>
        </div>

        <div class="col-md-9 mb-3">
          <p class="slogan">
            We collaborate with ambitious brands and people; <br> let’s build something great
            together.
          </p>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5">
        <div class="col mb-3">
          <p class="dibawah-arahan-bimbingan">Dibawah arahan &amp; bimbingan :</p>
          <img class="logo-informatika" src="Landing/img/InforKuning.png" width="60%%" />
        </div>

        <div class="col mb-3">
          <h6 class="hubungi-kami">Hubungi kami :</h6>
          <p class="info">karyaanakbangsa523@gmail.com<br />+62 869 866 7033</p>
        </div>

        <div class="col mb-3">
          <h6 class="hubungi-kami">Temukan kami disini :</h6>
          <p class="info">Jl. Kaliurang km 14,5 <br />Sleman, DIY</p>
        </div>

        <div class="col mb-3">
          <h6 class="hubungi-kami">Ikuti media sosial kami :</h6>
          <div class="d-flex">
            <div class="facebook"><img src="Landing/img/Facebook.png" alt=""></div>
            <div class="twitter ml-2"><img src="Landing/img/Twitter.png" alt=""></div>
            <div class="instagram ml-2"><img src="Landing/img/Instagram.png" alt=""></div>
            <div class="youtube ml-2"><img src="Landing/img/Youtube.png" alt=""></div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5">
        <div class="col mb-1"></div>

        <div class="col mb-1">
          <p class="info">Syarat & Ketentuan</p>
        </div>

        <div class="col mb-1">
          <p class="info">Kebijakan Pribadi</p>
        </div>

        <div class="col mb-1">
          <p class="info">&copy; 2023 Company, Inc. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
  <!-- Footer End -->

  <!-- Bootstrap JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-rz5DY7aEbfOXwHp9k1QbvOq0Cp3z5cXE2J9jZ7+XQTCtm6az3PaeCae6KrQ5BO+Z"
    crossorigin="anonymous"></script>
  <script>
    function toggleSearchBox() {
      var searchBox = document.querySelector(".form-inline");
      searchBox.style.display = searchBox.style.display === "none" || searchBox.style.display === "" ? "block" : "none";
    }
  </script>
</body>

</html>