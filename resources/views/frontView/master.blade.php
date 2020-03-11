<!--
Author: Soft-all
Author URL: http://soft-all.com/
-->
<!DOCTYPE html>
<html>
<head>
<title>Soft-Buy @yield('title_area')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

@yield("css_js")


</head>
<body>
<!-- header -->

@include('frontView.include.header_include')

<!-- //header-bot -->
<!-- banner -->

@include('frontView.include.menu')

<!-- //banner-top -->
<!-- banner -->

@yield("banner")

<!-- //banner -->
<!-- content -->



@yield("products")

<!-- //product-nav -->

@include("frontView.include.cupons")

<!-- footer -->
@include('frontView.include.footer')
<!-- //login -->
</body>
</html>
