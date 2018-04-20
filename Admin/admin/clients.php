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

    <title>Epartner Admin | clients</title>

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

                <li class="active">
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
                <!--search-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">


                                <form action="newclient.php" method="post">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">New Client</button>
                                </form>

                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>Client Name</th>
                                    <th>Email</th>
                                    <th>User Name</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Chat</th>

                                    <th> </th>

                                    </thead>
                                    <tbody>
                                    <?php

                                    include '../connection.php';
                                    $all=$db->query("SELECT client.C_Uname,client.Client_ID,client.C_Fname,client.C_Lname,client.Email,client.TP,client.Status,users.F_Name,users.L_Name,client.Chat FROM client INNER JOIN users ON users.U_ID=client.Added_ID ORDER BY client.Client_ID DESC");
                                    while ($alldoc=$all->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $alldoc['C_Fname'].' '.$alldoc['C_Lname'];?></td>
                                            <td><?php echo $alldoc['Email'];?></td>
                                            <td><?php echo $alldoc['C_Uname'];?></td>
                                            <td><?php echo $alldoc['TP'];?></td>
                                            <td><?php echo $alldoc['Status'];?></td>
                                            <td>
                                                <?php $chat=$alldoc['Chat'];
                                                if ($chat==0){echo "Inactive";}else{echo "Active";}
                                                ?>

                                            </td>

                                            <td>
                                                <form action="changeclient.php?ID=<?php echo $alldoc['Client_ID'];?>" method="post">
                                                    <button type="submit" class="btn btn-warning btn-fill pull-right">Change</button>
                                                </form>
                                                <form action="delete/deleteclient.php?ID=<?php echo $alldoc['Client_ID'];?>" method="post">
                                                    <button type="submit" class="btn btn-danger btn-fill pull-right">Delete</button>
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
