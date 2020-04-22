<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Hébergeur</title>
</head>
<body>
   <main>
        <h1>Hébergeur d'image</h1>

        <form action="./traitement.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="file" name="test-image" id="image">
            </div>

            <div>
                <input type="submit" value="Envoyer" id="submit">
            </div>
        </form>
   </main>