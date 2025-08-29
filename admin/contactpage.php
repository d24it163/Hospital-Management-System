<?php
include_once("config.php");
	if (isset($_POST['submit'])) {
		
		$id = $_POST['id'];
    $mobnumber = $_POST['mobnumber'];
    $email = $_POST['email'];
    $timing = $_POST['timing'];
    $pagedes = $_POST['pagedes'];

    $query = mysqli_query($con, "UPDATE detail SET phone_number='$mobnumber', email='$email',time='$timing',adress='$pagedes' WHERE id= '1'");

    if ($query) {
        echo '<script>alert("Contact Detail has been Updated")</script>';
        echo "<script>window.location.href='contactpage.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }


	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Contact Detail| Divyam Hospital</title>
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
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
			<?php include_once('side.php'); ?>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
			<div class="main-content">
				<div id="page-wrapper">
					<div class="main-page">
						<div class="forms">
							<h3 class="title1">Update Contact Detail</h3>
							<div class="form-grids row widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>Update Contact Detail:</h4>
								</div>
								<div class="form-body">
									<form name="update_career" method="post">

									<?php

									$ret = mysqli_query($con, "SELECT * FROM detail WHERE id = '1'");
									$cnt = 1;
									while ($row = mysqli_fetch_array($ret)) {

										?>

										<div class="form-group">
											<label for="mobnumber">Mobile Number</label>
											<input type="text" class="form-control" name="mobnumber" id="mobnumber"
												value="<?php echo $row['phone_number']; ?>" required="true">
										</div>

										<div class="form-group">
											<label for="exampleInputEmail1">Email</label>
											<input type="text" class="form-control" name="email" id="email"
												value="<?php echo $row['email']; ?>" required="true">
										</div>

										<div class="form-group">
											<label for="timing">Timing</label>
											<input type="text" class="form-control" name="timing" id="timing"
												value="<?php echo $row['time']; ?>" required="true">
										</div>

										<div class="form-group">
											<label for="padedes">Address</label>
											<input type="text" name="pagedes" id="pagedes" rows="5" class="form-control" value="<?php echo $row['adress']; ?>" required="true">
											<!-- <textarea name="pagedes" id="pagedes" rows="5" class="form-control">
											<?php echo $row['adress']; ?></textarea> -->
										</div>
										<?php } ?>
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