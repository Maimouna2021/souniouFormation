<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SouniouFormation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <h1>Bienvenu sur SouniouFormation</h1>
    <form>
  <div class="col-4">
    <label for="exampleInputTitre" class="form-label">Titre</label>
    <input type="text" class="form-control" id="exampleInputTitre" aria-describedby="titrelHelp">
    <div id="TitleHelp" class="form-text">Veuillez entrer le titre svp.</div>
  </div>
  <div class="col-4">
    <label for="exampleInputResume" class="form-label">Resume</label>
    <input type="text" class="form-control" id="exampleInputResume" aria-describedby="ResumelHelp">
    <div id="ResumeHelp" class="form-text">Veuillez saisir le resume svp.</div>
  </div>
  <div class="col-4">
    <label for="exampleInputDescription" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputDescription" aria-describedby="DescriptionlHelp">
    <div id="TitleHelp" class="form-text">Veuillez entrer la description svp.</div>
  </div>
  <div class="col-4">
    <label for="exampleInputDateDemarrage" class="form-label">Date de demarrage</label>
    <input type="date" class="form-control" id="exampleInputDateDemarrage" aria-describedby="DateDemarragelHelp">
    <div id="TitleHelp" class="form-text">Veuillez entrer la dateDemarrage svp.</div>
  </div>
  
  <button type="submit" class="btn btn-success">Ajouter</button>
  <button type="submit" class="btn btn-primary">Lister</button><br><br>
  <button type="submit" class="btn btn-info">Details</button>
  <button type="submit" class="btn btn-warning">Modifier</button><br><br>
  <button type="submit" class="btn btn-danger">Supprimer</button>

</form>
    </body>
</html>
