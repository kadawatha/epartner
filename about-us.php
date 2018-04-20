

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
		<!-- /search-car-->
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
			<!-- //search-car-->
		<!--//banner-section-->
				<!--/breadcrumb-->

		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left w3-agile">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>About us</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>About us</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->

<div class="privacy w3l">
	<div class="container">
        <!--section one-->
       <h3> About Epartner.lk </h3>
        <p>
            <strong>
                Whenever you want to find suppliers of products and services in your local area, look no further than epatner.lk directory. Day or night, we’re the Srilanka online business directory that does all the hard work for you.
            </strong>
        </p>
        <p>
            <strong>
                epartner.lk gives you so much more than just a name and address. Many of the businesses we list include useful additional information like facilities, opening times, payment methods, maps, directions, website links, photos, videos and lots of special offers.
            </strong>

        </p>
   <p>
    epartner.lk offers free listing for all Small Businesses and gives every business regardless of size or budget an equal opportunity to promote their services and products
   </p>

        <p>
            Advertise with us and you can promote your business or service on epartner.lk. Taking your place on our business listings will mean that your business details will be advertised across our network of our partner sites.
        </p>

        <p>
<strong>
    Here is what an epartner.lk <span class="red_font">business directory </span>  listing can offer you:
</strong>
        </p>


   <div class="container">
    <ul>
        <li>
            <p>A backlink to your website helping build your internet authority and page rank</p>
        </li>
        <li>
            <p> A html description for deep linking and promoting your business and it’s services </p>
        </li>
        <li>
            <p>  A quality showcase for your products and services </p>
        </li>
        <li>
            <p>    A thumbnail and shop window image of your site </p>

        </li>
        <li>
            <p>   A Google map thumbnail </p>
        </li>
        <li>
            <p>  A Featured listing highlighting your business in directory searches </p>
        </li>
        <li>
            <p>   A Featured listing displaying on our homepage </p>
        </li>
        <li>
            <p>   With a paid listing, access to a facility enabling you to post articles about your business </p>
        </li>
        <li>
            <p>   A business directory listing at a keen price or FREE with a reciprocal link </p>
        </li>
        <li>
            <p>  An Image upload facility </p>
        </li>
        <li>
            <p>   An increased chance of drawing more visitors and appearing in keyword searches </p>
        </li>
    </ul>

   </div>

        <p>  <strong>So, when you’re looking for a business near you, remember – epartner.lk  </strong></p>


        Powered by Skyydigital.com



	</div>
</div>








<?php include "footer.php"; ?>




