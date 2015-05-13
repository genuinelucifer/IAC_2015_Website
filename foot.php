
<!-- Modernizr -->
<script src="assets/js/min/modernizr.custom.min.js"></script>

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>-->

<!-- Bootstrap JS -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- Bootstrap Plugin - open dropdown on hover -->
<script src="assets/js/min/bootstrap-hover-dropdown.min.js"></script>

<!-- LESS preprocessor -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.4/less.min.js"></script>

<!-- WOW.js - loading animations -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.6/wow.min.js"></script>

<!-- Knobs - our skills -->
<script src="http://cdn.jsdelivr.net/jquery.knob/1.2.9/jquery.knob.min.js"></script>

<!-- Slippry - Slideshow -->
<script src="assets/js/min/slippry.min.js"></script>

<!-- Mixitup plugin - Portfolio Filter Grid -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/mixitup/1.5.6/jquery.mixitup.min.js"></script>

<!-- Make sticky whatever elements -->
<script src="http://cdn.jsdelivr.net/jquery.sticky/1.0.0/jquery.sticky.min.js"></script>

<!-- Smooth sroll -->
<script src="http://cdn.jsdelivr.net/jquery.nicescroll/3.5.4/jquery.nicescroll.min.js"></script>

<!-- Contact Form -->
<script src="assets/js/min/contact-form.min.js"></script>

<!-- Must be last of all scripts -->
<script src="assets/js/min/scripts.min.js"></script>

<!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- side menu -->
<?php
	require_once 'side_panel.php';
?>

    <!-- Footer-->
    <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <h4>Contact</h4>
                    <ul class="info-list md-list i-primary">
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a href="mailto:iac.iiti@gmail.com">iac.iiti@gmail.com</a>
                        </li>
                    <ul class="info-list md-list i-primary">
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a href="mailto:iac@iiti.ac.in">iac@iiti.ac.in</a>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            +91 786 925 2296
                        </li>
                        <li>
                            <i class="fa fa-map-marker fa-fw"></i>
                            Silver Springs, IIT Indore
                        </li>
                    </ul>
                </div>
                <div class="space-sm visible-sm visible-xs"></div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <h4>Quick Links</h4>
                    <ul class="info-list md-list i-primary">
                        <li>
                            <i class="fa fa-angle-right fa-fw"></i>
                            <a href="#about_us" class="scroll">
                                <span class="link-title">About Us</span>- Who we are</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right fa-fw"></i>
                            <a href="#">
                                <span class="link-title">Gallery</span>- Capturing moments</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <div class="space-sm visible-sm visible-xs"></div>
                <div class="col-md-4 col-lg-4  col-xs-12">
                    <h4>About Us</h4>
                    <p>
                        We are a group of students trying to bring the academia and industries closer!
                    </p>
                    <div class="space-sm"></div>
                    <h4>Follow Us</h4>
                    <ul class="circle-icons icons-list">
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- Google Maps-->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/min/initmap.min.js"></script>
    <script>
        $('#map').initMap({
            markers: {
                marker1: {
                    position: [22.65940,75.90713, 10]
                }
            },
            options: {
                zoom: 17,
                scrollwheel: false
            },
            type: 'roadmap',
            center: [22.65940, 75.90713]
        });
    </script>

</body>

</html>

