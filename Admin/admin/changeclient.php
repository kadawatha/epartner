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

    <title>Epartner Admin | New client</title>

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
                <li>
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

                <li  class="active">
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

                            <div class="header">


                                <?php
                                $client_ID=$_REQUEST['ID'];
                                include '../connection.php';
                                $get=$db->query("SELECT client.C_Fname,client.C_Lname,client.Email,client.C_Uname,client.Status,client.TP,client.Chat FROM client WHERE Client_ID='$client_ID'");
                                $getinfo=$get->fetch_assoc();
                                ?>
                                <h4 class="title">Change Client Details</h4>
                            </div>
                            <div class="content">
                                <form id="add" method="post" action="edit/editclient.php?client_ID=<?php echo $client_ID;?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="fname" class="form-control" value="<?php echo $getinfo['C_Fname'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" class="form-control" value="<?php echo $getinfo['C_Lname'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $getinfo['Email'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="number" name="tp" class="form-control" value="<?php echo $getinfo['TP'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input type="text" name="uname" class="form-control" value="<?php echo $getinfo['C_Uname'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Chat</label>
                                                <?php
                                                $chatt=$getinfo['Chat'];
                                                if ($chatt==1){
                                                    $statx="Inactive";
                                                    $x="Active";
                                                    $v=0;
                                                }else{
                                                    $statx="Active";
                                                    $x="Inactive";
                                                    $v=1;
                                                }
                                                ?>
                                               <select class="form-control" name="chat">
                                                   <option><?php echo $x;?></option>
                                                   <option value="<?php echo $v;?>"><?php echo $statx;?></option>
                                               </select>
                                            </div>
                                            <div class="form-group">
                                                <label>User Account Activation</label>
                                                <select class="form-control" name="status">
                                                    <option><?php echo $stat=$getinfo['Status'];?></option>
                                                    <?php
                                                    if ($stat=="Online"){
                                                        $statx="Offline";
                                                    }else{
                                                        $statx="Online";
                                                    }
                                                    ?>
                                                    <option><?php echo $statx;?></option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">



                                        <button id="ad" name="register" type="submit" style="margin-left: 150px;" class="btn btn-info btn-fill">Upload</button>


                                        <div class="clearfix"></div>
                                </form>
                            </div>
                            <form id="passw" method="post" action="edit/editclientpass.php?ID=<?php echo $client_ID;?>">
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
                            <span id="showing"></span>
                            <script src="../js/jquery-2.0.3.min.js"></script>
                            <script>
                                $("#search").on("input",function(){
                                    $search=$("#search").val();
                                    if($search.length>0){
                                        $.get("search/searchingcategory.php",{"search":$search},function($data){
                                            $("#showing").html($data);
                                        })
                                    }
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
