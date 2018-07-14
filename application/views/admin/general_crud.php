<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php foreach ($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
    <?php endforeach; ?>

    <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/grocery_crud/themes/bootstrap-v4/css/custom.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/menu/css/dcmegamenu.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/menu/css/megamenumobile.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/menu/css/grey.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/grocery_crud/themes/bootstrap-v4/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css"/>
    <?php foreach ($js_files as $file) : ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <script src="<?php echo base_url('assets/menu/js/hoverIntent.js') ?>"></script>
    <script src="<?php echo base_url('assets/menu/js/jquery.dcmegamenu.1.3.2.js') ?>"></script>

    <link rel="icon" href="<?php echo base_url('assets/img/sqfavicon.ico') ?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/sqfavicon.ico') ?>" type="image/x-icon"/>

    <script type="text/javascript">
        $(document).ready(function ($) {
            $('#mega-menu').dcMegaMenu({
                rowItems: '4',
                speed: 'fast',
                effect: 'fade',
                event: 'click'
            });
        });
    </script>
</head>
<body>

<div class="container-fluid">
    <?php
    $user_real_name = $this->session->userdata('WEB_EMAIL');
    $user_role = $this->session->userdata('ROLE');
    $role_menu = $this->session->userdata('ROLE_MENU');
    /*foreach ($role_menu as $index => $value) {
        echo $index.'] '.$value->id_menu.'<br/>';
    }*/
    $roleName = $user_role->name; ?>
    <div class="">
        <div class="text-left">
            <section>
                <h4>Dashboard</h4>
                Welcome,&nbsp;<i class="fa fa-user"></i>
                    <?php echo $user_real_name; ?><strong><?php echo ' [' . $roleName . ']'; ?></strong>&nbsp;|&nbsp;
                    <a class="" href="<?php echo base_url() ?>index.php/login/logout">
                        <i class="fa fa-sign-out">Sign out</i>
                    </a>
            </section>
        </div>
    </div>
    <div class="">
        <ul id="mega-menu">
            <?php if ($roleName == 'admin'): ?>
                <li><a href="#">Manajemen User dan Menu</a>
                    <ul>
                        <li><a href="<?php echo base_url() ?>index.php/admin/role">Role</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/admin/user">User</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/admin/menu">Menu Management</a></li>
                    </ul>
                </li>
                <?php /*elseif ($roleName == 'guest' || $roleName == 'admin'): */?>
                <li><a href="#">Banners dan Galleries</a>
                    <ul>
                        <li><a href="#">Banners</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/admin/carousel">Carousel Banner</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Galleries</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/admin/gallery_foto">Gallery Album</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/gallery_album">Gallery Foto</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/gallery_video">Gallery Video</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Tentang Kami</a>
                    <ul>
                        <li><a href="<?php echo base_url() ?>index.php/admin/about">Kontak Kami</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/admin/sejarah">Sejarah</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/admin/visi_misi">Visi Misi</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/admin/struktur_organisasi">Struktur
                                Organisasi</a></li>
                        <!--                        <li><a href="<?php /*echo base_url() */ ?>index.php/admin/tugas_fungsi_header">Tugas dan Fungsi
                                        Header</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/tugas_fungsi_detail">Tugas dan Fungsi
                                        Detail</a></li>-->
                    </ul>
                </li>
                <li><a href="#">Manajemen Berita</a>
                    <ul>
                        <li><a href="<?php echo base_url() ?>index.php/admin/pesan_kebaikan">Pesan Kebaikan</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/admin/berita">Berita/ Posting</a></li>
                        <!--<li><a href="<?php /*echo base_url() */ ?>index.php/admin/running_text">Running Text</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/coffee_morning">Coffee Morning Header</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/coffee_morning_detail">Coffee Morning Detail</a></li>-->
                        <!--<li><a href="<?php /*echo base_url() */ ?>index.php/admin/blog">Blog</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/posts">Posting</a></li>-->
                    </ul>
                </li>
                <li><a href="#">Manajemen Dashboard</a>
                    <ul>
                        <li><a href="<?php echo base_url() ?>index.php/admin/berita_category">Master Category</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/admin/social_media">Social Media</a></li>
                        <!--<li><a href="<?php /*echo base_url() */ ?>index.php/admin/link_terkait">Link Terkait</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/pelayanan_publik">Pelayanan Publik</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/document_info">Document Info</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/buletin">Buletin</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/header_info">Header Download Index</a></li>
                                <li><a href="<?php /*echo base_url() */ ?>index.php/admin/download_index">Download Index</a></li>-->
                    </ul>
                </li>
                <li><a href="#">Partner Page</a>
                    <ul>
                        <li><a href="#">Settings</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/admin/campaign_settings">Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Partners</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/admin/partner">Partner</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/partner_dt">Partner Detil</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/partner_person">Guru & Pendukung</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/admin/partner_gallery">Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Footer Info</a>
                    <ul>
                        <li><a href="<?php echo base_url() ?>index.php/admin/footer">Footer</a></li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <hr/>
    <div class="">
        <?php echo $output; ?>
    </div>
    <hr>
</div>
</body>
</html>