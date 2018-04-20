

<?php include "header.php"; ?>



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

<!-- //get-->
<!--//banner-section-->
<!--/breadcrumb-->
















<div class="service-breadcrumb">
    <div class="container">
        <div class="wthree_service_breadcrumb_left">
            <ul>
                <li><a href="index.html">Home</a> <i>|</i></li>
                <li>Contact us anytime</li>
            </ul>
        </div>
        <div class="wthree_service_breadcrumb_right">
            <h3>Contact us anytime</h3>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//breadcrumb-->








<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2108990641589!2d79.87486558783932!3d6.9092976426581805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53f28d7fed2017f3!2sSky+Digital+(Pvt)+Ltd.!5e0!3m2!1sen!2slk!4v1515648867282" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<br><br>

<div align="center">

  <h3>MORE INFO </h3> <br>

  <p><strong> Address:  71/2 R G Senanayake Mawatha, Colombo 00700 </strong> </p>    <br>

  <p><strong> Phone:   +94 114 674 359 / +94 702 955 916 </strong>  </p>    <br>

  <p><strong> Business Hours: 8a-6:30p M-F, 9a-2p S-S  </strong> </p>  <br>


</div>



<!--/sell-car -->
<div class="sell-car w3l">
    <div class="container">
        <h4 align="center">If you’d like to hire us, or just shoot the breeze, please feel free to send us a mail, or fill in the form below.</h4>
        <!--/sell-price-grids -->
        <div class="main w3-agile">
            <div class="pic-image"></div>
            <form  action="j-folder/php/demo.php" method="post" class="j-forms j-multistep" id="j-forms" >
                <fieldset>

                    <!-- start name -->
                    <div class="unit">



                       <br>
                        <label class="label">Your Name (required)</label>
                        <div class="input">

                            <input type="text" id="name" name="name">
                        </div>




                        <br>
                        <label class="label">Your Email (required)</label>
                        <div class="input">

                            <input type="email" id="email" name="email">
                        </div>




                        <br><br>

                        <label class="label">If you have phone number</label>



                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your Phone Number">
                        </div>




                        <br> <br><br>
                        <label class="label">Subject</label>
                        <div class="input">

                            <input type="text" id="name" name="name">

                        </div>



                        <br>



                        <div class="form-group">
                            <label class="input">Your Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>



                    </div>
                    <!-- end name -->

                    <!-- start way to communicate -->
                    <div class="unit check" id="way_to_communicate">
                        <div class="inline-group">
                            <label class="month">Best way to communicate</label>
                            <label class="radio">
                                <input type="radio" name="way_to_communicate" value="Email" id="email_to_communicate">
                                <i></i>
                                Email
                            </label>
                            <label class="radio">
                                <input type="radio" name="way_to_communicate" value="Phone" id="phone_to_communicate">
                                <i></i>
                                Phone
                            </label>
                        </div>
                    </div>
                    <!-- end way to communicate -->

                </fieldset>
                <fieldset>

                    <!-- start name -->
                    <div class="unit">
                        <label class="label">What is your expected monthly usage (KM)?</label>
                        <div class="input">

                            <input type="text" id="name" name="name">
                        </div>
                    </div>
                    <!-- end name -->

                    <!-- start way to communicate -->
                    <div class="unit check" id="way_to_communicate">
                        <div class="inline-group">
                            <label class="month">Monthly Usage And Preference</label>
                            <label class="radio">
                                <input type="radio" name="way_to_communicate" value="Email" id="email_to_communicate">
                                <i></i>
                                Email
                            </label>
                            <label class="radio">
                                <input type="radio" name="way_to_communicate" value="Phone" id="phone_to_communicate">
                                <i></i>
                                Phone
                            </label>
                        </div>
                    </div>
                    <!-- end way to communicate -->

                </fieldset>

                <fieldset>


                    <div id="email-step" class="hidden">

                        <!-- start email -->
                        <div class="unit">
                            <label class="label">Your email</label>
                            <div class="input">

                                <input type="email" id="email" name="email">
                            </div>
                        </div>
                        <!-- end email -->

                        <!-- start message -->
                        <div class="unit">
                            <label class="label">Comments/Message</label>
                            <div class="input">
                                <textarea spellcheck="false" name="email_message"></textarea>
                            </div>
                        </div>
                        <!-- end message -->


                    </div>

                    <div id="phone-step" class="hidden">

                        <!-- start phone -->
                        <div class="unit">
                            <label class="label">Phone/Mobile</label>
                            <div class="input">

                                <input type="text" id="phone" name="phone">
                            </div>
                        </div>
                        <!-- end phone -->

                        <!-- start time to call -->
                        <div class="unit">
                            <label class="label">Time</label>
                            <label class="input select">
                                <select autocomplete="off" name="time">
                                    <option value="">call me ...</option>
                                    <option value="now">now</option>
                                    <option value="5 min">in 5 minutes</option>
                                    <option value="10 min">in 10 minutes</option>
                                    <option value="30 min">in 30 minutes</option>
                                    <option value="1 hour">in an hour</option>
                                    <option value="tomorrow">tomorrow</option>
                                </select>
                                <i></i>
                            </label>
                        </div>
                        <!-- end time to call -->

                        <!-- start message -->
                        <div class="unit">
                            <label class="label">Comments/Message</label>
                            <div class="input">
                                <textarea spellcheck="false" name="phone_message"></textarea>
                            </div>
                        </div>
                        <!-- end message -->

                    </div>

                    <!-- start response from server -->
                    <div id="response"></div>
                    <!-- end response from server -->

                </fieldset>


                <!-- end /.content -->

                <div class="footer">
                    <button type="submit" class="primary-btn multi-submit-btn">Send</button>
                    <button type="button" class="primary-btn multi-next-btn">Next</button>
                    <button type="button" class="secondary-btn multi-prev-btn">Back</button>
                </div>
                <!-- end /.footer -->

            </form>

        </div>
        <!--//sell-price-grids -->
    </div>
</div>
<!-- //sell-car -->































<?php include "footer.php"; ?>










