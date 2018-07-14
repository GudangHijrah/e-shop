<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from www.themecub.com/avara/rooms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2017 23:44:46 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
        <title>Menara Hijau | A better place to be your office </title>
        <!-- Fonts -->
        <link href="<?php echo base_url() ?>assets/frontend/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/normalize.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/date-picker.css" rel="stylesheet">
        <!--Navigation Menu File-->
        <link href="<?php echo base_url() ?>assets/frontend/css/basic-menu.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/avara-gallery.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/avara-gallery-two.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/hover.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/sky-tabs.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/frontend/css/panels.css" rel="stylesheet">
        <!-- Animation Style Sheet Version - 3.5.0 -->
        <link href="<?php echo base_url() ?>assets/frontend/css/animate.min.css" rel="stylesheet" media="all">
        <!-- Paradise Slider Main Style Sheet -->
        <link href="<?php echo base_url() ?>assets/frontend/css/paradise_slider.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>assets/frontend/css/team-staff.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>assets/frontend/css/client-carousel.css" rel="stylesheet" media="all">
        <link href="<?php echo base_url() ?>assets/frontend/css/newsletter.css" rel="stylesheet" media="all">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/frontend/images/favicon.ico">
    </head>

    <body>
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div>
        <!-- // Pre-Loader --> 
        <!--  <div id="top-bar" class="top-bar">
            <div class="container">
              <div class="row">
                
                <div class="col-md-6 col-sm-6 col-xs-12 top-social">
                  <ul class="unstyled">
                    <li>
                      <a title="Facebook" href="#">
                        <span class="social-icon"><i class="fa fa-facebook"></i></span>
                      </a>
                      <a title="Twitter" href="#">
                        <span class="social-icon"><i class="fa fa-twitter"></i></span>
                      </a>
                      <a title="Google+" href="#">
                        <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                      </a>
                      <a title="Linkdin" href="#">
                        <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                      </a>
                      <a title="instagram" href="#">
                        <span class="social-icon"><i class="fa fa-instagram"></i></span>
                      </a>
                    </li>
                  </ul>
                </div>
                  /Top social end 
              </div>
                / Content row end 
            </div>
              / Container end 
          </div>-->
        <!--/ Topbar end--> 
        <!-- Navigation -->
        <div class="container-full">
            <div class="wsmenucontainer clearfix">
                <div class="overlapblackbg"></div>
                <div class="wsmobileheader clearfix"> <a class="animated-arrow" id="wsnavtoggle"><span></span></a> <a class="smallogo"><img alt="menarahijau-logo" src="<?php echo base_url() ?>assets/frontend/images/logo-GrahaMH.png"></a> <a class="callusicon" href="tel:<?php echo $contact['phone'] ?>"><span class=
                                                                                                                                                                                                        "fa fa-phone"></span></a> </div>
                <div class="headtoppart clearfix">
                    <div class="headerwp">
                        <div class="headertopleft">
                            <div class="address clearfix"> <span><i aria-hidden="true" class="fa fa-map-marker"></i> <?php echo $contact['address']; ?></span> <a href="tel:<?php echo $contact['phone'] ?>"><i aria-hidden="true" class="fa fa-phone"></i> <?php echo $contact['phone'] ?></a> </div>
                        </div>
                        <div class="headertopright">
                            <a class="googleicon" href="<?php echo base_url()?>main/set_language/id" title="Bahasa Indonesia" style="<?php if($l=='id')echo 'background-color: #b94a48';else echo '';?>">
                                <i aria-hidden="true" class="fa fa-flag"></i> <span class="mobiletext02">In</span>
                            </a> 
                            <a class="googleicon" href="<?php echo base_url()?>main/set_language/en" title="English" style="<?php if($l=='id')echo '';else echo 'background-color: #b94a48';?>">
                                <i aria-hidden="true" class="fa fa-flag"></i> <span class="mobiletext02">En</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="headerfull"> 
                    <!--Main Menu HTML Code-->
                    <div class="wsmain"> <a class="logo-basic-nav" href="<?php echo base_url(); ?>main/"><img alt="logo" class="img-responsive" src="<?php echo base_url() ?>assets/frontend/images/logo-GrahaMH.png"></a>
                        <nav class="wsmenu clearfix">
                            <ul class="mobile-sub wsmenu-list">
                                <!--            <li class="rightmenu">
                                              <form class="topmenusearch">
                                                <input placeholder="Search...">
                                                <button class="btnstyle"><i aria-hidden="true" class="searchicon fa fa-search"></i></button>
                                              </form>
                                            </li>-->
                                            <!--<li> <a href="#">Rooms <span class="arrow"></span></a>
                                              <ul class="wsmenu-submenu">
                                                <li> <a href="rooms.html"><i class="fa fa-angle-right"></i>All Rooms</a> </li>
                                                <li> <a href="rooms-alt.html"><i class="fa fa-angle-right"></i>All Rooms Two</a> </li>
                                                <li> <a href="room-single.html"><i class="fa fa-angle-right"></i>Single Room</a> </li>
                                                <li> <a href="#"><i class="fa fa-angle-right"></i>Third Level Navigation</a>
                                                  <ul class="wsmenu-submenu-sub">
                                                    <li> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 1</a> </li>
                                                    <li> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 2</a> </li>
                                                    <li> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 3</a> </li>
                                                    <li> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 4</a>
                                                      <ul class="wsmenu-submenu-sub-sub">
                                                        <li class=""> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 1 Sub</a> </li>
                                                        <li class=""> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 2 Sub</a> </li>
                                                        <li class=""> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 3 Sub</a> </li>
                                                        <li class=""> <a href="#"><i class="fa fa-angle-right"></i>Submenu item 4 Sub</a> </li>
                                                      </ul>
                                                    </li>
                                                  </ul>
                                                </li>
                                              </ul>
                                            </li>-->
                                <li> <a href="<?php //echo base_url()  ?>main/"><?php if($l=='id')echo 'Beranda';else echo 'Home';?></a> </li>
                                <li> <a href="<?php echo base_url() ?>main/room"><?php if($l=='id')echo 'Ruang Kantor';else echo 'Office Space';?></a> </li>
                                <li> <a href="<?php echo base_url() ?>main/facilities"><?php if($l=='id')echo 'Fasilitas';else echo 'Facilities';?></a> </li>
                    <!--            <li> <a href="#">Feature <span class="arrow"></span></a> 
                                    <ul class="wsmenu-submenu">
                                        <li> <a href="<?php // echo base_url()  ?>main/room">Office Space</a> </li>
                                        <li> <a href="<?php // echo base_url()  ?>main/facilities">Facilities</a> </li>
                                    </ul>
                                </li>-->
                                <li> <a href="<?php echo base_url() ?>main/gallery"><?php if($l=='id')echo 'Galeri';else echo 'Gallery';?></a> </li>
                                <li> <a href="#"><?php if($l=='id')echo 'Tentang Kami';else echo 'About Us';?><span class="arrow"></span></a> 
                                    <ul class="wsmenu-submenu">
                                        <li> <a href="<?php echo base_url() ?>main/about"><?php if($l=='id')echo 'Profil';else echo 'Profile';?></a> </li>
                                        <li> <a href="<?php echo base_url() ?>main/tenant"><?php if($l=='id')echo 'Penyewa';else echo 'Tenant';?></a> </li>
                                        <li> <a href="<?php echo base_url() ?>main/location"><?php if($l=='id')echo 'Lokasi';else echo 'Location';?></a> </li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo base_url(); ?>main/contact"><?php if($l=='id')echo 'Kontak';else echo 'Contact';?></a> </li>
                    <!--            <li> <a href="#">Features <span class="arrow"></span></a>
                                  <ul class="wsmenu-submenu">
                                    <li> <a href="#"><i class="fa fa-angle-right"></i>Headers</a>
                                      <ul class="wsmenu-submenu-sub">
                                        <li> <a href="index-default.html"><i class="fa fa-angle-right"></i>Slide Menu</a> </li>
                                        <li> <a href="index-two.html"><i class="fa fa-angle-right"></i>Slide Menu + Video</a> </li>
                                        <li> <a href="index-three.html"><i class="fa fa-angle-right"></i>Classic Menu</a> </li>
                                        <li> <a href="index-four.html"><i class="fa fa-angle-right"></i>Classic Menu + Video</a> </li>
                                      </ul>
                                    </li>
                                    <li> <a href="#"><i class="fa fa-angle-right"></i>Layouts</a>
                                      <ul class="wsmenu-submenu-sub">
                                        <li> <a href="index-five.html"><i class="fa fa-angle-right"></i>Exposed Reservation Top</a> </li>
                                        <li> <a href="index-six.html"><i class="fa fa-angle-right"></i>Exposed Reservation Footer</a> </li>
                                      </ul>
                                    </li>
                                    <li> <a href="<?php //echo base_url()  ?>main/gallery"><i class="fa fa-angle-right"></i>Galleries</a>
                                      <ul class="wsmenu-submenu-sub">
                                        <li> <a href="gallery-one.html"><i class="fa fa-angle-right"></i>Gallery One</a> </li>
                                        <li> <a href="gallery-two.html"><i class="fa fa-angle-right"></i>Gallery Two</a> </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>-->
                                <!--<li> <a class="reserve-classic" href="#" id="trigger-overlay">Reserve</a> </li>-->
                            </ul>
                        </nav>
                    </div>
                </div> <!--Menu HTML Code--> 
                <!-- INSERT RESERVATION MODAL / BUTTON --> 
                <!-- // Reservation-Modal -->
                <section class="section-reservation-modal"> 
                    <!-- /container --> 
                    <!-- open/close -->
                    <div class="overlay overlay-hugeinc">
                        <button class="overlay-close" type="button">Close</button>
                        <!-- content for modal -->
                        <form autocomplete="off" class="simform" id="theForm" name="theForm">
                            <div class="simform-inner">
                                <h1>Check Availability</h1>
                                <h3>You will receive an email when the reservation has been confirmed.</h3>
                                <div class="questions-wrapper">
                                    <ol class="questions">
                                        <li><span>
                                                <label for="q1">First and Last Name?</label>
                                            </span>
                                            <input id="q1" name="q1" type="text">
                                        </li>
                                        <li><span>
                                                <label for="q2">Email?</label>
                                            </span>
                                            <input id="q2" name="q2" type="text" data-validate="email">
                                        </li>
                                        <li><span>
                                                <label for="q3">Arrival?</label>
                                            </span>
                                            <input id="q3" name="date" placeholder="MM/DD/YYY" type="text"/>
                                        </li>
                                        <li><span>
                                                <label for="q4">Departure?</label>
                                            </span>
                                            <input id="q4" name="date" placeholder="MM/DD/YYY" type="text"/>
                                        </li>
                                        <li><span>
                                                <label for="q5">How many adults?</label>
                                            </span>
                                            <input id="q5" name="q5" type="text">
                                        </li>
                                        <li><span>
                                                <label for="q6">How many children?</label>
                                            </span>
                                            <input id="q6" name="q6" type="text">
                                        </li>
                                        <li><span>
                                                <label for="q7">Type of Room?</label>
                                            </span>
                                            <input id="q7" name="q7" type="text">
                                        </li>
                                        <li><span>
                                                <label for="q8">Special Requests?</label>
                                            </span>
                                            <input id="q8" name="q8" type="text">
                                        </li>
                                    </ol>
                                    <!-- /questions -->
                                    <button class="submit" type="submit">Send answers</button>
                                    <div class="controls">
                                        <button class="res-next"></button>
                                        <div class="progress"></div>
                                        <span class="number"><span class="number-current"></span> <span class="number-total"></span></span> <span class="error-message"></span> </div>
                                    <!-- / controls --> 
                                </div>
                                <!-- /simform-inner --> 
                            </div>
                            <span class="final-message"></span>
                        </form>
                        <!-- /simform --> 
                    </div>
                </section>
                <!-- // Reservation-Modal --> 
                <!-- //OVERLAY AND FORM --> 