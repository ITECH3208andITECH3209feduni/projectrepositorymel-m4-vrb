<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>About Us :: V.R. Build Tech</title>
    <meta name="description" content="">
	<?php include('head.php'); ?>
</head>
<body>
	<?php include('header.php'); ?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>
                            About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <div class="about_mission">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="images/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_text">
                        <h4>
                            Our Mission</h4>
                        <p>
                            Real Estate empowers people to make smarter decisions during one of life’s most
                            important moments: buying or selling their home.We build products that put more
                            power in your hands and make it easier to get the best outcome when you buy or sell
                            a home.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- accordion  -->
    <div class="accordion_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq_ask">
                        <h3>Frequently ask</h3>
                        <div id="accordion">
							<?php 
								include('lib/connect.php'); 
								$query="SELECT * FROM faq where Active='1' order by CreateDate desc";
								$result=mysqli_query($con,$query)or die(mysqli_error($con)); 
								$i=1; 
								while($row=mysqli_fetch_array($result))
								{ 
									$FaqId =$row[0]; 
									$FaqId1 =$row[0] .'_'; 
									$FaqQue=$row[1];
									$FaqAns=$row[2]; 
									echo "
										<div class='card'>
											<div class='card-header' id='$FaqId'>
												<h5 class='mb-0'>
													<button class='btn btn-link collapsed' data-toggle='collapse' data-target='#$FaqId1'
														aria-expanded='false' aria-controls='$FaqId1'>
														$FaqQue<span></span>
													</button>
												</h5>
											</div>
											<div id='$FaqId1' class='collapse' aria-labelledby='$FaqId' data-parent='#accordion'
												style=''>
												<div class='card-body'>$FaqAns</div>
											</div>
										</div>
									"; 
									$i++; 
								} 
							?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="accordion_thumb">
                        <img src="images/banner/accordion.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- accordion  -->
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3>
                            <span class="counter">200</span> <span>+</span>
                        </h3>
                        <p>
                            Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3>
                            <span class="counter">300</span></h3>
                        <p>
                            Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3>
                            <span class="counter">15</span></h3>
                        <p>
                            Properties for sale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
					<?php include('lib/connect.php'); 
						$query="SELECT TestimonialId, TestimonialName, TestimonialMessage, TestimonialCity, TestimonialPic FROM testimonial where Active='1' order by CreateDate desc LIMIT 5";
						$result=mysqli_query($con,$query)or die(mysqli_error($con)); 
						$i=1; 
						while($row=mysqli_fetch_array($result))
						{ 
							$TestimonialName=$row[1]; 
							$TestimonialMessage=$row[2];
							$TestimonialCity=$row[3];
							$TestimonialPic=!empty($row[4]) ? 'images/testimonial/'.$row[0].'/'.$row[0].'_'.$row[4] : 'images/noimage.png'; 
							echo "
								<div class='single_carousel'>
									<div class='single_testmonial text-center'>
										<div class='quote'>
											<img src='images/svg_icon/quote.svg' alt=''>
										</div>
										<p>$TestimonialMessage</p>
										<div class='testmonial_author'>
											<div class='thumb'>
												<img src='$TestimonialPic' alt='$TestimonialName' />
											</div>
											<h3>$TestimonialName</h3>
											<span>$TestimonialCity</span>
										</div>
									</div>
								</div>
							"; 
							$i++; 
						} 
					?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->
    <!-- team_area  -->
    <div class="team_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>
                            Our Agents
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include('lib/connect.php'); 
					$query="SELECT * FROM agent where Active='1' order by CreateDate desc LIMIT 3";
					$result=mysqli_query($con,$query)or die(mysqli_error($con)); 
					$i=1; 
					while($row=mysqli_fetch_array($result))
					{ 
						$AgentType=$row[1]; 
						$AgentName=$row[2];
						$AgentImage=!empty($row[3]) ? 'images/AgentImage/'.$row[0].'/'.$row[0].'_'.$row[3] : 'images/noimage.png'; 
						$AgentFacebook=$row[4];
						$AgentTwitter=$row[5];
						$AgentInsta=$row[6];
						echo "
							<div class='col-xl-3 col-lg-3 col-md-6'>
								<div class='single_team'>
									<div class='team_thumb'>
										<img src='$AgentImage' alt='$AgentName'>
										<div class='social_link'>
											<ul>
												<li><a href='$AgentFacebook'><i class='fa fa-facebook'></i></a></li>
												<li><a href='$AgentTwitter'><i class='fa fa-twitter'></i></a></li>
												<li><a href='$AgentInsta'><i class='fa fa-instagram'></i></a></li>
											</ul>
										</div>
									</div>
									<div class='team_info text-center'>
										<h3>$AgentName</h3>
										<p>$AgentType</p>
									</div>
								</div>
							</div>
						"; 
						$i++; 
					} 
				?>
            </div>
        </div>
    </div>
    <!-- /team_area  -->
    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="action_heading">
                        <h3>
                            Add your property for sale</h3>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="call_add_action">
                        <span>+91 98739 83316</span> <a href="#" class="boxed-btn3-line">Add Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->
	 <?php include('footer.php'); ?>
</body>
</html>
