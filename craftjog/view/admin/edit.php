<?php
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();
include("includes/header.php");

// Check if form is submitted for craft update
if (isset($_POST['update'])) {
    $craftID = $_POST['craftID'];
    $craftName = $_POST['CraftName'];
    $descriptions = $_POST['Descriptions'];
    $price = $_POST['Price'];
    $stockAvailable = $_POST['StockAvailable'];
    $locations = $_POST['Locations'];
    $craftType = $_POST['CraftType'];
    $rawMaterial = $_POST['RawMaterial'];
    $history = mysqli_real_escape_string($conn, $_POST['History']);

    // Proses file gambar jika diubah
    if ($_FILES["CraftImage"]["name"] != "") {
        $targetDir = "D:/XAMPP/htdocs/craftjog/img/";
        $targetDirRelative = "/craftjog/img/";
        $fileName = basename($_FILES["CraftImage"]["name"]);
        $fileUrl = $targetDir . $fileName;
        $fileUrlRelative = $targetDirRelative . $fileName;

        // Pindahkan file ke folder penyimpanan gambar
        if (move_uploaded_file($_FILES["CraftImage"]["tmp_name"], $fileUrl)) {
            // Update data ke database
            $result = mysqli_query($conn, "UPDATE crafts SET CraftName='$craftName', Descriptions='$descriptions', Price='$price', StockAvailable='$stockAvailable', Locations='$locations', CraftType='$craftType', RawMaterial='$rawMaterial', CraftImage='$fileUrlRelative', History='$history' WHERE CraftID=$craftID");

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
    } else {
        // Update data ke database tanpa mengubah gambar
        $result = mysqli_query($conn, "UPDATE crafts SET CraftName='$craftName', Descriptions='$descriptions', Price='$price', StockAvailable='$stockAvailable', Locations='$locations', CraftType='$craftType', RawMaterial='$rawMaterial', History='$history' WHERE CraftID=$craftID");

        if ($result) {
            $status = "Success";
            $statusText = "Your data was saved";
            $icon = "success";
        } else {
            $status = "Oops...";
            $statusText = "Something went wrong!";
            $icon = "error";
        }
    }
}

// Display selected craft data based on id
// Getting id from url
$craftID = $_GET['id'];
// Fetch craft data based on id
$result = mysqli_query($conn, "SELECT * FROM crafts WHERE CraftID=$craftID");
$row = mysqli_fetch_assoc($result);
?>

<div class="container pt-5 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Edit Product</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="edit.php?id=<?php echo $craftID; ?>" method="post" name="form-product"
                        enctype="multipart/form-data">
                        <!-- Hidden input for CraftID -->
                        <input type="hidden" name="craftID" value="<?php echo $craftID; ?>">

                        <!-- Nama barang -->
                        <div class="col-md-12 mb-3">
                            <label for="CraftName" class="form-label">Craft Name</label>
                            <input type="text" name="CraftName" id="CraftName" class="form-control"
                                value="<?php echo $row['CraftName']; ?>"
                                style="border: 1px solid lightgray; padding: 5px 10px;">
                        </div>

                        <!-- Deskripsi -->
                        <div class="col-md-12 mb-3">
                            <label for="Descriptions" class="form-label">Descriptions</label>
                            <textarea name="Descriptions" id="Descriptions" class="form-control" cols="30" rows="3"
                                style="border: 1px solid lightgray; padding: 5px 10px;"
                                placeholder="Enter description"><?php echo $row['Descriptions']; ?></textarea>
                        </div>

                        <!-- Harga barang & Jumlah barang-->
                        <div class="col-md-12 mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="Price" class="form-label">Price</label>
                                    <input type="number" name="Price" id="Price" class="form-control"
                                        value="<?php echo $row['Price']; ?>"
                                        style="border: 1px solid lightgray; padding: 5px 10px;">
                                </div>
                                <div class="col-md-6">
                                    <label for="StockAvailable" class="form-label">Quantity of Stock</label>
                                    <input type="number" name="StockAvailable" id="StockAvailable" class="form-control"
                                        value="<?php echo $row['StockAvailable']; ?>"
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
                                $resultLocations = mysqli_query($conn, "SELECT RegionName FROM regions");
                                while ($rowLocations = mysqli_fetch_array($resultLocations)):
                                    $selected = ($rowLocations['RegionName'] == $row['Locations']) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $rowLocations['RegionName']; ?>" <?php echo $selected; ?>>
                                        <?php echo $rowLocations['RegionName']; ?>
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
                                        $resultCraftTypes = mysqli_query($conn, "SELECT CraftTypeName FROM crafttypes");

                                        while ($rowCraftTypes = mysqli_fetch_array($resultCraftTypes)):
                                            $selectedCraftType = ($rowCraftTypes['CraftTypeName'] == $row['CraftType']) ? 'selected' : '';
                                            ?>
                                            <option value="<?php echo $rowCraftTypes['CraftTypeName']; ?>" <?php echo $selectedCraftType; ?>>
                                                <?php echo $rowCraftTypes['CraftTypeName']; ?>
                                            </option>
                                        <?php endwhile ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="RawMaterial" class="form-label">Raw Material</label>
                                    <select name="RawMaterial" id="RawMaterial" class="form-select form-control"
                                        style="border: 1px solid lightgray; padding: 5px 10px;">
                                        <?php
                                        $rawMaterialOptions = ['Cotton', 'Wood', 'Clay', 'Silver'];
                                        foreach ($rawMaterialOptions as $option):
                                            $selectedRawMaterial = ($option == $row['RawMaterial']) ? 'selected' : '';
                                            ?>
                                            <option value="<?php echo $option; ?>" <?php echo $selectedRawMaterial; ?>>
                                                <?php echo $option; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="col-md-12 mb-3">
                            <label for="CraftImage" class="form-label">Picture</label>
                            <input type="file" name="CraftImage" id="CraftImage" class="form-control" accept="image/*"
                                style="border: 1px solid lightgray; padding: 5px 10px;">
                            <img src="<?php echo $row['CraftImage']; ?>" alt="Current Image"
                                style="max-width: 200px; margin-top: 10px;">
                        </div>

                        <!-- History -->
                        <div class="col-md-12 mb-3">
                            <label for="History" class="form-label">History</label>
                            <textarea name="History" id="History" class="form-control" cols="30" rows="3"
                                style="border: 1px solid lightgray; padding: 5px 10px;"
                                placeholder="Enter Product History"><?php echo $row['History']; ?></textarea>
                        </div>

                        <!-- submit -->
                        <div class="col-md-12 mb-3">
                            <input type="submit" value="Update Product" name="update"
                                class="btn btn-outline-dark btn-md w-100 btn-radius">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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