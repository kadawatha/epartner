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

    <title>Epartner Admin | Document</title>

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
                <li class="active">
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
                <!--search-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <?php
                               $ID=$_REQUEST['ID'];
                                $tp=$_REQUEST['tp'];
                                ?>
                                <form action="newsubcategory.php?ID=<?php echo $ID;?>&&tp=4" method="post">
                                    <button type="submit" class="btn btn-success btn-fill pull-right">New Sub Address</button>
                                </form>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <?php


                                if(isset($_GET['msg'])) {
                                    $msg=$_GET['msg'];
                                    if ($msg==1){
                                        echo "<div class=\"alert alert-success\" style='width: 210px;'><span>New Letter Type Successfully Added.</span></div>";
                                    }elseif ($msg==2){
                                        echo "<div class=\"alert alert-success\" style='width: 210px;'><span>New Post Type Successfully Added.</span></div>";
                                    }elseif ($msg==3){
                                        echo "<div class=\"alert alert-success\" style='width: 210px;'><span>New Address Successfully Added.</span></div>";
                                    }elseif ($msg==4){
                                        echo "<div class=\"alert alert-info\" style='width: 170px;'><span>Letter Type Successfully Updated</span></div>";
                                    }elseif ($msg==5){
                                        echo "<div class=\"alert alert-info\" style='width: 170px;'><span>Post Type Successfully Updated</span></div>";
                                    }elseif ($msg==6){
                                        echo "<div class=\"alert alert-info\" style='width: 170px;'><span>Address Successfully Updated</span></div>";
                                    }elseif ($msg==7){
                                        echo "<div class=\"alert alert-warning\" style='width: 170px;'><span>Letter Type Successfully Deleted</span></div>";
                                    }elseif ($msg==8){
                                        echo "<div class=\"alert alert-warning\" style='width: 170px;'><span>Post Type Successfully Deleted</span></div>";
                                    }elseif ($msg==9){
                                        echo "<div class=\"alert alert-warning\" style='width: 170px;'><span>Address Successfully Deleted</span></div>";
                                    }else{
                                        echo "<div class=\"alert alert-warning\" style='width: 170px;'><span>Successfully Deleted</span></div>";
                                    }
                                }
                                ?>

                                <table class="table table-hover table-striped">
                                <thead>
                                <th>Sub Address</th>
                                <th> </th>
                                </thead>

                                    <tbody>
                                    <?php
                                    include '../../connection.php';
                                    $subs=$db->query("SELECT * FROM alladdress WHERE Address_ID='$ID'");
                                    $counts=$subs->num_rows;

                                    if ($counts==0){
                                        echo "<div class=\"alert alert-danger\" style='width: 170px;'><span>No Sub Addresses</span></div>";
                                    }else{
                                        while ($allsubs=$subs->fetch_assoc()){
                                            ?>
                                            <tr>
                                                <td><?php echo $allsubs['Uni'];?></td>
                                                <td>
                                                    <form action="changecategory.php?ID=<?php echo $allsubs['Alladdress_ID'];?>&&tp=4" method="post">
                                                        <button type="submit" class="btn btn-warning btn-fill pull-right">Change</button>
                                                    </form>

                                                </td>

                                            </tr>
                                            <?php
                                        }
                                    }

                                    ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="js/jquery-1.11.1.min.js"></script>
                <script>
                    $("#ad").click(function(){
                        $.post( $("#add").attr("action"), $("#add :input").serializeArray(), function(info){ $("#showing").html(info); });
                        clearInput();

                    });

                    $("#add").submit(function(){
                        return false;
                    });


                </script>




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
