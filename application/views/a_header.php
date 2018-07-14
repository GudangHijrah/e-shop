<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sistem Pemantauan Infrastruktur | Sumber Daya Air</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #5 for statistics, charts, recent events and reports"
          name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN LAYOUT FIRST STYLES -->
    <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css"/>
    <!-- END LAYOUT FIRST STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/global/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/global/plugins/fullcalendar/fullcalendar.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!--<link href="<?php /*echo base_url('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') */?>" rel="stylesheet"
          type="text/css"/>-->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url('assets/global/css/components.min.css') ?>" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="<?php echo base_url('assets/global/css/plugins.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
<!--    <link href="--><?php //echo base_url('assets/layouts/layout5/css/layout.min.css') ?><!--" rel="stylesheet" type="text/css"/>-->
<!--    <link href="--><?php //echo base_url('assets/layouts/layout5/css/custom.min.css') ?><!--" rel="stylesheet" type="text/css"/>-->
    <link href="<?php echo base_url('assets/layouts/layout3/css/layout.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/layouts/layout3/css/custom.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon"/>
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN CONTAINER -->
<div class="wrapper">
    <!-- BEGIN HEADER -->
    <header class="page-header">
        <nav class="navbar mega-menu" role="navigation">
            <div class="container-fluid">
                <div class="clearfix navbar-fixed-top">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </span>
                    </button>
                    <!-- End Toggle Button -->
                    <!-- BEGIN LOGO -->
                    <a id="index" class="page-logo" href="<?php echo site_url('/'); ?>">
                        <img src="<?php echo base_url('assets/images/logo-sda.png'); ?>" alt="Logo">
                        <span class="label">Sistem Pemantauan Infrastruktur</span>
                        <span class="label">Sumber Daya Air</span>
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN SEARCH -->
                    <form class="search" action="extra_search.html" method="GET">
                        <input type="name" class="form-control" name="query" placeholder="Search...">
                        <a href="javascript:;" class="btn submit md-skip">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                    <!-- END SEARCH -->
                    <!-- BEGIN TOPBAR ACTIONS -->
                    <div class="topbar-actions">
                        <!-- BEGIN GROUP NOTIFICATION -->
                        <div class="btn-group-notification btn-group hidden"
                             id="header_notification_bar">
                            <button type="button" class="btn btn-sm md-skip dropdown-toggle"
                                    data-toggle="dropdown"
                                    data-hover="dropdown"
                                    data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge">7</span>
                            </button>
                            <ul class="dropdown-menu-v2">
                                <li class="external">
                                    <h3>
                                        <span class="bold">12 pending</span> notifications</h3>
                                    <a href="#">view all</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-success md-skip">
                                                                    <i class="fa fa-plus"></i>
                                                                </span> New user registered. </span>
                                                <span class="time">just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-danger md-skip">
                                                                    <i class="fa fa-bolt"></i>
                                                                </span> Server #12 overloaded. </span>
                                                <span class="time">3 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-warning md-skip">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </span> Server #2 not responding. </span>
                                                <span class="time">10 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-info md-skip">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </span> Application error. </span>
                                                <span class="time">14 hrs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-danger md-skip">
                                                                    <i class="fa fa-bolt"></i>
                                                                </span> Database overloaded 68%. </span>
                                                <span class="time">2 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-danger md-skip">
                                                                    <i class="fa fa-bolt"></i>
                                                                </span> A user IP blocked. </span>
                                                <span class="time">3 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-warning md-skip">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </span> Storage Server #4 not responding dfdfdfd. </span>
                                                <span class="time">4 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-info md-skip">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </span> System Error. </span>
                                                <span class="time">5 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                            <span class="details">
                                                                <span class="label label-sm label-icon label-danger md-skip">
                                                                    <i class="fa fa-bolt"></i>
                                                                </span> Storage server failed. </span>
                                                <span class="time">9 days</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END GROUP NOTIFICATION -->
                        <!-- BEGIN USER PROFILE -->
                        <div class="btn-group-img btn-group hidden">
                            <button type="button"
                                    class="btn btn-sm md-skip dropdown-toggle"
                                    data-toggle="dropdown"
                                    data-hover="dropdown"
                                    data-close-others="true">
                                <span>Hi, Admin</span>
                                <img src="<?php echo base_url('assets/layouts/layout5/img/avatar1.jpg'); ?>" alt="">
                            </button>
                            <ul class="dropdown-menu-v2" role="menu">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile
                                        <span class="badge badge-danger">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="page_user_login_1.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END USER PROFILE -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <button type="button" class="quick-sidebar-toggler md-skip hidden"
                                data-toggle="collapse">
                            <span class="sr-only">Toggle Quick Sidebar</span>
                            <i class="icon-logout"></i>
                        </button>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </div>
                    <!-- END TOPBAR ACTIONS -->
                </div>
                <!-- BEGIN HEADER MENU -->
                <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
                    <ul id="tabnavbar" class="nav navbar-nav">
                        <?php $this->load->view('a_header_top_navbar_tab'); ?>
                    </ul>
                </div>
                <!-- END HEADER MENU -->
            </div>
        </nav>
    </header>
    <!-- END HEADER -->
    <!-- BEGIN FLUID -->
    <div class="container-fluid">
        <!--BEGIN PAGE-CONTENT-->
        <div class="page-content">

            <!-- BEGIN BREADCRUMBS -->
            <div class="breadcrumbs">
                <h1><?php echo $title; ?></h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">PSM</a>
                    </li>
                    <li class="active">Sub Tab</li>
                </ol>
            </div>
            <!-- END BREADCRUMBS -->