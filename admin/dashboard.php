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
		<title> Dashboard</title>

		
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
								
								
								
								
								<section class="cards">
      
	  
	  
	  <div class="card">
        <a href="add_doctor.php"><center>
		<i class="fa fa-user icon" aria-hidden="true"></i>
		</center>
        <div>
          <h3><center>
		  Add Doctor
		  </center></h3>
		</div>
		</a>
      </div>
      
      
	  
	  
	  <div class="card">
        <a href="add_doctor.php"><center>
		<i class="fa fa-user icon" aria-hidden="true"></i>
		</center>
        <div>
          <h3><center>
		  Add Doctor
		  </center></h3>
		</div>
		</a>
      </div>
      
      
	  
	  
	  <div class="card">
        <a href="add_doctor.php"><center>
		<i class="fa fa-user icon" aria-hidden="true"></i>
		</center>
        <div>
          <h3><center>
		  Add Doctor
		  </center></h3>
		</div>
		</a>
      </div>
      
      
	  
	  
	  <div class="card">
        <a href="add_doctor.php"><center>
		<i class="fa fa-user icon" aria-hidden="true"></i>
		</center>
        <div>
          <h3><center>
		  Add Doctor
		  </center></h3>
		</div>
		</a>
      </div>
      
      
	  
	  
	  <div class="card">
        <a href="add_doctor.php"><center>
		<i class="fa fa-user icon" aria-hidden="true"></i>
		</center>
        <div>
          <h3><center>
		  Add Doctor
		  </center></h3>
		</div>
		</a>
      </div>
      
      
	  
	  
      
    </section>
	
	<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: #f0f2f5;
  color: #333;
}

.container {
  max-width: 1200px;
  margin: auto;
  padding: 30px;
}

.main-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 40px;
}

.main-header h1 {
  font-size: 32px;
  margin-bottom: 10px;
  color: #2c3e50;
}

.main-header nav {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.main-header nav a {
  text-decoration: none;
  color: #555;
  font-size: 16px;
  padding: 8px 14px;
  border-radius: 6px;
  transition: background 0.3s, color 0.3s;
}

.main-header nav a:hover {
  background-color: #ed6436;
  color: white;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}

.card {
  background: white;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
  display: flex;
  align-items: center;
  gap: 20px;
  transition: transform 0.3s;
}

.card:hover {
  transform: translateY(-5px);
}

.card i {
  font-size: 36px;
  color: #ed6436;
}

.card h3 {
  margin: 0;
  font-size: 24px;
  color: #2c3e50;
}

.card p {
  margin: 2px 0 0;
  color: #777;
}

</style>
								
								


							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
					
	</body>

	</html>
	<?php } ?>