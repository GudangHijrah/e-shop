<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCMHT1B7WdjZu_nJedMfwE7uzRJmWI6N1g&libraries=places"></script>

<script src="<?php echo base_url('assets/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/js.cookie.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/moment.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/morris/raphael-min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/fullcalendar/fullcalendar.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/horizontal-timeline/horizontal-timeline.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/flot/jquery.flot.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/flot/jquery.flot.resize.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/flot/jquery.flot.categories.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/jquery.sparkline.min.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/countdown/jquery.countdown.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/backstretch/jquery.backstretch.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/plugins/bxslider/jquery.bxslider.min.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/global/scripts/app.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/global/scripts/magnify.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/pages/scripts/coming-soon.min.js') ?>" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/pages/scripts/portfolio-1.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/pages/scripts/portfolio-2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/pages/scripts/portfolio-3.min.js') ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="<?php echo base_url('assets/pages/scripts/contact.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/pages/scripts/ui-modals.min.js') ?>" type="text/javascript"></script>
<!--<script src="<?php /*echo base_url('assets/pages/scripts/search.min.js') */?>" type="text/javascript"></script>-->

<script src="<?php echo base_url('assets/global/plugins/lightbox/ekko-lightbox.min.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/layouts/layout3/scripts/layout.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/layouts/layout3/scripts/demo.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/layouts/global/scripts/quick-sidebar.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/layouts/global/scripts/quick-nav.min.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/js/slick.min.js') ?>" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 4000
    });
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: false,
            onShown: function() {
                console.log('Checking our the events huh?');
            },
            onNavigate: function(direction, itemIndex) {
                console.log('Navigating '+direction+'. Current item: '+itemIndex);
            }
        });
    });
    $('.customer-logos').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1700,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
    $.fn.typer = function(text, options){
        options = $.extend({}, {
            char: ' ',
            delay: 1000,
            duration: 600,
            endless: true
        }, options || text);

        text = $.isPlainObject(text) ? options.text : text;

        var elem = $(this),
            isTag = false,
            c = 0;

        (function typetext(i) {
            var e = ({string:1, number:1}[typeof text] ? text : text[i]) + options.char,
                char = e.substr(c++, 1);

            if( char === '<' ){ isTag = true; }
            if( char === '>' ){ isTag = false; }
            elem.html(e.substr(0, c));
            if(c <= e.length){
                if( isTag ){
                    typetext(i);
                } else {
                    setTimeout(typetext, options.duration/10, i);
                }
            } else {
                c = 0;
                i++;

                if (i === text.length && !options.endless) {
                    return;
                } else if (i === text.length) {
                    i = 0;
                }
                setTimeout(typetext, options.delay, i);
            }
        })(0);
    };
    var content = $('#content').html();
    $('#type').typer([
        /*'a <b>cool</b> affect', 'made with <b>js<b>', 'format your <i>text</i> here', 'im watching <b>you</b>'*/
        content
    ]);
</script>