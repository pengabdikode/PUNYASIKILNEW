<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('site.partials.styles')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5d8856fd9f6b7a4457e30aee/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    
    <!--End of Tawk.to Script-->
</head>
<body class="ps-loading">
@include('site.partials.header')
@yield('content')
@include('site.partials.footer')
@include('site.partials.scripts')
@yield('scripts')
</body>
<script>
 $(window).on('load', function() {
        $('.ps-loading').addClass('loaded');
    });
</script>
</html>



