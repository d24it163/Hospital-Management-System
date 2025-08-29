<?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM service");
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

    <title>SERVICES | Samved Hospital</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/gallery/style.css">
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


    <section class="menu cid-rGsqBtahAB" once="menu" id="menu1-18">

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
            </div>
        </nav>
    </section>

    <section class="cid-rGsOyzHk89" id="header3-1j" style="background-image: url(doctor/07service.jpg);">


        <div class="mbr-overlay" style="opacity: 0; background-color: rgb(24, 24, 24);"></div>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/"
            xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="100%" height="100%"
            preserveAspectRatio="none" viewBox="0 0 858 235" style="">

            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent" stroke="none" class=""
                style="">
            </rect>
            <g class="currentLayer" style="">
                <title>Layer 1</title>
                <path fill="#4a90d6" fill-opacity="1" stroke="none" stroke-width="2" stroke-dasharray="none"
                    stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1"
                    marker-start="" marker-mid="" marker-end=""
                    d="M13.91718,157.55035C128.42169,209.00593 174.16977,66.43387 406.36266,148.04844C638.55554,229.66302 649.93992,110.39426 837.69295,145.53147C1025.44597,180.66868 893.71138,356.73312 396.9054,368.57034C-99.90058,380.40757 -100.58733,106.09477 13.91718,157.55035z"
                    id="svg_1" class=""></path>
            </g>
        </svg>
        <div class="container">

            <div class="row">
                <div class="col-md-6 content align-left col-lg-6">


                    <h1 class="mbr-section-title align-left mbr-white mbr-bold pb-3 mbr-fonts-style display-1"
                        style="color: white; background-color: #00000034;"> We take Care of
                        Your Healthy Life</h1>
                    <p class="mbr-text pb-3 mbr-white mbr-semibold align-left mbr-fonts-style display-7"
                        style="color: white; background-color: #00000034;">
                        A Person who has good physical health
                        is likely to have bodily functions and processes working at their peak.
                    </p>
                    <div class="align-left mbr-section-btn"><a class="btn btn-md btn-primary display-4"
                            href="appointment.php">Appointment</a> <a class="btn btn-md btn-primary display-4"
                            href="contact.php">Contact</a>
                    </div>

                </div>

            </div>
        </div>
    </section>



 <section class="features1 cid-rGtBqmc2gI" id="features6-33">
        <div class="container">
        <h1 class="mbr-section-title align-left mbr-bold pb-4 mbr-fonts-style display-1"> Our Services</h1>
            <div class="row">
            

                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper align-left card1 ">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                            <img src="doctor/emer.svg" alt="" width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">Emergency Service</h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">The emergency Service is the first point of contact for any critically ill patient, needing immediate medical attention.</p>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>
                </div>
				
				
				<div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper  align-left card2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                            <img src="doctor/surgery.svg" alt=""  width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">
                                Surgery  </h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">
                                The surgery  is where patients go for surgical intervention to treat medical conditions or injuries. </p>
                                <br>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper  align-left card3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                        <img src="doctor/icu.svg" alt=""  width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">
                                ICU </h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">
                               Our ICU (Intensive Care Unit) provides round-the-clock critical care and life support for patients with severe or life-threatening conditions. </p>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper  align-left card4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                        <img src="doctor/cardiology.svg" alt=""  width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">cardiology  Service</h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">
                               Our Cardiology Service specializes in the diagnosis and treatment of heart conditions. With expert cardiologists and advanced diagnostic tools</p>
                                <br>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>

                </div>
				
				
				
				
