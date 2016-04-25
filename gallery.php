<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <style>
    .hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}
    </style>
    <script>
      jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
    
    
    </script></head>
<body>
 
<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <h2 style="font-family:cursive;">Survey Carried Out </h2>
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                
                <ul class="hide-bullets">
                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="h1.jpg" >
                        </a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-1"><img src="h2.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-2"><img src="h3.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-3"><img src="h4.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-4"><img src="h5.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-5"><img src="h6.jpg"></a>
                    </li>
                    
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="h1.jpg" width="500px" height="500px;"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="h2.jpg" width="500px" height="500px;"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="h3.jpg" width="500px" height="500px;"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="h4.jpg" width="500px" height="500px;"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="h5.jpg" width="500px" height="500px;"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="h6.jpg" width="500px" height="500px;"></div>
                                    
                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>
</body>
    </html>