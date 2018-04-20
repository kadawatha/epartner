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

    <title>NRC Admin | New category</title>

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
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <?php
                            $tp=$_REQUEST['tp'];
                            $ID=$_REQUEST['ID'];

                            if ($tp==1){
                                include '../../connection.php';
                                $x=$db->query("SELECT * FROM lettertype WHERE Letter_Type='$ID'");
                                $result=$x->fetch_assoc();
                                ?>
                                <div class="header">
                                    <h4 class="title">Change Letters</h4>
                                    <form id="dels" action="delete/deletecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>" method="post">
                                        <button id="de" type="button" style="" class="btn btn-danger btn-fill">Delete</button>
                                    </form>
                                </div>
                                <div class="content">
                                    <form id="add" method="post" action="edit/changecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Letter Type</label>
                                                    <input type="text" name="letter" class="form-control" value="<?php echo $result['LType'];?>">
                                                </div>
                                            </div>



                                            <div class="row">



                                                <button id="ad" type="button" style="margin-left: 150px; margin-top: 100px;" class="btn btn-info btn-fill">Save</button>
                                                <div class="clearfix"></div>
                                    </form>
                                </div>
                                <?php
                            }elseif ($tp==2){
                                include '../../connection.php';
                                $x=$db->query("SELECT * FROM posttype WHERE Post_Type='$ID'");
                                $result=$x->fetch_assoc();
                                ?>
                                <div class="header">
                                    <h4 class="title">Change Post Types</h4>
                                    <form id="dels" action="delete/deletecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>" method="post">
                                        <button id="de" type="button" style="" class="btn btn-danger btn-fill">Delete</button>
                                    </form>
                                </div>
                                <div class="content">
                                    <form id="add" method="post" action="edit/changecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Post Type</label>
                                                    <input type="text" name="post" class="form-control" value="<?php echo $result['Type'];?>">
                                                </div>
                                            </div>



                                            <div class="row">



                                                <button id="ad" type="button" style="margin-left: 150px; margin-top: 100px;" class="btn btn-info btn-fill">Save</button>
                                                <div class="clearfix"></div>
                                    </form>
                                </div>
                                <?php
                            }elseif ($tp==3){
                                include '../../connection.php';
                                $x=$db->query("SELECT * FROM address WHERE Address_ID='$ID'");
                                $result=$x->fetch_assoc();
                                ?>
                                <div class="header">
                                    <h4 class="title">Change Address</h4>
                                    <form id="dels" action="delete/deletecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>" method="post">
                                        <button id="de" type="button" style="" class="btn btn-danger btn-fill">Delete</button>
                                    </form>
                                </div>
                                <div class="content">
                                    <form id="add" method="post" action="edit/changecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control" value="<?php echo $result['Category'];?>">
                                                </div>
                                            </div>



                                            <div class="row">



                                                <button id="ad" type="button" style="margin-left: 150px; margin-top: 100px;" class="btn btn-info btn-fill">Save</button>
                                                <div class="clearfix"></div>
                                    </form>
                                </div>
                                <?php
                            }elseif ($tp==4){
                                include '../../connection.php';
                                $x=$db->query("SELECT * FROM alladdress WHERE Alladdress_ID='$ID'");
                                $result=$x->fetch_assoc();
                                ?>
                                <div class="header">
                                    <h4 class="title">Change Sub Address</h4>
                                    <form id="dels" action="delete/deletecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>" method="post">
                                        <button id="de" type="button" style="" class="btn btn-danger btn-fill">Delete</button>
                                    </form>
                                </div>
                                <div class="content">
                                    <form id="add" method="post" action="edit/changecategory.php?tp=<?php echo $tp;?>&&ID=<?php echo $ID;?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sub Address</label>
                                                    <input type="text" name="subs" class="form-control" value="<?php echo $result['Uni'];?>">
                                                </div>
                                            </div>



                                            <div class="row">



                                                <button id="ad" type="button" style="margin-left: 150px; margin-top: 100px;" class="btn btn-info btn-fill">Save</button>
                                                <div class="clearfix"></div>
                                    </form>
                                </div>
                                <?php
                            }




                            ?>
                            <script src="js/jquery-1.11.1.min.js"></script>
                            <script>
                                $("#ad").click(function(){
                                    $.post( $("#add").attr("action"), $("#add :input").serializeArray(), function(info){ $("#showing").html(info); });
                                    clearInput();

                                });

                                $("#add").submit(function(){
                                    return false;
                                });

                                $("#de").click(function(){
                                    $.post( $("#dels").attr("action"), $("#dels :input").serializeArray(), function(info){ $("#showing").html(info); });
                                    clearInput();

                                });

                                $("#dels").submit(function(){
                                    return false;
                                });


                            </script>
                        </div>
                        <span id="showing"></span>
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
