	<?php
		function active($currect_page)
		{
			$url_array =  explode('/', strtok($_SERVER['REQUEST_URI'],'?'));
			$url = end($url_array);  
			if($currect_page == $url){echo 'active';} 
		}
	?>
	<!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Welcome to V.R. Buildtech</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-envelope"></i>vrbuildtech@gmail.com</a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i>+91 98739 83316</a></li>
                                    </ul>
                                </div>
                                <div class="social_media_links">
                                    <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram">
                                    </i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="images/logo.png" alt="V.R. Buildtech">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
										<ul id="navigation">
											<li><a class="<?php active('') || active('index.php') ;?>" href="index.php">Home</a></li>
											<li><a class="<?php active('d-property.php') || active('property.php') ;?>" href="property.php">Property</a></li>
											<li><a  class="<?php active('about.php') ;?>" href="about.php">About</a></li>
											<li><a  class="<?php active('gallery.php') ;?>" href="gallery.php">Gallery</a></li>
                                            <li><a  class="<?php active('contact.php') ;?>" href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
