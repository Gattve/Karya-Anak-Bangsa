<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .bg-core {
        background-color: #ececec;
    }

    .border-frame {
        padding: 40px;
        border-radius: 10px;
    }

    /* jarak kotak */
    .margin-top {
        margin-top: 100px;
    }

    .container {
        margin-top: 50px;
    }

    .login-space {
        margin-top: 50px;
    }

    .login-input {
        border: none;
        border-bottom: 1px solid #D1D1D1;
        border-radius: 10px;
        outline: none;
        height: 40px;
    }

    .login-button {
        margin-top: 30px;
        border-radius: 50px;
        width: 300px;
    }

    .login-options {
        margin-top: 0px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-text {
        text-decoration: none;
        /* Tidak ada garis bawah */
        font-size: 10px;
        /* Mengubah ukuran font */
        color: #0D6EFD;
        /* Opsi: Mengubah warna teks */
    }

    .social-icon {
        font-size: 24px;
        /* Mengubah ukuran font ikon sosial */
    }
</style>

<body class="bg-core">
    <div class="container-fluid-py-5 margin-top">
        <div class="container">
            <!-- Tambahin navbar -->

            <!-- box form -->
            <div class="row justify-content-center">
                <div class="col-lg-6 bg-white border-frame text-center">
                    <?php
                    if (isset($_GET['pesan'])) {
                    ?>
                        <!-- alert -->
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Login Gagal</strong> <?php echo $_GET['pesan']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <!-- form -->
                    <div class="d-flex flex-column align-items-center">
                        <h2 class="mb-2 pt-2">Selamat datang kembali!
                            Silakan masuk terlebih dahulu</h2>
                        <?php if (isset($error)) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; // Nampilin pesan error 
                                ?>
                            </div>
                        <?php } ?>
                        <form action="cekMasuk.php" method="post" class="login-space">
                            <div class="row mb-3">
                                <label for="Username" class="form-label text-start">Username</label>
                                <input type="text" class="form-control login-input" name="Username" id="Username" placeholder="Masukkan Username" required>
                            </div>
                            <div class="row mb-3">
                                <label for="Password" class="pt-4 form-label text-start">Katasandi</label>
                                <input type="Password" class="form-control login-input" name="Password" id="Password" placeholder="Masukkan katasandi" required>
                                <label for="Password" class="form-text text-start"><a href="" class="form-text">Lupa Katasandi</a></label>
                            </div>
                            <button type="submit" class="btn btn-outline-dark btn-md login-button" name="btnLogin">Masuk</button>
                        </form>
                        <p class="small text-center mt-4">Belum punya akun? <a href="daftar.php">Daftar</a></p>

                        <div class="login-options">
                            <p class="small mb-6">Atau masuk dengan</p>
                            <button class="btn me-2">
                                <i class="bi bi-google social-icon"></i>
                            </button>
                            <button class="btn me-2">
                                <i class="bi bi-facebook social-icon"></i>
                            </button>
                            <button class="btn">
                                <i class="bi bi-apple social-icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<?php
// include 'koneksi.php';
// session_start();
// if (!isset($_SESSION['Username'])) {
//     header("location:profile.php");
//     exit;
// }
?>

</html>