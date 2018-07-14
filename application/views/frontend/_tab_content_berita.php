<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <!-- START TAB CAPTION -->
            <li class="active">
                <a href="#tabContentBerita" data-toggle="tab">
                    <div class="caption caption-md text-left">
                        <i class="icon-bar-chart font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Posting</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tabContentBerita">
                <div class="itemListIn">
                    <?php
                    $iteration = 0;
                    foreach ($_berita as $row) {
                        if ($row->kode != 'pers' && $iteration < 5) { ?>
                            <div class="row" style="padding-bottom: 5px">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <a href="<?php echo $row->hero_image != NULL ? asset_url('berita/' . $row->hero_image) : base_url('assets/images/default/no-image.jpg') ?>"
                                       data-toggle="lightbox"
                                       data-gallery=""
                                       data-type="image"
                                       data-title="<?php echo $row->title; ?>">
                                        <img width="100%" class="img-polaroid"
                                             alt="<?php echo $row->title; ?>"
                                             title="<?php echo $row->title; ?>"
                                             src="<?php echo $row->hero_image != NULL ? asset_url('berita/thumbs/' . $row->hero_image) : base_url('assets/images/default/no-image.jpg') ?>">
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8 no-padding-left" style="text-align: left;">
                                    <strong><a class="text-left"
                                               href="<?php echo site_url('berita/index?slug='. $row->slug.'&category='.$row->id_category); ?>">
                                            <?php echo $row->title; ?>
                                        </a></strong>
                                    <p class="muted small">
                                        <span><i class="fa fa-calendar"></i> &nbsp;
                                            <?php echo nama_hari($row->post_date).', '.tgl_indo($row->post_date); ?>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <?php
                            $iteration++;
                        }
                    }; ?>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</div>