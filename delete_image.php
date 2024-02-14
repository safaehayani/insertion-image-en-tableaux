<?php
include("config.php");

if(isset($_GET['image_id'])) {
    $imageId = $_GET['image_id'];

    // Supprimer l'image de la base de données
    $sql = "DELETE FROM images WHERE id = $imageId";
    $result = mysqli_query($con, $sql);

    if($result) {
        // Rediriger vers la page des images après la suppression
        header("Location: all_image.php");
        exit();
    } else {
        echo "Erreur lors de la suppression de l'image.";
    }
} else {
    echo "ID d'image manquant.";
}
?>
