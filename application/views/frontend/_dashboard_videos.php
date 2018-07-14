<?php $_type = "all" ?>
<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_gallery_foto" data-toggle="tab">
                    <div class="caption caption-md">
                        <i class="fa fa-video-camera font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Galeri Video</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="portfolio-content portfolio-2">
                <div id="js-filters-mosaic" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn green btn-outline uppercase"> All
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <?php foreach ($_category as $row):
                            if($row->type == 'video'):?>
                            <div data-filter=".<?php echo $row->kode; ?>" class="cbp-filter-item btn green btn-outline uppercase"> <?php echo $row->title; ?>
                                <div class="cbp-filter-counter"></div>
                            </div>
                    <?php endif;
                          endforeach ?>
                </div>
                <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                    <?php if(!empty($_gallery_video)):
                        foreach ($_gallery_video as $gal):?>
                            <div class="cbp-item <?php echo $gal->cat_kode; ?>">

                                <a href="<?php echo $gal->link_youtube; ?>"
                                   class="cbp-caption cbp-lightbox"
                                   data-title="<?php echo $gal->title ?: ''; ?>">

                                    <div class="cbp-caption-defaultWrap">
                                        <img src="<?php echo asset_url('gallery/thumbs/' . $gal->cover_image); ?>" alt=""> </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-title">
                                                    <!--<a href="<?php /*echo site_url('medias/?type=video'); */?>">-->
                                                        <small><?php echo $gal->title ?: ''; ?></small>
                                                    <!--</a>-->
                                                </div>
                                                <div class="cbp-l-caption-desc">by <?php echo 'Admin' ?: ''; ?></div>
                                            </div>
                                        </div>
                                    </div>

                                </a>

                                <!--<div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <a href="<?php /*echo 'https://www.youtube.com/watch?v=Zr80ZFttcZg&list=RDMMZr80ZFttcZg'; */?>"
                                           class="cbp-lightbox"
                                           data-title="<?php /*echo $gal->title?:"Unknown"; */?>">
                                            <img src="<?php /*echo asset_url('gallery/thumbs/'.$gal->cover_image); */?>"
                                                 alt="<?php /*echo $gal->title ?: '';*/?>" width="100%">
                                        </a>
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="<?php /*echo site_url('medias/?type=video'); */?>"
                                                   class="_cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase"
                                                   rel="nofollow">selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>