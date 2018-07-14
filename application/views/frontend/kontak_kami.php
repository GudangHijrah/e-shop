<div >
    <div class="page-head hidden">
        <div class="container">
            <div class="page-title">
                <h1>Kontak Kami
                    <small></small>
                </h1>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="page-content-inner">
                <div class="c-content-contact-1 c-opt-1">
                    <div class="row" data-auto-height=".c-height">
                        <div class="col-lg-8 col-md-6 c-desktop"></div>
                        <div class="col-lg-4 col-md-6">
                            <div class="c-body">
                                <!--HIDDEN COMPONENT-->
                                <input id="dataLatitude" class="hidden" type="number" value="<?php echo $_about->latitude != null ? $_about->latitude : -6.21462 ?>">
                                <input id="dataLongitude" class="hidden" type="number" value="<?php echo $_about->longitude != null ? $_about->longitude : 106.84513 ?>">
                                <div id="dataWebsite" class="hidden"><?php echo $_about->website ?></div>
                                <div id="dataInfoImage" class="hidden"><?php echo $_about->info_image ?></div>
                                <!--HIDDEN COMPONENT-->

                                <div class="c-section">

                                    <h4 id="dataTitle"><?php echo $_about->title; ?></h4>

                                </div>
                                <div class="c-section">
                                    <div class="c-content-label uppercase bg-blue">Alamat</div>
                                    <p><div id="dataAddress"><?php echo $_about->address; ?></div></p>
                                </div>
                                <div class="c-section">
                                    <div class="c-content-label uppercase bg-blue">Kontak</div>
                                    <p>
                                        <strong>T</strong> <?php echo $_about->contact_phone; ?>
                                        <br/>
                                        <strong>F</strong> <?php echo $_about->contact_fax; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="map" class="c-content-contact-1-gmap" style="height: 100%;"></div>
                </div>
                <div class="c-content-feedback-1 c-option-1 hidden">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-container bg-green">
                                <div class="c-content-title-1 c-inverse">
                                    <h3 class="uppercase">Ingin berselancar lebih jauh?</h3>
                                    <div class="c-line-left"></div>
                                    <p class="c-font-lowercase"><?php echo $_about->faq_caption; ?></p>
                                    <a href="#" class="btn grey-cararra font-dark">Lebih Lanjut</a>
                                </div>
                            </div>
                            <div class="c-container bg-grey-steel">
                                <div class="c-content-title-1">
                                    <h3 class="uppercase">Ajukan pertanyaan?</h3>
                                    <div class="c-line-left bg-dark"></div>
                                    <form action="#">
                                        <div class="input-group input-group-lg c-square">
                                            <input type="text" class="form-control c-square" placeholder="Bertanya disini..." />
                                            <span class="input-group-btn"><button class="btn uppercase" type="button">Go!</button></span>
                                        </div>
                                    </form>
                                    <p><?php echo $_about->ask_caption; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-contact">
                                <div class="c-content-title-1">
                                    <h3 class="uppercase">Tetap bersama kami</h3>
                                    <div class="c-line-left bg-dark"></div>
                                    <p class="c-font-lowercase"><?php echo $_about->kit_caption; ?></p>
                                </div>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
                                    <div class="form-group">
                                        <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md"></textarea>
                                    </div>
                                    <button type="submit" class="btn grey">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
</div>
<script>

    function initialize() {
        var dataTitle = $('#dataTitle').text();
        var dataAddress = $('#dataAddress').text();
        var dataLatitude = $('#dataLatitude').val();
        var dataLongitude = $('#dataLongitude').val();
        var dataWebsite = $('#dataWebsite').text();

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 17,
            center: new google.maps.LatLng(dataLatitude, dataLongitude), // initialize ke lokasi mana
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var locationArrays = [
            // index 0 -> name of marker
            // index 1 -> latitude
            // index 2 -> longitude
            // index 3 -> zIndex of marker
            // index 4 -> link if info text clicked
            // index 5 -> sample pic inside marker
                [dataTitle,
                dataLatitude,
                dataLongitude,
                4,
                dataAddress,
                "https://yt3.ggpht.com/a-/AK162_68mHNDk8xsYyNDrKQFcGa-j9x4bEsTH3H7kw=s900-mo-c-c0xffffffff-rj-k-no",
                dataWebsite]
        ];

        setMarkers(map, locationArrays);
    }

    function setMarkers(map, locations) {
        var image = 'https://www.shareicon.net/data/32x32/2016/05/20/768156_gps_512x512.png';
        var infowindow = new google.maps.InfoWindow();
        for (var i = 0; i < locations.length; i++) {
            var myLocation = locations[i];
            var myLatLng = new google.maps.LatLng(myLocation[1], myLocation[2]);
            console.log(myLocation[1]);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                title: myLocation[0],
                zIndex: myLocation[3]
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {

                    var html = '';

                    // Create a container for the infowindow content
                    html += '<div class="infowindow-content animated zoomInUp">';

                    // Add a link
                    html += '<a href="' + locations[i][6] + '" style="font-weight: bold;">' + locations[i][0] + '</a><br />';

                    // Add an image
                    html += '<div class="col-md-8 clearfix">';
                    html += '<div class="row">';
                    html += '<img src="' + locations[i][5] + '" style="width: 10%;float: left;padding-right: 10px;"/>';
                    html += '<span>'+locations[i][4]+'<br/><a target="_blank" href="'+locations[i][6]+'">Klik disini</a></span>';
                    html += '</div>';
                    html += '</div>';

                    // Close the container
                    html += '</div>';

                    infowindow.setContent(html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
</script>