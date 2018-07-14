<!-- BEGIN FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block hidden">
                <h2>Tentang</h2>
                <p> <?php echo $_footer->footer_about; ?> </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs12 footer-block hidden">
                <h2>Email Kami</h2>
                <div class="subscribe-form">
                    <form action="javascript:;">
                        <div class="input-group">
                            <input type="text"
                                   placeholder="<?php echo $_footer->footer_email; ?>"
                                   class="form-control">
                            <span class="input-group-btn">
                                <button class="btn yellow" type="submit">Submit</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 footer-block">
                <div class="ul-wrapper">
                    <ul class="social-icons">
                        <li><a target="_blank" href="<?php echo $_footer->footer_social_rss; ?>" data-original-title="rss" class="rss <?php echo $_footer->footer_social_rss == null ? 'hidden' : ''; ?>"></a></li>
                        <li><a target="_blank" href="<?php echo $_footer->footer_social_facebook; ?>" data-original-title="facebook" class="facebook <?php echo $_footer->footer_social_facebook == null ? 'hidden' : ''; ?>"></a></li>
                        <li><a target="_blank" href="<?php echo $_footer->footer_social_twitter; ?>" data-original-title="twitter" class="twitter" <?php echo $_footer->footer_social_twitter == null ? 'hidden' : ''; ?>"></a></li>
                        <!--<li><a target="_blank" href="<?php /*echo $_footer->footer_social_googleplus; */?>" data-original-title="googleplus" class="googleplus <?php /*echo $_footer->footer_social_googleplus == null ? 'hidden' : ''; */?>"></a></li>-->
                        <!--<li><a target="_blank" href="<?php /*echo $_footer->footer_social_linkedin; */?>" data-original-title="linkedin" class="linkedin <?php /*echo $_footer->footer_social_linkedin == null ? 'hidden' : ''; */?>"></a></li>-->
                        <li><a target="_blank" href="<?php echo $_footer->footer_social_youtube; ?>" data-original-title="youtube" class="youtube <?php echo $_footer->footer_social_youtube == null ? 'hidden' : ''; ?>"></a></li>
                    </ul>
                </div>
                <h2>Hak Cipta 2018 &copy; Satuqolbu Students Learning Center</h2>
                <p><?php echo $_footer->address; ?></p>
                <address class="margin-bottom-40">
                    Telpon:&nbsp;<?php echo $_footer->footer_kontak_phone; ?>
                    <br> Fax:&nbsp;<?php echo $_footer->footer_kontak_fax; ?>
                    <br> Email:&nbsp;<a href="mailto:<?php echo $_footer->footer_email; ?>"><?php echo $_footer->footer_email; ?></a>
                </address>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block hidden">
                <h2>Kontak</h2>
                <address class="margin-bottom-40"> Phone:&nbsp;<?php echo $_footer->footer_kontak_phone; ?>
                    <br> Fax:&nbsp;<?php echo $_footer->footer_kontak_fax; ?>
                    <br> Email:&nbsp;<a href="mailto:<?php echo $_footer->footer_email; ?>"><?php echo $_footer->footer_email; ?></a>
                </address>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN INNER FOOTER -->
<div class="page-footer">
    <div class="container"> Hak Cipta 2018 &copy; Satuqolbu Students Learning Center
        <!--<a target="_blank" href="#">Link 1</a> &nbsp;|&nbsp;
        <a href="#" title="Title Link 2" target="_blank">Link 2</a>-->
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>