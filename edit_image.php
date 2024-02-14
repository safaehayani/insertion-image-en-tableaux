<!-- edit_image.php -->

<?php
    include("config.php");

    if(isset($_GET['image_id'])) {
        $imageId = $_GET['image_id'];

        // Récupérer les informations de l'image à modifier
        $sql = "SELECT * FROM images WHERE id = $imageId";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Afficher le formulaire pour modifier l'image
            ?>
            

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Edit Image</title>
                <link rel="stylesheet" href="formulaire1.css">
            </head>
            <body>
                <a href="index.php">Home</a>
                
                <div class="container">
    <div class="brand-logo"></div>
    <div class="brand-title">Edit Image</div>
    <div class="inputs">
                <form action="update_image.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="image_id" value="<?php echo $row['id']; ?>">
                    <label for="image">Choose a new image:</label>
                    <input type="file" name="image" id="image" accept="image/*">
                    <button type="submit" value="Upload">Upload</button>
                </form>
            </body>
            </html>
            <?php
        } else {
            echo "Image not found.";
        }
    } else {
        echo "Invalid request.";
    }
?>
