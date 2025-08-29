 <?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM appointment");
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<title>Appointment Manage| Samved Hospital</title>

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
								<h3 class="title1">Book Appointment </h3>
								<div class="table-responsive bs-example widget-shadow">
									<h4>Book Appointment :</h4>
									
									
									
									
									
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
					
					
					<?php

include "config.php";


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $services = $_POST['services'];
    $adate = $_POST['adate'];
    $aptime = $_POST['aptime'];
    $Address = $_POST['Address'];
    $prdr = $_POST['prdr'];
    $medhis = $_POST['medhis'];
    $insinfo = $_POST['insinfo'];
    $note = $_POST['note'];
    $nextvisit = $_POST['nextvisit'];
    $medicine = $_POST['medicine'];
    $report = $_POST['report'];
    $remark = $_POST['remark'];
    $ynote = $_POST['ynote'];

    $query = mysqli_query($con, "insert into  appointment(name,mobile_number,email,date_of_birth,gender,services,appointment_date,appointment_time,address,doctor,medical_history,insurance_info,note)  value('$name','$phone','$email','$dob','$gender','$services','$adate','$aptime','$Address','$prdr','$medhis','$insinfo','$note')");
    if ($query) {
        echo "<script>alert('Appointment has been successfully added.');</script>";
        echo "<script>window.location.href = 'appointment.php'</script>";

    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }


}
?>

                <form method="post">
                    <div >
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    required="true">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="phone">Mobile Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    required="true" maxlength="10" pattern="[0-9]+">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="email">Email</label>
                                <input type="email" class="form-control" id="appointment_email" placeholder="Email"
                                    name="email" required="true">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="dob">Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="DOB" name="dob" id='dob'
                                        required="true">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="gender">Gender</label>
                                    <select name="gender" id="gender" required="true" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="TransGender">TransGender</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="Subject">Services</label>
                                <select name="services" id="services" required="true" class="form-control">
                                
                                    <option value="">Select Services</option>
                                    <option value="Surgery">Surgery</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Psychiatryt">Psychiatryt</option>
                                    <option value="Emergency">Emergency</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="Gynaecology & Obstetrics">Gynaecology & Obstetrics
                                    </option>
                                    <option value="ICU">ICU</option>
                                    <?php 
                                $query=mysqli_query($con,"select * from department");
                                 while($row=mysqli_fetch_array($query))
                                    {
                                    ?>
                                    <option value="<?php echo $row['department_name']; ?>"><?php echo $row['department_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Appointment Date</label>
                                    <input type="date" class="form-control appointment_date" placeholder="Date"
                                        name="adate" id='adate' required="true">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="aptime">Appointment Time</label>
                                    <select name="aptime" id="aptime" required="true" class="form-control">
                                        <option value="">Select Time</option>
                                        <option value="9:00 A.M - 11:00 A.M">9:00 A.M - 11:00 A.M</option>
                                        <option value="11:00 A.M - 1:00 P.M">11:00 A.M - 1:00 P.M</option>
                                        <option value="1:00 P.M - 3:00 P.M">1:00 P.M - 3:00 P.M</option>
                                        <option value="3:00 P.M - 5:00 P.M">3:00 P.M - 5:00 P.M</option>
                                        <option value="5:00 P.M - 7:00 P.M">5:00 P.M - 7:00 P.M</option>
                                        <option value="7:00 P.M - 9:00 P.M">7:00 P.M - 9:00 P.M</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label" for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address"
                                    name="Address" required="true">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="prdr">Doctor</label>
                                    <select name="prdr" id="prdr" required="true" class="form-control" required="true">
                                        <option value="">Select Doctor</option>
                                        <option value="Dr. Varun Sibal (Cardiologist)">Dr. Varun Sibal (Cardiologist)
                                        </option>
                                        <option value="Dr. Prakash Bhatt (Neurologist)">Dr. Prakash Bhatt (Neurologist)
                                        </option>
                                        <option value="Dr. Jilan Shah(Psychiatrist)">Dr. Jilan Shah(Psychiatrist)
                                        </option>
                                        <option value="Dr. Mitesh Halvawala(Surgeon)">Dr. Mitesh
                                            Halvawala(Surgeon)</option>
                                        <option value="Dr. Bhushit Gadhiya(Pharmacy)">Dr. Bhushit
                                            Gadhiya(Pharmacy)</option>
                                        <option value="Dr. Krupaba Vala(Gynaecologist & Obstetrics)">Dr. Krupaba
                                            Vala(Gynaecologist & Obstetrics)</option>
                                            <?php 
                                $query=mysqli_query($con,"select * from doctor");
                                 while($row=mysqli_fetch_array($query))
                                    {
                                    ?>
                                    <option value="<?php echo $row['doctor_name']; ?>"><?php echo $row['doctor_name']; ?></option>
                                    <?php } ?>  
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="medhis">Medical History</label>
                                <input type="text" class="form-control" id="medhis" placeholder="Medical History"
                                    name="medhis" required="true">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label" for="insinfo">Insurance Information</label>
                                <input type="text" class="form-control" id="insinfo" placeholder="Insurance Information"
                                    name="insinfo" required="true">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label" for="note">Note</label>
                                <input type="text" class="form-control" id="note" placeholder="Note" name="note"
                                    required="true">
                            </div>

                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <!-- <a href="#" class="btn btn-primary btn-lg active" role="button" name="submit"
                                        aria-pressed="true">Book Appointment</a> --><br>
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg active">Book
                                        Appointment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	</body>
  </html>