<div id="main-content" class="col-md-8">

    <div class="row">


        <section class="col-md-12 breaking-news">
            <?php $this->load->view('module/artikel_marquee'); ?>
        </section>
        <section class="col-md-12">
            <?php
            $data['query'] = $query;
            $this->load->view('module/image_list', $data);
            ?>
        </section>

        <section class="share-post clearfix pull-right">
            <span class='st_sharethis_large' displayText='ShareThis'></span>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_linkedin_large' displayText='LinkedIn'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_email_large' displayText='Email'></span>
        </section>


        <div class="clearfix"></div>


    </div>

</div>