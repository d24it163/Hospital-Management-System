<?php
include "config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $adate = $_POST['adate'];
    $aptime = $_POST['aptime'];
    $ynote = $_POST['ynote'];
    $repdate = $_POST['repdate'];
    $remark = $_POST['remark'];
   
    $query = mysqli_query($con, "UPDATE lab SET test_date='$adate',test_time='$aptime',report_result='$ynote',report_issue_date='$repdate',remark='$remark' WHERE id= $id");

    if ($query) {
        echo '<script>alert("Laboratory has been Updated")</script>';
        echo "<script>window.location.href='lab-manage.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
?>