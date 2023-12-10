<?php
include_once 'D:\OS C\Xampp\htdocs\craftjog\db.php';
session_start();
include("includes/header.php");

// Atur jumlah item per halaman
$itemsPerPage = isset($_GET['itemsPerPage']) ? $_GET['itemsPerPage'] : 10;

// Atur halaman saat ini
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Item pertama yang akan ditampilkan
$offset = ($page - 1) * $itemsPerPage;

// Query untuk mendapatkan data dengan batasan jumlah item per halaman
$query = "SELECT CraftID, CraftName, Descriptions, Price, StockAvailable, Locations, CraftImage FROM crafts LIMIT $offset, $itemsPerPage";
$result = mysqli_query($conn, $query);

// Mendapatkan jumlah total item dari database
$totalItemsQuery = "SELECT COUNT(*) as total FROM crafts";
$totalItemsResult = mysqli_query($conn, $totalItemsQuery);
$totalItems = mysqli_fetch_assoc($totalItemsResult)['total'];

// Menghitung jumlah total halaman
$totalPages = ceil($totalItems / $itemsPerPage);
?>

<div class="container pt-5 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h4 class="text-white text-capitalize ps-3">Product</h4>
                    </div>
                </div>
                <div class="row d-flex mt-3">
                    <div class="col-md-7"></div>
                    <div class="col-md-3 d-flex justify-content-between align-items-center px-4">
                        <label for="itemsPerPage" class="font-weight-bold" style="font-size: 13px;">Items per
                            page:</label>
                        <select class="form-select form-select-sm w-auto" id="itemsPerPage"
                            onchange="changeItemsPerPage()">
                            <option value="10" <?php echo ($itemsPerPage == 10) ? 'selected' : ''; ?>>10</option>
                            <option value="25" <?php echo ($itemsPerPage == 25) ? 'selected' : ''; ?>>25</option>
                            <option value="50" <?php echo ($itemsPerPage == 50) ? 'selected' : ''; ?>>50</option>
                            <option value="100" <?php echo ($itemsPerPage == 100) ? 'selected' : ''; ?>>100</option>
                        </select>
                    </div>
                    <div class="col-md-2 style=" style="text-align: right">
                        <a class="font-weight-bold" href="/craftjog/view/admin/add-form.php"
                            style="text-align: right; font-size: 13px;">
                            <img src="\craftjog\img\square-plus-regular.svg" alt="" style="width: %"> Add New Product
                        </a>
                    </div>
                </div>
                <div class="table-responsive p-2 mt-3">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Product
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Location</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Stock</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Price</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = $offset + 1;
                            while ($row = mysqli_fetch_assoc($result)):
                                ?>
                                <tr>
                                    <td class="align-middle text-center ">
                                        <p class="text-xs mb-0">
                                            <?php echo $row['CraftID']; ?>
                                        </p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="<?php echo $row['CraftImage']; ?>"
                                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">
                                                    <?php echo $row['CraftName']; ?>
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <?php echo $row['Descriptions']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs mb-0">
                                            <?php echo $row['Locations']; ?>
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">
                                            <?php echo $row['StockAvailable']; ?>
                                        </p>
                                        <span
                                            class="badge badge-sm <?php echo ($row['StockAvailable'] > 0) ? 'bg-gradient-success' : 'bg-gradient-secondary'; ?>">
                                            <?php echo ($row['StockAvailable'] > 0) ? 'Available' : 'Out of Stock'; ?>
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">
                                            IDR
                                            <?php echo $row['Price']; ?>
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="edit.php?id=<?php echo $row['CraftID']; ?>"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit craft">
                                            <i class="material-icons">
                                                edit
                                            </i>
                                        </a>
                                        <a href="javascript:void(0);" class="text-secondary font-weight-bold text-xs delete"
                                            data-toggle="tooltip" data-original-title="Delete craft"
                                            onclick="confirmDelete(<?php echo $row['CraftID']; ?>)">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $number++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item <?php echo ($page == 1) ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?php echo ($page - 1); ?>&itemsPerPage=<?php echo $itemsPerPage; ?>"
                aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>&itemsPerPage=<?php echo $itemsPerPage; ?>">
                    <?php echo $i; ?>
                </a>
            </li>
        <?php endfor; ?>

        <li class="page-item <?php echo ($page == $totalPages) ? 'disabled' : ''; ?>">
            <a class="page-link" href="?page=<?php echo ($page + 1); ?>&itemsPerPage=<?php echo $itemsPerPage; ?>"
                aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>

<script>
    function changeItemsPerPage() {
        var itemsPerPage = document.getElementById('itemsPerPage').value;
        window.location.href = '?page=1&itemsPerPage=' + itemsPerPage;
    }
</script>

<script>
    function confirmDelete(craftID) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to delete.php with craftID parameter
                window.location.href = "delete.php?id=" + craftID;
            }
        });
    }
</script>

<?php include("includes/footer.php"); ?>