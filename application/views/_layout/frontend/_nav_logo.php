<div class="page-header-menu-fixed page-header-top">
    <div class="container">
                
        <!-- BEGIN LOGO -->
        <div class="page-logo animated flipInX" style="margin-top: 0px;">
            <a id="img-logo" href="<?php echo base_url('/'); ?>">
                <img src="<?php echo base_url('assets/images/header-logo.png'); ?>"
                     alt="Logo"
                     class="logo-default animated fadeIn"
                     width="100%">
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler"></a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN TOP NAVIGATION MENU -->
        <?php $this->load->view('template3_header_righ_top_menu'); ?>
        <!-- END TOP NAVIGATION MENU -->
    </div>
</div>