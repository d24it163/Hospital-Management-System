<?php
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM doctor WHERE id=$id");
if ($query) {

    echo '<script>alert("Doctor has been deleted")</script>';
    echo "<script>window.location.href='doctor-manage.php'</script>";
    
} else {
    echo '<script>alert("Something Went Wrong. Please try again.")</script>';
}

?>