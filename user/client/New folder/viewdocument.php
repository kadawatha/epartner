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

    <title>NRC Front Office | View Document</title>

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
                <li  class="active">
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
                            <div class="header">
                                <?php
                                $docID=$_REQUEST['ID'];
                                ?>
                                <form action="../pdf/printdocument.php?ID=<?php echo $docID;?>" target="_blank" method="post">
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Print</button>
                                </form>
                                <?php
                                include '../../connection.php';

                                $users=$db->query("SELECT client.Client_Name,client.TP FROM docs INNER JOIN client ON client.Client_ID=docs.Client_ID WHERE docs.Doc_ID='$docID'");
                                $ref=$db->query("SELECT docs.Reff_No,docs.Grant_No FROM docs WHERE docs.Doc_ID='$docID'");
                                $adr=$db->query("SELECT docs.Alladdress_ID,alladdress.Uni FROM docs INNER JOIN alladdress ON alladdress.Alladdress_ID=docs.Alladdress_ID WHERE Doc_ID='$docID'");
                                $letters=$db->query("SELECT docs.Letter_Type,docs.Post_Type,docs.Tender,lettertype.LType,posttype.Type FROM docs INNER JOIN lettertype ON lettertype.Letter_Type=docs.Letter_Type INNER JOIN posttype ON posttype.Post_Type=docs.Post_Type WHERE Doc_ID='$docID'");
                                $paymen=$db->query("SELECT docs.Payment_ID,payment.Cheque_No,payment.Bank_ID,banks.Bank_Name FROM docs INNER JOIN payment ON payment.Payment_ID=docs.Payment_ID INNER JOIN banks ON banks.Bank_ID=payment.Bank_ID WHERE Doc_ID='$docID'");
                                $stip=$db->query("SELECT docs.Stipend_ID,stipend.Bank_ID,stipend.Cheque_No,banks.Bank_Name FROM docs INNER JOIN stipend ON stipend.Stipend_ID=docs.Stipend_ID INNER JOIN banks ON banks.Bank_ID=stipend.Bank_ID WHERE Doc_ID='$docID'");
                                $oths=$db->query("SELECT docs.Other_ID,docs.Doc_ID,others.Topic,others.Des FROM docs INNER JOIN others ON others.Other_ID=docs.Other_ID WHERE docs.Doc_ID='$docID'");
                                $forwards=$db->query("SELECT docs.Doc_ID,docs.FW_ID,forwadlist.F_ID,forwadlist.Name FROM docs INNER JOIN forwadlist ON docs.FW_ID=forwadlist.F_ID WHERE docs.Doc_ID='$docID'");

                                $userdetails=$users->fetch_assoc();
                                $refdetails=$ref->fetch_assoc();
                                $adrdetails=$adr->fetch_assoc();
                                $lettersdetails=$letters->fetch_assoc();
                                $paymendetails=$paymen->fetch_assoc();
                                $stipdetails=$stip->fetch_assoc();
                                $othsdetails=$oths->fetch_assoc();
                                $fw=$forwards->fetch_assoc();


                                ?>
                                <h4 class="title">View Document</h4>
                                <label>Forward to :- </label>
                                <br>
                                <label><font color="#dc143c"><strong><?php echo $fw['Name'];?></strong></font></label>

                            </div>
                            <div class="content">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name :- </label>
                                                <br>
                                                <label><font color="#dc143c"><strong><?php echo $userdetails['Client_Name'];?></strong></font></label>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number :- </label>
                                                <br>
                                                <label><font color="#dc143c"><strong><?php echo $userdetails['TP'];?></strong></font></label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Reff No :- </label>
                                                <br>
                                                <label><font color="#dc143c"><strong><?php echo $refdetails['Reff_No'];?></strong></font></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Grant No :- </label>
                                                <br>
                                                <label><font color="#dc143c"><strong><?php echo $refdetails['Grant_No'];?></strong></font></label>
                                            </div>
                                        </div>
                                        </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> Uni/Institute :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong><?php echo $adrdetails['Uni'];?></strong></font></label>
                                        </div>
                                    </div>

                                </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Letter Type :- </label>
                                                <br>
                                                <label><font color="#dc143c"><strong><?php echo $lettersdetails['LType'];?></strong></font></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Post Type :- </label>
                                                <br>
                                                <label><font color="#dc143c"><strong><?php echo $lettersdetails['Type'];?></strong></font></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tender :- </label>
                                                <br>
                                            <label><font color="#dc143c"><strong>
                                            <?php
                                            $tenderID=$lettersdetails['Tender'];
                                            if ($tenderID==1){
                                                echo "File";
                                            }else{
                                                echo "Additional Documents";
                                            }
                                            ?>
                                            </strong></font></label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Payments :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong>
                                                        <?php
                                                        $pp=$paymendetails['Payment_ID'];
                                                        if ($pp==1){
                                                            echo "NA";
                                                        }else{
                                                            echo "Yes";
                                                        }
                                                        ?>
                                                    </strong></font></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cheque No :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong><?php echo $paymendetails['Cheque_No'];?></strong></font></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bank :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong><?php echo $paymendetails['Bank_Name'];?></strong></font></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Stipends :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong>
                                                        <?php
                                                        $st=$stipdetails['Stipend_ID'];
                                                        if ($st==1){
                                                            echo "NA";
                                                        }else{
                                                            echo "Yes";
                                                        }
                                                        ?>
                                                    </strong></font></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cheque No :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong><?php echo $stipdetails['Cheque_No'];?></strong></font></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bank :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong><?php echo $stipdetails['Bank_Name'];?></strong></font></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Others :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong>
                                            <?php
                                            $others=$othsdetails['Other_ID'];
                                            if ($others==1){
                                                echo "NA";
                                            }else{
                                                echo "Yes";
                                            }
                                            ?>
                                            </strong></font></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Topic :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong><?php echo $othsdetails['Topic'];?></strong></font></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description :- </label>
                                            <br>
                                            <label><font color="#dc143c"><strong><?php echo $othsdetails['Des'];?></strong></font></label>
                                        </div>
                                    </div>
                                </div>




                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


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
