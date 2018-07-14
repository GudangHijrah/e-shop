<div id="main-content" class="col-md-8">

    <div class="row">


        <!-- CAROUSEL WIDGET
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="widget col-md-12 no-mobile">
            <?php
            $data['slider'] = $slider;
            $this->load->view('module/artikel_slider', $data);

            ?>
        </section>


        <!-- BREAKING NEWS
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="col-md-12 breaking-news">
            <?php
            $data['runningtext'] = $runningtext;
            $this->load->view('module/artikel_marquee', $data); ?>
        </section>

        <section class="col-md-12 widget headline">

            <div class="header clearfix">
                <h4>Berita Lainnya</h4>

            </div>
            <?php $this->load->view('module/list_artikel.php'); ?>


        </section>

        <!-- POLITICS 1 WIDGET
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section class="col-md-12 widget">

            <!-- Widget Header
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="header clearfix">
                <h4>Potret dinas tata air</h4>

            </div>

            <?php $this->load->view('module/artikel_two_column'); ?>


        </section><!--.widget-->

        <section class="col-md-12 widget">
            <?php $this->load->view('module/map'); ?>

        </section>

        <section class="col-md-6 widget">
            <div class="header clearfix"><h4>LAPORAN PENGADUAN MASYARAKAT</h4></div>
            <?php $this->load->view('module/laporan_pengaduan_masyarakat'); ?>
        </section>

        <section class="col-md-6 widget no-mobile">
            <div class="header clearfix"><h4>Gallery</h4></div>
            <?php $this->load->view('module/gallery_small'); ?>
        </section>
        <section class="col-md-6 widget no-mobile">
            <div class="header clearfix"><h4>Aplikasi</h4></div>
            <?php
            $data['aplikasi'] = $aplikasi;
            $this->load->view('module/aplikasi', $data);

            ?>
        </section>


        <!-- Clear float
             Add this to every rows that has > 1 column
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="clearfix"></div>


    </div><!--.row-->

</div><!--#main-content-->