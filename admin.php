<?php
include "config.php";


if(isset($_POST['submit'])){

    $uname = $_POST['user'];
    $password = $_POST['pass'];


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from admin where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
           
            header('Location: admin/side.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="doctor/logo.jpg" type="image/x-icon">
  <title>LOGIN | Samved Hospital </title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'><link rel="stylesheet" href="admin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="login_box">
  <form method="post" action="">
    <div class="login-header">
      <span>Login</span>
    </div>
    
    <div class="input_box">
      <input type="text" name="user" id="user" class="input-field" required>
      <label for="user" class="label">Username</label>
      <i class="bx bx-user icon" style="color: #48fcff;"></i>
    </div>

    <div class="input_box">
      <input type="password" name="pass" id="pass" class="input-field" required>
      <label for="pass" class="label">Password</label>
      <i class="bx bx-lock-alt icon" style="color: #48fcff;"></i>
    </div>
    <div class="input_box" >
      <input type="submit" class="input-submit" value="Login" name="submit" >
    </div>

    <div class="remember-forgot">
        <div class="remember-me">
          <input type="checkbox" id="remember">
          <label for="remember">Remember me</label>
        </div>
  
        <div class="forgot">
          <a href="forgot.php">Forgot password?</a>
        </div>
      </div>

    <div class="forgot1">
        <a href="index.php">Back to Home</a>
    </div>
</form>
  </div>
</div>
<!-- partial -->
  
</body>
</html>