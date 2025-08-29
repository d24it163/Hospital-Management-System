<?php
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM lab WHERE id=$id");
if ($query) {

    echo '<script>alert("Laboratory has been deleted")</script>';
    echo "<script>window.location.href='lab-manage.php'</script>";
    
} else {
    echo '<script>alert("Something Went Wrong. Please try again.")</script>';
}

?>