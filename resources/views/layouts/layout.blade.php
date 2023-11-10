<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waroeng Prasmanan</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- CSS dan Bootstrap 5 --}}
    @vite('resources/sass/app.scss')

    
</head>
<body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
    <!-- CDN Bootstrap 5 -->
   

    
</body>
</html>
