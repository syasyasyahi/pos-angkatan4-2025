<?php
$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$selectCategory = mysqli_query($koneksi, "SELECT category_name FROM categories WHERE id='$id'");
$category = mysqli_fetch_assoc($selectCategory);
//var_dump($category);

if (isset($_POST['simpan'])) {
  $category_name = $_POST['category_name'];
  $insert = mysqli_query($koneksi, "INSERT INTO categories (category_name) VALUES ('$category_name')");

  header("location:?page=category");
}
if (isset($_POST['update'])) {
  $category_name = $_POST['category_name'];
  $update = mysqli_query($koneksi, "UPDATE categories SET category_name='$category_name' WHERE id='$id'");

  header('location:?page=category');
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
          <h13 class="card-title"><?php echo isset($_GET['edit']) ? 'Update' : 'Tambah' ?> Kategori</h3>
          <div class="card-body">
            <form action="" method="post">
              <label for="" class="form-label">Category Name</label><br>
              <input type="text" class="form-control w-50"
              name="category_name" value="<?php echo $category['category_name'] ?? '' ?>" required><br>
              <button type="submit" class="btn btn-primary"
                name="<?php echo isset($_GET['edit']) ? 'update' : 'simpan' ?>"><?php echo isset($id) ? 'Edit' : 'Create' ?></button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>