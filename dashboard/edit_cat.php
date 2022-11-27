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
    <form class="form-floating g-3" method="POST" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="catname" >
        </div>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Category Description</label>
            <input type="text" class="form-control" name="desc" >
        </div>
        <br />
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="edit">Edit</button>
        </div>
    </form>
    <?php
    $id=$_GET['cat_id'];
    if (isset($_POST['edit'])) {
        include "../connected.php";
        $catname = $_POST['catname'];
        $desc = $_POST['desc'];
        if($catname != ""){
            $reg = mysqli_query($conn, "UPDATE `category` SET `cat_name`='$catname' WHERE `cat_id`=$id ");
            if ($reg == true) {
               echo "<script>alert('Added')</script>";
            } else {
                echo "error";
            }
        }
        else{
        $reg = mysqli_query($conn, "UPDATE `category` SET `cat_desc`='$desc' WHERE `cat_id`=$id ");
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