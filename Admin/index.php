<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 

<script src="js/jquery-2.2.3.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->

</head>
<body>

	<div class="main-agileits">
		<center><img src="images/E-Partner.png" style="margin-top: 50px;" width="180"></center>
		<div class="mainw3-agileinfo form">
			<div id="login">    
				<form id="myform" action="test.php" method="post">
					<div class="field-wrap">
						<label> Enter Your User Name<span class="req">*</span> </label>
						<input type="text" name="U_Name" required autocomplete="off"/>
					</div> 
					<div class="field-wrap">
						<label> Your Password<span class="req">*</span> </label>
						<input type="password" name="password" required autocomplete="off"/>
					</div> 
					<p class="forgot"><a href="#">Forgot Password?</a></p> 
					<button id="sub" class="button button-block"/>Log In</button>
				</form> 
			</div>
           <br>
            <span id="result"></span>
		</div>	
	</div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script>
        $("#sub").click(function(){
            $.post( $("#myform").attr("action"), $("#myform :input").serializeArray(), function(info){ $("#result").html(info); });
            clearInput();

        });

        $("#myform").submit(function(){
            return false;
        });

        /*function clearInput(){

         $("#myform :input").each(function(index, element) {
         $(this).val('NA');
         });

         }*/
    </script>
	<div class="w3copyright-agile">
		<p>© 2017 Epartner reserved </a></p>
	</div>
	<!-- //copyright --> 
	<script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) { 
	  var $this = $(this),
		  label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
			  label.removeClass('active highlight');
			} else {
			  label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
				} else {
				label.removeClass('highlight');   
				}   
		} else if (e.type === 'focus') {
		  
		  if( $this.val() === '' ) {
				label.removeClass('highlight'); 
				} 
		  else if( $this.val() !== '' ) {
				label.addClass('highlight');
				}
		}
 
	}); 
	</script>
</body>
</html>