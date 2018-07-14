<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_subsektoral_1" data-toggle="tab">
                    <div class="caption caption-md">
                        <i class="fa fa-link font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Social Media</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_subsektoral_1">
                <div class="row">
                    <?php if( !empty($_social_media_list) ){
                        foreach ($_social_media_list as $link): ?>
                            <div class="col-xs-1">
                                <a title="Web EBTKE" target="_blank"
                                   href="<?php echo $link->url ?>">
                                    <div class="text-center">
                                        <img title="<?php echo $link->name ?>"
                                             width="80%"
                                             alt="Web EBTKE"
                                             class="animated fadeIn"
                                             src="<?php echo base_url() ?>assets/uploads/gallery/<?php echo $link->image; ?>">
                                        <strong><small><span class="small" style="font-size: 10px"><?php echo $link->name; ?></span></small></strong>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach;
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>