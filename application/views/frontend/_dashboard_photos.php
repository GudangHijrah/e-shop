<?php
$_type = "all"
?>
<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_gallery_foto" data-toggle="tab">
                    <div class="caption caption-md">
                        <i class="fa fa-file-text-o font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Gallery Foto</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="portfolio-content portfolio-3">
                <!------START FILTERING-->
                <div class="clearfix">
                    <div id="js-filters-lightbox-gallery2" class="cbp-l-filters-button cbp-l-filters-left">
                        <div data-filter="*"
                             class="cbp-filter-item-active cbp-filter-item btn blue btn-outline uppercase">All
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <?php foreach ($_category as $row):
                            /*if ($row->type == 'text'):*/ ?>
                            <div data-filter=".<?php echo $row->kode; ?>"
                                 class="cbp-filter-item btn blue btn-outline uppercase"><?php echo $row->title; ?>
                                <div class="cbp-filter-counter"></div>
                            </div>
                        <?php /*endif;*/
                        endforeach ?>
                    </div>
                </div>
                <!----START THE CONTENT-->
                <div id="js-grid-lightbox-gallery" class="cbp">
                    <?php if (!empty($_gallery_foto)):
                        foreach ($_gallery_foto as $gal):
                            if ($gal->type == "header"):
                                $link_image = asset_url('gallery/' . $gal->image) ?>
                                <div class="cbp-item <?php echo $gal->cat_kode; ?>">
                                    <a href="<?php echo site_url('frontend/gallery_foto_detail/?id=' . $gal->id);
                                    /*base_url('assets/global/plugins/cubeportfolio/ajax/project4.php?title=' . $gal->title
                                    . '&image=' . $link_image
                                    . '&listImage=' . '-'
                                    . '&desc=' . strip_tags($gal->description)); */
                                    ?>"
                                       class="cbp-caption cbp-singlePageInline"
                                       data-title="<?php echo $gal->title ?><br>by Paul Flavius Nechita"
                                       rel="nofollow">

                                        <div class="cbp-caption-defaultWrap">
                                            <img src="<?php echo asset_url('gallery/thumbs/' . $gal->image); ?>" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignLeft">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title"><?php echo $gal->title; ?></div>
                                                    <div class="cbp-l-caption-desc">by <?php echo 'by admin'; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif;
                        endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>