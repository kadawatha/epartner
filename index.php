
<?php include "header.php"; ?>






<!--/banner-section-->
<div id="demo-1" data-zs-src='["images/home-banner.jpg", "images/home-banner.jpg", "images/home-banner.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <div class="header-top">

            <!-- //header-left -->
            <div class="search-box">
                <div id="sb-search" class="sb-search">

                </div>
                <!-- search-scripts -->
                <script src="js/classie.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts -->

            </div>

<div class="logo_image_position"><img src="images/logo/E-Partner.png" class="root_ima image-responsive" alt="epartner"></div>

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




            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <!--banner-info-->
        <div class="banner-info">
            <h1 class="font_zise"><a href="index.php">e <span class="logo-sub">PARTNER.LK</span> </a></h1>
            <h2><span>FIND </span>YOUR <span> BRANDS VOICE</span></h2>
            <p>Find great places to stay, eat, shop, or visit from local experts.</p>




            <form action="searching.php" method="post">



                <div class="search-two">
                    <input type="text" name="keyword" class="search_cat" placeholder="What are you looking for">
                </div>



                <div class="section_room">
                    <select id="country" name="category" class="frm-field required">
                        <option value="0">Select Category</option>
                        <?php
                        include 'Admin/connection.php';
                        $category=$db->query("SELECT * FROM category");
                        while($view=$category->fetch_assoc()){
                            ?>
                            <option><?php echo $view['Category'];?></option>
                            <?php
                        }
                        ?>


                    </select>
                </div>

                <input type="submit" name="search" value="Search">
                <script src="js/jquery-1.11.1.min.js"></script>
                <script>
                    $("#an").click(function(){
                        $.post( $("#add").attr("action"), $("#add :input").serializeArray(), function(info){ $("#subaddress").html(info); });
                        clearInput();

                    });

                    $("#add").submit(function(){
                        return false;
                    });


                </script>

                <div class="clearfix"></div>



            </form>
        </div>
        <!--//banner-info-->
    </div>
</div>




<br>

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->



<div id="wowslider-container1">



    <div class="ws_images">


        <ul>

            <?php



            include 'Admin/connection.php';
            $slide=$db->query("SELECT P_ID FROM posts ORDER BY P_ID DESC");
            while ($slide_pid=$slide->fetch_assoc()){
                $S_PID=$slide_pid['P_ID'];
                include 'Admin/connection.php';
                $sli_image=$db->query("SELECT images.Link FROM images WHERE images.P_ID='$S_PID'");
                $slider_image=$sli_image->fetch_assoc();
                ?>
                <li><img src="images/images/<?php echo $slider_image['Link'];?>" alt="7" title="" id="wows1_0"/></li>
                <?php
            }


            ?>
        </ul>


    </div>




    <div class="ws_shadow"></div>
</div>









<div class="center_cat">


    <div class="gap"></div>


    <div class="manuel_container">

        <div align="center" class="section group">
            <?php
            include 'Admin/connection.php';
            $cates=$db->query("SELECT * FROM category WHERE category.C_ID BETWEEN 1 AND 5");
            while ($viewcates=$cates->fetch_assoc()){
            ?>
            <a href="Category.php?Cate=<?php echo $viewcates['Category'];?>"><div class="col span_1_of_5">
                    <img src="images/categories/<?php echo $viewcates['Link'];?>" alt="">
                    <div class="center_caty"><?php echo $viewcates['Category'];  // category name ?></div></a>
        </div>
        <?php
        }
        ?>
    </div>

</div>
<div class="manuel_container">

    <div align="center" class="section group">
        <?php
        include 'Admin/connection.php';
        $cates=$db->query("SELECT * FROM category WHERE category.C_ID BETWEEN 6 AND 10");
        while ($viewcates=$cates->fetch_assoc()){
        ?>
        <a href="Category.php?Cate=<?php echo $viewcates['Category'];?>"><div class="col span_1_of_5">
                <img src="images/categories/<?php echo $viewcates['Link'];?>" alt="">
                <div class="center_caty"><?php echo $viewcates['Category'];  // category name ?></div></a>
    </div>
    <?php
    }
    ?>
</div>

</div>

<div class="manuel_container">

    <div align="center" class="section group">
        <?php
        include 'Admin/connection.php';
        $cates=$db->query("SELECT * FROM category WHERE category.C_ID BETWEEN 11 AND 15");
        while ($viewcates=$cates->fetch_assoc()){
        ?>
        <a href="Category.php?Cate=<?php echo $viewcates['Category'];?>"><div class="col span_1_of_5">
                <img src="images/categories/<?php echo $viewcates['Link'];?>" alt="">
                <div class="center_caty"><?php echo $viewcates['Category'];  // category name ?></div></a>
    </div>
    <?php
    }
    ?>
