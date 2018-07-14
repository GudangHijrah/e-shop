<ul class="nav nav-tabs">
    <li class="active">
        <a href="#tabContentDokument" data-toggle="tab">
            <div class="caption caption-md">
                <i class="icon-bar-chart font-dark"></i>
                <span class="caption-subject font-black-steel bold uppercase">Dokumen Terkait</span>
            </div>
        </a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="tabContentDokument">
         <!--<div class="row-box">
            <div class="list-group">
                <?php /*foreach ($_document_info as $row): */?>
                    <a href="<?php /*echo asset_url('files/') . $row->file */?>" target="_blank"
                       data-url=""
                       class="list-group-item">
                        <div class="row">
                            <div class="col-md-2 col-sm-2  col-xs-2"><i class="fa fa-file-pdf-o fa-3x blue-dark"></i></div>
                            <div class="col-md-10 col-sm-10  col-xs-10"><?php /*echo $row->name;*/?></div>
                        </div>
                    </a>
                <?php /*endforeach; */?>
            </div>            
        </div> -->
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box blue-dark">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-file-pdf-o"></i>
                    <a style="color: #FFFFFF" href="<?php echo site_url('frontend/download_index?kode_category=all')?>">
                        <small>Dokumen Dakwah</small></div></a>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-bordered" style="font-size:8px;">
                        <thead class="hidden">
                            <tr>
                                <th> # </th>
                                <th> Judul </th>
                                <th> Keterangan </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                                foreach ($_document_info as $row): ?>
                                <tr class="<?php echo $i % 2 == 0 ? '' : 'warning'; ?>">
                                    <td class="text-center"> <?php echo ($i+1); ?> </td>
                                    <td style="padding: 2px;">
                                        <a href="<?php echo asset_url('files/') . $row->file ?>" target="_blank">
                                            <?php echo $row->name;?></a>
                                    </td>
                                    <td> - </td>
                                </tr>
                            <?php $i++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--<a title="Download Index" class="btn btn-default btn-sm"
           href="<?php /*echo site_url('frontend/download_index?category=all')*/?>">Download Index <i class="fa fa-angle-double-right"></i></a>-->
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
</div>