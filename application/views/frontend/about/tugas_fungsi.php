<div>
    <!--<div class="page-head hidden">
        <div class="container"><div class="page-title"><h1>Dashboard<small></small></h1></div></div>
    </div>-->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMBS -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="<?php echo site_url('/') ?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Tugas & Fungsi</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMBS -->

            <div class="page-header noPadding">
                <h3 class="page-title"><strong>Tugas & Fungsi</strong></h3>
                <hr>
            </div>

            <div class="page-content-inner">
                <div class="mt-content-body-leftText">
                    <div class="profile-custom">
                        <div class="portlet light">
                            <?php if(isset($_tugas_fungsi_header)){
                                echo '<p>'.$_tugas_fungsi_header->deskripsi.'</p>';
                            } ?>
                            <?php foreach ($_tugas_fungsi_details as $row): ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <ul class="list-unstyled profile-nav">
                                            <div class="mt-element-ribbon bg-grey-steel">
                                                <div class="ribbon ribbon-border-hor ribbon-clip ribbon-color-warning uppercase">
                                                    <div class="ribbon-sub ribbon-clip"></div>
                                                    <small style="font-size: 11px;"><?php echo $row->nama_lengkap ?></small>
                                                </div>
                                                <li class="ribbon-content" style="padding: 10px;">
                                                    <img src="<?php echo asset_url('gallery/'.$row->foto); ?>"
                                                         class="img-responsive pic-bordered" alt=""/>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="font-black sbold uppercase"><?php echo $row->jabatan; ?></h4>
                                                <?php echo $row->deskripsi; ?>
                                                <div>
                                                    <a href="javascript:;"> Email: <?php echo $row->email; ?> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>