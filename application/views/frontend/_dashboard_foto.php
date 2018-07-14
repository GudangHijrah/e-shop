<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_1_1" data-toggle="tab">
                    <div class="caption caption-md">
                        <i class="icon-badge font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Galeri Foto</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1_1">
                <div class="row">
                    <div id="photoCarousel"
                         class="custom-carousel carousel slide col-md-12 col-sm-12 indicator"
                         data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php if (!empty($_gallery)) { ?>
                                <?php $i = 0;
                                foreach ($_gallery as $gal) {
                                    if ($i == 0) { ?>
                                        <li data-target="#photoCarousel" data-slide-to="0" class="active"></li>
                                    <?php } else { ?>
                                        <li data-target="#photoCarousel" data-slide-to="<?php echo $i; ?>"></li>
                                    <?php } ?>
                                    <?php $i++;
                                } ?>
                            <?php } else { ?>
                                <li data-target="#photoCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#photoCarousel" data-slide-to="1"></li>
                            <?php } ?>
                        </ol>
                        <div class="carousel-inner text-center">
                            <?php if (!empty($_gallery)) {
                                $i = 0;
                                foreach ($_gallery as $gal) {?>
                                    <div class="item <?php echo $i == 0 ? 'active' : ''; ?> galleryItem">
                                        <a href="<?php echo asset_url( $gal->id_berita == null ? 'berita/'.$gal->images : 'gallery/'.$gal->image_gf); ?>"
                                            data-toggle="lightbox"
                                            datatype="video">
                                            <img src="<?php echo asset_url( $gal->id_berita == null ? 'berita/thumbs/'.$gal->images : 'gallery/thumbs/'.$gal->image_gf); ?>"
                                                     alt="title" style="width:100%;left: auto;" class="img-fluid">
                                        </a>
                                        <div class="customCaption">
                                            <?php echo $gal->title_gallery == null ? $gal->title_berita : $gal->title_gallery; ?>
                                        </div>
                                    </div>
                                    <?php $i++;
                                } //end foreach
                            }//end if ?>
                        </div>
                        <a class="left carousel-control" style="margin-left: 15px;"
                           href="#photoCarousel"
                           data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" style="margin-right: 15px;"
                           href="#photoCarousel"
                           data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a title="Download Index"
       class="btn btn-default btn-sm"
       href="<?php echo site_url('medias/?type=foto') ?>">Selengkapnya <i class="fa fa-angle-double-right"></i></a>
</div>