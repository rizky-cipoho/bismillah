<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="icon" href="pngwing.com.ico"/>
    @vite('resources/css/app.css')
</head>
<body>
    <x-header/>
    <div>
        {{ $slot }}
    </div>
    <x-footer/>
</body>
</html>