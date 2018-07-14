<div>
	<div class="page-content">
		<div class="container">
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="page-content-inner">
				<div class="mt-content-body">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="portlet">
								<!--CAROUSEL-->
								<div class="row">
									<div id="myCarousel"
										 class="main-carousel carousel slide col-md-12 col-sm-12"
										 data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<?php if (!empty($carouselImages)) { ?>
												<?php $i = 0;
												foreach ($carouselImages as $img):
													if ($i == 0) { ?>
														<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
													<?php } else { ?>
														<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
													<?php } ?>
												<?php $i++; endforeach; ?>
											<?php } else { ?>
												<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#myCarousel" data-slide-to="1"></li>
											<?php } ?>
										</ol>
										<!-- Wrapper for slides -->
										<div class="carousel-inner text-center">
											<?php if (!empty($carouselImages)){
												$i = 0;
											foreach ($carouselImages as $img):
												if ($i == 0){ ?>
													<div class="item active">
											<?php }else{ ?>
												<div class="item">
													<?php } ?>
                                                    <?php $linkBerita = '';
                                                        if($img['_link_berita'] != ' '){
                                                            $linkBerita = 'berita/?category=berita&slug='.$img['_link_berita'];
                                                        }else $linkBerita = '#'; ?>
                                                    <a href="<?php echo site_url($linkBerita)?>">
                                                        <img src="<?php echo base_url() ?>assets/uploads/carousel/<?php echo $img['_hero'] ?>"
                                                             alt="This is image from CRUD" style="width:100%;left: auto;">
                                                    </a>

													<div class="carousel-caption customHeroImageCaption">
														<p><h4><?php echo $img['_caption'] ?></h4></p>
														<p class="hidden"><a href="http://<?php echo $img['_external_link'] ?>"
															  target="_blank"><?php echo $img['_caption'] ?></a></p>
													</div>
												</div>
												<?php $i++;
												endforeach; ?>
												<?php } else { ?>
													<div class="item active">
														<img src="<?php echo base_url('assets/images/carousel/1.jpg') ?>"
															 alt="Satuqolbu SLC" style="width:100%;left: auto;">
														<div class="carousel-caption">
															<h3>Satuqolbu SLC</h3>
															<p class="hidden">description</p>
														</div>
													</div>
													<div class="item">
														<img src="<?php echo base_url('assets/images/carousel/2.jpg') ?>"
															 alt="Los Angeles" style="width:100%;">
														<div class="carousel-caption">
															<h3>Satuqolbu SLC</h3>
															<p class="hidden">description</p>
														</div>
													</div>
												<?php } ?>
											</div>
											<!-- Left and right controls -->
											<a class="left carousel-control" style="margin-left: 15px;" href="#myCarousel"
											   data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" style="margin-right: 15px;" href="#myCarousel"
											   data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<!-- RUNNING TEXT -->
									<div class="running-news text-center hidden">
										<marquee behavior="" direction=""><?php echo $_berita_utama; ?></marquee>
									</div>
									<!-- END RUNNING TEXT -->
									<!-- ANNIMATION APPEAR BERITA -->
									<div class="panel-body hidden">
										<div class="hidden" id="content"><?php echo $_berita_utama; ?></div>
										<div id="type"></div>
									</div>
									<!-- END ANIMATION APPEAR BERITA -->
								</div>
							</div>
						</div>
                        <div></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light">
                                    <div class="container-slick">
                                        <section class="customer-logos slider">
                                            <?php for ($i= 0; $i < 10; $i++) {
                                                if ($i >= sizeof($_partners)){
                                                    for ($j = 0; $j < sizeof($_partners); $j++){
                                                        echo '<a href="#"><div class="slide"><img src="'.asset_url("gallery/").@$_partners[$j]->image.'"></div></a>';
                                                    }
                                                }else{
                                                    echo '<a href="#"><div class="slide"><img src="'.asset_url("gallery/").@$_partners[$i]->image.'"></div></a>';
                                                }
                                            } ?>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light">
                                    <?php $this->load->view('frontend/sanlat/jadwal'); ?>
                                </div>
                            </div>
                        </div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="portlet light">
									<?php $this->load->view('frontend/_dashboard_berita_utama'); ?>
								</div>
							</div>
                            <div class="col-md-4 col-sm-4">
                                <div class="portlet light">
                                    <?php $this->load->view('frontend/_tab_pesan_kebaikan'); ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
								<div class="portlet light">
                                    <?php $this->load->view('frontend/_tab_content_berita'); ?>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light">
                                    <?php $this->load->view('frontend/_dashboard_photos'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light">
                                    <?php $this->load->view('frontend/_dashboard_videos'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row hidden">
                            <div class="col-md-12 col-sm-12">
                                <div class="portlet light">
                                    <?php $this->load->view('frontend/_dashboard_gallery'); ?>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				<!-- END PAGE CONTENT INNER -->
			</div>
		</div>
		<!-- END PAGE CONTENT BODY -->
	</div>
</div>