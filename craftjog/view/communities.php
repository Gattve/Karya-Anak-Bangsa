<?php 
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communities | Craftjog</title>

    <!-- Menggunakan Bootstrap dari CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Menggunakan Font Awesome dari CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-lKuwVRZQG4FqU8lFi4N8rjNPqP6Zw/JUJ45bZzE00a2AdKp5G8xYFFkkRMNIjkRL" crossorigin="anonymous">

    <!-- Menambahkan file CSS untuk menghias HTML -->
    <link rel="stylesheet" href="/craftjog/css/communities.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/craftjog/Landing/img/logo-hitam0.png" alt="Logo" height="30" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
              <li class="nav-item active">
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

    <!-- communities start -->
    <div class="galeri-komunitas mt-5">
        <div class="galeri-komunitas2">Galeri Komunitas</div>
        <div class="gabung-bersama-komunitas-yang-akan-meningkatkan-kreatifitas-kamu">
          Gabung bersama komunitas yang akan meningkatkan kreatifitas kamu
        </div>
        <div class="frame-jenis">
          <div class="batik">
            <div class="batik2">Batik</div>
          </div>
          <div class="wayang-kulit">Wayang Kulit</div>
          <div class="gerabah">Gerabah</div>
          <div class="tenun">Tenun</div>
          <div class="anyaman">Anyaman</div>
          <div class="kerajinan-batu">Kerajinan Batu</div>
        </div>
        <div class="komunitas-1">
          <img class="kumunitas-1" src="Komunitas1.png" />
          <div
            class="deskripsi-komunitas-ini-adalah-wadah-bagi-para-pecinta-batik-yang-memiliki-kreativitas-tinggi-mereka-berbagi-ide-desain-dan-pengalaman-dalam-menciptakan-batik-modern-dengan-sentuhan-kreatif-dan-inovatif"
          >
            <span
              ><span
                class="deskripsi-komunitas-ini-adalah-wadah-bagi-para-pecinta-batik-yang-memiliki-kreativitas-tinggi-mereka-berbagi-ide-desain-dan-pengalaman-dalam-menciptakan-batik-modern-dengan-sentuhan-kreatif-dan-inovatif-span"
                >Deskripsi</span
              ><span
                class="deskripsi-komunitas-ini-adalah-wadah-bagi-para-pecinta-batik-yang-memiliki-kreativitas-tinggi-mereka-berbagi-ide-desain-dan-pengalaman-dalam-menciptakan-batik-modern-dengan-sentuhan-kreatif-dan-inovatif-span2"
              >
                : Komunitas ini adalah wadah bagi para pecinta batik yang memiliki
                kreativitas tinggi. Mereka berbagi ide, desain, dan pengalaman dalam
                menciptakan batik modern dengan sentuhan kreatif dan inovatif.
              </span></span
            >
          </div>
          <div class="komunitas-batik-kreatif-sleman">
            Komunitas Batik Kreatif Sleman
          </div>
          <div class="button-beli">
            <div class="gabung-komunitas">Gabung Komunitas</div>
          </div>
          <div class="frame-best">
            <div class="_1-komunitas-terbaik">#1 Komunitas Terbaik</div>
          </div>
          <div class="rectangle-509"></div>
          <div class="logo-1">
            <img class="logo-12" src="Logo1.png" />
          </div>
          <svg
            class="vector"
            width="19"
            height="19"
            viewBox="0 0 19 19"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M14.9063 10.08L10.6009 8.49638C10.5791 8.4881 10.5594 8.47537 10.5429 8.459C10.5264 8.44264 10.5135 8.42301 10.505 8.40136L8.92121 4.09566C8.8391 3.87308 8.69072 3.68101 8.49606 3.54534C8.3014 3.40968 8.06983 3.33695 7.83256 3.33695C7.59528 3.33695 7.36371 3.40968 7.16905 3.54534C6.97439 3.68101 6.82601 3.87308 6.7439 4.09566L5.1601 8.40053C5.15182 8.42225 5.13909 8.44199 5.12273 8.4585C5.10636 8.475 5.08672 8.48791 5.06508 8.49638L0.758812 10.08C0.536195 10.1621 0.344101 10.3104 0.208421 10.5051C0.072742 10.6997 0 10.9312 0 11.1685C0 11.4057 0.072742 11.6373 0.208421 11.8319C0.344101 12.0265 0.536195 12.1749 0.758812 12.257L5.06424 13.8406C5.08596 13.8489 5.10571 13.8616 5.12222 13.8779C5.13873 13.8943 5.15163 13.9139 5.1601 13.9356L6.7439 18.2413C6.82601 18.4639 6.97439 18.6559 7.16905 18.7916C7.36371 18.9273 7.59528 19 7.83256 19C8.06983 19 8.3014 18.9273 8.49606 18.7916C8.69072 18.6559 8.8391 18.4639 8.92121 18.2413L10.505 13.9364C10.5133 13.9147 10.526 13.895 10.5424 13.8785C10.5588 13.8619 10.5784 13.849 10.6 13.8406L14.9063 12.257C15.1289 12.1749 15.321 12.0265 15.4567 11.8319C15.5924 11.6373 15.6651 11.4057 15.6651 11.1685C15.6651 10.9312 15.5924 10.6997 15.4567 10.5051C15.321 10.3104 15.1289 10.1621 14.9063 10.08ZM14.5604 11.3185L10.2541 12.9021C10.0965 12.9603 9.95342 13.052 9.8347 13.1709C9.71598 13.2897 9.62444 13.4329 9.5664 13.5905L7.9826 17.8954C7.97123 17.926 7.95076 17.9524 7.92394 17.9711C7.89712 17.9897 7.86523 17.9997 7.83256 17.9997C7.79988 17.9997 7.76799 17.9897 7.74117 17.9711C7.71435 17.9524 7.69388 17.926 7.68251 17.8954L6.09871 13.5897C6.04028 13.4324 5.94859 13.2895 5.82991 13.1709C5.71123 13.0522 5.56835 12.9605 5.41101 12.9021L1.10558 11.3185C1.07495 11.3071 1.04853 11.2867 1.02988 11.2598C1.01123 11.233 1.00123 11.2011 1.00123 11.1685C1.00123 11.1358 1.01123 11.1039 1.02988 11.0771C1.04853 11.0503 1.07495 11.0298 1.10558 11.0185L5.41184 9.43486C5.56943 9.37664 5.71252 9.28494 5.83125 9.16609C5.94997 9.04723 6.04151 8.90405 6.09955 8.74642L7.68334 4.44155C7.69471 4.41093 7.71518 4.38451 7.74201 4.36586C7.76883 4.34721 7.80072 4.33721 7.83339 4.33721C7.86606 4.33721 7.89795 4.34721 7.92477 4.36586C7.95159 4.38451 7.97206 4.41093 7.98343 4.44155L9.56723 8.74725C9.62546 8.90482 9.71717 9.04789 9.83604 9.1666C9.95491 9.2853 10.0981 9.37683 10.2558 9.43486L14.5612 11.0185C14.5918 11.0298 14.6182 11.0503 14.6369 11.0771C14.6556 11.1039 14.6656 11.1358 14.6656 11.1685C14.6656 11.2011 14.6556 11.233 14.6369 11.2598C14.6182 11.2867 14.5918 11.3071 14.5612 11.3185H14.5604ZM10.6642 2.5004C10.6642 2.36778 10.7169 2.24058 10.8107 2.14679C10.9045 2.05301 11.0317 2.00032 11.1644 2.00032H12.6648V0.500081C12.6648 0.367451 12.7175 0.240254 12.8113 0.14647C12.9051 0.052687 13.0323 0 13.165 0C13.2976 0 13.4248 0.052687 13.5186 0.14647C13.6124 0.240254 13.6651 0.367451 13.6651 0.500081V2.00032H15.1655C15.2982 2.00032 15.4254 2.05301 15.5192 2.14679C15.613 2.24058 15.6657 2.36778 15.6657 2.5004C15.6657 2.63303 15.613 2.76023 15.5192 2.85402C15.4254 2.9478 15.2982 3.00049 15.1655 3.00049H13.6651V4.50073C13.6651 4.63336 13.6124 4.76056 13.5186 4.85434C13.4248 4.94812 13.2976 5.00081 13.165 5.00081C13.0323 5.00081 12.9051 4.94812 12.8113 4.85434C12.7175 4.76056 12.6648 4.63336 12.6648 4.50073V3.00049H11.1644C11.0317 3.00049 10.9045 2.9478 10.8107 2.85402C10.7169 2.76023 10.6642 2.63303 10.6642 2.5004ZM19 6.50105C19 6.63368 18.9473 6.76088 18.8535 6.85466C18.7597 6.94845 18.6325 7.00113 18.4999 7.00113H17.6663V7.8346C17.6663 7.96723 17.6136 8.09443 17.5198 8.18821C17.426 8.282 17.2988 8.33468 17.1661 8.33468C17.0335 8.33468 16.9063 8.282 16.8125 8.18821C16.7187 8.09443 16.666 7.96723 16.666 7.8346V7.00113H15.8324C15.6998 7.00113 15.5725 6.94845 15.4787 6.85466C15.385 6.76088 15.3323 6.63368 15.3323 6.50105C15.3323 6.36842 15.385 6.24123 15.4787 6.14744C15.5725 6.05366 15.6998 6.00097 15.8324 6.00097H16.666V5.1675C16.666 5.03487 16.7187 4.90768 16.8125 4.81389C16.9063 4.72011 17.0335 4.66742 17.1661 4.66742C17.2988 4.66742 17.426 4.72011 17.5198 4.81389C17.6136 4.90768 17.6663 5.03487 17.6663 5.1675V6.00097H18.4999C18.6325 6.00097 18.7597 6.05366 18.8535 6.14744C18.9473 6.24123 19 6.36842 19 6.50105Z"
              fill="#FED202"
            />
          </svg>
        </div>
        <div class="komunitas-2">
          <img class="komunitas-22" src="Komunitas2.png" />
          <div class="logo-2">
            <div class="image-47"></div>
            <img class="logo-22" src="Logo2.png" />
          </div>
          <div class="komunitas-pengrajin-batik-tradisional">
            Komunitas Pengrajin Batik<br />Tradisional
          </div>
          <div class="button-beli2">
            <div class="gabung-komunitas2">Gabung Komunitas</div>
          </div>
        </div>
        <div class="komunitas-3">
          <img class="komunitas-32" src="Komunitas3.png" />
          <div class="logo-2">
            <div class="image-47"></div>
            <img class="logo-3" src="Logo3.png" />
          </div>
          <div class="komunitas-batik-pemuda-kreatif">
            Komunitas Batik Pemuda<br />Kreatif
          </div>
          <div class="button-beli2">
            <div class="gabung-komunitas2">Gabung Komunitas</div>
          </div>
        </div>
        <div class="komunitas-5">
          <img class="komunitas-52" src="Komunitas4.png" />
          <div class="komunitas-batik-wanita-inspiratif">
            Komunitas Batik Wanita<br />Inspiratif
          </div>
          <div class="button-beli2">
            <div class="gabung-komunitas2">Gabung Komunitas</div>
          </div>
          <div class="logo-4">
            <div class="image-47"></div>
            <img class="logo-5" src="Logo4.png" />
          </div>
        </div>
        <div class="komunitas-4">
          <img class="komunitas-42" src="Komunitas5.png" />
          <div class="komunitas-pecinta-batik-nusantara">
            Komunitas Pecinta Batik<br />Nusantara
          </div>
          <div class="button-beli2">
            <div class="gabung-komunitas3">Gabung Komunitas</div>
          </div>
          <div class="logo-32">
            <div class="image-47"></div>
            <img class="logo-42" src="Logo5.png" />
          </div>
        </div>
      </div>
    <!-- communities end -->
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
            <img class="logo-informatika" src="/craftjog/Landing/img/InforKuning.png" width="60%%"/>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-rz5DY7aEbfOXwHp9k1QbvOq0Cp3z5cXE2J9jZ7+XQTCtm6az3PaeCae6KrQ5BO+Z" crossorigin="anonymous"></script>
    <script>
      function toggleSearchBox() {
        var searchBox = document.querySelector(".form-inline");
        searchBox.style.display = searchBox.style.display === "none" || searchBox.style.display === "" ? "block" : "none";
      }
    </script>

</body>

</html>