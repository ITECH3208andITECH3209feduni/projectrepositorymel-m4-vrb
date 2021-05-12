 <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="images/logo.png" alt="">
                                </a>
                            </div>
							<ul class="contact-us">
								<li><i class="fa fa-home"></i><span> V.R. Buildtech, New Delhi, India.</span></li>
								<li><i class="fa fa-phone"></i><span><a href="tel:+919873983316">+91 98739 83316</a></span></li>
								<li><i class="fa fa-envelope-o"></i><span><a href="mailto:vrbuildtech@gmail.com ">vrbuildtech@gmail.com</a></span></li>
								<li><i class="fa fa-globe"></i><span><a href="http://www.vrbuildtech.com">www.vrbuildtech.com</a></span></li>
							</ul>
                            <div class="socail_links">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="copy_right text-right">
                                <h3 class="footer_title">
                                    Useful Links
                                </h3>
                                <ul>
									<li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
									<li><a href="property.php">Property</a></li>
									 <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border">
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>

                            All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true">
                            </i> by VRB.
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
    <!-- link that opens popup -->

    <!-- JS here -->

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>

    <script src="js/vendor/jquery-1.12.4.min.js"></script> 

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/isotope.pkgd.min.js"></script>

    <script src="js/ajax-form.js"></script>

    <script src="js/waypoints.min.js"></script>

    <script src="js/jquery.counterup.min.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>

    <script src="js/scrollIt.js"></script>

    <script src="js/jquery.scrollUp.min.js"></script>

    <script src="js/wow.min.js"></script>

    <script src="js/nice-select.min.js"></script>

    <script src="js/jquery.slicknav.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/plugins.js"></script>

    <!-- <script src="js/gijgo.min.js"></script> -->

    <script src="js/slick.min.js"></script>

    <!--contact js-->

    <script src="js/contact.js"></script>

    <script src="js/jquery.ajaxchimp.min.js"></script>

    <script src="js/jquery.form.js"></script>

    <script src="js/jquery.validate.min.js"></script>

    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
