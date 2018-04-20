<!DOCTYPE html>
<html>
<head>
    <title>Epartner : View Post</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>
<body>
<!--/banner-section-->
<div id="demo-1" class="banner-inner">
    <div class="banner-inner-dott">
        <div class="header-top">
            <!-- /header-left -->
            <div class="header-left">
                <!-- /sidebar -->


                <script>
                    var sidebarbtn = document.getElementById('sidebar-btn');
                    var sidebar = document.getElementById('sidebar');
                    sidebarbtn.addEventListener('click', function () {
                        if(sidebar.classList.contains('visible')){
                            sidebar.classList.remove('visible');
                        }else {
                            sidebar.className = 'visible';
                        }
                    });
                </script>
                <!-- //sidebar -->

            </div>
            <!-- //header-left -->


        </div>
        <div class="clearfix"></div>
        <!--banner-info-->
        <div class="banner-info">

            <h1><a href="index.php">   E PART<span class="logo-sub">NER.LK</span> </a></h1>

            <h2><span> FIND YOUR  </span> <span>BRANDS VOICE! </span></h2>
            <p>Eye it – try it – buy it!</p>

        </div>
        <!--//banner-info-->
    </div>
</div>
<!-- discounts-->
<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog about" role="document">
        <div class="modal-content about">
            <div class="modal-header">
                <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="discount">
                    <h3>Get Offers & Discount of</h3>
                    <p>Catchy Carz Brand VL in New York</p>
                    <form action="#" method="post">
                        <select id="country5" onchange="change_country(this.value)" class="frm-field required">
                            <option selected="selected" value="-1">-Buying Time Period-</option>
                            <option value="0">Just Researching</option>
                            <option value="7">1 Week</option>
                            <option value="14">2 Weeks</option>
                            <option value="30">1 Month</option>
                            <option value="60">2 Months</option>
                        </select>
                        <input type="text" class="Pin code" placeholder="Pin code" required="">
                    </form>
                </div>
            </div>
            <div class="modal-body about">

                <div class="dis-contact">
                    <h4>Contact Information</h4>
                    <form action="#" method="post">
                        <input type="text" name="name" class="name active" placeholder="Name" required="">
                        <input type="text" name="email" class="email" placeholder="Email" required="">
                        <input type="text" name="phone" class="phone" placeholder="Phone" required="">
                        <div class="d-c">
														<span class="checkbox1">
															<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I agree to Terms and Conditions.</label>
														</span>

                        </div>
                        <input type="submit" value="Find Offers">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /get-->

</div>
<?php
$checkname_detail=$checkname->fetch_assoc();
$checkname_detail['Post_Name'];
$P_ID=$checkname_detail['P_ID'];
$C_ID=$checkname_detail['C_ID'];
include 'Admin/connection.php';
$cates=$db->query("SELECT * FROM category WHERE category.C_ID='$C_ID'");
$c2=$cates->fetch_assoc();
$cate=$c2['Category'];
?>
<div class="service-breadcrumb">
    <div class="container">
        <div class="wthree_service_breadcrumb_left">
            <ul>
                <li><a href="index.php">Home</a> <i>|</i></li>
                <li><?php echo $cate;?></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!--//breadcrumb-->
<div class="tips w3l">
    <div class="container">
        <div class="col-md-9 tips-info">
            <div class="col-md-7 w3l">
                <?php
                include 'Admin/connection.php';
                $category=$db->query("SELECT posts.Geo,posts.P_ID,posts.Post_Name,posts.City,posts.Opening_Day,posts.Closing_Day,posts.Opening,posts.Closing FROM posts INNER JOIN category ON category.C_ID=posts.C_ID WHERE posts.P_ID='$P_ID'");
                while ($view_category=$category->fetch_assoc()){
                    $PID=$view_category['P_ID'];
                    $imgs=$db->query("SELECT images.Link FROM images INNER JOIN posts ON posts.P_ID=images.P_ID WHERE posts.P_ID='$PID' ORDER BY images.Img_ID");
                    $img=$imgs->fetch_assoc();

                    $op=$view_category['Opening'];
                    $cl=$view_category['Closing'];
                    $date = new DateTime($op);
                    $date1 = new DateTime($cl);
                    $opening=$date->format('h:i:s a') ;
                    $closing=$date1->format('h:i:s a') ;

                    $od=$view_category['Opening_Day'];
                    $cd=$view_category['Closing_Day'];


                    switch ($od) {case "1": $Opening_Day="Monday"; break;
                        case "2": $Opening_Day="Tuesday";  break;
                        case "3": $Opening_Day="Wednesday";break;
                        case "4":$Opening_Day="Thursday";break;
                        case "5":$Opening_Day="Friday";break;
                        case "6":$Opening_Day="Saturday";break;
                        default:$Opening_Day="Sunday";
                    }

                    switch ($cd) { case "1":$Closing_Day="Monday";break;
                        case "2":$Closing_Day="Tuesday"; break;
                        case "3":$Closing_Day="Wednesday";break;
                        case "4":$Closing_Day="Thursday"; break;
                        case "5":$Closing_Day="Friday";break;
                        case "6":$Closing_Day="Saturday";break;
                        default: $Closing_Day="Sunday";
                    }



                    ?>
                    <div class="blo-top">
                        <div class="tech-btm one">
                            <img src="images/images/<?php echo $img['Link'];?>" class="img-responsive" alt="">
                        </div>
                        <div class="table-text">
                            <h4 > <a href="#" class="click-search"><span class="spancarname"><?php echo $view_category['Post_Name'];?></span></a></h4>
                            <br>
                            <p>Opening Time : <?php echo $opening.' to '.$closing;?></p>

                            <p style="margin-top: -10px;">Opening Days : <?php echo $Opening_Day.' to '.$Closing_Day;?></p>

                            <div class="other-details">


                            </div>

                            <div class="clearfix"></div>
                            <div class="list-form">

                                <div class="get-one"><a href="viewpost.php?Cate=<?php echo $cate;?>&&post=<?php echo $view_category['P_ID'];?>">View<a></div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>





            </div>


        </div>
        <div style="margin-left: -350px;margin-bottom: 200px;" class="col-md-3 advice-right w3l">
            <iframe src="<?php echo $view_category['Geo'];?>" width="650" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

            <?php
            }
            ?>




        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>