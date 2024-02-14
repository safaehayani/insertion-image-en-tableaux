

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulaire1.css">
</head>
<body>
   


<div class="container"><!-- Divise la page en sections-->
    <div class="brand-logo"></div>
    <div class="brand-title">Add News item</div><!--Affiche le titre -->
    <div class="inputs">
    <form action="upload.php" method="post" enctype="multipart/form-data"><!--Il envoie les données au fichier "upload.php" via la méthode POST et permet l'envoi de fichiers avec l'encodage "multipart/form-data".-->
        <label for="image">Choose an image:</label>
        <input type="file" name="image" id="image" accept="image/*"><br><br>
        <button type="submit" value="Upload">Upload</button><!--"upload.php" pour traitement.-->
    </form>
</body>
</html>
