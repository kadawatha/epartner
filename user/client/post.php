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

    <title>Epartner Client | Post</title>

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
                <!--search-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>Company - City</th>
                                    <th>Category</th>
                                    <th>Package</th>
                                    <th>week Opening Days & Hours</th>
                                    <th>weekend Opening Days & Hours</th>



                                    <th> </th>

                                    </thead>
                                    <tbody>
                                    <?php
                                    $cli=$_SESSION['id'];
                                    include '../connection.php';
                                    $cate=$db->query("SELECT package.Package_Name,posts.Opening_day1,posts.Closing_day2,posts.Closing1,posts.Opening1,posts.P_ID,posts.Post_Name,posts.City,category.Category,posts.Opening,posts.Closing,posts.Closing_Day,posts.Opening_Day,users.F_Name,users.L_Name FROM posts INNER JOIN category ON category.C_ID=posts.C_ID INNER JOIN users ON users.U_ID=posts.U_ID INNER JOIN package ON posts.Package_ID=package.Package_ID INNER JOIN client ON client.Client_ID=posts.Client WHERE client.Client_ID='$cli' ORDER BY posts.P_ID DESC");
                                    while ($allcate=$cate->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $allcate['Post_Name'].' - '.$allcate['City'];?></td>
                                            <td><?php echo $allcate['Category'];?></td>
                                            <td><?php echo $allcate['Package_Name'];?></td>

                                            <td><?php
                                                $op=$allcate['Opening'];
                                                $cl=$allcate['Closing'];
                                                $date = new DateTime($op);
                                                $date2 = new DateTime($cl);
                                                $opening=$date->format('h:i:s a') ;
                                                $closing=$date2->format('h:i:s a') ;

                                                $day1=$allcate['Opening_Day'];
                                                $day2=$allcate['Closing_Day'];

                                                $days1 = $day1;
                                                $days2 = $day2;
                                                switch ($days1) {case "2":echo "Tuesday - ";break;
                                                    case "3":$d1="Wednesday - ";break;
                                                    case "4":$d1="Thursday - ";break;
                                                    case "5":$d1="Friday - ";break;
                                                    case "6":$d1="Saturday - ";break;
                                                    case "7":$d1="Sunday - ";break;
                                                    default:$d1="Monday - ";
                                                }
                                                switch ($days2) {
                                                    case "2":$d2="Tuesday";break;
                                                    case "3":$d2="Wednesday";break;
                                                    case "4":$d2="Thursday";break;
                                                    case "5":$d2="Friday";break;
                                                    case "6":$d2="Saturday";break;
                                                    case "7":$d2="Sunday";break;
                                                    default:$d2="Monday";
                                                }
                                                echo $d1.$d2.'<br>('.$opening." - ".$closing.')';?></td>
                                            <td><?php
                                               $op1=$allcate['Opening1'];
                                                $cl1=$allcate['Closing1'];
                                                $wdate = new DateTime($op1);
                                                $wdate2 = new DateTime($cl1);
                                                $Opening1=$wdate->format('h:i:s a') ;
                                                $Closing1=$wdate2->format('h:i:s a') ;

                                                $wday1=$allcate['Opening_day1'];
                                                $wday2=$allcate['Closing_day2'];

                                                $wdays1 = $wday1;
                                                $wdays2 = $wday2;
                                                switch ($wdays1) {case "2":echo "Tuesday - ";break;
                                                    case "3":$d3="Wednesday - ";break;
                                                    case "4":$d3="Thursday - ";break;
                                                    case "5":$d3="Friday - ";break;
                                                    case "6":$d3="Saturday - ";break;
                                                    case "7":$d3="Sunday - ";break;
                                                    default:$d3="Monday - ";
                                                }
                                                switch ($wdays2) {
                                                    case "2":$d4="Tuesday";break;
                                                    case "3":$d4="Wednesday";break;
                                                    case "4":$d4="Thursday";break;
                                                    case "5":$d4="Friday";break;
                                                    case "6":$d4="Saturday";break;
                                                    case "7":$d4="Sunday";break;
                                                    default:$d4="Monday";
                                                }
                                                echo $d3.$d4.'<br>('.$Opening1." - ".$Closing1.')';?></td>

                                            <td>

                                                <form action="newimages.php?ID=<?php echo $allcate['P_ID'];?>" method="post">
                                                    <button type="submit" class="btn btn-success btn-fill pull-right">images</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>


                                    </tbody>
                                </table>

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
