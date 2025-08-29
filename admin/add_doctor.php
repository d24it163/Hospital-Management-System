<?php


include "config.php";

	if (isset($_POST['submit'])) {
	
		$name = $_POST['doctorname'];
		$department = $_POST['department'];
		$degree = $_POST['degree'];
		
		$file_name=$_FILES["uploadfile"]["name"];
		$tempname= $_FILES["uploadfile"]["tmp_name"];
		$folder = "images/".$file_name;
		move_uploaded_file($tempname,$folder);
		$query = mysqli_query($con, "insert into  doctor(name,img_dir,doctor_name,doctor_dept ,doctor_degree) value('$file_name','$folder','$name','$department','$degree')");
		echo $query;
		
		if ($query) {
			
			echo "<script>alert('Doctor has been added.');</script>";
			echo "<script>window.location.href = 'add_doctor.php'</script>";

		} else {
			echo "<script>alert('Something Went Wrong. Please try again.');</script>";
		}
	}
	else {
	?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title> ADD Doctor | Divyam Hospital</title>

		
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
								<h3 class="title1">Add Doctor</h3>
								<div class="form-grids row widget-shadow" data-example-id="basic-forms">
									<div class="form-title">
										<h4>Add Doctor</h4>
									</div>
									<div class="form-body">
										<form method="POST" enctype="multipart/form-data">
									

											<div class="form-group">
												<label for="exampleInputEmail1">Doctor Name</label>
												<input type="text" class="form-control" id="adminname" name="doctorname"
													placeholder="Doctor Name">
											</div>
											<div class="form-group">

												<label for="exampleInputPassword1">Image</label>
												<input type="file" id="username" name="uploadfile" class="form-control">
											</div>
											
											<div class="form-group">

												<label for="exampleInputPassword1">Doctor Department</label>
												<input type="text" id="username" name="department" class="form-control">
											</div>
											
											<div class="form-group">

												<label for="exampleInputPassword1">Doctor Degree</label>
												<input type="text" id="username" name="degree" class="form-control">
											</div>
											
											<button type="submit" name="submit" class="btn btn-default">ADD</button>
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