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

    <title>Epartner Admin | New Post</title>

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

                <li>
                    <a href="clients.php">
                        <i class="pe-7s-note2"></i>
                        <p>Clients</p>
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



                                <h4 class="title">new Post</h4>
                            </div>
                            <div class="content">
                                <form enctype="multipart/form-data" id="add" method="post" action="add/addposts.php?user=<?php echo $_SESSION['id'];?>">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Category</label>
                                                <select class="form-control" name="cate">
                                                    <?php
                                                    include '../connection.php';
                                                    $cats=$db->query("SELECT category.C_ID,category.Category FROM category ");
                                                    while ($view_cate=$cats->fetch_assoc()){
                                                        ?>
                                                        <option value="<?php echo $view_cate['C_ID'];?>"><?php echo $view_cate['Category'];?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Package</label>
                                                <select class="form-control" name="package">
                                                    <?php
                                                    include '../connection.php';
                                                    $packs=$db->query("SELECT package.Package_ID,package.Package_Name FROM package");
                                                    while ($view_package=$packs->fetch_assoc()){
                                                        ?>
                                                        <option value="<?php echo $view_package['Package_ID'];?>"><?php echo $view_package['Package_Name'];?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Client</label>
                                                <select class="form-control" name="clint">
                                                    <?php
                                                    include '../connection.php';
                                                    $clients=$db->query("SELECT client.Client_ID,client.C_Fname,client.C_Lname FROM client");
                                                    while ($view_client=$clients->fetch_assoc()){
                                                        ?>
                                                        <option value="<?php echo $view_client['Client_ID'];?>"><?php echo $view_client['C_Fname'].' '.$view_client['C_Lname'];?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Keyword</label>
                                                <input type="text" name="moto" class="form-control" placeholder="Keyword">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Post Name</label>
                                                <input type="text" name="Name" class="form-control" placeholder="Post Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="city">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Opening Hour</label>
                                                <input type="time" name="opening" class="form-control" placeholder="city">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Closing Hour</label>
                                                <input type="time" name="closing" class="form-control" placeholder="city">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Opening Day</label>
                                                <select name="day1" class="form-control">
                                                    <option value="1">Monday</option>
                                                    <option value="2">Tuesday</option>
                                                    <option value="3">Wednesday</option>
                                                    <option value="4">Thursday</option>
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="7">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Closing Day</label>
                                                <select name="day2" class="form-control">
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="7">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Weekend Opening Hour</label>
                                                <input type="time" name="weekendopening" class="form-control" placeholder="city">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Weekend Closing Hour</label>
                                                <input type="time" name="weekendclosing" class="form-control" placeholder="city">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Weekend Opening Day</label>
                                                <select name="weekendday1" class="form-control">

                                                    <option value="0">Select Day</option>
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="7">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Weekend Closing Day</label>
                                                <select name="weekendday2" class="form-control">
                                                    <option value="0">Select Day</option>
                                                    <option value="5">Friday</option>
                                                    <option value="6">Saturday</option>
                                                    <option value="7">Sunday</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="des" class="form-control" style="height: 300px;" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Geolocation</label>
                                                <textarea name="geo" class="form-control" placeholder="Map"></textarea>
                                            </div>
                                        </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Web Address</label>
                                                <input type="text" name="web" class="form-control" placeholder="city">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="number" name="phone" class="form-control" placeholder="city">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <button id="ad" name="register" type="submit" style="margin-left: 10px;" class="btn btn-info btn-fill">Save</button>


                                        <div class="clearfix"></div>
                                </form>
                            </div>



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
