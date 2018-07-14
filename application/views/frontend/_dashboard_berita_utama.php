<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_1_1" data-toggle="tab">
                    <div class="caption caption-md">
                        <i class="icon-badge font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Kabar Utama</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1_1">
                <?php if ($_berita_hero != null) { ?>
                    <div class="animated bounceInUp text-left">
                        <div class="cbp-item .xxx">
                            <div class="cbp-caption-defaultWrap">
                                <a href="<?php echo asset_url('berita/' . @$_berita_hero->hero_image) ?>"
                                   data-toggle="lightbox"
                                   data-gallery="example-gallery"
                                   data-type="image">
                                    <img src="<?php echo asset_url('berita/thumbs/' . @$_berita_hero->hero_image) ?>"
                                         width="70%" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: left;padding: 0px;">
                        <strong>
                            <a href="<?php echo site_url('berita/index?slug='. @$_berita_hero->slug.'&category='.@$_berita_hero->id_category); ?>"
                               class="title mt-content-body"><?php echo @$_berita_hero->title; ?></a>
                        </strong><br/>
                        <p class="muted small"><span><i class="fa fa-calendar"></i> &nbsp;
                                    <?php echo nama_hari(@$_berita_hero->post_date).', '.tgl_indo(@$_berita_hero->post_date); ?>
                            </span>
                        </p>
                    </div>
                    <div class="mt-content-body"><?php echo @$_berita_hero->resume_news; ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php if ($_berita_hero != null) { ?>
        <a title="Download Index" class="btn btn-default btn-sm"
           href="<?php echo site_url('frontend/berita_list?category=' . $_berita_hero->id_category) ?>">Selengkapnya
            <i class="fa fa-angle-double-right"></i></a>
    <?php } ?>
</div>