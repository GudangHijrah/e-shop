<!DOCTYPE html>
<html>
    <head>
        <title>Satuqolbu SLC</title>
        <?php echo @$_meta; ?>
        <?php echo @$_css; ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88907046-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-88907046-1');
        </script>
    </head>
    <body class="page-header-menu-fixed theme-color dark" onload="initialize();">
        <div class="page-wrapper">
            <!--#1-->
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <?php echo @$_header_masthead; ?>
                    <div id="nav" data-spy="">
                        <div class="page-header">
                            <?php echo @$_nav_logo; ?>
                            <?php echo @$_nav_menu_header?>
                        </div>
                    </div> <!--END id=nav-->
                </div> <!--END page-wrapper-top-->
            </div>
            <!--#2-->
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <div class="page-container">
                        <div class="page-content-wrapper">
                            <?php echo @$_mainContent; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <?php echo @$_footer; ?>
                </div>
            </div>
        </div>
        <!--#THIS IS FOOTER JS-->
        <?php echo @$_js; ?>
    </body>
</html>