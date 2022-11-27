<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body{
            background-color: #007979;
        }
    </style>
</head>
<body>
    <br />
    <form class="g-6" method="POST">
    <div class="form-floating col-md-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
        <label for="floatingInput">Email address</label>
    </div>
    <br/>
    <div class="form-floating col-md-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
        <label for="floatingPassword">Password</label>
    </div>
    <br />
    <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
    </form>

    <?php
    session_start();
    if (isset($_POST["Submit"])) {
        $name = $_POST['name'];
        $pass =$_POST['pass'];
        include "../connected.php";
        if ($name != "" && $pass != "") {
            $sql_query = "SELECT count(*) as cntUser from `admins` WHERE  `username` ='" . $name . "' and `Password` ='" . $pass . "'";
            $result = mysqli_query($conn, $sql_query);
            $row = mysqli_fetch_array($result);
            $count = $row['cntUser'];
            if ($count > 0) {
                header('Location:index.php');
            } }}
    ?>
</body>

</html>