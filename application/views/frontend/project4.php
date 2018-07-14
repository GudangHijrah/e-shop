<?php ?>
<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <?php
                if ($_gallery_album != null):
                    foreach ($_gallery_album as $gal):
                        if ($gal->id_gallery != 0):?>
                            <li class="cbp-slider-item">
                                <a href="<?php echo asset_url('gallery/' . @$gal->image); ?>" class="cbp-lightbox">
                                    <img src="<?php echo asset_url('gallery/thumbs/' . @$gal->image); ?>" alt=""> </a>
                            </li>
                        <?php elseif ($gal->type=='header'): ?>
                            <li class="cbp-slider-item">
                                <a href="<?php echo asset_url('gallery/' . @$gal->image); ?>" class="cbp-lightbox">
                                    <img src="<?php echo asset_url('gallery/thumbs/' . @$gal->image); ?>" alt=""> </a>
                            </li>
                        <?php endif;
                    endforeach;
                endif; ?>
            </ul>
        </div>
    </div>
    <div class="cbp-l-inline-right">
        <?php
        if ($_gallery_album != null):
            foreach ($_gallery_album as $gal):
                if ($gal->id_gallery == 0):?>
                    <div class="cbp-l-inline-title"><?php echo $gal->title; ?></div>
                    <div class="cbp-l-inline-subtitle">by Admin</div>
                    <div class="cbp-l-inline-desc"><?php echo $gal->description ?></div>
                <?php elseif ($gal->type=='header'): ?>
                    <div class="cbp-l-inline-title"><?php echo $gal->title; ?></div>
                    <div class="cbp-l-inline-subtitle">by Admin</div>
                    <div class="cbp-l-inline-desc"><?php echo $gal->description ?></div>
                <?php endif;?>
            <?php endforeach;
        endif; ?>
    </div>
</div>