<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Visi Misi</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->

        <div class="page-header noPadding">
            <h3 class="page-title"><strong>Visi & Misi</strong></h3>
            <hr>
        </div>

        <div class="page-content-inner">
            <div class="mt-content-body">
                <p><?php echo isset($_visi_misi) ? $_visi_misi->header : ""; ?></p>
                <?php echo isset($_visi_misi) ? $_visi_misi->konten_visi : ""; ?>
                <?php echo isset($_visi_misi) ? $_visi_misi->konten_misi : ""; ?>
            </div>
        </div>
    </div>
</div>