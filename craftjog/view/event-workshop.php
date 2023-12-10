<?php
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event/Workshop | Craftjog</title>

  <!-- Menggunakan Bootstrap dari CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <!-- Menggunakan Font Awesome dari CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-lKuwVRZQG4FqU8lFi4N8rjNPqP6Zw/JUJ45bZzE00a2AdKp5G8xYFFkkRMNIjkRL" crossorigin="anonymous">

  <!-- Menambahkan file CSS untuk menghias HTML -->
  <link rel="stylesheet" href="/craftjog/css/event-workshop.css">
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
            <li class="nav-item">
              <a class="nav-link" href="/craftjog/view/belanja.php">Belanja</a>
            </li>
            <li class="nav-item active">
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

  <!-- Event Start -->
  <section class="event">
    <div class="container">
      <div class="row">
        <h2>Upcoming Events</h2>
      </div>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
          <ul>
            <li><a href="https://visitingjogja.jogjaprov.go.id/39352/kotabaru-heritage-festival-2023-6-9-juli-2023/"
                target="_blank">Kotabaru Heritage Festival 2023</a></li>
            <li><a href="https://visitingjogja.jogjaprov.go.id/40290/calendar-of-event-2024-journey-to-wonderful-jogja/"
                target="_blank">Calendar of Event 2024 “Journey to Wonderful Jogja“</a></li>
            <li><a href="https://visitingjogja.jogjaprov.go.id/40312/wonderful-yogyakarta-2023-1-desember-2023/"
                target="_blank">Wonderful Yogyakarta 2023</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Event End-->

  <!-- Workshop Start -->
  <section class="workshop">
    <div class="container">
      <div class="row">
        <h2>Workshops</h2>
      </div>

      <div class="product-tabs mt-5">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="off-workshop-tab" data-bs-toggle="tab" href="#offline">Offline Workshops</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="on-workshop-tab" data-bs-toggle="tab" href="#online">Online Workshops</a>
          </li>
        </ul>
        </ul>
        <div class="tab-content">
          <!-- offline -->
          <div class="tab-pane fade show active" id="offline">
            <div class="row mt-3 workshop-item">
              <h3>Woodcraft Masterclass</h3>
              <p>Master the techniques of traditional woodcraft</p>
              <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/e84Y0TuuTEo?si=1mwEKdLUbERQUJJk"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
            <div class="row mt-3 workshop-item">
              <h3>Silverware Crafting Session</h3>
              <p>Craft your own silverware under expert guidance</p>
              <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oAbA1IVGPE8?si=e7Q3xAJQoiC1ij4w"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- online -->
          <div class="tab-pane fade" id="online">
            <div class="row mt-3 workshop-item">
              <div class="row col-lg-12 mt-3 workshop-item">
                <h3>Batik Workshop</h3>
                <p>Learn the art of batik making from local artisans</p>
                <div class="video-container">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/xTlaDNxPEcg?si=kLQlLKAr3-DPWgWg"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
              </div>
              <div class="row col-lg-12 mt-3 workshop-item">
                <h3>Pottery Workshop</h3>
                <p>Create unique pottery items with local themes</p>
                <div class="video-container">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/OY74JKbdn2E?si=Xc9jqqOwgYyw_RYe"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
              </div>
              <div class="row mt-3 workshop-item">
                <h3>Textiles Weaving Class</h3>
                <p>Learn the art of handwoven textiles</p>
                <div class="video-container">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/7PC98TQS3D0?si=K0kCCnO-Oph2Kr-9"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Workshop End -->

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

  <!-- Menggunakan Bootstrap JS dan Font Awesome dari CDN -->
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

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>

</html>