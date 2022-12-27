<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- font awesome kit --}}
    <script src="https://kit.fontawesome.com/f85f5cbff3.js" crossorigin="anonymous"></script>
    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}" />
    <title>{{$title}}</title>
</head>

<body>
    <div class="bg_decoration"></div>
    {{$slot}}
    <script src="{{asset('js/authPages.js')}}"></script>
</body>
</html>
