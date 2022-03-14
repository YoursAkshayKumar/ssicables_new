<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="SSI_cables_icon.png">
	<title>Welcome To SSI CABLES</title>
	<!-- Bootstrap core CSS -->
	<link href="css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-submenu.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/plugins/animate.min.css" rel="stylesheet">
	<link href="css/plugins/nivo-slider.css" rel="stylesheet">
	<link href="css/plugins/slick.css" rel="stylesheet">
	<link href="css/plugins/magnific-popup.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/mega-menu.css" rel="stylesheet">
	<!-- Icon Font-->
	<link href="iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

</head><?php $page=9; include('header.php');?>

	<!-- Content  -->

	<head>

	 <script type="text/javascript">

			function contact_submit(){

				jQuery("#submit_btn").hide();

				jQuery("#loading_div").html('<img src="http://crunchpress.com/demo/politicize/wp-content/themes/politicize/images/ajax_loading.gif" alt="Loading" />');

				jQuery.ajax({

					type:'POST', 

					url: 'http://crunchpress.com/demo/politicize/wp-content/themes/politicize/contact_submit.php',

					data:jQuery('#form_contact').serialize(), 

					success: function(response) {

						//$('#frm').get(0).reset();

						jQuery("#loading_div").html('');

						jQuery("#frm_area").hide();

						jQuery("#succ_mess").show('');

						jQuery("#succ_mess").html(response);

					}

				});

			}

			jQuery(document).ready(function($) {

				$('#form_contact').validate();

				

			});

		</script>

		</head>

	<div id="page-content">

		

		<!-- Block -->

		<br/>

		<div class="block" style="background:antiquewhite; padding:10px;    margin-top: -22px; ">

			<h1 class="text-center decor color" style="text-align:center">Contact <b>Information</b></h1>

			

		

		

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3491.3613048332477!2d77.67496506502557!3d28.947006226529076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c6474af6a8e63%3A0x6472e17bad5b507d!2sMajor+Dhyanchand+Nagar%2C+Surya+Palace+Colony%2C+Meerut%2C+Uttar+Pradesh+250002!5e0!3m2!1sen!2sin!4v1507208342885" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>

<br/>

		<!-- //Block -->

		<!-- Block -->

		<div class="block">

			<div class="container">

				<div class="row">

					<!--<div class="col-sm-5 col-md-3">

						<div class="address">

							<div class="address-block">

								<i class="icon icon-map-marker"></i>

								<h6 class="text-uppercase">Our address:</h6> B-19,20,21 Major Dhyan Chand Nagar,

								<br> Meerut, U.P- 250002

							</div>

							<div class="address-block">

								<i class="icon icon-telephone"></i>

								<h6 class="text-uppercase">Call us:</h6> +91 9720554488

							</div>

							

						</div>

						<div class="divider"></div>

						<div class="social-links">

							<ul>

								<li>

									<a class="icon icon-twitter" href="#"></a>

								</li>

								<li>

									<a class="icon icon-facebook" href="#"></a>

								</li>

								<li>

									<a class="icon icon-google-plus" href="#"></a>

								</li>

								<li>

									<a class="icon icon-linkedin" href="#"></a>

								</li>

								<li>

									<a class="icon icon-instagram" href="#"></a>

								</li>

							</ul>

						</div>

					</div>-->

					<div class="col-sm-1 visible-lg"></div>

					<div class="col-sm-7 col-md-8">

					

					<div class="contact-wrapper-v1">

        <div class="boxs">

            <h2 style=" margin-left: 46%;">Thankyou!</h2>

            <div class="container">

                <div class=" col-sm-12 col-md-12">

                    

                </div>

            </div>

        </div>

    </div>

	  <div class=" col-sm-12 col-md-12">

    <div class="get_touch-v1 animate-reveal " style="    margin-left: -19%;

   

    width: 165%;">

      <h3 style="color:green;  margin-left: 94px;

    margin-bottom: -9px;"> Your query is submitted successfully. we will reply you as soon as</h3>

        

    </div>

	</div>

	<br/>

					

						<!--<form  class="contact-form" name="contactform" action="sendmail.php" method="post" >

							<div id="success">

								<p>Your message was sent successfully!</p>

							</div>

							<div id="error">

								<p>Something went wrong, try refreshing and submitting the form again.</p>

							</div>

							<div class="inputs-col">

								<div class="row">

									<div class="col-md-6">

										<div class="input-wrapper">

											<label>Name <span class="required">*</span></label>

											<input type="text" class="input-custom input-full" name="name" placeholder="Your name">

										</div>

									</div>

									<div class="col-md-6">

										<div class="input-wrapper">

											<label>Phone</label>

											<input type="text" class="input-custom input-full" name="phone" placeholder="(555) 555-5555">

										</div>

									</div>

								</div>

								<div class="input-wrapper">

									<label>Email</label>

									<input type="text" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx">

								</div>

							</div>

							<div>

								<label>Message</label>

								<textarea class="textarea-custom input-full" name="message"></textarea>

							</div>

							<button type="submit"  name="submit" class="btn btn-border"><span>Send Message</span></button>

						</form>-->

					</div>

				</div>

			</div>

		</div>

		<!-- //Block -->



	</div>
<!-- Event snippet for enqury conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-815869571/010aCM_m4n4Qg92EhQM'});
</script>
	<!-- // Content  -->

<?php include('footer.php');?>