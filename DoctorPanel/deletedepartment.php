<?php
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM department WHERE id=$id");
if ($query) {

    echo '<script>alert("Department has been deleted")</script>';
    echo "<script>window.location.href='department-manage.php'</script>";
    
} else {
    echo '<script>alert("Something Went Wrong. Please try again.")</script>';
}

?>