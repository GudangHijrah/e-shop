<!DOCTYPE html>
<html>
<head>
    <title>Sauqolbu.org - Login</title>
    <meta charset="utf-8"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/grocery_crud/themes/bootstrap/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/grocery_crud/themes/bootstrap/css/bootstrap-responsive.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/grocery_crud/themes/bootstrap/css/style.css"/>
    <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/grocery_crud/themes/bootstrap/css/custom-admin.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/grocery_crud/themes/bootstrap/css/jquery-ui/flick/jquery-ui-1.9.2.custom.css"/>
    <script src="<?php echo base_url() ?>assets/grocery_crud/js/jquery-1.10.2.min.js"></script>
    <link rel="icon" href="<?php echo base_url('assets/img/sqfavicon.ico') ?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/sqfavicon.ico') ?>" type="image/x-icon"/>
</head>

<body>
<div class="container">
    <div class="card card-container">
        <div class="row">

            <div class="col-md-12">
                <img id="profile-img" width="100%"
                     src="<?php echo base_url('assets/images/logo.png')?>" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin"
                      method="POST"
                      action="<?php echo base_url() ?>index.php/login/control_login">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    <div id="remember" class="checkbox">
                        <label><input type="checkbox" value="remember-me"> Remember me</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Forgot the password? Call the Administrator
                </a>
            </div>
        </div>
    </div><!-- /card-container -->
</div>
</body>
</html>