      <?php
   include('session.php');
include('win_scr.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>SEUSL Web Community</title>
    
    
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="b/css/bootstrap.css">
    <link rel="stylesheet" href="b/css/bootstrap.min.css">
    <script src="b/js/jquery.min.js"></script>
    <script src="b/js/bootstrap.js"></script>
    <script src="b/js/jquery-3.2.1.min.js"></script>
    
    
    <style>
        body{
            background-color:dimgray;   
        }
        .navbar-fixed-top{
            background-color:#000066;
            
            
            
        }
        #ryt{
            width: 200px;
        }  
    
    </style>
   
    
    
    </head>
    <body>
   
 
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SEUSL WEB Community</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
          
        <li><a href="Logout.php">Logout</a></li>
          <li class="dropdown">
              <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Test</a></li>
              
              
                </ul>
          
          </li>
          
          <li><a><?php
              echo date("l j F Y");
              ?></a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user" ></span><?php echo $ttr ?></a></li>
        
        
      </ul>
    </div>
  </div>
</nav>
        <div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#"><?php echo $ttr ?></a></p>
        <img src=<?php echo $pro_pic ?> class="img-circle" width="150" height="150" alt="Avatar">
          <div class="container-fluid">
              <br>
              
           <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Upload Profile Picture</button> 
            
              <!-- Modal for profile pic update -->
<div class="container-fluid">
          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
            <p><a href="#"><?php echo $ttr ?></a></p>
        <img src=<?php echo $pro_pic ?>  width="150" height="150" alt="Avatar">
            
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload" >
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Upload Image" name="submit">
            </form>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
              
    </div>          
   
              </div>
      </div>
      <div class="well">
        <p><a href="#"><?php echo $ttr ?></a></p>
        <p>
          <span class="label label-primary">SEUSL News</span>
          <span class="label label-primary">Classes</span>
          <span class="label label-primary">Labels</span>
          <span class="label label-primary">Football</span>
          <span class="label label-primary">Gaming</span>
          <span class="label label-primary">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
                
              <p contenteditable="true">Status: Your Post here</p>
                <img src="<?php echo $pro_pic ?>" class="img-circle" height="65" width="65" alt="Avatar">
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-picture"></span> Photo/Video
              </button>     
                <button type="button" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-ok"></span> POST
              </button>     
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Thani</p>
           <img src="sample_pic.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>This is allocated to post which are added by the users. This is allocated to post which are added by the users. This is allocated to post which are added by the users.</p>
          </div>
        </div>
      </div>
         
        
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Thani</p>
           <img src="sample_pic.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>This is allocated to post which are added by the users. This is allocated to post which are added by the users. This is allocated to post which are added by the users.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Thani</p>
           <img src="sample_pic.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>This is allocated to post which are added by the users. This is allocated to post which are added by the users. This is allocated to post which are added by the users.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Thani</p>
           <img src="sample_pic.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
           <p>This is allocated to post which are added by the users. This is allocated to post which are added by the users. This is allocated to post which are added by the users.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="sample_pic.jpg" alt="Paris" width="400" height="300">
        <p><strong>SESUL Web Conference</strong></p>
        <p>Fri. 27 February 2017</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>All Right Reserved @ Thaninayagam - 2017 </p>
</footer>
     
        
            
        
        
        
    </body>
    
</html>