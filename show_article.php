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
<?php
    $a_id = $_GET['id'];
    include "connected.php";
    $get = mysqli_query($conn, "SELECT * FROM `article` WHERE id=$a_id;");
    if (mysqli_num_rows($get) > 0) {
        while ($r = mysqli_fetch_array($get)) {
    ?>
<img src="<?php echo $r['img']; ?>"  class="rounded float-end" alt="...">
<h1><?php echo $r['title']; ?></h1>
<p><?php echo $r['desc']; ?></p>
<?php
        }
    }
    ?>
</body>
</html>