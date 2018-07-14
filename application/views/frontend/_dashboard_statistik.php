<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_statistik" data-toggle="tab">
                    <div class="caption caption-md">
                        <span class="caption-subject font-black-steel bold uppercase">Statistik</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_statistik">
                <div class="row">
                    <div class="col-xs-12" style="padding: 0;">
                        <div id="statistikCarousel"
                             class="custom-carousel carousel slide col-md-12 col-sm-12 indicator"
                             data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php if (!empty($_statistik)) { ?>
                                    <?php $i = 0;
                                    foreach ($_statistik as $gal) {
                                        if ($i == 0) { ?>
                                            <li data-target="#statistikCarousel" data-slide-to="0" class="active"></li>
                                        <?php } else { ?>
                                            <li data-target="#statistikCarousel" data-slide-to="<?php echo $i; ?>"></li>
                                        <?php } ?>
                                        <?php $i++;
                                    } ?>
                                <?php } else { ?>
                                    <li data-target="#statistikCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#statistikCarousel" data-slide-to="1"></li>
                                <?php } ?>
                            </ol>
                            <div class="carousel-inner text-center">
                                <?php if (!empty($_statistik)) {
                                    $i = 0;
                                    foreach ($_statistik as $gal) {?>
                                        <div class="item <?php echo $i == 0 ? 'active' : ''; ?> galleryItem">
                                            <div class="btn btn-default" style="position: absolute;display: block;">
                                                <span>
                                                    <i class="fa fa-save"></i>
                                                    <!-- <a href="<?php echo $gal->file_download; ?>">Download</a> -->
                                                    <a href="<?php echo $gal->file; ?>">Download</a>
                                                </span>
                                            </div>
                                            <!-- <a href="<?php echo asset_url('gallery/'.$gal->image); ?>" -->
                                            <a href="<?php echo asset_url('gallery/'.$gal->hero_image); ?>"
                                               data-toggle="lightbox"
                                               datatype="image_statistik">
                                                <img src="<?php echo asset_url('gallery/thumbs/'.$gal->hero_image); ?>"
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
                               href="#statistikCarousel"
                               data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" style="margin-right: 15px;"
                               href="#statistikCarousel"
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
       href="<?php echo site_url('frontend/download_index?kode_category=statistik'); ?>">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
</div>