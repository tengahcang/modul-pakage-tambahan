<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Controller & View pada laravel</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <h1>Belajar Controller & View pada Laravel</h1>
        {{-- Contoh cara masukkan gambar di file blade dengan pake vite--}}
        <img class="img-thumbnail" alt="image" src="{{ Vite::asset('resources/images/laravel.png') }}">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a href="home" class="btn btn-dark">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
