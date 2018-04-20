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

    <title>NRC Admin | Grant details</title>

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
                <li class="active">
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
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <?php
                            $U_ID=$_SESSION['id'];
                            $ID=$_REQUEST['ID'];
                            include '../../connection.php';
                            $client=$db->query("SELECT granddetails.G_ID,granddetails.GN_No,granddetails.PI_Name,granddetails.Email,users.F_Name,users.L_Name FROM granddetails INNER JOIN users ON users.U_ID=granddetails.AddedBY  WHERE granddetails.G_ID='$ID' ORDER BY granddetails.G_ID DESC");
                            $clientdetails=$client->fetch_assoc();
                            ?>
                            <div class="header">



                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form id="add" method="post" action="edit/editgranddetails.php?ID=<?php echo $ID;?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input disabled="disabled" type="text" name="fname" class="form-control" value="<?php echo $clientdetails['F_Name'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input disabled="disabled" type="text" name="lname" class="form-control" value="<?php echo $clientdetails['L_Name'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="pi" class="form-control" value="<?php echo $clientdetails['PI_Name'];?>">
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
                                                <input type="text" class="form-control" name="gn" value="<?php echo $clientdetails['GN_No'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <span id="showing"></span>
                                    <br>
                                     <button id="ad" type="button" style="margin-left: 10px; margin-top: 100px;" class="btn btn-info btn-fill">Update</button>
                                        <div class="clearfix"></div>
                                </form>
                            </div>
                            <form id="dod" method="post" action="delete/deletegrantdata.php?ID=<?php echo $ID;?>">
                                <button id="des" type="button" style="margin-left: 500px; margin-top: -80px;" class="btn btn-danger btn-fill">Delete</button>
                            </form>

                            <script src="js/jquery-1.11.1.min.js"></script>
                            <script>
                                $("#ad").click(function(){
                                    $.post( $("#add").attr("action"), $("#add :input").serializeArray(), function(info){ $("#showing").html(info); });
                                    clearInput();
                                });
                                $("#add").submit(function(){
                                    return false;
                                });
                                $("#des").click(function(){
                                    $.post( $("#dod").attr("action"), $("#dod :input").serializeArray(), function(info){ $("#showing").html(info); });
                                    clearInput();
                                });
                                $("#dod").submit(function(){
                                    return false;
                                });

                            </script>
                        </div>
                    </div>


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
