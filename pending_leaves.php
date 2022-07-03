<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Faculty | Leave History</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body>


       <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>


            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Pending Leaves</div>
                    </div>         
                           
                    <div class="col s12 m12 l12">
                        <div class="middle-content">
                        <div class="row no-m-t no-m-b">
                            
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Casual Leave</span>
                                <span class="stats-counter">
<?php
$eid=$_SESSION['eid'];
$sql = "SELECT * from tblleaves WHERE empid = '$eid' AND LeaveType='Casual Leave' AND Status='1' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$empcount=15-$query->rowCount();
?>

                                    <span class="counter"><?php echo htmlentities($empcount);?></span></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>

                   



                        <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                 <span class="card-title">On Duty</span>
    <?php
$eid=$_SESSION['eid'];
$sql = "SELECT * from tblleaves WHERE empid = '$eid' AND LeaveType='On Duty' AND Status='1' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$dptcount=$query->rowCount();
?>                            
                                <span class="stats-counter"><span class="counter"><?php echo htmlentities($dptcount);?></span></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                   
                    
                    
                    
                    
                    
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <span class="card-title">Earned Leaves</span>
                                    <?php
$eid=$_SESSION['eid'];
$sql = "SELECT * from tblleaves WHERE empid = '$eid' AND LeaveType='Earned leaves' AND Status='1' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$leavtypcount=15-$query->rowCount();
?>   
                                <span class="stats-counter"><span class="counter"><?php echo htmlentities($leavtypcount);?></span></span>

                                <div id="sparkline-line"></div>
                        </div>
                      
                            </div>
                            
                           
                           
                           
                        
                        <div class="card stats-card">
                            <div class="card-content" >
                                <span class="card-title">Medical Leaves</span>
                                    <?php

$eid=$_SESSION['eid'];
$sql = "SELECT * from tblleaves WHERE empid = '$eid' AND LeaveType='Medical Leave' AND Status='1' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$empcount=15-$query->rowCount();
?>

                                    <span class="counter"><?php echo htmlentities($empcount);?></span></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>

                            
                        </div>
                    </div>
                </div>       
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
         
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/table-data.js"></script>
        
    </body>
</html>
<?php } ?>