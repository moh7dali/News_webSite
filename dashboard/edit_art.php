<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Add Category</title>
</head>

<body>
    <?php include "nav.php"; ?>
    <form class="form-floating g-3" method="POST"  enctype="multipart/form-data">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Article Name</label>
    <input type="text" class="form-control" name="artname" >
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Article Description</label>
    <input type="text" class="form-control" name="desc"  >
  </div>
<br/>
<div class="col-md-4">
<select class="form-select" aria-label="Default select example" name="cat">
  <option selected >Select Category</option>
  <option value="1">Sports</option>
  <option value="2">Scince</option>
  <option value="3">Tech</option>
</select>
</div>
<br/>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="edit">edit</button>
  </div>
</form>
    <?php
    $id=$_GET['id'];
    if (isset($_POST['edit'])) {
        include "../connected.php";
        $artname = $_POST['artname'];
        $desc = $_POST['desc'];
        $cat=$_POST['cat'];
        if($artname != ""){
            $reg = mysqli_query($conn, "UPDATE `article` SET `title`='$artname' WHERE `id`=$id ");
            if ($reg == true) {
               echo "<script>alert('Added')</script>";
            } else {
                echo "error";
            }
        }
        else
        if($desc != ""){
        $reg = mysqli_query($conn, "UPDATE `article` SET `desc`='$desc' WHERE `id`=$id ");
        if ($reg == true) {
           echo "<script>alert('Added')</script>";
        } else {
            echo "error";
        }
    }
    else
    if($artname == "" && $desc == "")
    {
        $reg = mysqli_query($conn, "UPDATE `article` SET `cat_id`='$cat' WHERE `id`=$id ");
        if ($reg == true) {
           echo "<script>alert('Added')</script>";
        } else {
            echo "error";
        }
    }
}
    ?>
</body>

</html>