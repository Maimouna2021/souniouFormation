<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SouniouFormation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <h2>Voici la liste de formations</h2>
        <div class="row">
          <div class="col-6">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">titre</th>
                <th scope="col">resume</th>
                <th scope="col">description</th>
              </tr>
            </thead>
            <tbody>
               @foreach($formation as $f)
              <tr>
                  <th scope="row">{{$f->id}}</th>
                  <td>{{$f->titre}}</td>
                  <td>{{$f->resume}}</td>
                  <td>{{$f->description}}</td>
              </tr>
               @endforeach
            </tbody>
          </table>
          </div>
        </div>

    </body>
</html>
