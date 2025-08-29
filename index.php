<?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM detail");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description">

    <title> HOME | samved Hospital </title>
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
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


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
                        <!--<img src="doctor/logo.jpg" alt="not found" title="" style="height: 3rem;">-->
						<img src="logo.jpg" alt="not found" title="" style="height: 4rem;">
                    </a>
                </span>
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

                    <li class="nav-item">
                        <a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a>
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
        	<br>
   <br>
   <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mbr-figure">
                    <img src="welcome.jpg" alt="not found" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form cid-rGtxy1TdOd" id="form3-2m">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6 my-auto img-col">
                    <div class="mbr-figure">
                        <img src="doctor/receptionist2 copy.jpg" alt="not found">
                    </div>

                </div>
                <div class="col-lg-6 m-auto mbr-form" data-form-type="formoid">
                    <!--Formbuilder Form-->
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler"
                        data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true"
                            value="yQKlLoRFWk8KujFoZO1QUmoPXBZebeeoopEVqVEiyrzK8BVNOuPSQR3fFbj+RI5zGalFrmA3Pq6UBai4fxKGopF/himIWIQV8LVYpwGHKYJmRyc/t+cNTbtMA+2u+DKQ.RylYoDTBAPqUrGlFg0b0qOH7Ei4VsGyd8Abo5iQyNcPAiHo18Vmv8zy5hKBe0iGr85KNpFaWu5N/wez9FkvD3mmofabI7+WBqmJZ+7l5f/IVNLjXU3koWy+foCel4oKz">
                        <div class="form-row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for
                                filling out
                                the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...!
                                some
                                problem!</div>
                        </div>
                        <div class="dragArea form-row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="mbr-semibold mbr-fonts-style display-7">Do you want to be Healthy?
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h5 class="mbr-bold pb-3 mbr-fonts-style display-2">Contact Us</h5>
                            </div>
                            <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="username" data-form-field="select"
                                    class="form-control display-7" id="select-form3-2m" placeholder="Enter your name..">
                            </div>
                            <div data-for="number" class="col-lg-12 col-md-12 col-sm-12 form-group">

                                <input type="tel" name="mobilenumber" placeholder="Enter Your Mobile Number..."
                                    id="number-form3-2m" class="form-control display-7" data-form-field="number">

                            </div>
                            <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email"
                                    class="form-control display-7" value="" id="email-form3-2m">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary display-7">SEND</button>
                            </div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
                </div>




            </div>

        </div>
    </section>

    <section class="progress-bars2 counters cid-rGtBgCg3f6" id="counters1-31">
        <div class="container">
            <h2 class="mbr-section-title mbr-bold pb-5 align-center mbr-fonts-style display-2">

                <div><span style="color: inherit; font-size: 3.6rem;">Our Achievements</span><br></div>
            </h2>

            <div class="row justify-content-center">
                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">OPERATION</h4>
                        <img src="doctor/operation.jpg" alt="not found">
                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            400</h3>

                    </div>
                </div>


                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">DEPARTMENTS</h4>
                        <img src="doctor/department.jpg" alt="not found">
                       
                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            15</h3>

                    </div>
                </div>

                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">Doctors</h4>
                        <img src="doctor/doctor.jpg" alt="not found">
                        
                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            40</h3>

                    </div>
                </div>

                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">AWARDS</h4>
                        <img src="doctor/award.jpg" alt="not found">
                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            321</h3>

                    </div>
                </div>



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