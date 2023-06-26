<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="row p-3 g-3 row-cols-2">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card text-center">
                    <div class="card-header text-bg-primary">Title: {{ $movie->title}}</div>
                    <div class="card-body text-bg-light">
                      <h5 class="card-title">Original title: {{ $movie->original_title}}</h5>
                      <p class="card-text">Nationality: {{ $movie->nationality}}</p>
                      <p class="card-text">Vote: {{ $movie->vote}}</p>
                    </div>
                    <div class="card-footer text-bg-secondary">Date: {{ $movie->date}}</div>
                </div>
            </div>                
            @endforeach
        </div>
    </body>
</html>