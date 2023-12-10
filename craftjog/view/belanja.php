<?php
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
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
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="/craftjog/css/belanja.css" />
  <link rel="stylesheet" href="/craftjog/Belanja/owl.carousel.min.css">
  <title>Belanja | Craftjog</title>
  <style>
    /* Mengubah ukuran sudut tombol */
    .custom-btn {
      border-radius: 20px;
      /* Atur radius sudut sesuai keinginan */
    }
  </style>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/craftjog/Landing/img/logo-hitam0.png" alt="Logo" height="30" />
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <div class="nav-list">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="/craftjog/index.php">Beranda</a>
            </li>
            <li class="nav-item active">
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
            <img src="/craftjog/Landing/img/magnifying-glass-solid.svg" alt="Search Icon" width="20" height="20" />
          </a>
          <a class="nav-item nav-link" href="#">
            <img src="/craftjog/Landing/img/cart-shopping-solid.svg" alt="Cart Icon" width="20" height="20" />
          </a>
          <a class="nav-item nav-link" href="#">
            <img src="/craftjog/Landing/img/user-regular.svg" alt="User Icon" width="20" height="20" />
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Carousel Product Start -->
  <section class="carousel py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 product">
          <div class="b-content mt-5 pt-5">
            <h1 class="mb-4">Discover the Art of Elegance: </h1>
            <p>Elevate your space with our handcrafted pottery products. Unique designs, premium quality, and timeless
              elegance for your home.</p>
            <a href="" class="btn btn-dark theme-btn">Beli Sekarang</a>
          </div>
        </div>
        <div class="col-lg-7"></div>
      </div>
    </div>
  </section>
  <!-- Carousel Product End -->

  <!-- Featured Product Start -->
  <div class="featured">
    <div class="container">
      <!-- section title -->
      <div class="row s-title justify-content-center mb-5">
        <h2>Featured Category</h2>
      </div>

      <!-- section body -->
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-7 col-sm-6">
          <div class="f-item">
            <div class="row">
              <div class="col-lg-6">
                <h6>Premium Quality</h6>
                <h3>Batik</h3>
                <a href="">Explore Now <i class="fa fa-play"></i></a>
              </div>
              <div class="col-lg-6 mt-5">
                <img src="../img/kain batik.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-sm-6">
          <div class="f-sm-item">
            <div class="row">
              <div class="col-lg-6">
                <h6>Premium Quality</h6>
                <h3>Pottery</h3>
                <a href="">Explore Now <i class="fa fa-play"></i></a>
              </div>
              <div class="col-lg-6 img">
                <img src="../img/Foto2.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-sm-6">
          <div class="f-sm-item">
            <div class="row">
              <div class="col-lg-6">
                <h6>Premium Quality</h6>
                <h3>Woodcraft</h3>
                <a href="">Explore Now <i class="fa fa-play"></i></a>
              </div>
              <div class="col-lg-6 img">
                <img src="../img/krebet-1.png" alt="" width="100%">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-sm-6">
          <div class="f-item">
            <div class="row">
              <div class="col-lg-6">
                <h6>Premium Quality</h6>
                <h3>Wayang Kulit</h3>
                <a href="">Explore Now <i class="fa fa-play"></i></a>
              </div>
              <div class="col-lg-6">
                <img src="../img/wayangkulitbgremove.png" alt="" width="80%" height="280px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Product End -->

  <!-- Catalog Start -->
  <div id="catalog" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Catalog</h2>
          <hr class="my-4" />
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <?php
        $result = mysqli_query($conn, "SELECT CraftID, CraftName, CraftImage, Price FROM crafts");
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
                  <button class="btn btn-outline-primary custom-btn btn-sm" id="card-btn2">Tambah ke Keranjang</button>
                  <button class="btn btn-primary custom-btn btn-sm" id="card-btn">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <?php
        endwhile;
        ?>
      </div>
    </div>
  </div>
  <!-- Catalog End-->

  <!-- Subscribe Start -->
  <section class="subscription">
    <div class="container">
      <div class="row py-5 mb-3">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <h6>JOIN OUR NEWSLETTER</h6>
          <h2>Subscribe to get Updated with new offers</h2>
          <div class="form2">
            <form action="">
              <input type="email" name="" id="" placeholder="Enter Email Address">
              <a href="" class="btn btn-dark">Subscribe</a>
            </form>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>
  <!-- Subscribe End -->

  <!-- Footer Start -->
  <div class="container-fluide footerk border-top">
    <footer class="py-3">
      <div class="row row-cols-1 row-cols-md-2 py-2">
        <div class="col-md-3 mb-3">
          <img class="logo-hitam" src="/craftjog/Landing/img/logo-hitam0.png" />
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
          <img class="logo-informatika" src="/craftjog/Landing/img/InforKuning.png" width="60%%" />
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
            <div class="facebook"><img src="/craftjog/Landing/img/Facebook.png" alt=""></div>
            <div class="twitter ml-2"><img src="/craftjog/Landing/img/Twitter.png" alt=""></div>
            <div class="instagram ml-2"><img src="/craftjog/Landing/img/Instagram.png" alt=""></div>
            <div class="youtube ml-2"><img src="/craftjog/Landing/img/Youtube.png" alt=""></div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
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
  <script src="/craftjog/Belanja/owl.carousel.min.js"></script>
  <script>
    function toggleSearchBox() {
      var searchBox = document.querySelector(".form-inline");
      searchBox.style.display = searchBox.style.display === "none" || searchBox.style.display === "" ? "block" : "none";
    }
  </script>
  <script src="/craftjog/js/belanja.js"></script>
</body>

</html>