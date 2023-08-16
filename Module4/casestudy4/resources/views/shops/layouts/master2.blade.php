<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Wizym-Templae</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/stylesheets/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/all.min.css')}}">
   

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/stylesheets/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/stylesheets/responsive.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/stylesheets/colors/color1.css')}}" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/stylesheets/animate.css')}}">

    <!-- Favicon and touch icons  -->
    <link href="icon/icon.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/icon.png" rel="apple-touch-icon-precomposed">
    <link href="icon/icon.png" rel="shortcut icon">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/rev-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/rev-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('shop/asset/rev-slider/css/navigation.css')}}">
</head>

<body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div> <!-- /.loading-overlay -->
    @include('shops.includes.headerlogin')


    @yield('content')


    @include('shops.includes.footer')

    <a id="scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a> <!-- /#scroll-top -->

    <script src="{{asset('shop/asset/javascript/jquery.min.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/rev-slider.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/owl.carousel.min.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/jquery-countTo.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/jquery-waypoints.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/bootstrap.min.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/jquery.easing.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/main.js')}}"></script>

    <!-- Slider -->
    <script src="{{asset('shop/asset/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('shop/asset/javascript/rev-slider.js')}}"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('shop/asset/rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

    </script>
    <script src="{{asset('font-awesome/js/all.min.js')}}"></script>
    <script>
        var ENDPOINT = "{{route('home.index')}}";
        var page = 1;

        $(".load-more-product").click(function() {
            page++;
            LoadMore(page);
        });

        function LoadMore(page) {
            $.ajax({
                url: ENDPOINT + "?page=" + page,
                dataType: "json",
                type: "GET",
                beforeSend: function() {
                    $('#auto_load').show();
                },
                success: function(response) {
                    console.log(response);
                    if (response.html == '') {
                        $('#auto_load').html("End");
                        return;
                    }
                    $('#auto_load').hide();
                    $("#data-wrapper").append("<div class='row'>" + response.html + "</div>");
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Server error occurred: ');
                }
            });
        }
    </script>

</body>

</html>