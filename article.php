<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Article</title>
</head>

<body>
    <?php include "nav.php"; ?>
    <br>


    <div class="card mb-3" style="max-width: 540px;">
    <?php
    $c_id = $_GET['cat_id'];
    include "connected.php";
    $get = mysqli_query($conn, "SELECT * FROM `article` WHERE cat_id=$c_id;");
    if (mysqli_num_rows($get) > 0) {
        while ($r = mysqli_fetch_array($get)) {
    ?>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $r['img']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $r['title']; ?></h5>
                    <p class="card-text"><?php echo $r['desc']; ?></p>
                    <a href="show_article.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">Read More</a>
                </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
    </div>
</body>

</html>