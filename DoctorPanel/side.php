<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="side.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <title>Dashboard Sidebar Menu</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                   <img src="logo1.jpg" alt="not found" title="" style="width:50px">                    </a>
                </span>

                <div class="text logo-text">
                    <span class="name">Doctor Panel</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

            
<!-- 
                <ul class="nav-links"> -->
               

                    <li class="nav-link">
                        <a href="#">
                        <i class="fa fa-home icon" aria-hidden="true"></i>
                            <!-- <i class='bx bx-home-alt icon'></i> -->
                            <span class="text nav-text">Dashboard</span>
                        </a>

                    </li>



 <li class="nav-link">
                        <a href="appointment-manage.php">
                        <i class='bx bx-calendar icon'></i>
                      
                            <span class="text nav-text">Appointment</span>
                        </a>
                    </li>
					
					<li class="nav-link">
                        <a href="add_doctor.php">
                        <i class="fa fa-user icon" aria-hidden="true"></i>
                            <!-- <i class='bx bx-user icon'></i> -->
                            <span class="text nav-text">Add Doctor</span>
                        </a>

                    </li>

                    <li class="nav-link">
                        <a href="doctor-manage.php">
                        <i class="fa fa-user-md icon" aria-hidden="true"></i>
                        
                        <span class="text nav-text">Doctor</span>
                        </a>
                    </li>

                   

                 

                    <li class="nav-link">
                        <a href="lab-manage.php">
                        <i class='bx bxs-flask icon'></i>
                        <span class="text nav-text">Laboratory</span>
                        </a>
                    </li>

               


                    <li class="nav-link">
                        <a href="contactpage.php">
                        <i class="fa fa-info-circle icon" aria-hidden="true"></i>
                        <span class="text nav-text"> Contact Detail</span>
                        </a>
                    </li>
                <!-- </ul> -->
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="doclogin.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

            </div>
        </div>

        <script src="side.js"></script>
        </nav>
</body>

</html>