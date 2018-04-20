




<?php include "header.php"; ?>




<link rel='stylesheet' id='contact-form-7-css'  href='slider/css/styles.css?ver=4.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='slider/css/settings.css?ver=5.4.5.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>

<link rel='stylesheet' id='listable-style-css'  href='slider/css/style.css?ver=1.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-raty-style-css'  href='slider/css/jquery.raty.css?ver=1.1.5' type='text/css' media='' />
<script type='text/javascript' src='slider/css/jquery.js?ver=1.12.4'></script>


<script type='text/javascript' src='slider/css/TweenLite.min.js?ver=4.9.1'></script>
<script type='text/javascript' src='slider/css/ScrollToPlugin.min.js?ver=4.9.1'></script>



<div id="page" class="hfeed site">

    <div id="content" class="site-content js-header-height-padding-top">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">


                <article id="post-11306" class="post-11306 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-phone" itemscope itemtype="http://schema.org/LocalBusiness">

                    <div class="entry-featured-carousel">
                        <div class="entry-featured-gallery">
                            <?php
                            $pp=$_REQUEST['post'];
                            include 'Admin/connection.php';
                            $gallery=$db->query("SELECT * FROM images WHERE P_ID='$pp' ");
                            while ($gal_details=$gallery->fetch_assoc()){
                                ?>
                                <img class="entry-featured-image" src="images/images/<?php echo $gal_details['Link'];?>" itemprop="image" />
                                <?php
                            }
                            ?>



                        </div>
                    </div>


                    <div>

                        <div class="single_job_listing"
                             data-latitude="6.9461203"
                             data-longitude="79.8595037"
                             data-categories=""
                        >

                            <div class="grid">
                                <div class="grid__item  column-content  entry-content">
                                    <header class="entry-header">


                                    </header><!-- .entry-header -->
                                </div> <!-- / .column-1 -->


                            </div>
                        </div>				</div><!-- .entry-content -->

                    <footer class="entry-footer">
                    </footer>

                </article>


            </main>
        </div>


    </div>


</div><!-- #page -->

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
<!-- //discounts-->
<!-- //sign-up-->
<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog sign" role="document">
        <div class="modal-content about">
            <div class="modal-header one">
                <button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="discount one">
                    <h3>Sign Up</h3>

                </div>
            </div>
            <div class="modal-body about">
                <div class="login-top sign-top one">
                    <form action="#" method="post">
                        <input type="text" name="name" class="name active" placeholder="Your Name" required="">
                        <input type="text" name="email" class="email" placeholder="Email" required="">
                        <input type="password" name="password" class="password" placeholder="Password" required="">
                        <input type="checkbox" id="brand1" value="">
                        <label for="brand1"><span></span> Remember me</label>
                        <div class="login-bottom one">
                            <ul>
                                <li>
                                    <a href="#">Forgot password?</a>
                                </li>
                                <li>

                                    <input type="submit" value="SIGN UP">

                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                    </form>
                </div>


            </div>
            <div class="social-icons">
                <ul>
                    <li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
                    <li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
                    <li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- //sign-up-->
<!-- /location-->
<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog sign" role="document">
        <div class="modal-content about">
            <div class="modal-header one">
                <button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="discount one">
                    <h3>Please Tell Us Your City</h3>

                </div>
            </div>
            <div class="modal-body about">
                <div class="login-top sign-top location">
                    <form action="#" method="post">
                        <select id="country12" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null"> Select City</option>
                            <option value="city">Amsterdam</option>
                            <option value="city">Bahrain</option>
                            <option value="city">Cannes</option>
                            <option value="city">Dublin</option>
                            <option value="city">Edinburgh</option>
                            <option value="city">Florence</option>
                            <option value="city">Georgia</option>
                            <option value="city">Hungary</option>
                            <option value="city">Hong Kong</option>
                            <option value="city">Johannesburg</option>
                            <option value="city">Kiev</option>
                            <option value="city">London</option>
                            <option value="city">Others...</option>
                        </select>
                    </form>
                </div>


            </div>


        </div>
    </div>
</div>
<!-- //location-->
<!-- /get-->
<div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog sign" role="document">
        <div class="modal-content about">
            <div class="modal-header one">
                <button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="discount one">
                    <h3>Make car insurance buying easier</h3>

                </div>
            </div>
            <div class="modal-body about">
                <div class="login-top sign-top get">
                    <ul class="car-insurance">
                        <li><i class="fa fa-signal" aria-hidden="true"></i><h6> Zero <br> Depreciation</h6></li>
                        <li><i class="fa fa-truck" aria-hidden="true"></i><h6> Road-side <br> assistance</h6></li>
                        <li><i class="fa fa-gavel" aria-hidden="true"></i><h6> Hydro-static <br> cover-lock</h6></li>
                    </ul>
                    <form action="#" method="post">

                        <input type="text" name="email" class="email" placeholder="Email" required="">
                        <input type="password" name="password" class="password" placeholder="Password" required="">
                        <input type="submit" value="Submit">
                </div>
                </form>

            </div>


        </div>

    </div>
