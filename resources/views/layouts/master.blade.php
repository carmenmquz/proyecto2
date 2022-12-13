<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>A N D R O M E D A</title>
        <!--Con Google Fonts:-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;900&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="/img/marca/logo-sencillo.png">
        <link rel="stylesheet" href="/assets/vista-andromeda.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </body>
</html>
