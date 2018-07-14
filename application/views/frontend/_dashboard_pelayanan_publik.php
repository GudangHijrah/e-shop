<ul class="nav nav-tabs">
    <li class="active">
        <a href="#tab_15_1" data-toggle="tab">
            <div class="caption caption-md">
                <i class="icon-bar-chart font-dark"></i>
                <span class="caption-subject font-black-steel bold uppercase">Pelayanan Publik</span>
            </div>
        </a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="tab_15_1">
        <div class="panel" style="max-height: 450px; overflow: scroll;overflow-x: hidden;">
            <?php foreach ($_pelayanan_publik as $row):
                $urlx = '';
                $target = '';
                if( $row->external_url != null && $row->external_url != ' ' ){
                    $urlx = $row->external_url;
                    $target = '_blank';
                }else{
                    $urlx = site_url($row->url);
                    $target = '_self';
                } ?>
                <a href="<?php echo $urlx; ?>" target="<?php echo $target; ?>">
                    <img width="220px"
                         alt="<?php echo $row->name ?>"
                         title="<?php echo $row->name ?>"
                         class=""
                         src="<?php echo asset_url('pelayanan_publik/').$row->image; ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>