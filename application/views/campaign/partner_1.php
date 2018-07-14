<?php
$_header = array();
$_detail = array();
$_person = '';
foreach ($_partner as $partner):
    if ($partner->type == '1_header') {
        $_header = $partner;
    } elseif ($partner->type == '2_detail') {
        $_detail = $partner;
    }?>
<?php endforeach;
?>

<section class="home-height-half" id="home">
    <div class="bg-overlay-gredient"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h6 class="home-title text-white">السلام عليكم<br><small>Satuqolbu Partnership<br><?php echo @$_header->nama; ?></small></h6>
                        <p class="pt-4 home-sub-title text-white mx-auto"><?php echo strip_tags(@$_header->title);//alamat?></p>
                        <div class="watch-video pt-4">
                            <?php if(@$_detail->video != null): ?>
                                <a href="<?php echo @$_detail->video ?>" class="video-play-icon text-white">
                                    <i class="mdi mdi-play play-icon-circle play play-iconbar"></i>
                                    <span>Watch The Video!</span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($_settings->on_features == 1): ?>
    <section id="features" class="section hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2><?php echo @$_settings->on_features_title == null ? 'n/a' : @$_settings->on_features_title; ?></h2>
                        <span class="title-border"><i class="mdi mdi-set-none"></i></span>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4 vertical-content">
                <div class="col-lg-6 mt-2">
                    <div>
                        <img src="<?php echo asset_url('gallery/'.@$_header->image) ?>" alt=""
                             class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-6 mt-2 text-center">
                    <div class="features-desc">
                        <h2>Sejarah Kerjasama</h2>
                        <div class="features-border mx-auto mt-3"></div>
                        <p class="text-muted mt-3"><?php echo strip_tags(@$_detail->deskripsi); ?></p>
                        <!--<a href="#" class="">Read more<i class="mdi mdi-chevron-right"></i></a>-->
                    </div>
                </div>
            </div>
            <div class="row mt-5 vertical-content">
                <div class="col-lg-6 mt-2">
                    <div class="features-desc text-center">
                        <h2>Program Unggulan</h2>
                        <div class="features-border mx-auto mt-3"></div>
                        <p class="text-muted mt-3"><?php echo @$_detail->deskripsi_2 ?></p>
                        <!--<a href="#" class="">Read more<i class="mdi mdi-chevron-right"></i></a>-->
                    </div>
                </div>
                <div class="col-lg-6 mt-2">
                    <div>
                        <img src="<?php echo asset_url('gallery/'.@$_detail->image_dt2) ?>" alt=""
                             class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!--<section class="pt-5 pb-5 bg-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-white critarea-desc mt-3 mb-3">
                Become a part of Linexon bussiness community today
            </div>
            <div class="col-md-3 mt-3 mb-3 text-md-right">
                <a href="#" class="btn btn-outline-custom">Get Started</a>
            </div>
        </div>
    </div>
</section>-->

<!--About section-->
<?php if ($_settings->on_service == 1): ?>
    <section id="service" class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2><?php echo $_settings->on_service_title == null ? 'n/a' : $_settings->on_service_title; ?></h2>
                        <span class="title-border"><i class="mdi mdi-set-none"></i></span>
                    </div>
                </div>
            </div>
            <div class="row pt-4 mt-4">
                <?php foreach (@$_partner as $gal):
                    if ($gal->type == '4_gallery'):?>
                        <div class="col-lg-4 mt-3">
                            <a href="#" style="color: black;">
                                <div class="service-box clearfix p-4">
                                    <div class="service-icon service-left"><i class="mbri-features"></i></div>
                                    <div class="service-desc service-left">
                                        <h4><?php echo @$gal->nama ?></h4>
                                        <p class="text-muted mb-0"><?php echo @$gal->deskripsi;?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php endif; endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- TESTIMONIALS -->
<?php if ($_settings->on_client == 1): ?>
    <section class="section bg-light" id="client">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2><?php echo $_settings->on_client_title == null ? 'n/a' : $_settings->on_client_title; ?></h2>
                        <span class="title-border"><i class="mdi mdi-set-none"></i></span>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-box text-center">
                        <h1><i class="mdi mdi-format-quote-open text-muted"></i></h1>
                        <h4> It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less.</h4>
                        <div class="mt-3 mb-3">
                            <img src="<?php echo base_url('assets/campaign/images/user-1.png') ?>"
                                 class="mx-auto d-block rounded-circle img-fluid" alt="testimonials-user">
                        </div>
                        <p class="text-muted testi-work mb-1">- Landing page User</p>
                        <p class="text-muted">
                            <span class="mdi mdi-star text-warning"></span>
                            <span class="mdi mdi-star text-warning"></span>
                            <span class="mdi mdi-star text-warning"></span>
                            <span class="mdi mdi-star text-warning"></span>
                            <span class="mdi mdi-star text-warning"></span>
                        </p>
                    </div>

                </div> <!-- col -->
            </div> <!-- row -->

            <div class="row pt-4 mt-4">
                <div class="col-sm-12">
                    <div class="owl-carousel client-images text-center" id="clients-slider">
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/1.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/2.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/3.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/4.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/5.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/6.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/7.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->

                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/1.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/2.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/3.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/4.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/5.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/6.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                        <div class="item">
                            <div class="">
                                <img src="<?php echo base_url('assets/campaign/images/clients/7.png') ?>"
                                     alt="logo-img">
                            </div>
                        </div> <!-- slider item -->
                    </div>
                    <!-- End slider -->
                </div>
            </div>
        </div><!-- end container -->
    </section>
