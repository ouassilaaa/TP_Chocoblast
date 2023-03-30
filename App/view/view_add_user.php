<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="../addUser.php" method="post" enctype="multipart/form-data">
        <p>Saisir le nom du fichier : </p>
        <input type="text" name="nom">
        <p>Saisir l'adresse mail :</p>
        <input type="email" name="mail">
        <p>Saisir password :</p>
        <input type="password" name="password">
        <p>Choisir un fichier : </p>
        <input type="file" name="image">
        <input type="submit" value="importer" name="submit">
    </form>
    
</body>
</html>