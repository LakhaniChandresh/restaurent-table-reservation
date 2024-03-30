<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">    <!--favicon-->
<title>HaveMoer Restaurant</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css">     <!--style.css document-->
  <link href="css/font-awesome.min.css" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Signika:wght@300..700&display=swap" rel="stylesheet">    <!--font-awesome-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">  <!--bootstrap-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  <!--googleapis jquery-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--font-awesome-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>       
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/6934fb6c3f.js"></script>                   <!--bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>           <!--bootstrap-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>            <!--bootstrap-->
</head>
<style>
.log-btn-1 {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
    "Liberation Mono", "Courier New", monospace;
  font-size: 17px;
  padding: 10px 15px;
  font-weight: 500;
  background: #065896;
  color: white;
  border: none;
  position: relative;
  overflow: hidden;
  border-radius: 0.6em;
  cursor: pointer;
}

.gradient {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 0.6em;
  margin-top: -0.25em;
}

.label {
  position: relative;
  top: -1px;
}

.transition {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 500ms;
  background-color: rgba(16, 185, 129, 0.6);
  border-radius: 9999px;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.log-btn-1:hover .transition {
  width: 14em;
  height: 14em;
}

.log-btn-1:active {
  transform: scale(0.97);
}

.flex-column { 
       max-width : 260px;
   }
           
.container {
            background: #f9f9f9;
        }
.nav-container{
	background-color: #162838;
}
.img {
            margin: 5px;
        }

.logo img{
    /* margin-left: 322px; */
	 width:150px;
	 height:250px;
	margin-top:90px;
	margin-bottom:40px;
}
</style>

<body>
 <!---navbar--->   
<nav class="navbar navbar-expand-md navbar-light fixed-top ">
        <div class="container nav-container">
            <a class="navbar-brand" href="index.php">
                <img class="nav-logo" src="img/logomain.png" alt="">
		<strong class="brand-name"><em>HaveMoer</em></strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navi">
                <ul class="navbar-nav mr-auto">
                    
                    
                    <?php
                    //set navigation bar when logged in
                    if(isset($_SESSION['user_id'])){ echo'
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php" >New Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_reservations.php" >View Reservations</a>
                    </li>';
                    
                    //set navigation bar when logged in and role of admin
                    if($_SESSION['role']==2) {   
                    echo'
                    <li class="nav-item">
                        <a class="nav-link" href="schedule.php" >Edit Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tables.php" >Edit Tables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_tables.php" >View Tables</a>
                    </li>';    
                    }
                    }
                    //main page not logged in navigation bar
                    else { echo'
                    <li class="nav-item">
	                 <a class="nav-link" href="#aboutus">About Us</a>
	             </li>
	            <li class="nav-item">
	                <a class="nav-link" href="#gallery">Gallery</a>
	            </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reservation">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Find Us</a>
                    </li>
                    '; } 
                    ?>
                    
                </ul>
                
                    <?php
                    //log out button when user is logged in
                    if(isset($_SESSION['user_id'])){
                    echo '
                    <form class="navbar-form navbar-right" action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="log-btn-1"><span class="transition"></span>
                    <span class="gradient"></span>
                    <span class="label">Logout</span></button>
                    </form>';
                    }
                    else{  
                    echo '
                    <div>
                    <ul class="navbar-nav ml-auto">
			<li><a class="nav-link fa fa-sign-in" data-toggle="modal" data-target="#myModal_reg">&nbsp;Sing Up</a></li>
			<li><a class="nav-link fa fa-user-plus" data-toggle="modal" data-target="#myModal_login">&nbsp;Login</a></li>
                    </ul> 
                    </div>
                    ';} 
                    ?>
              
            </div>
        </div>
</nav>

<div class="container">
  <!-- The Modal -->                          
    <div class="modal fade" id="myModal_login">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            
            <?php
            if(isset($_GET['error1'])){
        
            //script for modal to appear when error 
            echo '  <script>
                    $(document).ready(function(){
                    $("#myModal_login").modal("show");
                    });
                    </script> ';
        
        
            //error handling of log in
        
            if($_GET['error1'] == "emptyfields") {   
            echo '<h5 class="text-danger text-center">Fill all fields, Please try again!</h5>';
            }
            else if($_GET['error1'] == "error") {   
            echo '<h5 class="text-danger text-center">Error Occured, Please try again!</h5>';
            }
            else if($_GET['error1'] == "wrongpwd") {   
                echo '<h5 class="text-danger text-center">Wrong Password, Please try again!</h5>';
            }
            else if($_GET['error1'] == "error2") {   
                echo '<h5 class="text-danger text-center">Error Occured, Please try again!</h5>';
            }
            else if($_GET['error1'] == "nouser") {   
                echo '<h5 class="text-danger text-center">Username or email not found, Please try again!</h5>';
                }
            }
            echo'<br>';
            ?>  
            
                    <div class="signin-form">
                    <form action="includes/login.inc.php" method="post">
                        <p class="hint-text">If you have already an account please log in.</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mailuid" placeholder="Username Or Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login-submit" class="btn btn-dark btn-lg btn-block resv-btn">Log In</button>
                    </div>
                            </form>
                    </div>   
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> 
</div>

    
<div class="container">
  <!-- The Modal -->
    <div class="modal fade" id="myModal_reg">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Register</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>      
            <!-- Modal body -->
                <div class="modal-body">   

                <?php
                if(isset($_GET['error'])){
                    //script for modal to appear when error 
                    echo '  <script>
                                $(document).ready(function(){
                                $("#myModal_reg").modal("show");
                                });
                            </script> ';


                    //error handling for errors and success --sign up form

                    if($_GET['error'] == "emptyfields") {   
                        echo '<h5 class="bg-danger text-center">Fill all fields, Please try again!</h5>';
                    }
                    else if($_GET['error'] == "invalidemailusername") {   
                        echo '<h5 class="bg-danger text-center">Username or Email are taken!</h5>';
                    }
                    else if($_GET['error'] == "invalidemail") {   
                        echo '<h5 class="bg-danger text-center">Invalid Email, Please try again!</h5>';
                    }
                    else if($_GET['error'] == "usernameemailtaken") {   
                        echo '<h5 class="bg-danger text-center">Username or email is taken, Please try again!</h5>';
                    }
                    else if($_GET['error'] == "invalidusername") {   
                        echo '<h5 class="bg-danger text-center">Invalid Username, Please try again!</h5>';
                    }
                    else if($_GET['error'] == "invalidpassword") {   
                        echo '<h5 class="bg-danger text-center">Invalid password, Please try again!</h5>';
                    }
                    else if($_GET['error'] == "passworddontmatch") {   
                        echo '<h5 class="bg-danger text-center">Password must match, Please try again!</h5>';
                    }
                    else if($_GET['error'] == "error1") {   
                        echo '<h5 class="bg-danger text-center">Error Occured, Try again!</h5>';
                    }
                    else if($_GET['error'] == "error2") {   
                        echo '<h5 class="bg-danger text-center">Error Occured, Try again!</h5>';
                    }
                }
                if(isset($_GET['signup'])) { 
                        //script for modal to appear when success
                    echo '  <script>
                                $(document).ready(function(){
                                $("#myModal_reg").modal("show");
                                });
                            </script> ';

                    if($_GET['signup'] == "success"){ 
                        echo '<h5 class="bg-success text-center">Sign up was successfull! Please Log in!</h5>';
                    }
                }
                echo'<br>';
                ?>
    
    <!---sign up form -->
                    <div class="signup-form">
                        <form action="includes/signup.inc.php" method="post">
                            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
                            <div class="form-group">
                                    <input type="text" class="form-control" name="uid" placeholder="Username" required="required">
                                    <small class="form-text text-muted">Username must be 4-20 characters long</small>
                            </div>
                            <div class="form-group">
                                    <input type="email" class="form-control" name="mail" placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                                <small class="form-text text-muted">Password must be 6-20 characters long</small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pwd-repeat" placeholder="Confirm Password" required="required">
                            </div>        
                            <div class="form-group">
                                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="signup-submit" class="btn btn-dark btn-lg btn-block resv-btn">Register Now</button>
                            </div>
                        </form>
                            <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
                    </div> 	
                </div>        
                <!-- Modal footer -->
                <div class="modal-footer">

                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div> 
            </div>
        </div>
    </div>
</div>
   

