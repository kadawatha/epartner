<?php

session_start();
if(!$_SESSION['id'])
{
    $msg="Session Not Started";
    echo "<script>window.top.location='../index.php?msg=$msg'</script>";
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>NRC Admin | Users</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <link href="assets/css/demo.css" rel="stylesheet" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    NRC Letter Box
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!--<li class="active">
                   <a href="users.php">
                       <i class="pe-7s-user"></i>
                       <p>Users</p>
                   </a>
               </li>-->
                <?php
                date_default_timezone_set("Asia/Colombo");
                $dates=date("Y-m-d");
                ?>
                <li>
                    <a href="documents.php">
                        <i class="pe-7s-note2"></i>
                        <p><?php echo $dates;?> Documents</p>
                    </a>
                </li>
                <li>
                    <a href="alldocuments.php">
                        <i class="pe-7s-note2"></i>
                        <p>All Documents</p>
                    </a>
                </li>
                <li>
                    <a href="forwardingdocs.php">
                        <i class="pe-7s-note2"></i>
                        <p>Forward Documents</p>
                    </a>
                </li>
                <li>
                    <a href="forwardeddocs.php">
                        <i class="pe-7s-note2"></i>
                        <p>Forwarded Documents</p>
                    </a>
                </li>
                <li>
                    <a href="categories.php">
                        <i class="pe-7s-note2"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li>
                    <a href="granddetails.php">
                        <i class="pe-7s-note2"></i>
                        <p>Grant Details</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <?php
        include 'menu.php';
        ?>

        <div class="content">
            <div class="container-fluid">
                <!-- search -->
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        if(isset($_GET['msg'])) {
                             $msg=$_GET['msg'];
                            if ($msg==1){
                                echo "<div class=\"alert alert-success\" style='width: 170px;'><span>Successfully Added</span></div>";
                            }elseif ($msg==2){
                                echo "<div class=\"alert alert-info\" style='width: 170px;'><span>Successfully Updated</span></div>";
                            }elseif ($msg==3){
                                echo "<div class=\"alert alert-warning\" style='width: 170px;'><span>Successfully Deleted</span></div>";
                            }
                        }
                        ?>
                        <div class="card">
                            <div class="header">
                                 <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="text" id="search" class="form-control" placeholder="Search By Email">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" id="search2" class="form-control" placeholder="Search By Name">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="content table-responsive table-full-width">

                                <span id="result"></span>
                            </div>
                        </div>
                    </div>
                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script>
                        $("#search").on("input",function(){
                            $search=$("#search").val();
                            if($search.length>0){
                                $.get("search/searchbyemail.php",{"search":$search},function($data){
                                    $("#result").html($data);
                                })
                            }
                        });

                        $("#search2").on("input",function(){
                            $search=$("#search2").val();
                            if($search.length>0){
                                $.get("search/searchbyname.php",{"search":$search},function($data){
                                    $("#result").html($data);
                                })
                            }
                        });


                    </script>



                </div>
                <!--all -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">


                                <div class="row">


                                            <label style="margin-left: 10px;" for="exampleInputEmail1"> All Users</label>

                                </div>


                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>User Name</th>
                                    	<th>Email Address</th>
                                        <th>Telephone</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th></th>

                                    </thead>
                                    <tbody>

                                    <?php
                                    include '../../connection.php';
                                    $client=$db->query("SELECT * FROM users");
                                    while ($clientdetails=$client->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $clientdetails['F_Name']." ".$clientdetails['L_Name'];?></td>
                                            <td><?php echo $clientdetails['U_Name'];?></td>
                                            <td><?php echo $clientdetails['Email'];?></td>
                                            <td><?php echo $clientdetails['TP'];?></td>
                                            <td><?php echo $clientdetails['Role'];?></td>
                                            <td><?php echo $clientdetails['Status'];?></td>
                                            <td><form action="changeaccountholders.php?ID=<?php echo $clientdetails['U_ID'];?>" method="post">
                                                    <button type="submit" class="btn btn-warning btn-fill pull-right">Settings</button>
                                                </form></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <?php
        include 'footer.php';
        ?>


    </div>
</div>


</body>


    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="assets/js/chartist.min.js"></script>

    <script src="assets/js/bootstrap-notify.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<script src="assets/js/demo.js"></script>


</html>
