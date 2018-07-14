<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <strong>Searching</strong>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <!-- BEGIN : OVERLAY -->
            <div class="row">
                <?php
                if( !empty($_beritas) ){
                    foreach ($_beritas as $berita){?>
                        <div class="animated bounceIn">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="portlet light portlet-fit ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-doc font-blue-dark"></i>
                                            <span class="caption-subject font-blue-dark bold uppercase"><?php echo $berita->title ?></span>
                                            <div class="caption-desc font-grey-cascade">
                                                <?php echo $berita->title ?>
                                                <div><small><i class="glyphicon glyphicon-calendar"><?php echo $berita->created_date != '' ? $berita->created_date : '01/01/2017'; ?></i></small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-overlay">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mt-overlay-6">
                                                        <img src="<?php echo base_url('assets/pages/img/page_general_search/3.jpg') ?>" />
                                                        <div class="mt-overlay">
                                                            <h2><?php echo $berita->title ?></h2>
                                                            <p>
                                                                <a class="mt-info uppercase btn default btn-outline" href="#">Lebih Lanjut</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <!-- END : OVERLAY -->
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->