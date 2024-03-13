<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Vite --}}
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Header --}}
    <header>
        @include('includes.header')
        <div id="jumbotron"></div>
    </header>

    {{-- Main --}}
    <main></main>

    <footer>
        {{-- Footer Top --}}
        @include('includes.footer_top')
        {{-- Footer Bottom --}}
    </footer>
</body>
</html>