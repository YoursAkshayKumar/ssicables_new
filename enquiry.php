<!DOCTYPE html>
<html lang="en">
<head>
    <title>SSI Cables</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="SSI_cables_icon.png">
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174541765-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174541765-2');
</script>
</head>


<?php $page=10; include('header.php');?>
<br/>

		<div class="block">

			<div class="container">

				<div class="row">

					

					<div class="col-sm-1 visible-lg"></div>

					<div class="col-sm-12 col-md-12">
					<h1 class="text-center" style="font-size:28px; color: #f47629">Contact Form</h1>
	<hr/>

						<form  class="contact-form" name="contactform" action="sendmail.php" method="post" >

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

											<input type="text" class="input-custom input-full" name="name" placeholder="Your name" required>

										</div>

									</div>

									<div class="col-md-6">

										<div class="input-wrapper">

											<label>Phone <span class="required">*</span></label>

											<input type="text" class="input-custom input-full" name="phone" placeholder="(555) 555-5555" required> 

										</div>

									</div>

								</div>

								<div class="input-wrapper">

									<label>Email <span class="required">*</span></label>

									<input type="text" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx" required>

								</div>

							</div>

							<div>

								<label>Requirement</label>

								<textarea class="textarea-custom input-full" name="message" style="min-height:125px;"></textarea>

							</div>

							<button type="submit"  name="submit_btn" class="btn btn-border"><span>Send Message</span></button>

						</form>

					</div>

				</div>

			</div>

		</div>

<br/>
<?php include('footer.php');?>