</div>
</div>

                    <?php
                    $cate=$_REQUEST['Cate'];
                    $post=$_REQUEST['post'];

                    include 'Admin/connection.php';
                    $all=$db->query("SELECT posts.phone,posts.web,posts.Post_Name,posts.City,posts.Moto,posts.Des,posts.Geo,posts.Opening,posts.Closing,posts.Opening1,posts.Closing1,posts.Opening_Day,posts.Closing_Day,posts.Opening_day1,posts.Closing_day2 FROM posts WHERE posts.P_ID='$post'");
                    $images=$db->query("SELECT Link FROM images WHERE P_ID='$post'");
                    $post_details=$all->fetch_assoc();

                    $op=$post_details['Opening'];
                    $cl=$post_details['Closing'];
                    $date = new DateTime($op);
                    $date1 = new DateTime($cl);
                    $opening=$date->format('h:i:s a') ;
                    $closing=$date1->format('h:i:s a') ;


                    $opdate=$post_details['Opening_Day'];
                    $cldate=$post_details['Closing_Day'];
                    switch ($opdate) {
                        case "0":$Opening_Day="NA";break;
                        case "1":$Opening_Day="Monday";break;
                        case "2":$Opening_Day="Tuesday";break;
                        case "3":$Opening_Day="Wednesday";break;
                        case "4":$Opening_Day="Thursday";break;
                        case "5":$Opening_Day="Friday";break;
                        case "6":$Opening_Day="Saturday"; break;
                        default:$Opening_Day="Sunday";
                    }
                    switch ($cldate) {
                        case "0":$Closing_Day="NA";break;
                        case "1":$Closing_Day="Monday";break;
                        case "2":$Closing_Day="Tuesday";break;
                        case "3":$Closing_Day="Wednesday";break;
                        case "4":$Closing_Day="Thursday";break;
                        case "5":$Closing_Day="Friday";break;
                        case "6":$Closing_Day="Saturday"; break;
                        default:$Closing_Day="Sunday";
                    }


                    $secondryop=$post_details['Opening1'];
                    $secondrycl=$post_details['Closing1'];
                    $secondrydate = new DateTime($secondryop);
                    $secondrydate1 = new DateTime($secondrycl);
                    $secondry_opening=$secondrydate->format('h:i:s a') ;
                    $secondry_closing=$secondrydate1->format('h:i:s a') ;




                    $secondry_opdate=$post_details['Opening_day1'];
                    $secondry_cldate=$post_details['Closing_day2'];
                    switch ($secondry_opdate) {
                        case "0":$secondry_Opening_Day="NA";break;
                        case "1":$secondry_Opening_Day="Monday";break;
                        case "2":$secondry_Opening_Day="Tuesday";break;
                        case "3":$secondry_Opening_Day="Wednesday";break;
                        case "4":$secondry_Opening_Day="Thursday";break;
                        case "5":$secondry_Opening_Day="Friday";break;
                        case "6":$secondry_Opening_Day="Saturday"; break;
                        default:$secondry_Opening_Day="Sunday";
                    }
                    switch ($secondry_cldate) {
                        case "0":$secondry_Closing_Day="NA";break;
                        case "1":$secondry_Closing_Day="Monday";break;
                        case "2":$secondry_Closing_Day="Tuesday";break;
                        case "3":$secondry_Closing_Day="Wednesday";break;
                        case "4":$secondry_Closing_Day="Thursday";break;
                        case "5":$secondry_Closing_Day="Friday";break;
                        case "6":$secondry_Closing_Day="Saturday"; break;
                        default:$secondry_Closing_Day="Sunday";
                    }
                    ?>

