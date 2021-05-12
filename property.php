<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Property :: V.R. Build Tech</title>
    <meta name="description" content="">
	<?php include('head.php'); ?>
</head>
<body>
   <?php include('header.php'); ?>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="property_wrap">
                            <div class="slider_text text-center justify-content-center">
                                <h3>Property</h3>
                            </div>
                            <!-- <div class="property_form">
                                <form action="#">
									<div class="row">
										<div class="col-xl-12">
											<div class="form_wrap d-flex">
												<div class="single-field max_width ">
													<label for="#">Location</label>
													<select class="wide">
														<option data-display="NewDelhi">NewDelhi</option>
														<option value="1">Noida</option>
														<option value="2">Gurgaon</option>
													</select>
												</div>
												<div class="single-field max_width ">
													<label for="#">
														Property type</label>
													<select class="wide">
														<option data-display="Apartment">Apartment</option>
														<option value="1">Apartment</option>
														<option value="2">Apartment</option>
													</select>
												</div>
												<div class="single_field range_slider">
													<label for="#">
														Price INR</label>
													<div id="slider">
													</div>
												</div>
												<div class="single-field min_width ">
													<label for="#">
														Bed Room</label>
													<select class="wide">
														<option data-display="01">01</option>
														<option value="1">02</option>
														<option value="2">03</option>
													</select>
												</div>
												<div class="single-field min_width ">
													<label for="#">
														Bath Room</label>
													<select class="wide">
														<option data-display="01">01</option>
														<option value="1">02</option>
														<option value="2">03</option>
													</select>
												</div>
												<div class="serach_icon">
													<a href="#"><i class="ti-search"></i></a>
												</div>
											</div>
										</div>
									</div>
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <div class="popular_property plus_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h4>
                            240 Properties found</h4>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php include('lib/connect.php'); 
					$query="SELECT * FROM property where Active='1' order by CreateDate desc LIMIT 3";
					$result=mysqli_query($con,$query)or die(mysqli_error($con)); 
					$i=1; 
					while($row=mysqli_fetch_array($result))
					{ 
						$PropertyId =$row[0]; 
						$PropertyType =$row[1]; 
						$PropertyTitle =$row[2]; 
						$PropertyLocation =$row[4]; 
						$PropertyPrice =$row[5]; 
						$PropertySqft=$row[7];
						$PropertyBed=$row[8];
						$PropertyBath =$row[9]; 
						$PropertyImage=!empty($row[3]) ? 'images/PropertyPic/'.$row[0].'/'.$row[0].'_'.$row[3] : 'images/noimage.png'; 
						echo "
							<div class='col-xl-4 col-md-6 col-lg-4'>
								<div class='single_property'>
									<div class='property_thumb'>
										<div class='property_tag'>For $PropertyType</div>
										<img src='$PropertyImage' alt='$PropertyTitle'>
									</div>
									<div class='property_content'>
										<div class='main_pro'>
											<h3><a href='d-property.php?pid=$PropertyId'>$PropertyTitle</a></h3>
											<div class='mark_pro'>
												<img src='images/svg_icon/location.svg' alt=''>
												<span>$PropertyLocation</span>
											</div>
											<span class='amount'>From $PropertyPrice</span>
										</div>
									</div>
									<div class='footer_pro'>
										<ul>
											<li>
												<div class='single_info_doc'>
													<img src='images/svg_icon/square.svg' alt=''>
													<span>$PropertySqft Sqft</span>
												</div>
											</li>
											<li>
												<div class='single_info_doc'>
													<img src='images/svg_icon/bed.svg' alt=''>
													<span>$PropertyBed Bed</span>
												</div>
											</li>
											<li>
												<div class='single_info_doc'>
													<img src='images/svg_icon/bath.svg' alt=''>
													<span>$PropertyBath Bath</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						"; 
						$i++; 
					} 
				?>
            </div>  
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="#" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <span>+91 98739 83316</span> <a href="#" class="boxed-btn3-line">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->
	 <?php include('footer.php'); ?>
</body>
</html>
