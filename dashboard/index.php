<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<?php include "nav.php"; ?>
    <div class="card-group" style="width: 30rem;">
  <div class="card">
  <img src="../photos/cat.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Add Categories</h5>
            <p class="card-text">Add Extra Categories</p>
            <a href="../add_cat.php" class="btn btn-primary">Add</a>
        </div>
  </div>
  <div class="card" style="width: 30rem;">
  <img src="../photos/images.png" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Add Article</h5>
            <p class="card-text">Add Extar Articles </p>
            <a href="../add_art.php" class="btn btn-primary">Add</a>
        </div>
  </div>
</div>
</body>
</html>