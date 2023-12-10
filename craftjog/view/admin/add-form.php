<?php
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();
include("includes/header.php");

// Mendapatkan CraftID terbaru
$result = mysqli_query($conn, "SELECT MAX(CraftID) AS max_id FROM crafts");
$row = mysqli_fetch_assoc($result);
$craftID = $row['max_id'] + 1;
?>

<div class="container pt-5 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Add New Product</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="add-form.php" method="post" name="form-product" enctype="multipart/form-data">
                        <!-- Nama barang -->
                        <div class="col-md-12 mb-3">
                            <label for="CraftName" class="form-label">Craft Name</label>
                            <input type="text" name="CraftName" id="CraftName" class="form-control"
                                placeholder="Write here" style="border: 1px solid lightgray; padding: 5px 10px;">
                        </div>

                        <!-- Deskripsi -->
                        <div class="col-md-12 mb-3">
                            <label for="Descriptions" class="form-label">Descriptions</label>
                            <textarea name="Descriptions" id="Descriptions" class="form-control" cols="30" rows="3"
                                style="border: 1px solid lightgray; padding: 5px 10px;"
                                placeholder="Enter description"></textarea>
                        </div>

                        <!-- Harga barang & Jumlah barang-->
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="Price" class="form-label">Price</label>
                                    <input type="number" name="Price" id="Price" class="form-control" placeholder="IDR"
                                        style="border: 1px solid lightgray; padding: 5px 10px;">
                                </div>
                                <div class="col-md-6">
                                    <label for="StockAvailable" class="form-label">Quantity of Stock</label>
                                    <input type="number" name="StockAvailable" id="StockAvailable" class="form-control"
                                        style="border: 1px solid lightgray; padding: 5px 10px;">
                                </div>
                            </div>
                        </div>

                        <!-- Lokasi -->
                        <div class="col-md-12 mb-3">
                            <label for="Locations" class="form-label">Locations</label>
                            <select name="Locations" id="Locations" class="form-control"
                                style="border: 1px solid lightgray; padding: 5px 10px;">
                                <?php
                                $result = mysqli_query($conn, "SELECT RegionName FROM regions");
                                while ($row = mysqli_fetch_array($result)):
                                    ?>
                                    <option value="<?= $row['RegionName'] ?>">
                                        <?= $row['RegionName'] ?>
                                    </option>
                                <?php endwhile ?>
                            </select>
                        </div>

                        <!-- Tipe kerajinan dan bahan baku -->
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="CraftType" class="form-label">Craft Type</label>
                                    <select name="CraftType" id="CraftType" class="form-select form-control"
                                        style="border: 1px solid lightgray; padding: 5px 10px;">
                                        <?php
                                        $result = mysqli_query($conn, "SELECT CraftTypeName FROM crafttypes");
                                        while ($row = mysqli_fetch_array($result)):
                                            ?>
                                            <option value="<?= $row['CraftTypeName'] ?>">
                                                <?= $row['CraftTypeName'] ?>
                                            </option>
                                        <?php endwhile ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="RawMaterial" class="form-label">Raw Material</label>
                                    <select name="RawMaterial" id="RawMaterial" class="form-select form-control"
                                        style="border: 1px solid lightgray; padding: 5px 10px;">
                                        <option value="Cotton">Cotton</option>
                                        <option value="Wood">Wood</option>
                                        <option value="Clay">Clay</option>
                                        <option value="Silver">Silver</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="col-md-12 mb-3">
                            <label for="CraftImage" class="form-label">Picture</label>
                            <input type="file" name="CraftImage" id="CraftImage" class="form-control" accept="image/*"
                                style="border: 1px solid lightgray; padding: 5px 10px;">
                        </div>

                        <!-- History -->
                        <div class="col-md-12 mb-3">
                            <label for="History" class="form-label">History</label>
                            <textarea name="History" id="History" class="form-control" cols="30" rows="3"
                                style="border: 1px solid lightgray; padding: 5px 10px;"
                                placeholder="Enter Product History"></textarea>
                        </div>

                        <!-- submit -->
                        <div class="col-md-12 mb-3">
                            <input type="submit" value="Add Product" name="add"
                                class="btn btn-outline-dark btn-md w-100 btn-radius">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Check If form submitted
if (isset($_POST['add'])) {
    // Ambil data dari formulir
    $craftName = $_POST['CraftName'];
    $descriptions = $_POST['Descriptions'];
    $price = $_POST['Price'];
    $stockAvailable = $_POST['StockAvailable'];
    $rawMaterial = $_POST['RawMaterial'];
    $history = $_POST['History'];

    // Mendapatkan RegionID berdasarkan Locations
    $locations = $_POST['Locations'];
    $result = mysqli_query($conn, "SELECT RegionID FROM regions WHERE RegionName = '$locations'");
    $row = mysqli_fetch_assoc($result);
    $regionID = $row['RegionID'];

    // Mendapatkan CraftTypeID berdasarkan CraftType
    $craftType = $_POST['CraftType'];
    $result = mysqli_query($conn, "SELECT CraftTypeID FROM crafttypes WHERE CraftTypeName = '$craftType'");
    $row = mysqli_fetch_assoc($result);
    $craftTypeID = $row['CraftTypeID'];

    // Proses file gambar
    $targetDir = "D:/XAMPP/htdocs/craftjog/img/";
    $targetDirRelative = "/craftjog/img/";
    $fileUrl = $targetDir . basename($_FILES["CraftImage"]["name"]);
    $fileUrlRelative = $targetDirRelative . basename($_FILES["CraftImage"]["name"]);
    // Periksa apakah file sudah ada
    if (file_exists($fileUrl)) {
        echo "Maaf, file sudah ada.";
    } else {
        // Pindahkan file ke folder yang diinginkan
        if (move_uploaded_file($_FILES["CraftImage"]["tmp_name"], $fileUrl)) {
            // Simpan data ke database
            $result = mysqli_query($conn, "INSERT INTO crafts (CraftID, CraftName, Descriptions, Price, StockAvailable, Locations, CraftType, RawMaterial, CraftImage, History, RegionID, CraftTypeID)
            VALUES ('$craftID','$craftName', '$descriptions', '$price', '$stockAvailable', '$locations', '$craftType', '$rawMaterial', '$fileUrlRelative', '$history', '$regionID', '$craftTypeID')");

            if ($result) {
                $status = "Success";
                $statusText = "Your data was saved";
                $icon = "success";
            } else {
                $status = "Oops...";
                $statusText = "Something went wrong!";
                $icon = "error";
            }
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var status = '<?php echo isset($status) ? $status : ""; ?>';
        var statusText = '<?php echo isset($statusText) ? $statusText : "Your data was saved"; ?>';
        var icon = '<?php echo isset($icon) ? $icon : "success"; ?>';

        if (status !== '') {
            Swal.fire({
                title: status,
                text: statusText,
                icon: icon,
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to product.php after confirmation
                    window.location.href = "product.php";
                }
            });
        }
    });
</script>
<?php include("includes/footer.php"); ?>