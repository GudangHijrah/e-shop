<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php echo @$_meta; ?>
    <?php echo @$_css; ?>
</head>
<body>
<!-- Navigation Bar-->
<header id="topnav" class="defaultscroll fixed-top sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="#home" class="logo text-uppercase">
                <img src="<?php echo base_url('assets/campaign/images/logo-light.png') ?>" alt="" class="logo-light" height="34" />
                <img src="<?php echo base_url('assets/campaign/images/logo-dark.png') ?>" alt="" class="logo-dark" height="34" />
            </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <?php echo @$_navigation; ?>
    </div>
</header>
<?php echo @$_mainContent; ?>
<?php echo @$_footer; ?>
<?php echo @$_js; ?>
</body>
</html>