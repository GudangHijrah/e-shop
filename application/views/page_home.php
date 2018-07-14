<?php $this->load->view("a_header"); ?>
<!-- BEGIN SIDEBAR CONTENT LAYOUT -->
<div class="page-content-container">
    <div class="page-content-row">
        <!-- BEGIN PAGE SIDEBAR -->
        <!-- BEGIN PAGE SIDEBAR -->
        <div class="page-sidebar">
            <nav class="navbar" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="nav navbar-nav margin-bottom-35">
                    <li class="active">
                        <a href="index.html">
                            <i class="icon-home"></i> Home </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-note "></i> Reports </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> User Activity </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-basket "></i> Marketplace </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Templates </a>
                    </li>
                </ul>
                <h3>Quick Actions</h3>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">
                            <i class="icon-envelope "></i> Inbox
                            <label class="label label-danger">New</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-paper-clip "></i> Task </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-star"></i> Projects </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-pin"></i> Events
                            <span class="badge badge-success">2</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- END PAGE SIDEBAR -->
        <div class="page-content-col col-sm-9">
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="container">
                <h2>Carousel Example</h2>
                <div id="myCarousel" class="carousel slide col-lg-9" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo base_url('assets/images/logo-sda.png') ?>" alt="Los Angeles" style="width:20%;">
                            <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>LA is always so much fun!</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('assets/images/logo-sda.png') ?>" alt="Los Angeles" style="width:20%;">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('assets/images/logo-sda.png') ?>" alt="Los Angeles" style="width:20%;">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!--END THE CONTENT-->
    </div>
</div>
<!-- END SIDEBAR CONTENT LAYOUT -->
<?php $this->load->view("z_footer"); ?>
<script>
    $( document ).ready(function() {
        $( "#tabnavbar li:first" ).addClass( "active open selected" );
    });
</script>
