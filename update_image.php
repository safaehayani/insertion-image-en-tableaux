<!-- update_image.php -->
<?php
    include("config.php");

    if(isset($_POST['image_id'])) {
        $imageId = $_POST['image_id'];

        if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $imageData = file_get_contents($_FILES['image']['tmp_name']);

            // Utilisation d'une requête préparée pour mettre à jour les données
            $sql = "UPDATE images SET image_data = ? WHERE id = ?";
            $stmt = mysqli_prepare($con, $sql);

            // Liaison des paramètres
            mysqli_stmt_bind_param($stmt, "si", $imageData, $imageId);

            if (mysqli_stmt_execute($stmt)) {
                header("Location: all_image.php");
                exit();
            } else {
                echo "Error updating image.";
            }

            // Fermer la déclaration préparée
            mysqli_stmt_close($stmt);
        } else {
            echo "Error uploading new image.";
        }
    } else {
        echo "Invalid request.";
    }
?>
