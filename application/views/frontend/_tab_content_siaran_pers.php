<?php foreach ($_berita as $row) {
    if ($row->kode == 'pers') {?>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <a href="<?php echo base_url('assets/images/default/no-image.jpg')?>"
                   data-toggle="lightbox"
                   data-gallery="example-gallery"
                   data-type="image"
                   data-title="<?php echo $row->title; ?>">
                    <img width="100%"
                         alt="<?php echo $row->title; ?>"
                         title="<?php echo $row->title; ?>"
                         src="<?php echo base_url('assets/images/default/no-image.jpg')?>">
                </a>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8 no-padding-left" style="text-align: left;">
                <strong>
                    <a class="text-left" href="<?php echo site_url('berita/index?slug='. $row->slug.'&category='.$row->id_category); ?>">
                    <?php echo $row->title; ?></a>
                </strong>
                <p class="muted small"><span><i class="fa fa-calendar"></i> &nbsp;<?php echo $row->post_date; ?></span></p>
            </div>
        </div>

    <?php }
}; ?>
<hr/>