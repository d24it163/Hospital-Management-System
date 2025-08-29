<?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM doctor");
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="doctor/logo.jpg" type="image/x-icon">
    <meta name="description">

    <title> DOCTOR | Samved Hospital</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/formoid-css/recaptcha.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/gallery/style.css">
    <link rel="stylesheet" href="doctor.css">
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

</head>

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


    <section class="menu cid-rGsqBtahAB" once="menu" id="menu1-16">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <!-- <div class="container"> -->
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="logo.jpg" alt="not found" title="" style="height: 4rem;">
                    </a>
                </span>
               <!-- <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5"
                        href="index.php">Samved Hospital</a></span>-->
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
                        <a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="lab.php" aria-expanded="false">
                            Laboratory</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="admin.php" aria-expanded="false">
                            Login</a>
                    </li>
                </ul>
            </div>
            <!-- </div> -->
        </nav>
    </section>

    <section class="cid-rGsOllGbjd" id="header4-1h">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 content py-4 col-lg-5 ">

                    <h1 class="mbr-section-title align-left mbr-bold pb-4 mbr-fonts-style display-1"> We take Care of
                        Your Healthy Life</h1>


                    <div class="align-wrap">
                        <div class="icons-wrap">
                            <div class="icon-wrap">

                                <div class="text-wrap">

                                    <p class="mbr-text mbr-fonts-style display-4">A Person who has good physical health
                                        is likely to have bodily functions and processes working at their peak.</p>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div >
                    <div class="align-left mbr-section-btn"><a class="btn btn-md btn-primary display-4"
                        href="appointment.php">Appointment</a> 
                    </div>
                    </div>


                </div>
                <div class="col-md-12 col-lg-7 img-col">
                    <div class="mbr-figure">
                        <img src="doctor/01doctor.jpg" alt="not found">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="mbr-gallery cid-rGtDhIxNyM takedown" id="shop1-3n">
        <div class="container">
            <h1 class="mbr-section-title align-left mbr-bold pb-4 mbr-fonts-style display-1"> Better Doctors. Better Care. </h1>
            <div class="row">
                <div class="col-lg-3">
                    <div class="fff">
                        <img src="doctor/varun.jpg" alt="not found">
                        <div class="dname"> Dr. Varun Sibal </div>
                        <div class="dename"> Cardiology Department </div>
                        <div class="degname"> MBBS, MD(CARD.) </div>
                         <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>

                    </div>
                </div>

                <div class="col-lg-3 ">
                    <div class="ffs">
                        <img src="doctor/prakash.jpg" alt="not found">
                        <div class="dname"> Dr. Prakash Bhatt </div>
                        <div class="dename"> Neurology Department </div>
                        <div class="degname"> MBBS, DM(Neurology)</div>
                         <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                        <div class="fft">
                            <img src="doctor/jilan.jpg" alt="not found">
                            <div class="dname"> Dr. Jilan Shah </div>
                            <div class="dename"> Psychiatry Department </div>
                            <div class="degname"> MBBS, MD(Psychiatry)</div>
                             <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                        </div>
                </div>

                <div class="col-lg-3 ">
                        <div class="ffr">
                            <img src="doctor/mitesh.jpg" alt="not found">
                            <div class="dname"> Dr. Mitesh Halvawala </div>
                            <div class="dename"> Haematology Department </div>
                            <div class="degname"> MBBS, DNB, DM(Haematology)</div>
                             <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                        </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="mbr-gallery cid-rGtDhIxNyM takeup" id="shop1-3n">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="fff">
                        <img src="doctor/bhushit.jpg" alt="not found">
                        <div class="dname"> Dr. Bhushit Gadhiya </div>
                        <div class="dename"> Paediatrics Department</div>
                        <div class="degname"> MBBS, PhD(Paediatrict Surgery)</div>
                        <br>
                        <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                    </div>
                </div>

                <div class="col-lg-3 ">
                    <div class="ffs">
                        <img src="doctor/krupa.jpg" alt="not found">
                        <div class="dname"> Dr. Krupaba Vala </div>
                        <div class="dename"> Gynaecology & Obstetrics Department </div>
                        <div class="degname"> MBBS, MD(Gynaecology & Obstetrics)</div>
                         <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                        <div class="fft">
                            <img src="doctor/nirav.jpg" alt="not found">
                            <div class="dname"> Dr. Nirav Thadeshwar </div>
                            <div class="dename"> Oncology Department </div>
                            <div class="degname"> MBBS, MD(Medicine), DM (Oncology)</div>
                             <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                        </div>
                </div>

                <div class="col-lg-3 ">
                        <div class="ffr">
                            <img src="doctor/purnendu.jpg" alt="not found">
                            <div class="dname"> Dr. Purnendu Mehta </div>
                            <div class="dename"> Intensive Care Unit (ICU) </div>
                            <div class="degname"> MBBS, MSc(Intensive Care Medicine)</div>
                             <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                        </div>
                </div>
            </div>
        </div>
        
    </section>

  

    <section class="mbr-gallery cid-rGtDhIxNyM takeup" id="shop1-3n">
   
        <div class="container">
            <div class="row">
            <?php
            include_once("config.php");
			$query=mysqli_query($con,"select * from doctor");
			
	while($data=mysqli_fetch_array($query))
	{    	
?>
                <div class="col-lg-3" style="margin-top:15px;">
                    <div class="fff" >
                    <img src="admin/<?php  echo $img=$data['img_dir']; ?>" alt="not found" style="height: 255px; width: 255px;">
                        <div class="dname"> <?php  echo $doctor; ?></div>
                        <div class="dename"> <?php  echo $doctor=$data['doctor_name'];?></div>
                        <div class="degname"> <?php  echo $data['doctor_degree'];?></div>
                        <br>
                        <div><a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a></div>
                    </div>
                </div>
                <?php } ?>
            </div>
            
        </div>
        
    </section>
 

    <footer>
             <?php include("footer.php");?>
    </footer>


    <section class="cid-rGsJ0Syn9D" id="footer1-17">

        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12>
                <p class= " mbr-text mb-0 mbr-fonts-style display-7">Designed and Developed by <a
                href="#" style="color:white">Netra trivedi</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
    <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/mbr-tabs/mbr-tabs.js"></script>
    <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/formstyler/jquery.formstyler.js"></script>
    <script src="assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>



</body>


</html>