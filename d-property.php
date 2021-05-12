<?php 
	include('lib/connect.php'); 
	date_default_timezone_set("Asia/Kolkata");
	if(isset($_REQUEST['pid'])) 
	{ 
		$pid=$_REQUEST['pid'];
		$query="SELECT * FROM property where PropertyId='$pid' and Active='1'"; 
		$result=mysqli_query($con,$query)or die(mysqli_error($con)); 
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
			$PropertyDescription =$row[6]; 
			$PropertyImage=!empty($row[3]) ? 'images/PropertyPic/'.$row[0].'/'.$row[0].'_'.$row[3] : 'images/noimage.png'; 
		} 
	}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><?php echo $PropertyTitle; ?></title>
    <meta name="description" content="">
	<?php include('head.php'); ?>
</head>
<body>
	<?php include('header.php'); ?>
    <div class="property_details_banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6">
                    <div class="comfortable_apartment">
                        <h4><?php echo $PropertyTitle; ?></h4>
                        <p>
                            <img src="images/svg_icon/location.svg" alt="">
                            <?php echo $PropertyLocation; ?></p>
                        <div class="quality_quantity d-flex">
                            <div class="single_quantity">
                                <img src="images/svg_icon/color_box.svg" alt="">
                                <span><?php echo $PropertySqft ; ?> Sqft</span>
                            </div>
                            <div class="single_quantity">
                                <img src="images/svg_icon/color_bed.svg" alt="">
                                <span><?php echo $PropertyBed; ?> Bed</span>
                            </div>
                            <div class="single_quantity">
                                <img src="images/svg_icon/color_bath.svg" alt="">
                                <span><?php echo $PropertyBath; ?> Bath</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-4 col-lg-6">
                    <div class="prise_quantity">
                        <h4><?php echo $PropertyPrice; ?></h4>
                        <a href="#">+91 98739 83316</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- details  -->
    <div class="property_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="property_banner">
                        <div class="property_banner_active owl-carousel">
							<?php
								include('lib/connect.php');
								$pid=$_REQUEST['pid'];
								$result=mysqli_query($con,"SELECT gallery.*, property.PropertyTitle FROM gallery INNER JOIN property ON gallery.PropertyId = property.PropertyId  where gallery.PropertyId = '$pid' and gallery.Active='1' order by gallery.GalleryId Desc")or die(mysqli_error($con));
								$i=1;
								while($row=mysqli_fetch_array($result))
								{
									$GalleryTitle=$row[2];  
									$GalleryImg=!empty($row[3]) ? 'images/Gallery/'.$row[0].'/'.$row[0].'_'.$row[3] : 'images/noimage.gif';
									$PropertyTitle=$row[9];
									echo"<div class='single_property'><img src='$GalleryImg' alt='$PropertyTitle'></div>";
									$i++;
								}
							?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="details_info">
                        <h4>Description</h4>
                        <?php echo $PropertyDescription; ?>
                    </div>
                    <div class="contact_field">
                        <h3>
                            Contact Us</h3>
                        <form action="#">
							<div class="row">
								<div class="col-xl-6 col-md-6">
									<input type="text" placeholder="Your Name" name="txtname" id="txtname" type="text" required />
								</div>
								<div class="col-xl-6 col-md-6">
									<input type="email" placeholder="Email" name="txtemail" id="txtemail" required />
								</div>
								<div class="col-xl-12">
									<input type="number" placeholder="Phone no." name="txtPhonenumber" id="txtPhonenumber" required />
								</div>
								<div class="col-xl-12">
									<textarea name="txtmessage" id="txtmessage" cols="30" rows="10" placeholder="Message" name="txtname" id="txtname" type="text" required></textarea>
								</div>
								<div class="col-xl-12">
									<div class="send_btn">
										<button type="submit"  name="btnsubmit" id="btnsubmit" class="send_btn"> Send</button>
									</div>
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /details  -->
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
