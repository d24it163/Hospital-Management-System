<section class="form cid-rGtxJnmlVA" id="footer2-2o">

 <?php
        include_once("config.php");
        $query = mysqli_query($con, "SELECT * FROM detail");
while ($row=mysqli_fetch_array($query)) {
	
	$address=$row['adress'];
	$email=$row['email'];
	$mobile=$row['phone_number'];
		$time=$row['time'];
	
}?>

            <div class="container">
                <div class="row">


                    <div class="col-md-6 title-col align-left col-lg-3">

                        <div class="item-wrap pb-4">
                            <div class="icons-wrap" id="middle">
                                <img src="logo.jpg" alt="not found" style="width:90%">
                               <!-- <h2 class="title1 align-left p-0 mbr-bold mbr-fonts-style display-5">Samved Hospital
                                </h2>-->
                            </div>
                        </div>
                        <div class="socicon-wrap" id="center">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                            <span class="mbr-iconfont socicon-youtube socicon"></span>

                        </div>


                    </div>

                    <div class="col-md-6 col-lg-3">

                        <h2 class="title align-left mbr-bold pb-2 mbr-fonts-style display-5"> Hospital Address</h2>

                        <div class="align-wrap align-left">

                            <div class="item-wrap">
                                <div class="icons-wrap pb-2">
                                    <span class=" mbr-iconfont fa fa-map-marker" aria-hidden="true"></span>


                                    <h3 class="icon-title align-left mbr-regular mbr-fonts-style display-4"
                                        id="address">
                                       <?php echo $address; ?></h3>

                                </div>


                            </div>

                            <div class="item-wrap">
                                <div class="icons-wrap pb-2">
                                    <span class="mbr-iconfont fa fa-clock-o" aria-hidden="true"></span>

                                    <h3 class="icon-title mbr-regular mbr-fonts-style display-4"><?php echo $time; ?></h3>
                                </div>
                            </div>

                            <div class="item-wrap">
                                <div class="icons-wrap pb-2">

                                    <span class="mbr-iconfont fa fa-phone" aria-hidden="true"></span>

                                    <h3 class="icon-title align-left mbr-regular mbr-fonts-style display-4">
                                        <a href="tel:9510003188"><?php echo $mobile; ?></a>
                                    </h3>


                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 col-lg-3">


                        <h2 class="title mbr-bold align-left pb-2 mbr-fonts-style display-5">Quick links</h2>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="index.php">Home</a></h3>



                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="services.php">Our Services</a></h3>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="about.php">About us</a></h3>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="appointment.php">Appointment</a></h3>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="contact.php">Contact Us</a></h3>
                         <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="docpanel.php">Doctor Panel</a></h3>
  					     <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="ptlogin.php">Patient Panel</a></h3>



                    </div>




                    <div class="col-md-6 col-lg-3 mbr-form" data-form-type="formoid">

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