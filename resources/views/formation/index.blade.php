<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <div class="container" style="margin-top: 80px">
         <h2>Liste des formations</h2>
         <div class="row">
             <div class="col">
                <table class="table">
                  <thead>
                    <tr><th scope="col">id</th></tr>
                    <tr><th scope="col">titre</th></tr>
                    <tr><th scope="col">resume</th></tr>
                    <tr><th scope="col">description</th></tr>
                    </tr>
                  </thead>
                    <tbody>
                        @foreach ($formation as $f)
                        <tr>
                          <th scope="row">{{ $f->id }}</th>
                          <td>{{ $f->titre }}</td>
                         <td>{{ $f->resume }}</td>
                          <td>{{ $f->description }}</td>
                            <td><a href="{{route('formation.show"></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
         </div>

     </div>
</main>
</body>
</html>
