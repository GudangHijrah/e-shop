<aside class="col-md-4">

    <div class="row">


        <section class="col-sm-6 col-md-12 widget">
            <?php
            $this->load->view('module/pengaduan_masyarakat', $contact); ?>
        </section>
        <!--<section class="col-sm-6 col-md-12 widget">
                           <?php $this->load->view('module/search'); ?>
                       </section>-->
        <section class="col-sm-6 col-md-12 widget">
            <?php $this->load->view('module/ketinggian_muka_air'); ?>
        </section>
        <section class="col-sm-6 col-md-12 widget">
            <?php $this->load->view('module/ramalan_cuaca'); ?>
        </section>
        <?php if ($page == 'index') { ?>
            <section class="col-sm-6 col-md-12 widget no-mobile">
                <?php
                $data['venue'] = $venue;
                $this->load->view('module/venue', $data); ?>
            </section>
            <section class="col-sm-6 col-md-12 widget">
                <?php $this->load->view('module/twitter'); ?>
            </section>
        <?php } ?>

    </div><!--.row-->

</aside>