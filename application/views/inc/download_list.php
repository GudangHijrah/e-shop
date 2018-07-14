<div id="main-content" class="col-md-8">

    <div class="row">
        <section class="col-md-12 breaking-news">
            <?php $this->load->view('module/artikel_marquee'); ?>
        </section>

        <section class="col-md-12">
            <h4><?php echo $judul ?></h4>
            <?php echo $deskripsi ?>
            <table class="col-md-12">
                <tr>
                    <th>No</th>
                    <th>Nama File</th>
                    <th>Katerangan</th>
                    <th>File</th>
                </tr>
                <?php
                $no = 0;
                $query = $this->db->query('select * from web_download where kategori_download="' . $id . '"');
                foreach ($query->result() as $row) {
                    ?>
                    <tr>
                        <td><?php echo ++$no ?></td>
                        <td><?php echo $row->judul_download ?></td>
                        <td><?php echo $row->keterangan ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>assets/uploads/download/<?php echo $row->file ?>">Download</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </section>
        <div class="clearfix"></div>
    </div>
</div>