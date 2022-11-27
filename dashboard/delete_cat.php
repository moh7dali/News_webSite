<?php
include "../connected.php";
$id = $_GET['cat_id'];
$query = mysqli_query($conn, "DELETE FROM `category` WHERE cat_id='$id'");

if ($query == true) {
?>
    <script>
        window.location = "category.php";
    </script>
<?php
} else {
?>
    <script>
        alert("There was a problem, please try again later");
    </script>
<?php
}
?>