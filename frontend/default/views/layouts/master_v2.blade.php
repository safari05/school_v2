<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrontEnd</title>

    @include('views/partials/headerAssetsV2')
</head>
<body>
    <div class="page-wrapper">
          <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader"><img src="images/loader.gif" alt=""></div>
        </div>

        @include('views/partials/headerV2')
        
        <!-- preloader end -->
    </div>
    @yield('content')
    @include('views/partials/footerV2')
    @include('views/partials/footerAssetsV2')
    
</body>
</html>