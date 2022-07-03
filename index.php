
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['signin']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,Status,id FROM tblemployees WHERE EmailId=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
 foreach ($results as $result) {
    $status=$result->Status;
    $_SESSION['eid']=$result->id;
  }
if($status==0)
{
$msg="Your account is Inactive. Please contact admin";
} else{
$_SESSION['emplogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'emp-changepassword.php'; </script>";
} }

else{

  echo "<script>alert('Invalid Details');</script>";

}

}

?><!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>FLMS | Home Page</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
    
    <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3">
                            <span class="chapter-title">Faculty Leave Management System</span>
                        </div>


                        </form>


                    </div>
                </nav>
            </header>
    
            <h1 style="color: #2F5D62; padding-top: 30px; font: sans-serif; margin-left: 100px; " ><center><b>FACULTY LEAVE MANAGEMENT SYSTEM</b></center></h1>
<div style="background-color: #F5F5F5; margin-left: 300px ; margin-right: 220px; padding-top: 5px; padding-bottom: 5px;">
<center>
	<img src="https://www.pngfind.com/pngs/b/643-6438921_admin-png.png" alt="Flowers in Chania" style="width:100px;height:100px; margin: 20px 20px 0px 0px;">
	<img src="https://www.pngfind.com/pngs/m/670-6706457_teacher-registration-vector-anastasia-beverly-hills-logo-hd.png" alt="Flowers in Chania" style="width:100px;height:100px;">

<div style="background-color: #F5F5F5; margin-left: 20px ; margin-right: 100px;" >
<h5 style=" padding-left: 10px; padding-top: 15px ;  color: #2F5D62;" > Using This Website, You Can Apply for Leave As Faculty  </h5>
</div>



<div style="background-color: #F5F5F5; margin-left: 20px ; margin-right: 100px;" >
<h5 style=" padding-left: 0px; padding-top: 15px ; margin-top: 40px; color: #2F5D62;"> You(user) as a Faculty Can Apply for Leave With an Appropriate Reason and Get It Approved </h5>
<h5 style="padding-left: 0px; padding-bottom: 10px; color: #2F5D62;" > The Leave Will Be Granted Only When Admin Approves It</h5>
</div>

<div style="background-color: #F5F5F5; margin-left: 20px ; margin-right: 100px;" >
<h5 style=" padding-left: 10px; padding-top: 15px ; margin-top: 40px; color: #2F5D62;" > This Is a Faculty Management System Made by Our Group </h5>
<h5 style="padding-left: 10px; padding-bottom: 10px; color: #2F5D62;"> We Are Making This Web Application To Make the Leave Management Process Easier </h5>
</div>

</center>
</div>





            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper" >


                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><i class="material-icons"></i>    by 402_405_430_444_465</li>
                    <li>&nbsp;</li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="fac_login.php"><i class="material-icons">account_box</i>Faculty Login</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="forgot-password.php"><i class="material-icons">account_box</i>Fac Password Recovery</a></li>
                    <li class="no-padding"><a class="waves-effect waves-grey" href="admin/"><i class="material-icons">account_box</i>Admin Login</a></li>

                </ul>
                </div>
            </aside>
            
           
        </div>
        <div class="left-sidebar-hover"></div>

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>

    </body>
</html>
