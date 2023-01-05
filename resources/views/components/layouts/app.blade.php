<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- font awesome kit --}}
    <script src="https://kit.fontawesome.com/f85f5cbff3.js" crossorigin="anonymous"></script>
    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/items_page.css') }}" />
    <title>{{ $title }}</title>
</head>
<body>
    {{-- modal --}}
    <x-modal>
        {{$modal}}
    </x-modal>
    <div class="app_main_container">
        {{-- nav --}}
        <x-layouts.nav :$warehouse />
        {{-- main content --}}
        <div class="app_content">
            {{ $slot }}
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>