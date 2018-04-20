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
                                <?php
                                $P_ID=$_REQUEST['ID'];
                                include '../connection.php';
                                $post=$db->query("SELECT * FROM posts WHERE P_ID='$P_ID'");
                                $post_details=$post->fetch_assoc();
                                $C_ID=$post_details['C_ID'];
                                $Package_ID=$post_details['Package_ID'];
                                $Client_ID=$post_details['Client'];
                                $checkcate=$db->query("SELECT category.C_ID,category.Category FROM category WHERE C_ID='$C_ID'");
                                $category=$checkcate->fetch_assoc();
                                $check_package=$db->query("SELECT * FROM package WHERE Package_ID='$Package_ID'");
                                $package=$check_package->fetch_assoc();
                                $check_client=$db->query("SELECT * FROM client WHERE Client_ID='$Client_ID'");
                                $clients=$check_client->fetch_assoc();
                                ?>
                                <form  method="post" action="edit/editpost.php?ID=<?php echo $P_ID;?>">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Category</label>
                                                <select class="form-control" name="cate">
                                                    <option value="<?php echo $C_ID;?>"><?php echo $category['Category'];?></option>
                                                    <option disabled></option>
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
                                                    <option value="<?php echo $Package_ID;?>"><?php echo $package['Package_Name'];?></option>
                                                    <option disabled></option>
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
                                                    <option value="<?php echo $Client_ID;?>"><?php echo $clients['C_Fname'].' '.$clients['C_Lname'];?></option>
                                                    <option disabled></option>
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
                                                <input type="text" name="moto" class="form-control" value="<?php echo $post_details['Moto'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Post Name</label>
                                                <input type="text" name="Name" class="form-control" value="<?php echo $post_details['Post_Name'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" value="<?php echo $post_details['City'];?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Opening Hour</label>
                                                <input type="time" name="opening" class="form-control" value="<?php echo $post_details['Opening'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Closing Hour</label>
                                                <input type="time" name="closing" class="form-control" value="<?php echo $post_details['Closing'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Opening Day</label>
                                                <?php
                                                $Opening_Day=$post_details['Opening_Day'];
                                                $Closing_Day=$post_details['Closing_Day'];
                                                switch ($Opening_Day) {case "1":$O_Day="Monday";break;
                                                    case "2":$O_Day="Tuesday";break;
                                                    case "3":$O_Day="Wednesday";break;
                                                    case "4":$O_Day="Thursday";break;
                                                    case "5":$O_Day="Friday";break;
                                                    case "6":$O_Day="Saturday"; break;
                                                    default:$O_Day="Sunday";
                                                }
                                                switch ($Closing_Day) {case "1":$C_Day="Monday";break;
                                                    case "2":$C_Day="Tuesday";break;
                                                    case "3":$C_Day="Wednesday";break;
                                                    case "4":$C_Day="Thursday";break;
                                                    case "5":$C_Day="Friday";break;
                                                    case "6":$C_Day="Saturday"; break;
                                                    default:$C_Day="Sunday";
                                                }
                                                ?>
                                                <select name="day1" class="form-control">
                                                    <option value="<?php echo $Opening_Day;?>"><?php echo $O_Day;?></option>
                                                    <option disabled></option>
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
                                                    <option value="<?php echo $Closing_Day;?>"><?php echo $C_Day;?></option>
                                                    <option disabled></option>
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
                                                <input type="time" name="weekopening" class="form-control" value="<?php echo $post_details['Opening1'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Weekend Closing Hour</label>
                                                <input type="time" name="weekclosing" class="form-control" value="<?php echo $post_details['Closing1'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Weekend Opening Day</label>
                                                <?php
                                                $Opening_day1=$post_details['Opening_day1'];
                                                $Closing_day2=$post_details['Closing_day2'];
                                                switch ($Opening_day1) {case "1":$O_Day="Monday";break;
                                                    case "2":$O_Day="Tuesday";break;
                                                    case "3":$O_Day="Wednesday";break;
                                                    case "4":$O_Day="Thursday";break;
                                                    case "5":$O_Day="Friday";break;
                                                    case "6":$O_Day="Saturday"; break;
                                                    default:$O_Day="Sunday";
                                                }
                                                switch ($Closing_day2) {case "1":$C_Day="Monday";break;
                                                    case "2":$C_Day="Tuesday";break;
                                                    case "3":$C_Day="Wednesday";break;
                                                    case "4":$C_Day="Thursday";break;
                                                    case "5":$C_Day="Friday";break;
                                                    case "6":$C_Day="Saturday"; break;
                                                    default:$C_Day="Sunday";
                                                }
                                                ?>
                                                <select name="weekday1" class="form-control">
                                                    <option value="<?php echo $Opening_day1;?>"><?php echo $O_Day;?></option>
                                                    <option disabled></option>
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
                                                <label>Weekend Closing Day</label>
                                                <select name="weekday2" class="form-control">
                                                    <option value="<?php echo $Closing_day2;?>"><?php echo $C_Day;?></option>
                                                    <option disabled></option>
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
                                                <textarea name="des" class="form-control" style="height: 300px;"><?php echo $post_details['Des'];?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Geolocation</label>
                                                <textarea name="geo" class="form-control"><?php echo $post_details['Geo'];?></textarea>
                                            </div>
                                        </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Web Address</label>
                                                <input type="text" name="web" class="form-control" value="<?php echo $post_details['web'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="number" name="phone" class="form-control" value="<?php echo $post_details['phone'];?>">
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
