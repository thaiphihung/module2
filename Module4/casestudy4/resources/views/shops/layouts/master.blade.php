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
    <link rel="stylesheet" href="{{asset('admin/font-awesome/css/all.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="path/to/your/css/file.css">

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</head>

<body>
    <!-- <div id="loading-overlay">
        <div class="loader"></div>
    </div> /.loading-overlay -->
    @include('shops.includes.header')


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
                        $('.load-more-product').hide(); // Ẩn nút "View more" khi không có dữ liệu
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

    <!-- xử lý card -->
    <script type="text/javascript">
        $(".update-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '/update-cart',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });
        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Bạn có muốn xóa?")) {
                $.ajax({
                    url: '/remove-from-cart',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</body>

</html>