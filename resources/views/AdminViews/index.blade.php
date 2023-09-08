<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preadmin.dreamguystech.com/html/inventory/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Aug 2023 04:40:29 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Page</title>
    @include('AdminViews.Layouts.head')
</head>

<body>

    <div class="main-wrapper">
      @include('AdminViews.Layouts.header')

      @include('AdminViews.Layouts.sidebar')

      @includeWhen($page, 'AdminViews.Pages.'. $page)

    </div>

    @include("AdminViews.Layouts.footer")
</body>

<!-- Mirrored from preadmin.dreamguystech.com/html/inventory/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Aug 2023 04:41:30 GMT -->

</html>
