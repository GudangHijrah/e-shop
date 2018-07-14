<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
<script>
    var map;
    var markers = [];
    function initialize() {
        var mapDiv = document.getElementById('map');
        var bounds = new google.maps.LatLngBounds();
        map = new google.maps.Map(mapDiv, {
            center: new google.maps.LatLng(-6.2297465, 106.829518),
            //zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });


        var no = 0;
        infowindow = new google.maps.InfoWindow({maxWidth: 320});
        $.ajax({
            type: "POST",
            dataType: "json",
            url: base_url + 'index.php/web/getCctv',
            success: function (data) {
                var items = [];
                $.each(data, function (key, val) {
                    var blueIcon = base_url + 'assets/icon/cctv.png';
                    var dataIcon;
                    dataIcon = blueIcon;
                    var latLng = new google.maps.LatLng(val.x_coord, val.y_coord);
                    bounds.extend(latLng);
                    var marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                        icon: dataIcon
                    });
                    markers.push(marker);


                    //}
                    var html = val.lokasi + '<br/>' + val.sistem_ta;
                    bindInfoWindow(marker, map, infowindow, html);
                });
                map.fitBounds(bounds);
                map.panToBounds(bounds);

            }

        });

        //var map = new google.maps.Map(mapCanvas, mapOptions);
    }

    function bindInfoWindow(marker, map, infowindow, strDescription) {
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.setContent(strDescription);
            infowindow.open(map, marker);
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>