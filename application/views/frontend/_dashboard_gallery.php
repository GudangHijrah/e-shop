<?php
$_type = "all";
?>
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
                         class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> <?php echo $_type; ?>
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <?php foreach ($_category as $row):
                        if ($row->type == 'photo'):?>
                            <div data-filter=".<?php echo $row->kode; ?>"
                                 class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> <?php echo $row->title; ?>
                                <div class="cbp-filter-counter"></div>
                            </div>
                        <?php endif;
                    endforeach ?>
                </div>
                <div id="js-grid-juicy-projects" class="cbp">
                    <?php if (!empty($_gallery_foto)):
                        foreach ($_gallery_foto as $gal):
                            if ($gal->type != "header"):?>
                                <div class="cbp-item <?php echo $gal->cat_kode; ?>">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <a href="<?php echo asset_url('gallery/' . $gal->image); ?>"
                                               class="cbp-lightbox"
                                               data-title="<?php echo $gal->title ?: "Unknown"; ?>">
                                                <img src="<?php echo asset_url('gallery/thumbs/' . $gal->image); ?>"
                                                     alt="<?php echo $gal->title ?: ''; ?>" width="100%">
                                            </a>
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <a href="<?php echo site_url('medias/?type=foto'); ?>"
                                                       class="_cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase"
                                                       rel="nofollow">selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>