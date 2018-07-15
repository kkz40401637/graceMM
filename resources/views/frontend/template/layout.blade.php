<!DOCTYPE html>
 <html lang="zxx">

    <head>

        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="keywords" content="HTML5 Template Bemax onepage themeforest" />
        <meta name="description" content="Bemax - Onepage Multi-Purpose HTML5 Template" />
        <meta name="author" content="" />

        <!-- Title  -->
        <title>Grace Myanmar</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{!! asset('frontend/img/lfavicon.ico') !!}" />

    @include('frontend.template.assets.style')
    </head>
    <body>
        <!-- =====================================
        ==== Start Loading -->

        <div class="loading">
            <div class="text-center middle">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        
        <!-- End Loading ====
        ======================================= -->
        <!--  Main Wrap  -->
        <div id="main">
            @include('frontend.template.assets.header')
                @yield('content')
            @include('frontend.template.assets.footer')
        </div>
        <!--  Main Wrap  -->
        
        @include('frontend.template.assets.script')

    </body>
</html>