<?php endif; ?>
<!-- end TESTIMONIALS -->

<?php if ($_settings->on_team == 1): ?>
    <section class="section" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2><?php echo $_settings->on_team_title == null ? 'n/a' : $_settings->on_team_title; ?></h2>
                        <span class="title-border"><i class="mdi mdi-set-none"></i></span>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <?php foreach ($_partner as $partner):
                    if ($partner->type == '3_person'):?>
                    <div class="col-lg-3 mt-3">
                        <div class="team-box p-4">
                            <div class="team-img">
                                <img src="<?php echo asset_url('gallery/'.$partner->image) ?>" alt=""
                                     class=" mx-auto d-block rounded-circle" height="124">
                            </div>
                            <div class="team-desc text-center mt-5">
                                <h6 class="team-name text-uppercase text-custom mb-1"><?php echo $partner->nama?></h6>
                                <p class="team-work text-muted"><?php echo strtoupper($partner->title)?></p>
                            </div>
                            <ul class="list-inline team-social mt-4 mb-0 text-center">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-google"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endif; endforeach;?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($_settings->on_pricing == 1): ?>
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2><?php echo $_settings->on_pricing_title == null ? 'n/a' : $_settings->on_pricing_title; ?></h2>
                        <span class="title-border"><i class="mdi mdi-set-none"></i></span>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4 mt-3">
                    <div class="pricing-box bg-white text-center p-4">
                        <div class="plan-title mt-3 mb-4">
                            <h5 class="mb-0">Free</h5>
                        </div>
                        <div class="plan-price">
                            <h6>$0<span>/m</span></h6>
                        </div>
                        <div class="plan-features mt-4 mb-4">
                            <p>Bandwidth: 1GB</p>
                            <p>Onlinespace: 50MB</p>
                            <p>Support: No</p>
                            <p>-</p>
                            <p class="mb-0">-</p>
                        </div>
                        <div class="mb-4">
                            <a href="#" class="btn btn-custom">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="pricing-box bg-white text-center p-4">
                        <div class="plan-title mt-3 mb-4">
                            <h5 class="mb-0">Economy</h5>
                        </div>
                        <div class="plan-price">
                            <h6>$19<span>/m</span></h6>
                        </div>
                        <div class="plan-features mt-4 mb-4">
                            <p>Bandwidth: 1GB</p>
                            <p>Onlinespace: 50MB</p>
                            <p>Support: No</p>
                            <p>5 Domain</p>
                            <p class="mb-0">-</p>
                        </div>
                        <div class="mb-4">
                            <a href="#" class="btn btn-custom">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="pricing-box bg-white text-center p-4">
                        <div class="plan-title mt-3 mb-4">
                            <h5 class="mb-0">Deluxe</h5>
                        </div>
                        <div class="plan-price">
                            <h6>$29<span>/m</span></h6>
                        </div>
                        <div class="plan-features mt-4 mb-4">
                            <p>Bandwidth: 1GB</p>
                            <p>Onlinespace: 50MB</p>
                            <p>Support: No</p>
                            <p>10 Domain</p>
                            <p class="mb-0">No Hidden Fees</p>
                        </div>
                        <div class="mb-4">
                            <a href="#" class="btn btn-custom">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- CONTACT FORM START-->
<?php if ($_settings->on_contact == 1): ?>
    <section class="section " id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2><?php echo $_settings->on_contact_title == null ? 'n/a' : $_settings->on_contact_title; ?></h2>
                        <span class="title-border"><i class="mdi mdi-set-none"></i></span>
                    </div>
                </div>
            </div>
            <div class="custom-form mt-4 pt-4">
                <div id="message"></div>
                <form method="post" action="<?php echo base_url('assets/campaign/php/contact.php') ?>"
                      name="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" id="name" type="text" class="form-control"
                                       placeholder="Your name...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input name="email" id="email" type="email" class="form-control"
                                       placeholder="Your email...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Your Subject.."/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="comments">Message</label>
                                <textarea name="comments" id="comments" rows="4" class="form-control"
                                          placeholder="Your message..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-custom"
                                   value="Send Message">
                            <div id="simple-msg"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- CONTACT FORM END-->

<?php
$imageList = '';
foreach ($_partner as $row):
    if ($row->type == '4_gallery' && $row->status == 'bg'):
        $imageList .= '"' . asset_url("gallery/" . $row->image) . '",';
    endif; ?>
<?php endforeach;
$imageList = rtrim($imageList, ','); ?>

<script>
    $.backstretch([<?php echo $imageList; ?>], {
        duration: 3000,
        fade: 750
    });
</script>