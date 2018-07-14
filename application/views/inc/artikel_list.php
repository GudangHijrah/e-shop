<div id="main-content" class="col-md-8">

    <div class="row">


        <section class="col-md-12 breaking-news">
            <?php $this->load->view('module/artikel_marquee'); ?>
        </section>
        <div style="margin-left:10px"><h3><?php echo $category ?></h3></div>
        <br/>
        <?php echo $content ?>

        <ul class="pagination">
            <li class="divider"></li>
            <?php echo $paginate ?>
            <li class="divider"></li>
        </ul>


        <div class="clearfix"></div>


    </div>


</div>