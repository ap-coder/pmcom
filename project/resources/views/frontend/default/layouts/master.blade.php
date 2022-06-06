@if(has_option('maintenance', 'status'))
@include(get_extends('maintenance'))
@else
<!DOCTYPE html>
<html lang="{{get_option('language', 'en')}}" dir="{{get_option('direction', 'ltr')}}">
<head>
    <meta charset="utf-8">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P955BTL');</script>
    <!-- End Google Tag Manager -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (isset($page_title))? $page_title. ' | ' : '' }}{{get_option('sitename')}}</title>
    <link rel="icon" href="{{has_option('style', 'favicon')}}">
    @include(get_extends('plugins.headseo'))
    @action('blade_action_header_before')
    @stack('stylesheet')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ get_asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ get_asset('css/style.css') }}?ver=1.5" rel="stylesheet" type="text/css" />
    @stack('header_code')
    @action('blade_action_header_after')
</head>
<body class="@action('blade_body_class')">
    <!-- Google Tag Manager (noscript) --> 
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P955BTL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> 
    @include(get_extends('plugins.pageloader'))
    <div id="wrapper">
        @include(get_extends('layouts.header'))
        <div id="main" class="content-pages">
            @yield('content')
            @include(get_extends('layouts.footer'))
        </div>
    </div>
    @action('blade_action_footer_before') 
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ get_asset('js/app.min.js') }}?ver=1.5"></script>
    @action('blade_action_script')
    <script src="{{ get_asset('js/custom.js') }}?ver=1.5"></script> 
    @stack('scripts')
    @action('blade_action_footer_after')
    @include(get_extends('plugins.cookiebox'))
    @include(get_extends('plugins.crispchat'))

    <script src="{{ get_asset('js/image-scale.js') }}" type="text/javascript"></script>
    <script>
        $(function() {
          $("img.scale").imageScale();
        });
    </script>
</body>
</html>
@endif