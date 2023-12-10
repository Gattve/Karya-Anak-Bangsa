<?php 
// asumsikan $mysqli adalah koneksi ke database
// asumsikan $_SESSION['user_id'] sudah diisi sebelumnya
// ambil data dari form
$username = $_POST['Username'];
$password = $_POST['Password'];
$fullname = $_POST['FullName'];
$email = $_POST['Email'];
$phone = $_POST['PhoneNumber'];
$gender = $_POST['Gender'];
$dob = $_POST['DateOfBirth'];

// validasi dan sanitasi data
// misalnya, cek apakah email sudah valid
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // tampilkan pesan error dan kembali ke halaman sebelumnya
  echo "Email tidak valid";
  header("Location: profile.php");
  exit();
}

// misalnya, cek apakah password sudah kuat
if (strlen($password) < 8) {
  // tampilkan pesan error dan kembali ke halaman sebelumnya
  echo "Password terlalu pendek";
  header("Location: profile.php");
  exit();
}

// lakukan sanitasi data dengan fungsi mysqli_real_escape_string
$username = mysqli_real_escape_string($mysqli, $username);
$password = mysqli_real_escape_string($mysqli, $password);
$fullname = mysqli_real_escape_string($mysqli, $fullname);
$email = mysqli_real_escape_string($mysqli, $email);
$phone = mysqli_real_escape_string($mysqli, $phone);
$gender = mysqli_real_escape_string($mysqli, $gender);
$dob = mysqli_real_escape_string($mysqli, $dob);

// enkripsi password dengan fungsi password_hash
$password = password_hash($password, PASSWORD_DEFAULT);

// buat query untuk mengupdate data user
$query = "UPDATE users SET Username = '$username', Password = '$password', FullName = '$fullname', Email = '$email', PhoneNumber = '$phone', Gender = '$gender', DateOfBirth = '$dob' WHERE id = $_SESSION[user_id]";

// jalankan query
$result = mysqli_query($mysqli, $query);

// cek apakah query berhasil
if ($result) {
  // tampilkan pesan sukses dan kembali ke halaman profile
  echo "Data berhasil diupdate";
  header("Location: profile.php");
  exit();
} else {
  // tampilkan pesan error dan kembali ke halaman sebelumnya
  echo "Data gagal diupdate";
  header("Location: profile.php");
  exit();
}

?>