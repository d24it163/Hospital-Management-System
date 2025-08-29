<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM doctor WHERE id = '$id'");
while ($resultData = mysqli_fetch_array($query)) {
	$depart = $resultData['doctor_name'];
	$des = $resultData['doctor_dept'];
	$degree = $resultData['doctor_degree'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Edit Doctor | Divyam Hospital</title>
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
							<h3 class="title1">Update Doctor</h3>
							<div class="form-grids row widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>Update Doctor:</h4>
								</div>
								<div class="form-body">
									<form name="update_user" method="post" action="editdoctor.php">
										<div class="form-group">
											<label for="depart">Doctor Name</label>
											<input type="text" id="depart" name="depart" class="form-control"
												placeholder="Doctor Name" value="<?php echo $depart; ?>"
												required="true">
										</div>
										<div class="form-group">
											<label for="des">Doctor Department</label>
											<input type="text" name="des" id="des" class="form-control"
                                            placeholder="Doctor Department" required="true" value="<?php echo $des; ?>">
										</div>
                                        <div class="form-group">
											<label for="degree">Doctor Degree</label>
											<input type="text" id="degree" name="degree" class="form-control"
												placeholder="Doctor Degree" value="<?php echo $degree; ?>"
												required="true">
										</div>

										<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

										<button type="submit" name="submit" class="btn btn-default">Update</button>
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