</div>

</div>

<div class="manuel_container">

    <div align="center" class="section group">
        <?php
        include 'Admin/connection.php';
        $cates=$db->query("SELECT * FROM category WHERE category.C_ID BETWEEN 16 AND 20");
        while ($viewcates=$cates->fetch_assoc()){
        ?>
        <a href="Category.php?Cate=<?php echo $viewcates['Category'];?>"><div class="col span_1_of_5">
                <img src="images/categories/<?php echo $viewcates['Link'];?>" alt="">
                <div class="center_caty"><?php echo $viewcates['Category'];  // category name ?></div></a>
    </div>
    <?php
    }
    ?>
</div>

</div>
<div class="manuel_container">

    <div align="center" class="section group">
        <?php
        include 'Admin/connection.php';
        $cates=$db->query("SELECT * FROM category WHERE category.C_ID BETWEEN 21 AND 25");
        while ($viewcates=$cates->fetch_assoc()){
        ?>
        <a href="Category.php?Cate=<?php echo $viewcates['Category'];?>"><div class="col span_1_of_5">
                <img src="images/categories/<?php echo $viewcates['Link'];?>" alt="">
                <div class="center_caty"><?php echo $viewcates['Category'];  // category name ?></div></a>
    </div>
    <?php
    }
    ?>
</div>

</div>
<div class="manuel_container">

    <div align="center" class="section group">
        <?php
        include 'Admin/connection.php';
        $cates=$db->query("SELECT * FROM category WHERE category.C_ID BETWEEN 26 AND 30");
        while ($viewcates=$cates->fetch_assoc()){
        ?>
        <a href="Category.php?Cate=<?php echo $viewcates['Category'];?>"><div class="col span_1_of_5">
                <img src="images/categories/<?php echo $viewcates['Link'];?>" alt="">
                <div class="center_caty"><?php echo $viewcates['Category'];  // category name ?></div></a>
    </div>
    <?php
    }
    ?>
</div>

</div>
<div class="manuel_container">

    <div align="center" class="section group">
        <?php
        include 'Admin/connection.php';
        $cates=$db->query("SELECT * FROM category WHERE category.C_ID BETWEEN 31 AND 35");
        while ($viewcates=$cates->fetch_assoc()){
        ?>
        <a href="Category.php?Cate=<?php echo $viewcates['Category'];?>"><div class="col span_1_of_5">
                <img src="images/categories/<?php echo $viewcates['Link'];?>" alt="">
                <div class="center_caty"><?php echo $viewcates['Category'];  // category name ?></div></a>
    </div>
    <?php
    }
    ?>
</div>

</div>


</div>





