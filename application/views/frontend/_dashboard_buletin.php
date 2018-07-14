<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_buletin" data-toggle="tab">
                    <div class="caption caption-md">
                        <span class="caption-subject font-black-steel bold uppercase">Buletin</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_buletin">
                <div class="row">
                    <div class="col-xs-7" style="padding: 0;">
                        <div id="buletinCarousel"
                             class="custom-carousel carousel slide col-md-12 col-sm-12 indicator"
                             data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php if (!empty($_buletins)) { ?>
                                    <?php $i = 0;
                                    foreach ($_buletins as $gal) {
                                        if ($i == 0) { ?>
                                            <li data-target="#buletinCarousel" data-slide-to="0" class="active"></li>
                                        <?php } else { ?>
                                            <li data-target="#buletinCarousel" data-slide-to="<?php echo $i; ?>"></li>
                                        <?php } ?>
                                        <?php $i++;
                                    } ?>
                                <?php } else { ?>
                                    <li data-target="#buletinCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#buletinCarousel" data-slide-to="1"></li>
                                <?php } ?>
                            </ol>
                            <div class="carousel-inner text-center">
                                <?php if (!empty($_buletins)) {
                                    $i = 0;
                                    foreach ($_buletins as $gal) {?>
                                        <div class="item <?php echo $i == 0 ? 'active' : ''; ?> galleryItem">
                                            <a href="<?php echo asset_url('buletin/'.$gal->hero_image); ?>"
                                               data-toggle="lightbox">
                                                <img src="<?php echo asset_url('buletin/'.$gal->hero_image); ?>"
                                                     alt="title" style="width:100%;left: auto;" class="img-fluid">
                                            </a>
                                            <div class="customCaption">
                                                <?php echo $gal->title; ?>
                                            </div>
                                        </div>
                                        <?php $i++;
                                    } //end foreach
                                }//end if ?>
                            </div>
                            <a class="left carousel-control" style="margin-left: 15px;"
                               href="#buletinCarousel"
                               data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" style="margin-right: 15px;"
                               href="#buletinCarousel"
                               data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a title="Selengkapnya" class="btn btn-default btn-sm"
       href="<?php echo site_url('frontend/buletin') ?>">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
</div>