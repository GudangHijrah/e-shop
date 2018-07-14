<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <div class="row">
            <div class="col-sm-12 portfolio-tile">
                <a href="<?php echo @$_GET['image']; ?>" class="cbp-lightbox">
                    <img src="<?php echo @$_GET['image']; ?>" alt=""> 
                </a>
            </div>
        </div>
    </div>
    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title"><?php echo @$_GET['title'] ?></div>
        <div class="cbp-l-inline-subtitle">by <?php echo @$_GET['author'] ?></div>
        <div class="cbp-l-inline-desc"><p><?php echo @$_GET['desc'] ?></p></div>
    </div>
</div>