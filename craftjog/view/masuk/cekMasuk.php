<?php
include 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();

if (isset($_POST['btnLogin'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE Username='$Username' AND Password = '$Password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0) {
        // if (password_verify($Password, $data['Password']))
        if ($data['Username'] == $Username) {
            // masuk berhaasil
            $_SESSION['UserID'] = $data['UserID'];
            header('location:profile.php');
        } else {
            // Katasandi salah
            // error_log("Password mismatch - Input Password: $Password, Database Password: {$data['Password']}");
            // header("location:masuk.php?pesan=Katasandi Salah");
            echo "salah ya";
        }
    } else {
        // Username salah
        header("location:masuk.php?pesan=Username Tidak Terdaftar");
    }
}
?>