<div id="navigation">
    <!-- Navigation Menu-->
    <ul class="navigation-menu">
        <li class="">
            <a href="#home">Home</a>
        </li>
        <li class="">
            <?php if($_settings->on_features==1): ?>
                <a href="#features">
                    <?php if($_settings->on_features==1){echo $_settings->on_features_title==null?'n/a':strtoupper($_settings->on_features_title);} ?>
                </a>
            <?php endif; ?>
        </li>
        <li class="">
            <?php if($_settings->on_service==1): ?>
                <a href="#service">
                    <?php if($_settings->on_service==1){echo $_settings->on_service_title==null?'n/a':strtoupper($_settings->on_service_title);} ?>
                </a>
            <?php endif; ?>
        </li>
        <li class="">
            <?php if($_settings->on_client==1): ?>
                <a href="#client">
                    <?php if($_settings->on_client==1){echo $_settings->on_client_title==null?'n/a':strtoupper($_settings->on_client_title);} ?>
                </a>
            <?php endif; ?>
        </li>
        <li class="">
            <?php if($_settings->on_team==1): ?>
                <a href="#team">
                    <?php if($_settings->on_team==1){echo $_settings->on_team_title==null?'n/a':strtoupper($_settings->on_team_title);} ?>
                </a>
            <?php endif; ?>
        </li>
        <li class="">
            <?php if($_settings->on_pricing==1): ?>
                <a href="#pricing">
                    <?php if($_settings->on_pricing==1){echo $_settings->on_pricing_title==null?'n/a':strtoupper($_settings->on_pricing_title);} ?>
                </a>
            <?php endif; ?>
        </li>
        <li class="">
            <?php if($_settings->on_contact==1): ?>
                <a href="#contact">
                    <?php if($_settings->on_contact==1){echo $_settings->on_contact_title==null?'n/a':strtoupper($_settings->on_contact_title);} ?>
                </a>
            <?php endif; ?>
        </li>
        <li class="">
            <a href="<?php echo site_url('/')?>" class="text-uppercase">Satuqolbu</a>
        </li>
    </ul>
</div>