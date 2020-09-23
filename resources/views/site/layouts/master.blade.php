<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="theme-color" content="#ff6600">

        <link rel="manifest" href="{{ url('manifest.json') }}">

        <meta property="og:locale" content="pt_BR">

        <meta property="og:type" content="website">

        <meta name="google-site-verification" content="g-6BiY4w-I_Eg9AApeNLFOqyeRJb-C7_PNziwQMB2LI">

        @if($seo)

            <meta name="description" content="{{ $seo['description'] }}">

            {{-- <meta name="keywords" content="{{ $seo['keywords'] }}"> --}}

            <meta property="og:title" content="{{ $seo['title'] }}" />

            <meta property="og:description" content="{{ $seo['description'] }}" />

            <meta property="og:image" content="{{ URL::asset('storage/' . $seo['image']) }}" />

            <title>{{ $seo['title'] }}</title>

        @endif

        <meta property="og:url" content="{{ URL::current() }}" />

        <link rel="canonical" href="{{ URL::current() }}" />

        @if($setting)
        <meta property="og:site_name" content="{{ $setting['name_site'] }}" />
            <link rel="icon" href="{{ URL::asset('storage/' . $setting['favicon']) }}" />
        @endif

        <link rel="stylesheet" href="{{ URL::asset('/css/site/app.css?v=') . env('APP_VERSION') }}">

    </head>
    <body>

        @include('site/includes/header')

        @include('site/includes/keywords')

        <div class="container">
            @yield('content')
        </div>

        @include('site/includes/map')

        <footer class="footer">
            @if($setting && $setting['copyright'])
                <p>{{ $setting['copyright'] }}</p>
            @endif
        </footer>

        <script async src="{{ URL::asset('/js/site/app.js?v=') . env('APP_VERSION') }}"></script>

    </body>
</html>
