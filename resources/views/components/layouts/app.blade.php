<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.bunny.net/css?family=albert-sans:200,300,400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/splide-core.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"></script>

        <title>{{ $title ?? getenv('APP_NAME') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-albert">

        <x-header />

        <div class="pt-20 min-h-[500px]">
            {{ $slot }}
        </div>

        <x-footer />

        <script>
            document.addEventListener( 'DOMContentLoaded', function() {
                 new Splide( '.splide', {
                    type   : 'loop',
                    perPage: 1,
                }).mount();
            } );
        </script>
    </body>
</html>
