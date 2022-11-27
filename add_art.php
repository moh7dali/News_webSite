<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Add Article</title>
</head>
<body>
<?php include "nav.php"; ?>
<form class="form-floating g-3" method="POST"  enctype="multipart/form-data">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Article Name</label>
    <input type="text" class="form-control" name="artname"  required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Article Description</label>
    <textarea  class="form-control" name="desc"  required></textarea>
  </div>
  <br/>
  <div class="col-md-4">
  <input class="form-control" type="file" name="img">
</div>
<br/>
<div class="col-md-4">
<select class="form-select" aria-label="Default select example" name="cat">
  <option selected >Select Category</option>
  <option value="1">Sports</option>
  <option value="2">Scince</option>
  <option value="4">Tech</option>
</select>
</div>
<br/>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="add">ADD</button>
  </div>
</form>
<?php
    if (isset($_POST['add'])) {
        include "connected.php";
        $tm = md5(time());
        $file_name = $_FILES['img']['name'];
        $folder = "photos/" . $tm . $file_name;
        move_uploaded_file($_FILES["img"]["tmp_name"], $folder);
        $artname = $_POST['artname'];
        $desc = $_POST['desc'];
        $cat=$_POST['cat'];
        $reg = mysqli_query($conn, "INSERT INTO `article`( `title`, `img`, `desc`, `cat_id`) VALUES ('$artname','$folder','$desc','$cat')");
        if ($reg == true) {
           echo "<script>alert('Added')</script>";
        } else {
            echo "error";
        }
    }
    ?>
</body>
</html>