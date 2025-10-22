<?php
$query = mysqli_query($koneksi, "SELECT * FROM orders ORDER BY id DESC");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $s_photo = mysqli_query($koneksi, "SELECT product_photo FROM products WHERE id = $id");
    $row = mysqli_fetch_assoc($s_photo);
    $filePath = $row['product_photo'];
    if (file_exists($filePath)) {
        unlink($filePath);
    }
    $delete = mysqli_query($koneksi, " DELETE FROM products WHERE id = $id");
    if ($delete) {
        header("location:?page=product");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card title">Data Product</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end p-2">
                        <a href="pos/add-pos.php" class="btn btn-primary">Add POS</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Order Code</th>
                            <th>Order Date</th>
                            <th>Order Amount</th>
                            <th>Order Change</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        <?php
                        foreach ($rows as $key => $v) {
                            ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $v['order_code'] ?></td>
                                <td><?php echo $v['order_date'] ?></td>
                                <td><?php echo $v['order_amount'] ?></td>
                                <td><?php echo $v['order_change'] ?></td>
                                <td><?php echo $v['order_status'] ?></td>
                                <td>
                                    <a href="?page=tambah-product&edit=<?php echo $v['id'] ?>"
                                        class="btn btn-success btn-sm">
                                        <i class="bi bi-pencil"></i>
                                        Edit</a>
                                    <a href="?page=product&delete=<?php echo $v['id'] ?>" class="btn btn-warning btn-sm"
                                        onclick="return confirm('ingin delete?')">
                                        <i class="bi bi-trash"></i>
                                        Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>