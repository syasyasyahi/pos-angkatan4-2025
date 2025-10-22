<?php

$query = mysqli_query($koneksi, "SELECT * FROM categories");
$rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
// var_dump($categories)

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $q_delete = mysqli_query($koneksi, "DELETE FROM categories WHERE id='$id'");
  header("location:?page=category");
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
        <h3 class="card title">Data Categories</h3>
      </div>
    </div>
    <div class="card-body">
      <div class="d-flex justify-content-end m-2">
        <a href="?page=tambah-category" class="btn btn-primary">Add Categories</a>
      </div>
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Category Name</th>
          <th>Actions</th>
        </tr>
        <?php
        foreach ($query as $key => $category) {
          ?>
          <tr>
            <td>
              <?Php echo $key + 1 ?>
            </td>
            <td>
              <?Php echo $category['category_name'] ?>
            </td>
            <td><a href="?page=tambah-category&edit=<?php echo $category['id'] ?>" class="btn btn-success">Edit<i class="bi bi-pencil"></i></a>
              <form class="d-inline" action="?page=category&delete=<?php echo $category['id'] ?>" method="post" onclick="return confirm('Apakah anda yakin akan menghapus?')">
                <button type="submit" class="btn btn-danger">Delete<i class="bi bi-trash"></i>
              </form>
            </td>
          </tr>
          <?php
        }
        ?>
      </table>

    </div>
</body>

</html>