</div>
</div>
</section>



 <section class="features1 cid-rGtBqmc2gI" id="features6-33">
        <div class="container">
            <div class="row">

                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper  align-left card4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                        <img src="doctor/neurology.svg" alt=""  width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">Neurology<h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">
                              Our Neurology Service focuses on diagnosing and treating disorders of the brain, spine, and nervous system.</p>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>

                </div>

                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper  align-left card3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                        <img src="doctor/phychiatry.svg" alt=""  width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">
                               Psychiatryt Service</h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">
                                Our Psychiatry Service provides compassionate care for mental health and emotional well-being, stress, and more through personalized therapy and support."  </p>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>
                </div>

                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper  align-left card2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                        <img src="doctor/gynacology.svg" alt=""  width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">
                               Gynaecology and Obstetrics Service</h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">
                               Our Gynecology and Obstetrics Service offers comprehensive care for women’s health, including pregnancy, childbirth, and reproductive health </p>
                                <br>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>
                </div>

                <div class="card col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper align-left card1 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="269.19780227841716" height="147.43955898849208"
                            style="">
                            <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="transparent"
                                stroke="none" class="" style="" fill-opacity="1"></rect>
                            <g class="currentLayer" style="">
                                <title>Layer 1</title>
                                <path fill="white" fill-opacity="1" stroke="none" stroke-width="2"
                                    stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt"
                                    stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid=""
                                    marker-end=""
                                    d="M-110.40659359291077,50.950556279754636 C-110.40659359291077,-2.4372237202453633 -10.614843592910766,-81.94505372024535 88.16483640708924,-81.94505372024535 C186.94450640708922,-81.94505372024535 266.9560464070892,-38.70095372024536 266.9560464070892,14.686816279754638 C266.9560464070892,68.07458627975464 186.94450640708922,111.31868627975464 88.16483640708924,111.31868627975464 C-10.614843592910766,111.31868627975464 -110.40659359291077,104.33832627975464 -110.40659359291077,50.950556279754636 z"
                                    id="svg_1" class=""
                                    transform="rotate(-4.22603702545166 78.27473449707026,14.686810493469203) "></path>
                            </g>
                        </svg>
                        <div class="card-img">
                        <img src="doctor/pharmacy.svg" alt=""  width="48px" height="48px">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title pb-2 mbr-bold mbr-fonts-style display-5">Pharmacy Service</h4>
                            <p class="mbr-text pb-4 mbr-fonts-style display-4">Our Pharmacy Service provides safe, accurate, and timely dispensing of medications, ensuring quality pharmaceutical care and guidance for all patients.</p>
                            <br>
                            <br>
                            <h5 class="link mbr-semibold mbr-fonts-style display-4"><a href="appointment.php" class="text-black">
                                    Appointement</a></h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    





    <section class="cid-rGtD7vjbo6" id="map2-3k">




        <div class="container">
            <div class="row">
                <div class="col-md-12 content py-4 col-lg-6 ">

                    <h1 class="mbr-section-title align-left mbr-bold pb-4 mbr-fonts-style display-2">Contact Us</h1>


                    <div class="align-wrap">
                        <div class="icons-wrap">
                            <div class="icon-wrap">
                                <span class="mbr-iconfont mbrib-timer"></span>
                                <div class="text-wrap">
                                    <h3 class="icon-title mbr-bold mbr-fonts-style display-5">FROM 9 am to 7 pm</h3>

                                </div>
                            </div>


                        </div>


                        <div class="icons-wrap">
                            <div class="icon-wrap">
                                <span class="mbr-iconfont mbrib-globe"></span>
                                <div class="text-wrap">
                                    <h3 class="icon-title mbr-bold mbr-fonts-style display-5" style="text-align: left;">
                                       Nr. Stadium Circle, Navrangpura, 
								Ahmedabad - 380 009 Gujarat (India)</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 img-col">
                    <div class="google-map">
                         <!--<iframe width="100%" height="200%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.1574983535406!2d72.13475987580757!3d21.735418963131988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a0c40b36b27%3A0x78efa767f46d9844!2sITHub%20Software%20Solution%20%26%20Website%20Development!5e0!3m2!1sen!2sin!4v1706848546583!5m2!1sen!2sin"></iframe>-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.547704895812!2d72.55563847681113!3d23.040373479161367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e854bfedcccbd%3A0x949b3918dea165ef!2sSamved%20hospital!5e0!3m2!1sen!2sin!4v1744806668327!5m2!1sen!2sin" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer>
      <?php include("footer.php");?>
    </footer>


    <section class="cid-rGsJ0Syn9D" id="footer1-19">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">Designed and Developed by <a href="#"
                            style="color:white">Netra trivedi</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/mbr-tabs/mbr-tabs.js"></script>
    <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
    <script src="assets/mobirise-shop/script.js"></script>
    <script src="assets/countdown/jquery.countdown.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/formstyler/jquery.formstyler.js"></script>
    <script src="assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/gallery/player.min.js"></script>
    <script src="assets/gallery/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>



</body>

</html>