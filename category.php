<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Category</title>
</head>
<body>
<?php include "nav.php"; ?>
    <br>
<div class="card-group" style="width: 30rem;">
  
    <?php
        include "connected.php";
        $get = mysqli_query($conn, "SELECT * FROM `category`");
        if (mysqli_num_rows($get) > 0) {
            while ($r = mysqli_fetch_array($get)) {

        ?>
        <div class="card">
        <img src="<?php echo $r['cat_img']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $r['cat_name']; ?></h5>
            <p class="card-text"><?php echo $r['cat_desc']; ?></p>
            <a href="article.php?cat_id=<?php echo $r['cat_id']; ?>" class="btn btn-primary">Search now</a>
        </div>
        </div>
        <?php
            }
        }
        ?>

    </div>
</body>
</html>