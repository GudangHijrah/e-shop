<div class="page-head">
    <div class="container">
        <div class="page-title">
            <h1>Media | <?php echo $_type == "foto" ? "Foto" : "Video" ?>
                <small></small>
            </h1>
        </div>
    </div>
</div>
<!-- END PAGE TITLE -->
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li><span>Media</span></li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <div class="page-content-inner">
            <div class="blog-page blog-content-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-single-content bordered blog-container">
                            <div class="blog-single-head hidden">
                                <h1 class="blog-single-head-title">
                                    <strong><?php echo $_type == "foto" ? "Galery Foto" : "Galery Video" ?></strong>
                                </h1>
                            </div>
                            <div class="blog-single-desc">
                                <?php
                                    if($_type == "foto"){
                                        $this->load->view('frontend/_dashboard_gallery');
                                    }else{
                                        $this->load->view('frontend/_dashboard_videos');
                                    }
                                ?>
                            </div>
                            <div class="blog-single-foot">
                                <ul class="blog-post-tags">
                                    <li class="uppercase">
                                        <a href="javascript:;">cat1</a>
                                    </li>
                                    <li class="uppercase">
                                        <a href="javascript:;">cat2</a>
                                    </li>
                                    <li class="uppercase">
                                        <a href="javascript:;">cat3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>