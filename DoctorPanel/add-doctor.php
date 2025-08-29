<?php

include "config.php";
if (isset ($_POST['submit'])) {
    $id = $_POST['id'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "admin/upload/" . $filename;
    move_uploaded_file($tempname, $folder);
    $depart = $_POST['depart'];
    $des = $_POST['des'];
    $degree = $_POST['degree'];
    $query = mysqli_query($con, "INSERT INTO  doctor (id,name,img_dir,doctor_name,doctor_dept,doctor_degree) VALUES ('$id','$filename','$folder','$depart','$des','$degree')");
    // if ($query) {
    //     echo "<script>alert('Doctor has been added.');</script>";
    //     echo "<script>window.location.href = 'add-doctor.php'</script>";

    // } else {
    //     echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    // }
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>ADD Doctor | Divyam Hospital</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body class="cbp-spmenu-push">
    <div class="row">
        <div class="col-lg-2">
            <?php include_once ('side.php'); ?>
        </div>
        <div class="col-lg-10">
            <div class="main-content">

                <div id="page-wrapper">
                    <div class="main-page">
                        <div class="forms">
                            <h3 class="title1">Add Doctor</h3>
                            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                                <div class="form-title">
                                    <h4>Hospital Doctors:</h4>
                                </div>
                                <div class="form-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Doctor Image</label>
                                            <input type="file" name="uploadfile">
                                        </div>
                                        <div class="form-group">
                                            <label>Doctor Name</label>
                                            <input type="text" class="form-control" id="depart" name="depart"
                                                placeholder="Doctor Name" value="" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label> Doctor Department </label>
                                            <input type="text" class="form-control" name="des" id="des"
                                                placeholder=" Doctor Department " value="" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label>Doctor Degree</label>
                                            <input type="text" class="form-control" id="degree" name="degree"
                                                placeholder="Doctor Degree" value="" required="true">
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-default">Add</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>