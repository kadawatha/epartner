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
                <li  class="active">
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
                <!--search-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <div class="row">


                                    <form id="add" action="edit/adminforwarding.php?U_ID=<?php echo $_SESSION['id'];?>" method="post">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Forward</label>
                                                <select class="form-control" name="fw">
                                                    <option>Select the Officer</option>
                                                    <?php
                                                    include '../../connection.php';
                                                    $fowrd=$db->query("SELECT * FROM forwadlist WHERE F_ID!='1'");
                                                    while ($fwlist=$fowrd->fetch_assoc()){
                                                        ?>
                                                        <option value="<?php echo $fwlist['F_ID'];?>"><?php echo $fwlist['Name'];?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>

                                            </div>

                                            <div  class="form-group">
                                                <label>Document</label>
                                                <select name="doc" class="form-control">
                                                    <option>Select the Document</option>
                                                    <?php
                                                    include '../../connection.php';
                                                    $doc=$db->query("SELECT * FROM docs WHERE docs.FW_ID!='1'");
                                                    while ($viewdoc=$doc->fetch_assoc()){
                                                        ?>
                                                        <option value="<?php echo $viewdoc['Doc_ID'];?>"><?php echo $viewdoc['Grant_No'];?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>

                                            </div>


                                            <div style="margin-bottom: 10px;"  class="form-group">

                                                <button id="ad"  type="button" class="btn btn-success btn-fill">Forward</button>
                                    </form>

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
                                <span id="showing"></span>
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


                            </div>




                        </div>
                        <div class="content table-responsive table-full-width">



                        </div>
                    </div>
                </div>
            </div>
            <script src="js/jquery-1.11.1.min.js"></script>



            <!--all-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Reff No</label>
                                        <input type="text" id="search" class="form-control" placeholder="Search by Reff No">
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
                                        <label>Date</label>
                                        <input type="date" id="search3" class="form-control" placeholder="Search by Date">
                                    </div>
                                </div>
                            </div>
                            <span id="result"></span>
                            <script src="js/jquery-1.11.1.min.js"></script>
                            <script>
                                $("#search").on("input",function(){
                                    $search=$("#search").val();
                                    if($search.length>0){
                                        $.get("search/searchbyreffno.php",{"search":$search},function($data){
                                            $("#result").html($data);
                                        })
                                    }
                                });

                                $("#search2").on("input",function(){
                                    $search=$("#search2").val();
                                    if($search.length>0){
                                        $.get("search/searchbygrantno.php",{"search":$search},function($data){
                                            $("#result").html($data);
                                        })
                                    }
                                });
                                $("#search3").on("input",function(){
                                    $search=$("#search3").val();
                                    if($search.length>0){
                                        $.get("search/searchbydate.php",{"search":$search},function($data){
                                            $("#result").html($data);
                                        })
                                    }
                                });

                            </script>


                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>Date</th>
                                <th>GN no</th>
                                <th>Reff No</th>
                                <th>Uni/Institute</th>
                                <th>Post Type</th>
                                <th>Letter Type</th>
                                <th> </th>

                                </thead>
                                <tbody>

                                <?php

                                include '../../connection.php';
                                $all=$db->query("SELECT docs.Doc_ID,docs.Grant_No,docs.Reff_No,alladdress.Uni,posttype.Type,lettertype.LType,docs.U_Date,docs.FW_ID FROM docs INNER JOIN alladdress ON docs.Alladdress_ID= alladdress.Alladdress_ID INNER JOIN posttype ON docs.Post_Type=posttype.Post_Type INNER JOIN lettertype ON lettertype.Letter_Type=docs.Letter_Type WHERE docs.FW_ID!='1' ORDER BY docs.Doc_ID DESC");
                                while ($alldoc=$all->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?php echo $date=$alldoc['U_Date'];?></td>
                                        <td><?php echo $alldoc['Grant_No'];?></td>
                                        <td><?php echo $alldoc['Reff_No'];?></td>
                                        <td><?php echo $alldoc['Uni'];?></td>
                                        <td><?php echo $alldoc['Type'];?></td>
                                        <td><?php echo $alldoc['LType'];?></td>
                                        <td>
                                            <form action="viewdocument.php?ID=<?php echo $alldoc['Doc_ID'];?>" method="post">
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
