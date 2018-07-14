<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light ">
                <!--<div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                    </div>
                </div>-->
                <hr/>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="<?php echo site_url() ?>/keluhan/"
                          class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama</label>
                                <div class="col-md-4">
                                    <input type="text" name="nama" class="form-control" placeholder="Enter text">
                                    <span class="help-block"> A block of help text. </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Address</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <textarea name="alamat" id="" cols="45" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Email Address</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input name="email" type="email" class="form-control" placeholder="Email Address"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Left Icon</label>
                                <div class="col-md-4">
                                    <div class="input-icon">
                                        <i class="fa fa-bell-o"></i>
                                        <input type="text" class="form-control" placeholder="Left icon"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Right Icon</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa fa-microphone"></i>
                                        <input type="text" class="form-control" placeholder="Right icon"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Input With Spinner</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control spinner" placeholder="Password"></div>
                            </div>
                            <div class="form-group last">
                                <label class="col-md-2 control-label">Static Control</label>
                                <div class="col-md-4">
                                    <p class="form-control-static"> email@example.com </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-4">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>
</div>