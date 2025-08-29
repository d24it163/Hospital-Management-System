<?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM lab");
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<title>Laboratory Manage| Divyam Hospital</title>

		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />		
		<link href="css/style.css" rel='stylesheet' type='text/css' />		
		<link href="css/font-awesome.css" rel="stylesheet">		
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
			rel='stylesheet' type='text/css'>		
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">		
		<link href="css/custom.css" rel="stylesheet">	
		<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
							<div class="tables">
								<h3 class="title1">Laboratory Manage</h3>
								<div class="table-responsive bs-example widget-shadow">
									<h4>Laboratory Manage:</h4>
									<table class="table table-bordered">
										<thead>
											<tr>
                                                <th>#</th>
												<th>Name</th>
												<th>Mobile Number</th>
												<th>Email</th>
												<th>Date Of Birth</th>
												<th>Gender</th>
												<th>Tests</th>
												<th>Test Date</th>
												<th>Test Time</th>
                                                <th>Address</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											while ($row = mysqli_fetch_array($query)) {
												echo "<tr>";
                                                echo "<td>".$row['id']."</td>";	
												echo "<td>".$row['name']."</td>";	
												echo "<td>".$row['mobile_number']."</td>";	
												echo "<td>".$row['email']."</td>";
												echo "<td>".$row['date_of_birth']."</td>";
                                                echo "<td>".$row['gender']."</td>";
                                                echo "<td>".$row['test']."</td>";
                                                echo "<td>".$row['test_date']."</td>";
                                                echo "<td>".$row['test_time']."</td>";	
												echo "<td>".$row['address']."</td>";		
												echo "<td> <a href='lab-edit.php?id=$row[id]'><i class='bx bxs-edit'></i>
                                                </a> |
												<a href='deletelab.php?id=$row[id]'><i class='bx bxs-trash'  ></i>
												</a>
														</td>
												</tr>";
												
											} ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
			
	</body>

	</html>
	