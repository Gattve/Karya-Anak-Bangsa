<?php
include 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();
$UserID = $_SESSION['UserID'];
$query_verf = "SELECT * FROM users WHERE UserID = '$UserID'";
?>

<?php
$result = mysqli_query($conn, $query_verf);
$data = mysqli_fetch_assoc($result); {
?>

  <!DOCTYPE html>
  <html lang="id">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <style>
    .border-frame {
      border-radius: 10px;
    }

    .form-text {
      text-decoration: none;
      /* Tidak ada garis bawah */
      color: #fff;
      /* Opsi: Mengubah warna teks */
    }

    .button-mod {
      border-radius: 50px;
      width: 200px;
    }
  </style>

  <body>
    <div class="container">
      <div class="row ">
        <div class="col-md-4">
          <!-- Profile card -->
          <div class="card mt-4 border-frame">
            <div class="card-body text-center">
              <!-- Profile picture -->
              <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle" alt="Profile picture">
              <!-- Profile name -->
              <h4 class="card-title mt-3"><?php echo $data['FullName']; ?></h4>
              <!-- Profile bio -->
              <p class="card-text">Terimakasih telah menjadi bagian dari CraftJog, kami sangat menghargai peran anda dalam mendukung UKM!</p>
              <!-- Profile social icons -->
              <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-outline-primary me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="btn btn-outline-info me-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="btn btn-outline-danger me-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="btn btn-outline-secondary me-2"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <!-- Profile details -->
          <div class="card mt-4 border-frame">
            <div class="card-body">
              <h4 class="card-title">Detail Profile</h4>
              <hr>
              <!-- Profile form -->


              <form>
                <div class="row mb-3">
                  <label for="Username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Username" id="Username" value="<?php echo $data['Username']; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Password" class="col-sm-2 col-form-label">Katasandi</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="Password" id="Password" value="<?php echo $data['Password']; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="FullName" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="FullName" id="FullName" value="<?php echo $data['FullName']; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="Email" id="Email" value="<?php echo $data['Email']; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="PhoneNumber" class="col-sm-2 col-form-label">No.Telepon</label>
                  <div class="col-sm-10">
                    <input type="tel" class="form-control" name="PhoneNumber" id="PhoneNumber" value="<?php echo $data['PhoneNumber']; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Gender" id="Gender" value="<?php echo $data['Gender']; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="DateOfBirth" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="DateOfBirth" id="DateOfBirth" value="<?php echo $data['DateOfBirth']; ?>" readonly>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" value="Jl. Kaliurang Km 14, Ngaglik, Sleman, Yogyakarta" readonly>
                  </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="button" class="btn btn-primary me-md-2 button-mod"><a href="editProfile.php" class="form-text"> Edit Profile</a></button>
                  <button type="button" class="btn btn-secondary button-mod"><a href="keluar.php" class="form-text">Keluar</a></button>
                </div>
              </form>

            <?php
          }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>