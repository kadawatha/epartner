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

    <title>Epartner Officer | Index</title>

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
                    <!--  <div class="col-md-4">
                          <div class="card">

                              <div class="header">
                                  <h4 class="title">Letter Types</h4>
                                  <p class="category">Last Campaign Performance</p>
                              </div>
                              <div class="content">
                                  <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                  <div class="footer">
                                      <div class="legend">
                                          <i class="fa fa-circle text-info"></i> Grant
                                          <i class="fa fa-circle text-danger"></i> Deviations
                                          <i class="fa fa-circle text-warning"></i> Request
                                          <i class="fa fa-circle text-success"></i> Cards
                                          <i class="fa fa-circle text-default"></i> Meeting
                                          <i class="fa fa-circle text-warning"></i> Information
                                      </div>
                                      <hr>
                                      <div class="stats">
                                          <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-8">
                          <div class="card">
                              <div class="header">
                                  <h4 class="title">Document Submission</h4>
                                  <p class="category">December month performance</p>
                              </div>
                              <div class="content">
                                  <div id="chartHours" class="ct-chart"></div>
                                  <div class="footer">
                                      <div class="legend">
                                          <i class="fa fa-circle text-info"></i> Open
                                          <i class="fa fa-circle text-danger"></i> Click
                                          <i class="fa fa-circle text-warning"></i> Click Second Time
                                      </div>
                                      <hr>
                                      <div class="stats">
                                          <i class="fa fa-history"></i> Updated 3 minutes ago
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>-->


                    <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
                    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

                </div>
            </div>


            <?php
            include 'footer.php';
            ?>

        </div>
    </div>


</body>

<!--   Core JS Files   -->

<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="assets/js/demo.js"></script>



<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();
        <?php
        if(isset($_GET['msg'])) {
        $m=$_GET['msg'];
        ?>
        $.notify({
            icon: 'pe-7s-gift',
            message: "<?php echo $m;?>"

        },{
            type: 'info',
            timer: 4000
        });
        <?php
        }

        ?>
    });
</script>



</html>
