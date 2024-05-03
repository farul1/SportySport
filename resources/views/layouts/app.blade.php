<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>SportyShop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</head>

<body>
    @include('layouts.nav') @yield('content') @vite('resources/js/app.js')
</body>

</html
