<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM department WHERE id = '$id'");
while ($resultData = mysqli_fetch_array($query)) {
	$depart = $resultData['department_name'];
	$des = $resultData['description'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Edit Department | Divyam Hospital</title>
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
							<h3 class="title1">Update Department</h3>
							<div class="form-grids row widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>Update Department:</h4>
								</div>
								<div class="form-body">
									<form name="update_user" method="post" action="editdepartment.php">
										<div class="form-group">
											<label for="depart">Department Name</label>
											<input type="text" id="depart" name="depart" class="form-control"
												placeholder="Department Name" value="<?php echo $depart; ?>"
												required="true">
										</div>
										<div class="">
											<label for="des">Description</label>
											<input type="text" name="des" id="des" class="form-control"
												required="true" value="<?php echo $des; ?>">
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