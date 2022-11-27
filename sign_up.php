<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Sign UP</title>
    <style>
        body{
            background-color: #007979;
        }
    </style>
</head>
<body>
    <form class="form-floating g-3" method="POST">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name"  required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="email" class="form-control" name="email"  required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="un" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" required>
  </div>
  <br/>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="Register">Sign UP</button>
  </div>
</form>
<?php
    if (isset($_POST['Register'])) {
        $name = $_POST['name'];
        $un = $_POST['un'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
    
    include "connected.php";
    $register = mysqli_query($conn, "INSERT INTO `users`(`username`, `name`, `email`, `phone`,`password`) VALUES ('$un','$name','$email','$phone','$pass')");
    if ($register == true) {
        header('Location: login.php');
    }
}
    ?>
</body>
</html>