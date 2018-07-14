<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab_subsektoral_1" data-toggle="tab">
                    <div class="caption caption-md">
                        <i class="fa fa-link font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Link Terkait</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_subsektoral_1">
                <div class="row">
                    <?php if( !empty($_link_terkait_list) ){
                        foreach ($_link_terkait_list as $link): ?>
                            <div class="col-xs-1">
                                <a title="Web EBTKE" target="_blank"
                                   href="<?php echo $link->url ?>">
                                    <img title="<?php echo $link->name ?>"
                                         alt="Web EBTKE"
                                         class="animated fadeIn"
                                         src="<?php echo base_url() ?>assets/uploads/link_terkait/<?php echo $link->image; ?>">
                                </a>
                            </div>
                        <?php endforeach;
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>