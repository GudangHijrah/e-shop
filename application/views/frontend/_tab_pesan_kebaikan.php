<div class="portlet-body">
    <div class="tabbable-line">
        <ul class="nav nav-tabs">
            <!-- START TAB CAPTION -->
            <li class="active">
                <a href="#tabContentBerita" data-toggle="tab">
                    <div class="caption caption-md text-left">
                        <i class="fa fa-text-width font-dark"></i>
                        <span class="caption-subject font-black-steel bold uppercase">Pesan Kebaikan SQ</span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tabContentBerita">
                <div class="itemListIn">
                    <?php
                    $iteration = 0;
                    foreach ($_pesan_kebaikan as $row): ?>
                        <div class="row" style="padding-bottom: 5px">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <?php if ($row->type == "text"): ?>
                                    <a data-toggle="modal"
                                       href="#draggable<?php echo $row->id ?>"
                                       data-gallery=""
                                       data-type="image"
                                       data-title="<?php echo $row->title; ?>">
                                        <img width="100%" class="img-polaroid img-thumbnail"
                                             alt="<?php echo $row->title; ?>"
                                             title="<?php echo $row->title; ?>"
                                             src="<?php echo base_url('assets/images/default/no-image.jpg'); ?>">
                                    </a>
                                    <div class="modal fade draggable-modal" id="draggable<?php echo $row->id; ?>"
                                         tabindex="-1" role="basic"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true"></button>
                                                    <h4 class="modal-title"><?php echo $row->title . ' dari ' . $row->author; ?>
                                                        @satuqolbu</h4>
                                                </div>
                                                <div class="modal-body"> <?php echo $row->description ?></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline"
                                                            data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                <?php else: ?>
                                    <a data-toggle="lightbox"
                                       href="<?php echo asset_url('gallery/' . $row->cover_image) ?>"
                                       data-type="image"
                                       data-title="<?php echo $row->title; ?>">
                                        <img width="100%" class="img-polaroid img-thumbnail"
                                             alt="<?php echo $row->title; ?>"
                                             title="<?php echo $row->title; ?>"
                                             src="<?php echo asset_url('gallery/thumbs/' . $row->cover_image); ?>">
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8 no-padding-left" style="text-align: left;">
                                <strong><a class="text-left"
                                           href="#">
                                        Dari <?php echo $row->author; ?>@satuqolbu
                                    </a></strong>
                                <p class="muted small">
                                        <span><i class="fa fa-calendar"></i> &nbsp;
                                            <?php if ($row->tgl_posting != null):
                                                echo nama_hari($row->tgl_posting) . ', ' . tgl_indo($row->tgl_posting); ?>
                                            <?php endif; ?>
                                        </span>
                                </p>
                            </div>
                        </div>
                        <?php $iteration++; ?>
                    <?php endforeach; ?>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</div>