<?php
include_once "submit.php";
?>
<!doctype html>
<html lang="en">

<head>
	<title>Contact Form 10</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section class="ftco-section img bg-hero" style="background-image: url(images/bg_1.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4">More info</h3>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div> -->
										<div class="text pl-4">
											<p><span>Address:</span> Street: Vojvode Vlahovica, <br>City: Belgrade <br>Country: Serbia.
											</p>
										</div>
										<br>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-4">
											<p><span>Phone:</span> <a href="tel://381621644610">+ 381 62 1644610</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-4">
											<p><span>Email:</span> <a href="mailto:nemanjakovi90@gmail.com">nemanjakovi90@gmail.com</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-globe"></span>
										</div>
										<div class="text pl-4">
											<p><span>Website you may like</span> <a href="https://ethereum.org/en/">Ethereum</a></p>
											<p><a href="https://crypto.com/">Crypto</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">The Ethereum Blockchain Explorer </h3>
									<div id="form-message-warning" class="mb-4"></div>

									<form method="get" action="show.php">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="address" placeholder="Address" required>
													<span style="collor: red;"><?php if (isset($error)) {
																					echo "Error! Invalid address format";
																				} ?></span>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Submit" name="submit" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</body>

</html>