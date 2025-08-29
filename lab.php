<?php
session_start();
error_reporting(0);
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
  

    $query = mysqli_query($con, "insert into  lab(name,mobile_number,email,date_of_birth,gender,test,test_date,test_time,address)  value('$name','$phone','$email','$dob','$gender','$services','$adate','$aptime','$Address')");
    if ($query) {
        echo "<script>alert('Laboratory has been successfully added.');</script>";
        echo "<script>window.location.href = 'lab.php'</script>";

    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratory| Samved Hospital</title>
</head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="doctor/logo.jpg" type="image/x-icon">
<meta name="description">


<link rel="stylesheet" href="appointment.css"><!--Appointment-->
<link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
<link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet" href="assets/tether/tether.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets/as-pie-progress/css/progress.min.css">
<link rel="stylesheet" href="assets/dropdown/css/style.css">
<link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
<link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
<link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="assets/socicon/css/styles.css">
<link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="stylesheet" href="assets/formoid-css/recaptcha.css">
<link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-PFK425" height="0" width="0"
        style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PFK425');
</script>

<body>
    <!-- Analytics -->
    <!-- Analytics -->
    <!-- Google Analytics -->
    <!-- Google Tag Manager -->
    <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-PFK425" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PFK425');</script>
    <!-- End Google Tag Manager -->
    <!-- /Google Analytics -->
    <!-- /Analytics -->

    <!-- /Analytics -->
    <section class="menu cid-rGsqBtahAB" once="menu" id="menu1-1a">




        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <!-- <div class="container"> -->
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
              <img src="logo.jpg" alt="not found" title="" style="height: 4rem;">                    </a>
                </span>
               <!-- <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.php">Samved
                        Hospital</a></span>-->

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="index.php" aria-expanded="false">
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="services.php" aria-expanded="false">
                            Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="about.php" aria-expanded="false">
                            About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="doctors.php" aria-expanded="false">
                            Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="departments.php" aria-expanded="false">
                            Departments</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="career.php" aria-expanded="false">
                            Careers</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="contact.php" aria-expanded="false">
                            Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="lab.php" aria-expanded="false">
                            Laboratory</a>
                    </li>

                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4"
                            href="appointment.php">Appointment </a></div>


                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="admin.php" aria-expanded="false">
                            Login</a>
                    </li>

            </div>
            </div>
        </nav>
    </section>

    <section class="cid-rGsOE1E5qe" id="header1-1k">




        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 content align-left py-4 col-lg-5 ">

                   <br><br><br><br><br><br> <h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-2">We take Care of
                        Your Healthy Life</h1>
                    <p class="mbr-text pb-3 align-left mbr-fonts-style display-7"> A Person who has good physical health
                        is likely to have bodily functions and processes working at their peak.</p>





                    <div class="align-left mbr-section-btn"><a class="btn btn-md btn-primary display-4"
                            href="contact.php">Enquire now</a></div>

                </div>

                <div class="col-md-12 col-lg-7 img-col">
                    <div class="mbr-figure">
                       <br><br><br><br><br><br> <img src="doctor/n5.webp" alt="not found">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 style="text-align: center;    color: #ed6436; font-size: 250%;"
                    class="card-title mbr-bold mbr-fonts-style display-5">Lab Form</h1>
                <p style="text-align: center;" class="mbr-text pb-3 align-left mbr-fonts-style display-7"> Book your
                    appointment with Doctor.</p>
                <form method="post">
                    <div class="container">
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
                                <label class="control-label" for="Subject">Tests</label>
                                <select name="services" id="services" required="true" class="form-control">
                                    <option value="">Select Tests</option>
                                    <option value="Thyroid Function Tests">Thyroid Function Tests</option>
                                    <option value="Blood Glucose Test">Blood Glucose Test</option>
                                    <option value="Liver Function Tests">Liver Function Tests</option>
                                    <option value="Hemoglobin A1c (HbA1c)">Hemoglobin A1c (HbA1c)</option>
                                    <option value="C-reactive Protein (CRP)">C-reactive Protein (CRP)</option>
                                    <option value="Erythrocyte Sedimentation Rate (ESR)">Erythrocyte Sedimentation Rate (ESR)</option>
                                    <option value="Vitamin D Test">Vitamin D Test </option>
                                    <option value="Creatinine Clearance Test">Creatinine Clearance Test</option>
                                    <option value="Arterial Blood Gas (ABG) Test">Arterial Blood Gas (ABG) Test</option>
                                    <option value="Allergy Testing">Allergy Testing</option>
                                    <option value="Microbiology Tests">Microbiology Tests</option>
                                    <?php 
                                $query=mysqli_query($con,"select * from lab");
                                 while($row=mysqli_fetch_array($query))
                                    {
                                    ?>
                                    <option value="<?php echo $row['test']; ?>"><?php echo $row['test']; ?></option>
                                    <?php } ?> 
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Test Date</label>
                                    <input type="date" class="form-control appointment_date" placeholder="Date"
                                        name="adate" id='adate' required="true">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="aptime">Test Time</label>
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

                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <!-- <a href="#" class="btn btn-primary btn-lg active" role="button" name="submit"
                                        aria-pressed="true">Book Appointment</a> -->
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg active">Book
                                        Test</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <footer>
              <?php include("footer.php");?>
    </footer>

    <section class="cid-rGsJ0Syn9D" id="footer1-1b">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">Designed and Developed by <a href="#"
                            style="color:white"> Netra trivedi</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>