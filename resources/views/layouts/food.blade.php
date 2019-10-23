<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=divice-width, initial-scale">
        
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{-- 各ページ毎にtitleを入れる為 --}}
        <title>@yield('title')</title>
        
        {{-- Script --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        {{-- Font --}}
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        {{-- Styles Laravel標準css--}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- 自作cssの読み込み--}}
        <link href="{{ secure_asset('css/food.css') }}" rel="stylesheet">>
    </head>
    <body>
        <div id="app">
            <main class="py-4">
                {{-- コンテンツを入れる為の＠yield --}}
                @yield('content')
            </main>
        </div>
    /body>
</html>