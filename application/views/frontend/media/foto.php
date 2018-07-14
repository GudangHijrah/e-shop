<div class="page-head">
    <div class="container">
        <div class="page-title">
            <h1>Media | Foto
                <small></small>
            </h1>
        </div>
    </div>
</div>
<!-- END PAGE TITLE -->
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li><span>Media</span></li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <div class="page-content-inner">
            <div class="blog-page blog-content-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-single-content bordered blog-container">
                            <div class="blog-single-head hidden">
                                <h1 class="blog-single-head-title">
                                    <strong>Galery Foto</strong>
                                </h1>
                            </div>
                            <div class="blog-single-desc">
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_gallery_foto" data-toggle="tab">
                                                    <div class="caption caption-md">
                                                        <i class="icon-camera font-dark"></i>
                                                        <span class="caption-subject font-black-steel bold uppercase">Galeri Foto</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="portfolio-content portfolio-1">
                                                <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                                                    <div data-filter="*"
                                                         class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase">
                                                        Foto
                                                        <div class="cbp-filter-counter"></div>
                                                    </div>
                                                    <?php foreach ($_category as $row): ?>
                                                        <div data-filter=".<?php echo $row->kode; ?>"
                                                             class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> <?php echo $row->title; ?>
                                                            <div class="cbp-filter-counter"></div>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                                <div id="js-grid-juicy-projects" class="cbp">
                                                    <?php if (!empty($_fotos)):
                                                        foreach ($_fotos as $gal): ?>
                                                            <div class="cbp-item <?php echo $gal->kode; ?>">
                                                                <div class="cbp-caption">
                                                                    <div class="cbp-caption-defaultWrap">
                                                                        <a href="<?php echo asset_url('gallery/' . $gal->image); ?>"
                                                                           class="cbp-lightbox"
                                                                           data-title="<?php echo $gal->title ?: "Unknown"; ?>">
                                                                            <img src="<?php echo asset_url('gallery/thumbs/' . $gal->image); ?>"
                                                                                 alt="<?php echo $gal->title ?: ''; ?>"
                                                                                 width="100%">
                                                                        </a>
                                                                    </div>
                                                                    <div class="cbp-caption-activeWrap">
                                                                        <div class="cbp-l-caption-alignCenter">
                                                                            <div class="cbp-l-caption-body">
                                                                                <a href="#"
                                                                                   class="_cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase"
                                                                                   rel="nofollow"><?php echo tgl_indo(date('Y-m-d', strtotime($gal->created_date))); ?></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;
                                                    endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--PAGINATION-->
                            <div class="search-pagination">
                                <ul class="pagination animated fadeIn">
                                    <?php echo @$links; ?>
                                </ul>
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