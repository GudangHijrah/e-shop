<div class="page-head">
    <div class="container">
        <div class="page-title">
            <h1><?php echo $_berita->title; ?>
                <small><i class="icon-calendar font-blue-dark"></i>&nbsp;<span><?php echo $_tgl_berita; ?></span></small>
            </h1>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="<?php echo site_url('frontend/berita_list?category=' . $_category) ?>">Posting</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <strong><span><?php echo $_berita->title; ?></span></strong>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="blog-page blog-content-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-single-content bordered blog-container">
                            <div class="blog-single-head <?php echo $_berita->kode_category == 'pers' ? 'hidden' : ''; ?>">
                            </div>
                            <div class="blog-single-img animated zoomInUp <?php echo $_berita->kode_category == 'pers' ? 'hidden' : ''; ?>">
                                <div class="clearfix" style="width: 100%;">
                                    <div id="myCarouselx" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators hidden">
                                            <?php $carouselImages[] = (object)array('img1' => $_berita->hero_image, 'img2' => $_berita->hero_image2, 'img3' => $_berita->hero_image3);
                                            if (!empty($carouselImages)) { ?>
                                                <?php $i = 0;
                                                foreach ($carouselImages as $img):
                                                    if ($i == 0) { ?>
                                                        <li data-target="#myCarouselx" data-slide-to="0"
                                                            class="active"></li>
                                                    <?php } else { ?>
                                                        <li data-target="#myCarouselx"
                                                            data-slide-to="<?php echo $i; ?>"></li>
                                                    <?php } ?>
                                                    <?php $i++; endforeach; ?>
                                            <?php } ?>
                                        </ol>
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <?php if($_berita->hero_image !=null):?>
                                                    <a data-toggle="lightbox"
                                                       href="<?php echo asset_url('berita/' . $_berita->hero_image) ?>">
                                                        <img class="customCarouselImageSize"
                                                             src="<?php echo asset_url('berita/' . $_berita->hero_image) ?>">
                                                    </a>
                                                <?php else: ?>
                                                    <a data-toggle="lightbox"
                                                       href="<?php echo base_url('assets/images/carousel/no-carousel.png') ?>">
                                                        <img class="customCarouselImageSize"
                                                             src="<?php echo base_url('assets/images/carousel/no-carousel.png') ?>">
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="<?php echo $_berita->hero_image2 == null ? 'hidden' : 'item'; ?>">
                                                <a data-toggle="lightbox"
                                                   href="<?php echo asset_url('berita/' . $_berita->hero_image2); ?>">
                                                    <img class="customCarouselImageSize"
                                                         src="<?php echo $_berita->hero_image2 != NULL ?
                                                             asset_url('berita/' . $_berita->hero_image2) :
                                                             base_url('assets/images/default/no-image.jpg') ?>">
                                                </a>
                                            </div>
                                            <div class="<?php echo $_berita->hero_image3 == null ? 'hidden' : 'item'; ?>">
                                                <a data-toggle="lightbox"
                                                   href="<?php echo asset_url('berita/' . $_berita->hero_image3); ?>">
                                                    <img class="customCarouselImageSize"
                                                         src="<?php echo $_berita->hero_image3 != NULL ?
                                                             asset_url('berita/' . $_berita->hero_image3) :
                                                             base_url('assets/images/default/no-image.jpg') ?>">
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control hidden" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control hidden" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-single-desc">
                                <div class="no-padding">
                                    <p class="text-justify"><?php echo $_berita->content; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 hidden">
                        <div class="blog-single-sidebar bordered blog-container">
                            <?php $this->load->view('frontend/page_blog_sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>