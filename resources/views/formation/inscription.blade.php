<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <form action="/inscription" method="post">
        {{ csrf_field() }}

        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Mot de passe"><br><br>
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"><br><br>
        <input type="submit" value="M'inscrire">
    </form>
</body>
</html>