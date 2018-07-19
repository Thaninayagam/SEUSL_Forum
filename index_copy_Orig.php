<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Reg_No FROM usertable WHERE usernm = '$myusername' and psswrd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: main_win.php");
      }else {
         $error = "Your Login Name or Password is invalid";
          
          
          $er= "<script>function myFunction() {alert('Your Login Name or Password is invalid!');}</script><script>myFunction()</script>";
          echo $er;
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>SEU Community</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="b/css/bootstrap.min.css">
    <script src="b/js/jquery.min.js"></script>
    <link rel="stylesheet" href="b/css/bootstrap.css">
    <link rel="stylesheet" href="b/css/bootstrap.min.css">
    <script src="b/js/bootstrap.js"></script>
    
<style>
    .progress-bar {
    color: #333;
} 


* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

body {
	
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #5d5d5d;
	background: #f2f2f2;
    
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
		text-align: center;
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
    </style>
    
   
    
    
</head>
    <body>
        
   
<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form action="" method="post" role="login">
          <img src="lgo.png" style="height:200px" class="img-responsive" alt="" />
            <p align="center">South Eastern University Community Login</p>
          <input type="text" name="username" placeholder="SEU/IS/Yr/Course/NO" required class="form-control input-lg" value="" />
          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
            </form>   
          <div class="container-fluid">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create account</button> 
            
         
          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        <!--<iframe src="userReg.php"></iframe>-->
            <!--<embed src="userReg.php" width="500" height="400"> </embed>-->
            
<div class="container-fluid">

<form action="reg_scr.php" method="post">
  
    <img src="lgo.png" style="height:200px">
  

  <div class="login-form">
      <h2 align="center">SEUSL Community User Registation Form</h2>
    <label><b>Name</b></label><br>
    <input type="text" placeholder="Enter your Name here" name="name" required><br>
    
    <label><b>Address</b></label><br>
    <input type="text" placeholder="Enter your Address here" name="address" required><br>
    
    <label><b>NIC No</b></label><br>
    <input type="text" placeholder="Enter your NIC no here" name="nicNo" required><br>
    
    <label><b>University Registration No</b></label><br>
    <input type="text" placeholder="SEU/IS/year/course/no" name="regNo" required><br>
    
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter your username here" name="UName" required><br>

    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
        
    <button type="submit">Register</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <!--<div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>-->
     
</form>
</div>
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>    
                        
            or <a href="#">reset password</a>
          
        
      </section>  
          
        
      </div>
         
        
      </div>
      
      <div class="col-md-4"></div>
        

  </div> 
</div>
</body>
</html>