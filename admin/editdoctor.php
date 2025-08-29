<?php
include "config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $depart = $_POST['depart'];
    $des = $_POST['des'];
    $degree = $_POST['degree'];
    $query = mysqli_query($con, "UPDATE doctor SET doctor_name='$depart', doctor_dept='$des', doctor_degree='$degree' WHERE id= $id");

    if ($query) {
        echo '<script>alert("Doctor has been Updated")</script>';
        echo "<script>window.location.href='doctor-manage.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
?>