<div class="featured_section_w3l">
    <div class="container">



        <h3 class="tittle">Best Things to Do in the City</h3>



        <div class="inner_tabs">

            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                        <div class="section__content clearfix">


                            <?php
                            include 'Admin/connection.php';
                            $latest_post=$db->query("SELECT posts.C_ID,posts.P_ID,posts.Post_Name,posts.Opening,posts.Closing,posts.Opening_Day,posts.Closing_Day,posts.Geo,posts.City FROM posts ORDER BY posts.P_ID DESC LIMIT 3");
                            while ($view_latest=$latest_post->fetch_assoc()){
                                $P_ID=$view_latest['P_ID'];
                                $C_ID=$view_latest['C_ID'];
                                include 'Admin/connection.php';
                                $imgs=$db->query("SELECT images.Link FROM images WHERE images.P_ID='$P_ID'");
                                $catz=$db->query("SELECT Category FROM category WHERE C_ID='$C_ID'");
                                $catzresult=$catz->fetch_assoc();
                                $img=$imgs->fetch_assoc();
                                $op=$view_latest['Opening'];
                                $cl=$view_latest['Closing'];
                                $date = new DateTime($op);
                                $date1 = new DateTime($cl);
                                $opening=$date->format('h:i:s a') ;
                                $closing=$date1->format('h:i:s a') ;
                                $opdate=$view_latest['Opening_Day'];
                                $cldate=$view_latest['Closing_Day'];
                                switch ($opdate) {case "1":$Opening_Day="Monday";break;
                                    case "2":$Opening_Day="Tuesday";break;
                                    case "3":$Opening_Day="Wednesday";break;
                                    case "4":$Opening_Day="Thursday";break;
                                    case "5":$Opening_Day="Friday";break;
                                    case "6":$Opening_Day="Saturday"; break;
                                    default:$Opening_Day="Sunday";
                                }
                                switch ($cldate) {case "1":$Closing_Day="Monday";break;
                                    case "2":$Closing_Day="Tuesday";break;
                                    case "3":$Closing_Day="Wednesday";break;
                                    case "4":$Closing_Day="Thursday";break;
                                    case "5":$Closing_Day="Friday";break;
                                    case "6":$Closing_Day="Saturday"; break;
                                    default:$Closing_Day="Sunday";
                                }





                                ?>
                                <div class="card">
                                    <div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/images/<?php echo $img['Link'];?>" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="viewpost.php?Cate=<?php echo $catzresult['Category'];?>&&post=<?php echo $view_latest['P_ID'];?>"><font size="3"><?php echo $view_latest['Post_Name']." - ".$view_latest['City'];?></font></a></h4>
														 <div class="price"><span class="font25"><?php echo $Opening_Day.' to '.$Closing_Day;?></span></div>
														 <p><?php echo $opening.' to '.$closing;?> </p>

														</div>

													</div>
									  </span>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>







                        </div>
                    </div>


                </div>
            </div>
        </div>
        <br><br> <br><br> <br><br> <br><br>
        <div class="inner_tabs">

            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                        <div class="section__content clearfix">

                            <?php
                            include 'Admin/connection.php';
                            $get_last_ID=$db->query("SELECT posts.P_ID FROM posts ORDER BY posts.P_ID DESC");
                            $last_ID=$get_last_ID->fetch_assoc();
                            $view_last_ID=$get_last_ID->num_rows;
                            $as=$view_last_ID-3;
                            $asd=$view_last_ID-5;
                            $final_ID=$view_last_ID-3;
                            $xcv=$as-3;
                            $latest_post=$db->query("SELECT posts.C_ID,posts.P_ID,posts.Post_Name,posts.Opening,posts.Closing,posts.Opening_Day,posts.Closing_Day,posts.Geo,posts.City FROM posts WHERE posts.P_ID BETWEEN '$xcv' AND '$as' ORDER BY posts.P_ID DESC LIMIT 3");
                            while ($view_latest=$latest_post->fetch_assoc()){

                                $P_ID=$view_latest['P_ID'];
                                $C_ID=$view_latest['C_ID'];
                                include 'Admin/connection.php';
                                $imgs=$db->query("SELECT images.Link FROM images WHERE images.P_ID='$P_ID'");
                                $catz=$db->query("SELECT Category FROM category WHERE C_ID='$C_ID'");
                                $catzresult=$catz->fetch_assoc();
                                $img=$imgs->fetch_assoc();
                                $op=$view_latest['Opening'];
                                $cl=$view_latest['Closing'];
                                $date = new DateTime($op);
                                $date1 = new DateTime($cl);
                                $opening=$date->format('h:i:s a') ;
                                $closing=$date1->format('h:i:s a') ;
                                $opdate=$view_latest['Opening_Day'];
                                $cldate=$view_latest['Closing_Day'];
                                switch ($opdate) {case "1":$Opening_Day="Monday";break;
                                    case "2":$Opening_Day="Tuesday";break;
                                    case "3":$Opening_Day="Wednesday";break;
                                    case "4":$Opening_Day="Thursday";break;
                                    case "5":$Opening_Day="Friday";break;
                                    case "6":$Opening_Day="Saturday"; break;
                                    default:$Opening_Day="Sunday";
                                }
                                switch ($cldate) {case "1":$Closing_Day="Monday";break;
                                    case "2":$Closing_Day="Tuesday";break;
                                    case "3":$Closing_Day="Wednesday";break;
                                    case "4":$Closing_Day="Thursday";break;
                                    case "5":$Closing_Day="Friday";break;
                                    case "6":$Closing_Day="Saturday"; break;
                                    default:$Closing_Day="Sunday";
                                }

                                ?>
                                <div class="card">
                                    <div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/images/<?php echo $img['Link'];?>" alt="Catchy Carz">
													<div class="car_description">
														 <h4><a href="viewpost.php?Cate=<?php echo $catzresult['Category'];?>&&post=<?php echo $view_latest['P_ID'];?>"><font size="3"><?php echo $view_latest['Post_Name'].' - '.$view_latest['City'];?></font></a></h4>
														 <div class="price"><span class="font25"><?php echo $Opening_Day.' to '.$Closing_Day;?></span></div>
														 <p><?php echo $opening.' to '.$closing;?> </p>


														</div>

													</div>
									  </span>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>








                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>












<?php include"footer.php"; ?>










