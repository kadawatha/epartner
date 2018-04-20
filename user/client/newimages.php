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

    <title>Epartner Client | New images</title>

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


                <li class="active">
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
                                $ID=$_REQUEST['ID'];
                                include '../connection.php';
                                $img=$db->query("SELECT * FROM images WHERE P_ID='$ID'");
                                $check=$img->num_rows;
                                if ($check>=15){
                                    $ms="Can not upload new images.Please Remove Images first";
                                }else{
                                $ms="";
                                ?>


                            </div>
                            <div class="content">
                                <form enctype="multipart/form-data" id="add" method="post" action="add/imagesupload.php?P_ID=<?php echo $ID;?>&&user=<?php echo $_SESSION['id'];?>">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">



                                        <button id="ad" name="register" type="submit" style="margin-left: 150px;" class="btn btn-info btn-fill">Upload</button>


                                        <div class="clearfix"></div>
                                </form>
                            </div>

                            <br><br>
<?php
}
include '../connection.php';
$f_ID=$db->query("SELECT * FROM images WHERE P_ID='$ID'");
$first_ID=$f_ID->fetch_assoc();
$FF=$first_ID['Img_ID'];
?>
<img src="../../images/images/<?php echo $first_ID['Link'];?>" width="100px">
                            <br><br>
<?php
include '../connection.php';
$imgs=$db->query("SELECT * FROM images WHERE P_ID='$ID' && Img_ID!='$FF'");
while ($imgdetails=$imgs->fetch_assoc()){



?>
<img src="../../images/images/<?php echo $imgdetails['Link'];?>" width="100px">

    <a href="delete/deleteimges.php?ID=<?php echo $imgdetails['Img_ID'];?>"><button id="ad" name="register" type="submit"  class="btn btn-danger btn-fill">Remove</button></a>
                            <?php }
                            ?>
                        </div>
                    </div>

                    <h5><strong><?php echo $ms;?></strong></h5>
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
