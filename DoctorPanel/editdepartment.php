<?php
include "config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $depart = $_POST['depart'];
    $des = $_POST['des'];
    $query = mysqli_query($con, "UPDATE department SET department_name='$depart', description='$des' WHERE id= $id");

    if ($query) {
        echo '<script>alert("Department has been Updated")</script>';
        echo "<script>window.location.href='department-manage.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
?>