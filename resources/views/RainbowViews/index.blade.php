<!DOCTYPE html>
<!-- 
Template Name: Movie Pro
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from www.webstrot.com/html/moviepro/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 15:29:25 GMT -->

<head>
  @include('RainbowViews.Layouts.head')
</head>

<body>
	@include('RainbowViews.Layouts.header')

	@includeWhen($page, 'RainbowViews.Pages.' . $page)
     @include('RainbowViews.Layouts.footer')
</body>


<!-- Mirrored from www.webstrot.com/html/moviepro/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 15:29:41 GMT -->

</html>