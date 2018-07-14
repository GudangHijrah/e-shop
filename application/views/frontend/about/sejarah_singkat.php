<div class="page-head">
    <div class="container">
        <div class="page-title">
            <h1><?php echo isset($_sejarah) && $_sejarah->title != null ? $_sejarah->title : "N/A Title"; ?>
                <small></small>
            </h1>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo site_url('/') ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Halaman</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Sejarah Singkat</span>
            </li>
        </ul>
        <div class="page-content-inner">
            <div class="blog-page blog-content-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-single-content bordered blog-container">
                            <div class="blog-img-thumb col-md-4">
                                <img width="100%" src="<?php echo asset_url('gallery/').$_sejarah->image ?>" />
                            </div>
                            <div class="blog-single-desc">
                                <?php if (isset($_sejarah)){
                                        echo $_sejarah->konten;} ?>
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