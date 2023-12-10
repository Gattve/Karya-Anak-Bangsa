<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<style>
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

    .bg-core {
        background-color: #ececec ;
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
                            <strong>Registrasi Gagal</strong> <?php echo $_GET['pesan']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <!-- form -->
                    <div class="d-flex flex-column align-items-center">
                        <h2 class="mb-2 pt-2">Selamat datang!
                            Silakan daftar terlebih dahulu</h2>
                        <?php if (isset($error)) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; // Nampilin pesan error 
                                ?>
                            </div>
                        <?php } ?>
                        <form action="" method="post" class="login-space">
                            <div class="row mb-3">
                                <label for="Username" class="form-label text-start">Username</label>
                                <input type="text" class="form-control login-input" name="Username" id="Username" placeholder="Masukkan Username" required>
                            </div>
                            <div class="row mb-3">
                                <label for="Password" class="pt-4 form-label text-start">Katasandi</label>
                                <input type="password" class="form-control login-input" name="Password" id="Password" placeholder="Masukkan katasandi" required>
                                <label for="Password" class="form-text text-start"><a href="" class="form-text">Minimal terdiri dari 4 huruf!</a></label>
                            </div>
                            <div class="row mb-3">
                                <label for="FullName" class="form-label text-start">Nama Lengkap</label>
                                <input type="text" class="form-control login-input" name="FullName" id="FullName" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="row mb-3">
                                <label for="Email" class="form-label text-start">Email</label>
                                <input type="email" class="form-control login-input" name="Email" id="Email" placeholder="Masukkan Email" required>
                            </div>
                            <div class="row mb-3">
                                <label for="PhoneNumber" class="form-label text-start">Nomor Telepon</label>
                                <input type="tel" class="form-control login-input" name="PhoneNumber" id="PhoneNumber" placeholder="Masukkan Nomor Telepon" required>
                            </div>
                            <div class="row mb-3">
                                <label for="Gender" class="form-label text-start">Jenis Kelamin</label>
                                <select class="form-select login-input" name="Gender" id="Gender" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="row mb-3">
                                <label for="DateOfBirth" class="form-label text-start">Tanggal Lahir</label>
                                <input type="date" class="form-control login-input" name="DateOfBirth" id="DateOfBirth" required>
                            </div>

                            <button type="submit" class="btn btn-outline-dark btn-md login-button" name="btnDaftar">Daftar</button>
                        </form>
                        <p class="small text-center mt-4">Sudah punya akun? <a href="masuk.php">Masuk</a></p>

                        <div class="login-options">
                            <p class="small mb-6">Atau daftar dengan</p>
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

</html>

<?php
include 'koneksi.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['btnDaftar'])) {
    $Username = mysqli_real_escape_string($mysqli, $_POST['Username']);
    $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
    $FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Gender = $_POST['Gender'];
    $DateOfBirth = $_POST['DateOfBirth'];

    $query = mysqli_query($mysqli, "INSERT INTO users (Username, Password, FullName, Email, PhoneNumber, Gender, DateOfBirth) VALUES ('$Username', '$Password', '$FullName', '$Email', '$PhoneNumber', '$Gender', '$DateOfBirth')");

    if ($query) {
        echo "<script>alert('berhasil ya')</script>";
    } else {
        echo "Error: " . mysqli_error($mysqli);
        echo "Query: " . $query;
    }
}
?>