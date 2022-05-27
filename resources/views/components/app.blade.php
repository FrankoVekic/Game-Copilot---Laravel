<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-head/>
</head>   
    <body id="default_theme" class="it_service">
        <!-- loader -->
            <div class="bg_load"> <img class="loader_animation" src="{{ env('APP_URL') }}public/images/loaders/loader.png" alt="#" /> </div>
        <!-- end loader -->
        <x-menu/>        
        {{ $slot }}    
        <x-search-modal/>   
        <x-footer/>
        <x-scripts/>
    </body>
</html>
