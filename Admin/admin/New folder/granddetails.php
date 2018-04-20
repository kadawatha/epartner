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

    <title>NRC Admin | Document</title>

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
                <li CLASS="active">
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
                                <form action="newgrantdetails.php" method="post">
                                    <button type="submit" class="btn btn-success btn-fill pull-right">New GN Details</button>
                                </form>


                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>P.I. Name</label>
                                            <input type="text" id="search" class="form-control" placeholder="Search by P.I. Name">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Grant No</label>
                                            <input type="text" id="search2" class="form-control" placeholder="Search by Grant No">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" id="search3" class="form-control" placeholder="Search by Email">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="content table-responsive table-full-width">

                                <span id="result"></span>

                            </div>
                        </div>
                    </div>
                </div>
                <script src="js/jquery-1.11.1.min.js"></script>
                <script>
                    $("#search").on("input",function(){
                        $search=$("#search").val();
                        if($search.length>0){
                            $.get("search/searchbypiname.php",{"search":$search},function($data){
                                $("#result").html($data);
                            })
                        }
                    });

                    $("#search2").on("input",function(){
                        $search=$("#search2").val();
                        if($search.length>0){
                            $.get("search/searchbygr.php",{"search":$search},function($data){
                                $("#result").html($data);
                            })
                        }
                    });
                    $("#search3").on("input",function(){
                        $search=$("#search3").val();
                        if($search.length>0){
                            $.get("search/searchbygremail.php",{"search":$search},function($data){
                                $("#result").html($data);
                            })
                        }
                    });

                </script>

                <?php
                if(isset($_GET['msg'])) {
                    $msg=$_GET['msg'];
                    if ($msg==1){
                        echo "<div class=\"alert alert-success\" style='width: 190px;'><span>Successfully Forwarded.</span></div>";
                    }elseif ($msg==2){
                        echo "<div class=\"alert alert-info\" style='width: 170px;'><span>Successfully Updated</span></div>";
                    }elseif ($msg==3){
                        echo "<div class=\"alert alert-warning\" style='width: 170px;'><span>Successfully Deleted</span></div>";
                    }
                }
                ?>
                <!--all-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>GN No</th>
                                    <th>P.I. Name</th>
                                    <th>Email</th>
                                    <th>Added By</th>
                                    <th> </th>
                                    </thead>
                                    <tbody>
                                    <?php

                                    include '../../connection.php';
                                    $all=$db->query("SELECT granddetails.G_ID,granddetails.GN_No,granddetails.PI_Name,granddetails.Email,users.F_Name,users.L_Name FROM granddetails INNER JOIN users ON users.U_ID=granddetails.AddedBY ORDER BY granddetails.G_ID DESC");
                                    while ($alldoc=$all->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $date=$alldoc['GN_No'];?></td>
                                            <td><?php echo $alldoc['PI_Name'];?></td>
                                            <td><?php echo $alldoc['Email'];?></td>
                                            <td><?php echo $alldoc['F_Name'].' '.$alldoc['L_Name'];?></td>
                                            <td>
                                                <form action="viewgrantdetails.php?ID=<?php echo $alldoc['G_ID'];?>" method="post">
                                                    <button type="submit" class="btn btn-info btn-fill pull-right">View</button>
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
