<div class="page-head">
    <div class="container">
        <div class="page-title">
            <h1><?php echo isset($_struktur_organisasi) && $_struktur_organisasi->title != null ? $_struktur_organisasi->title : "N/A Title"; ?>
                <small></small>
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
                <a href="#">Halaman</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Struktur Organisasi</span>
            </li>
        </ul>
        <div class="page-content-inner">
            <div class="blog-page blog-content-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-single-content bordered blog-container">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div>
                                    <div class="magnify">
                                        <div class="large"></div>
                                        <a href="<?php echo asset_url('struktur_organisasi/').$_struktur_organisasi->hero_image?>"
                                           data-toggle="lightbox"
                                           data-gallery="example-gallery"
                                           data-type="image"
                                           data-title="<?php echo $_struktur_organisasi->title; ?>">
                                            <img class="small" width="550px"
                                                 alt="<?php echo $_struktur_organisasi->title; ?>"
                                                 title="<?php echo $_struktur_organisasi->title; ?>"
                                                 src="<?php echo asset_url('struktur_organisasi/').$_struktur_organisasi->hero_image?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-single-foot">
                                <ul class="blog-post-tags">
                                    <li class="uppercase">
                                        <a href="javascript:;">cat1</a>
                                    </li>
                                    <li class="uppercase">
                                        <a href="javascript:;">cat2</a>
                                    </li>
                                    <li class="uppercase">
                                        <a href="javascript:;">cat3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>