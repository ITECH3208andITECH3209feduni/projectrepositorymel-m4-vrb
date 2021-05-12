<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Contact Us :: V.R. Build Tech</title>
    <meta name="description" content="">
	<?php include('head.php'); ?>
</head>
<body>
	<?php include('header.php'); ?>
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>
                            Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="contact-title">
						Fill the form regarding queries</h2>
				</div>
				<div class="col-lg-8">
					<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" />
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control valid" name="txtname" id="txtname" type="text" placeholder="Enter your name" required />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control valid" name="txtemail" id="txtemail" type="email" placeholder="Email" required />
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input class="form-control" name="txtPhonenumber" id="txtPhonenumber" type="text" placeholder="Phone Number" required />
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<textarea class="form-control w-100" name="txtmessage" id="txtmessage" cols="20" rows="5" placeholder=" Fill your Query"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group mt-3">
							<button type="submit" name="btnsubmit" id="btnsubmit" class="button button-contactForm boxed-btn">Send</button>
						</div>
					</form>
				</div>
				<div class="col-lg-3 offset-lg-1">
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-home"></i></span>
						<div class="media-body">
							<h3>
								V.R. Buildtech</h3>
							<p>
								New Delhi</p>
						</div>
					</div>
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-tablet"></i></span>
						<div class="media-body">
							<h3>
								+91 98739 83316</h3>
							<p>
								Mon to Fri 9am to 6pm</p>
						</div>
					</div>
					<div class="media contact-info">
						<span class="contact-info__icon"><i class="ti-email"></i></span>
						<div class="media-body">
							<h3>
								vrbuildtech@gmail.com</h3>
							<p>
								Send us your query anytime!</p>
						</div>
					</div>
				</div>
			</div>
    	</div>
	</section>
    <!-- ================ contact section end ================= -->
	 <?php include('footer.php'); ?>
</body>
</html>
