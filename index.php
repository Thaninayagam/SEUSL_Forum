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
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="b/css/bootstrap.min.css">
    <script src="b/js/jquery-3.2.1.min.js"></script>
    <script src="b/js/bootstrap.min.js"></script>
    <script src="b/js/bootstrap.js"></script>
    
<style>
    body{
        background-color:white;
        
    }
    #lolll{
        background-color:whitesmoke;
        border-radius: 15px;
        padding: 15px;
    }
    
    </style>
    
    
</head>
    <body>
        <div class="container-fluid" >
        <div class="row" style="height:50px"></div>
        
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                
                <div class="container-fluid" id="lolll">
                    
                
                <img src="lgo.png"  style="margin: auto; height:200px;"  class="img-responsive" alt="" />
      
                     <h3 align="center">South Eastern University Community Login</h3>
                 
                    <form align="center" method="post">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="username" class="form-control" name="username"  required>
                          </div>
                        <br>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="password" required>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                          </div>
                        
                          <button type="submit" class="btn btn-primary btn-lg" style="width:100%">Login</button>
                        </form>
                    <div align="center">
                     <p>Dont have a account, Then..</p>
                    
                    <button type="button" class="btn btn-info btn-lg">Create account</button> 
                    
                   </div>
                
                </div>
                </div>
            
            <div class="col-sm-4"></div>
            
            </div>
            

</body>
</html>
