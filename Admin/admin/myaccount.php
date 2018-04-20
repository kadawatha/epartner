<?php

session_start();
if(!$_SESSION['id'])
{
    $msg="Session Not Started";
    echo "<script>window.top.location='../index.php?msg=$msg'</script>";
}
?>
<!doctype html>
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
                    E Partner.lk
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="categories.php">
                        <i class="pe-7s-note2"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li>
                    <a href="packages.php">
                        <i class="pe-7s-note2"></i>
                        <p>Packages</p>
                    </a>
                </li>

                <li>
                    <a href="clients.php">
                        <i class="pe-7s-note2"></i>
                        <p>Clients</p>
                    </a>
                </li>
                <li>
                    <a href="post.php">
                        <i class="pe-7s-note2"></i>
                        <p>Posts</p>
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
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <?php
                            $U_ID=$_SESSION['id'];
                            include '../connection.php';
                            $client=$db->query("SELECT * FROM users WHERE U_ID='$U_ID'");
                            $clientdetails=$client->fetch_assoc();
                            ?>
                            <div class="header">



                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form id="add" method="post" action="edit/editaccounts.php?ID=<?php echo $U_ID;?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="fname" class="form-control" value="<?php echo $clientdetails['F_Name'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" class="form-control" value="<?php echo $clientdetails['L_Name'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="uname" class="form-control" value="<?php echo $clientdetails['U_Name'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $clientdetails['Email'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>TP</label>
                                                <input type="number" class="form-control" name="tp" value="<?php echo $clientdetails['TP'];?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">



                                        <button id="ad" type="button" style="margin-left: 150px; margin-top: 100px;" class="btn btn-info btn-fill">Update Profile</button>
                                        <div class="clearfix"></div>
                                </form>

                            </div>

                            <form id="passw" method="post" action="edit/editpass.php?ID=<?php echo $U_ID;?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="New Password">
                                        </div>
                                    </div>





                                <div class="row">




                                    <button id="passwprd" type="button" style="margin-left: -150px; margin-top: 100px;" class="btn btn-info btn-fill">Update Password</button>
                                    <div class="clearfix"></div>
                            </form>

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

                                $("#passwprd").click(function(){
                                    $.post( $("#passw").attr("action"), $("#passw :input").serializeArray(), function(info){ $("#showing").html(info); });
                                    clearInput();

                                });

                                $("#passw").submit(function(){
                                    return false;
                                });


                            </script>
                        </div>
                    </div>
                    <span id="showing"></span>

                </div>
            </div>
        </div>
        <br><br><br>

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
