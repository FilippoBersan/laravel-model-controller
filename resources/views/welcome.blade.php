<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <header>
            <div class="d-flex justify-content-center">
                <h1>Larvel Model Controller</h1>
            </div>
        </header>



@foreach ($movies as $movie )
<div class="
 d-flex flex-row">

<div class="card ">
   <h3> {{$movie['title']}}</h3>
   <strong> {{$movie['original_title']}}</strong>
   <p> Lingua: {{$movie['nationality']}}</p>
     <p> Data di uscita: {{$movie['date']}}</p>
   <p>Voto: {{$movie['vote']}}</p>
</div>

</div>
 
@endforeach

        {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt=""> --}}
    </div>

</body>

</html>
