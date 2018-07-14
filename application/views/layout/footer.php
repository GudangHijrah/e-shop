<!-- Footer-->
<style>
    .widget-download {
    text-align: center;
}
    .widget-download a {
        text-decoration: none;
    display: block;
}
.widget-download a.black {
    background: #111111;
    padding: 10px;
    border-radius: 5px;
    color: #fff;
    margin-bottom: 10px;
}
</style>
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1>Menara Hijau</h1>
                    <!--<p>Description here...</p>-->
                    <ul class="footer-contact">
                        <li> <i class="icons fa fa-map-marker"></i><a class="link" href="#"><?php echo $contact['address'] ?></a> </li>
                    </ul>
                    <!--<div class="footer-social"> <a class="facebook" href="#"><i class="fa fa-facebook"></i></a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a> <a class="pinterest" href="#"><i class="fa fa-instagram"></i></a> <a class="google" href="#"><i class="fa fa-google"></i></a> </div>-->
                </div>
                <div class="col-md-3">
                    <h1><?php if($l=='id')echo 'Kontak';else echo 'Contact';?></h1>
                    <ul class="footer-contact">
                        <li> <i class="icons fa fa-phone"></i><a class="link" href="#"><?php echo $contact['phone'] ?></a> </li>
                        <br>
                        <li> <i class="icons fa fa-envelope-o"></i><a class="link" href="mailto:gmh@menarahijau.com"><?php echo $contact['email'] ?></a> </li>
                    </ul>
                    <?php echo $contact['information'];?>
                </div>
                <div class="col-md-3">
                    <h1><?php if($l=='id')echo 'Tautan Cepat';else echo 'Quick Link';?></h1>
                    <ul class="footer-links">
                        <li> <a href="<?php echo base_url() ?>main/"><?php if($l=='id')echo 'Beranda';else echo 'Home';?></a> </li>
                        <li> <a href="<?php echo base_url() ?>main/room"><?php if($l=='id')echo 'Ruang Kantor';else echo 'Office Space';?></a> </li>
                        <li> <a href="<?php echo base_url() ?>main/facilities"><?php if($l=='id')echo 'Fasilitas';else echo 'Facilities';?></a> </li>
                        <li> <a href="<?php echo base_url() ?>main/about"><?php if($l=='id')echo 'Tentang Kami';else echo 'About Us';?></a> </li>
                        <li> <a href="<?php echo base_url() ?>main/gallery"><?php if($l=='id')echo 'Galeri';else echo 'Gallery';?></a> </li>
                        <li> <a href="<?php echo base_url() ?>main/contact"><?php if($l=='id')echo 'Kontak';else echo 'Contact';?></a> </li>
                        <!--<li> <a href="#">What to Do</a> </li>-->
                    </ul>
                </div>
                <div class="col-md-3">
                    <h1><?php if($l=='id')echo 'Unduh';else echo 'Download';?></h1>
                    <div class="widget-download">
                        <?php foreach ($brochure as $b){?>
                        <a href="<?php echo $b['file'] ?>" target="_blank" class="black"><?php echo $b['brochure_name'] ?></a>
                        <?php }?>
                    </div>
<!--                    <img alt="logo" class="img-responsive footer-featured-img" src="<?php echo base_url() ?>assets/frontend/images/featured-in.png">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>-->
                </div>
            </div>
        </div>
    </div>
    <!--// Footer-Main-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright © 2017 Menara Hijau. all rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!--// Footer-Main--> 
</footer>
<!--// Footer--> 
</div>
<!--// Menu Container--> 
</div>
<!--// Container --> 

<!-- JS Scripts --> 
<script src="<?php echo base_url() ?>assets/frontend/js/jquery-2.1.4.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/panels.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.matchHeight-min.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/webslidemenu.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/owl.carousel.min.js"></script> 
<!-- Touch Swipe JS File Version - 1.6.15 --> 
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.touchSwipe.min.js"></script> 
<!-- Paradise Slider Main JS File --> 
<script src="<?php echo base_url() ?>assets/frontend/js/paradise_slider_min.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/wow.min.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.parallax-1.1.3.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/jquery-countTo.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.appear.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/smooth-scroll.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/site.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/modernizr.custom.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/stepsForm.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/classie.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/js/reservationModal.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>  
<!-- Google Maps --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb74Ez79fEQ9lWUmxmdDoxQW0arNY2ZjI&amp;callback=initMap"></script>
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=44494809"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58d5fe464f20afc6"></script> 
</body>

<!-- Mirrored from www.themecub.com/avara/index-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2017 23:44:46 GMT -->
</html>