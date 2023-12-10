<?php
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Maps | Craftjog</title>

    <!-- Menggunakan Bootstrap dari CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Menambahkan file CSS untuk menghias HTML -->
    <link rel="stylesheet" href="/craftjog/css/product-detail.css">
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
                            <a class="nav-link dropdown-toggle" href="#goexplore" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">Go Explore</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="/craftjog/view/article.php">Article</a></li>
                                <li class="dropdown-item"><a href="/craftjog/view/interactive-map.php">Interactive
                                        Maps</a></li>
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
                        <img src="/craftjog/Landing/img/magnifying-glass-solid.svg" alt="Search Icon" width="20"
                            height="20" />
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <img src="/craftjog/Landing/img/cart-shopping-solid.svg" alt="Cart Icon" width="20"
                            height="20" />
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <img src="/craftjog/Landing/img/user-regular.svg" alt="User Icon" width="20" height="20" />
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- maps Start -->
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Regions of Japan</title>
</head>

<style>
    .responsive-image {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .button-mod {
        border-radius: 50px;
    }

    .modal-body img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
</style>

<body>
    <div class="container py-5">
        <h1 class="text-center mt-5">Search by Location</h1>
        <div class="row justify-content-center text-center">
            <div class="col-10 pt-4 pb-4">
                <button type="button" class="btn btn-outline-dark button-mod" data-bs-toggle="modal" data-bs-target="#exampleModal1"> Kota Yogyakarta </button>
                <button type="button" class="btn btn-outline-dark button-mod" data-bs-toggle="modal" data-bs-target="#exampleModal2"> Kabupaten Sleman </button>
                <button type="button" class="btn btn-outline-dark button-mod" data-bs-toggle="modal" data-bs-target="#exampleModal3"> Kabupaten Bantul </button>
                <button type="button" class="btn btn-outline-dark button-mod" data-bs-toggle="modal" data-bs-target="#exampleModal4"> Kabupaten Gunung Kidul </button>
                <button type="button" class="btn btn-outline-dark button-mod" data-bs-toggle="modal" data-bs-target="#exampleModal5"> Kabupaten Kulon Progo </button>
            </div>
            <!-- <img src="../img/MapsJogja.png" class="responsive-image" alt="Maps Jogja"> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505883.0798440183!2d110.09460308821853!3d-7.87291824880504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x6d1b92b2cac8b3f0!2sDaerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1701758879808!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kota Yogyakarta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/KotaYogyakarta.jpg" alt="foto">
                    <p><b>Kota Yogyakarta:</b> <br>
                        Batik Yogyakarta: Batik merupakan seni tradisional Indonesia, dan Yogyakarta memiliki desain batik khas dengan motif yang berbeda-beda.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kabupaten Sleman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/Sleman.jpg" alt="foto">
                    <p>
                        <b>Kabupaten Sleman:</b> <br>
                        Wayang Kulit Sleman: Sleman dikenal dengan tradisi seni wayang kulit. Karakter dan desain wayang kulit Sleman mencerminkan keunikan dan kekhasan daerah ini.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3 -->
    <div class="modal fade" id="exampleModal3" tabindex="-3" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kabupaten Bantul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/Bantul.jpg" alt="foto">
                    <p>
                        <b>Kabupaten Bantul:</b> <br>
                        Gerabah Kasongan: Kasongan di Bantul terkenal dengan gerabahnya. Gerabah Kasongan sering digunakan untuk membuat pot bunga, pigura, dan berbagai barang hiasan lainnya.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4 -->
    <div class="modal fade" id="exampleModal4" tabindex="-4" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kabupaten Gunung Kidul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/GunungKidul.jpg" alt="foto">
                    <p>
                        <b>Kabupaten Gunung Kidul:</b> <br>
                        Batik Troso: Gunung Kidul memiliki tradisi batik Troso yang memiliki ciri khas motif dan warna yang berbeda dari batik lainnya.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5 -->
    <div class="modal fade" id="exampleModal5" tabindex="-5" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kabupaten Kulon Progo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../img/KulonProgo.jpg" alt="foto">
                    <p>
                        <b>Kabupaten Kulon Progo:</b> <br>
                        Kain Troso Kulon Progo: Kain Troso di Kulon Progo dikenal dengan teknik tenunnya yang khas. Motif dan warna kain Troso mencerminkan keindahan alam dan budaya Kulon Progo.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
    <!-- maps End-->



    <!-- Footer Start -->
    <div class="container-fluide footerk border-top mt-5">
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
    <script>
        function toggleSearchBox() {
            var searchBox = document.querySelector(".form-inline");
            searchBox.style.display = searchBox.style.display === "none" || searchBox.style.display === "" ? "block" : "none";
        }
    </script>

</body>

</html>