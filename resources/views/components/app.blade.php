<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-templates.head/>
</head>   
    <body id="default_theme" class="it_service">
        <!-- loader -->
            <div class="bg_load"> <img class="loader_animation" src="{{ env('APP_URL') }}public/images/loaders/loader.png" alt="#" /> </div>
        <!-- end loader -->
        <x-templates.menu/>        
        {{ $slot }}    
        <x-templates.search-modal/>   
        <x-templates.footer/>
        <x-templates.scripts/>
    </body>
</html>
