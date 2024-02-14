<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Images</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .blue-background {
            background-color: #3498db; /* Bleu */
            color: white;
        }

        .edit {
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 80%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .edit:hover {
            background: rgba(0, 49, 255, 1);
            color: white;
        }

        .acc_d:hover {
            background: red;
            color: white;
        }

        h1 {
            font-size: 350%;
            font-family: 'Poppins', sans-serif;
        }

        .acc_a {
            color: green;
        }

        .acc_d {
            background: rgba(255, 99, 71, 0.8);
            color: red;
            width: 80%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .back {
            background: rgba(0, 172, 255, 0.19);
            color: rgba(0, 49, 255, 1);
            width: 10%;
            height: 30px;
            border: none;
            border-radius: 10px;
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .back:hover {
            background: rgba(0, 49, 255, 1);
            color: white;
        }

        p {
            font-size: 100%;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <a href="index.php"><i class="fa fa-home" aria-hidden="true"> Home</i></a>

    <table border="0">
        <tr>
            <th class="blue-background">
                Image ID
            </th>
            <th class="blue-background">
                Image Name
            </th>
            <th class="blue-background">
                Image
            </th>
            <th class="blue-background">
                Action
            </th>
        </tr>
        <?php
        include("config.php");

        $sql = "SELECT * FROM images";
        $result = mysqli_query($con, $sql);//Exécute la requête SQL en utilisant la connexion à la base de données "con".

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {//Parcourt chaque ligne de résultat.
        ?>
        <tr>
            <td>
                <?php echo($row['id']); ?>
            </td>
            <td>
                <?php echo($row['image_name']); ?>
            </td>
            <td>
                <?php
                if (!empty($row['image_data'])) {//Cette condition vérifie si le champ image_data dans la ligne actuelle de la base de données n'est pas vide. Cela suggère que les images sont stockées sous forme de données binaires (probablement en format base64) dans la base de données.
                    echo '<img src="data:image/*;base64,' . base64_encode($row['image_data']) . '"  width="100px"alt="Image" class="image-preview">';//Si l'image existe, cette partie du code génère une balise <img> pour afficher l'image. La source (src) de l'image est une URL de données (data:image/*;base64,) suivie de l'encodage base64 des données d'image stockées dans la base de données (base64_encode($row['image_data'])). Cela crée une image en ligne directement à partir des données binaires stockées. De plus, la largeur est fixée à 100 pixels, et une classe image-preview est attribuée à l'image pour d'éventuels styles CSS ou fonctionnalités JavaScript.
                } else {
                    echo 'Aucune image disponible';
                }
                ?>
            </td>
            <td>
                <a href="delete_image.php?image_id=<?php echo $row['id']; ?>" class="btn acc_d">
                    <i class="fas fa-trash-alt"></i> Supprimer
                </a>
                <a href="edit_image.php?image_id=<?php echo $row['id']; ?>" class="btn edit">
                    <i class="fas fa-edit"></i> Modifier
                </a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>