<div class="service-breadcrumb w3-agile">
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
<div class="single w3ls">
    <div class="container">
        <div class="col-md-8 single-left">

            <div class="single-left2">
                <h3><?php echo $post_details['Post_Name'].' - '.$post_details['City'];?></h3>
                <h4><?php echo $post_details['Moto'];?></h4>
                <br>


            </div>
            <div class="single-left3">
                <p><?php echo $post_details['Des'];?></p>
            </div>

            <div class="comments agile-info">
                <h4>Comments</h4>
                <div class="comments-grid">

                    <?php
                    include 'Admin/connection.php';
                    $feeds=$db->query("SELECT * FROM feedback WHERE feedback.P_ID='$post' ORDER BY Feed_ID DESC ");
                    while ($feedback=$feeds->fetch_assoc()){
                        $added_date=$feedback['Added_Date'];
                        $dates1 = new DateTime($added_date);

                        $dd2=$dates1->format('d S ( D ) F Y') ;
                        ?>
                        <div class="comments-grid-right">
                            <h3><a href="#"><?php echo $feedback['Feed_Name'];?></a></h3>
                            <h5><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> On <?php echo $dd2;?></h5>
                            <p><?php echo $feedback['Feedback'];?></p>

                        </div>

                        <?php
                    }

                    ?>

                    <div class="clearfix"> </div>
                </div>

            </div>

        </div>
        <div class="col-md-4 single-right">
            <div class="blo-top">
                <div class="tech-btm" style="margin-top: -10px;">

                    <iframe src="<?php echo $post_details['Geo'];?>" width="345" height="350" frameborder="0" style="border:0; margin-left: -10px;" allowfullscreen></iframe>

                </div>
            </div>
            <div class="blo-top1">
                <div class="agileits_twitter_posts tech-btm">
                    <?php
                    if ($opening=="12:00:00 am" && $closing=="12:00:00 am" && $Opening_Day=="NA" && $Closing_Day=="NA"){
                        $time_A="";
                        $days_A="";
                    }else{
                        $days_B=$Opening_Day." to ".$Closing_Day;
                        $time_B=$opening." to ".$closing;
                    }
                    ?>
                    <h4><?php echo $days_B;?></h4>
                    <h5 align="center"><?php echo $time_B;?></h5>


                    <?php
                        if ($secondry_opening=="12:00:00 am" && $secondry_closing=="12:00:00 am" && $secondry_Closing_Day=="NA" && $secondry_Opening_Day=="NA"){
                            $time_A="";
                            $days_A="";
                        }else{
                            $days_A=$secondry_Opening_Day." to ".$secondry_Closing_Day;
                            $time_A=$secondry_opening." to ".$secondry_closing;
                        }
                    ?>
                        <br>
                    <h4><?php echo $days_A;?></h4>
                    <h5 align="center"><?php echo $time_A;?></h5>

                    <p><img src="images/explorer.png" width="54px"><span style="margin-left: 10px;"><a href="http://<?php echo $post_details['web'];?>" target="_blank"><?php echo $post_details['web'];?></a> </span></p>
                    <p><img src="images/phone.png" width="54px"><span style="margin-left: 10px;"><?php echo $post_details['phone'];?></span></p>

                </div>
            </div>











            <div class="related-posts">
                <h3>Gallery</h3>

                <div class="galleryy agile" id="galleryy">
                    <div class="container">

                        <div class="agile_gallery_grids w3-agile">
                            <?php
                            include 'Admin/connection.php';
                            $check=$db->query("SELECT * FROM images WHERE P_ID='$post' ORDER BY Img_ID DESC");
                            $rw=$check->num_rows;
                            $xd=$rw-1;
                            $i=0;
                            while ($i<=$xd){

                                $link=$check->fetch_assoc();
                                if ($i%3==0){

                                    echo "<ul class=\"clearfix demo\">";
                                }
                                echo "<li><img style=\"margin-left: -35px; margin-right: -10px; width: 142px; height: 90px;\" src=\"images/images/".$link['Link']."\" class=\"img-responsive\" /></li>";

                                $i++;
                                if ($i%3==0){
                                    echo "</ul>";
                                }

                            }
                            ?>

                        </div>
                    </div>
                </div>

            </div>






            <div class="related-posts">

                <form>

                    <h3>Give your Feedback</h3>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Your name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required="required">

                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword1">Your email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="email" required="required">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Enter Your feedback</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" required="required" rows="3"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>




            </div>





        </div>
        <div class="clearfix"> </div>
    </div>
</div>










<?php
include 'footer.php';
?>



<div class="hide">
    <div class="arrow-icon-svg">
        <svg width="25" height="23" viewBox="0 0 25 23" xmlns="http://www.w3.org/2000/svg"><path d="M24.394 12.81c.04-.043.08-.084.114-.13.02-.02.04-.047.055-.07l.025-.034c.258-.345.412-.773.412-1.24 0-.464-.154-.89-.412-1.237-.01-.02-.022-.036-.035-.05l-.045-.06c-.035-.044-.073-.09-.118-.13L15.138.61c-.814-.813-2.132-.813-2.946 0-.814.814-.814 2.132 0 2.947l5.697 5.7H2.08c-1.148 0-2.08.93-2.08 2.083 0 1.15.932 2.082 2.084 2.085H17.89l-5.7 5.695c-.814.815-.814 2.137 0 2.95.814.815 2.132.815 2.946 0l9.256-9.255c-.004-.003 0-.006 0-.006z" fill="currentColor" fill-rule="evenodd"/></svg>

    </div>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var listable_params = {"login_url":"http:\/\/www.epartner.lk\/wp-login.php","listings_page_url":"http:\/\/www.epartner.lk\/listings\/","mapbox":{"maxZoom":19},"strings":{"wp-job-manager-file-upload":"Add Photo","no_job_listings_found":"No results","results-no":"Results","select_some_options":"Select Some Options","select_an_option":"Select an Option","no_results_match":"No results match","social_login_string":"or"}};
        /* ]]> */
    </script>
    <script type='text/javascript' src='slider/css/main.js?ver=1.9.1'></script>
</div>





<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.light-carousel.js"></script>
<script>
    $('.sample1').lightCarousel();
</script>
<link href="css/light-carousel.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.picEyes.js"></script>
<script>
    $(function(){
        //picturesEyes($('.demo li'));
        $('.demo li').picEyes();
    });
</script>
<script src="js/bootstrap.js"></script>




</body>
</html>