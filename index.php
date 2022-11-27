<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>World .</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="photos/download.jpg" alt="" width="70" height="50" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="#">World .</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="sign_up.php" class="btn btn-outline-success nav-link">JOIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
            <a href="login.php" class="btn btn-primary">Search now</a>
        </div>
        </div>
        <?php
            }
        }
        ?>

    </div>
</body>

</html>