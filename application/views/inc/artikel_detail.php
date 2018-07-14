<div id="main-content" class="col-md-8">

    <div class="row">


        <section class="col-md-12 breaking-news">
            <?php $this->load->view('module/artikel_marquee'); ?>
        </section>
        <section class="col-md-12">
            <?php
            $data['judul'] = $judul;
            $data['img'] = $img;
            $data['isi'] = $isi;
            $this->load->view('module/artikel_large', $data); ?>
        </section>
        <div class="row  col-md-12">
            <section class="share-post clearfix pull-right">
                <span class='st_sharethis_large' displayText='ShareThis'></span>
                <span class='st_facebook_large' displayText='Facebook'></span>
                <span class='st_twitter_large' displayText='Tweet'></span>
                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                <span class='st_pinterest_large' displayText='Pinterest'></span>
                <span class='st_email_large' displayText='Email'></span>
            </section>
        </div>


        <div class="clearfix"></div>


    </div>
    <section class="col-md-12">

        <div class="header clearfix">
            <h4>Berita Lainnya</h4>
        </div>
        <ul>
            <?php
            $query = $this->db->query('select * from web_artikel where active="Yes" order by tanggal_input desc');
            foreach ($query->result() as $row) {
                ?>
                <li>
                    <a href="<?php echo base_url() ?>index.php/web/detail/<?php echo $row->id_artikel ?>"><?php echo $row->judul_artikel ?></a>
                </li>

                <?php
            }
            ?>

        </ul>

    </section>

</div>