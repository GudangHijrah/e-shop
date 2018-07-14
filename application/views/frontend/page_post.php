<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="<?php echo site_url('frontend/berita_list?category='.$_category) ?>">Berita</a>
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
                    <div class="col-lg-12">
                        <div class="blog-single-content bordered blog-container">
                            <div class="blog-single-head">
                                <h1 class="blog-single-head-title"><?php echo $_berita->title;?></h1>
                                <div class="blog-single-head-date">
                                    <i class="icon-calendar font-blue"></i>
                                    <small><a href="javascript:;"><?php echo $_tgl_berita;?></a></small>
                                </div>
                            </div>
                            <div class="blog-single-img animated zoomIn">
                                <img src="<?php echo $_berita->hero_image != NULL ? asset_url('berita/' . $_berita->hero_image) : base_url('assets/images/default/no-image.jpg') ?>" /> </div>
                            <div class="blog-single-desc">
                                <p><?php echo $_berita->content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>