<?php


include "config.php";

if (isset($_POST['submit'])) {
	$file_name=$_FILES['uploadfile']['name'];
	$tempname=$_FILES['uploadfile']['tmp_name'];
	$folder = "department/".$file_name;
	
	move_uploaded_file($tempname,$folder);
	
    $depart = $_POST['depart'];
    $des = $_POST['des'];
    $query = mysqli_query($con,"insert into department(image,department_name,description) value('$folder','$depart','$des')");
    if ($query) {
      
	   echo "<script>alert('Department has been added.');</script>";
       echo "<script>window.location.href = 'add-department.php'</script>";

    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
} else {
    ?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>ADD Department | Divyam Hospital</title>
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
                <?php include_once('side.php'); ?>
            </div>
            <div class="col-lg-10">
                <div class="main-content">

                    <div id="page-wrapper">
                        <div class="main-page">
                            <div class="forms">
                                <h3 class="title1">Add Department</h3>
                                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                                    <div class="form-title">
                                        <h4>Hospital Department:</h4>
                                    </div>
                                    <div class="form-body">
                                         <form method="post" enctype="multipart/form-data" >
											<div class="form-group">

												<label for="exampleInputPassword1">Image</label>
												<input type="file" id="username" name="uploadfile" class="form-control">
											</div>
										
                                            <div class="form-group">
                                                <label>Department Name</label>
                                                <input type="text" class="form-control" id="depart" name="depart"
                                                    placeholder="Department Name" value="" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="des" id="des"  required="true">
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
<?php } ?>