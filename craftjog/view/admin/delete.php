<?php
// include database connection file
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();

// Get id from URL to delete that user
$craftID = $_GET['id'];

// Get CraftImage before deleting the row
$result = mysqli_query($conn, "SELECT CraftImage FROM crafts WHERE CraftID=$craftID");
$row = mysqli_fetch_assoc($result);
$imageName = $row['CraftImage'];

// If CraftImage exists, update the CraftImage column to only store the filename
if ($imageName) {
    // Perbarui kolom CraftImage hanya dengan menyimpan nama file terakhir
    $lastSlashPos = strrpos($imageName, '/');
    $fileNameOnly = ($lastSlashPos !== false) ? substr($imageName, $lastSlashPos + 1) : $imageName;

    // Update database
    mysqli_query($conn, "UPDATE crafts SET CraftImage='$fileNameOnly' WHERE CraftID=$craftID");
}

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM crafts WHERE CraftID=$craftID");

// If deletion is successful, delete the associated image file
if ($result) {
    // Hapus file gambar dari direktori
    unlink("D:/XAMPP/htdocs/craftjog/img/" . $fileNameOnly);

    header("Location: product.php");
} else {
    echo "Terjadi kesalahan saat menghapus produk.";
}
?>