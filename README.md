1 Téléchargez le fichier :

2 Installez un serveur web local :
Si vous ne disposez pas déjà d'un serveur web local sur votre machine, vous pouvez utiliser des outils comme XAMPP (pour Windows, Mac, et Linux) ou MAMP (pour Mac) qui incluent Apache, MySQL, et PHP. Installez l'un de ces outils en suivant les instructions fournies.
Placez le fichier dans le répertoire du serveur web local :
Une fois votre serveur local installé, placez le fichier PHP dans le répertoire approprié. Dans XAMPP, par exemple, vous pouvez placer vos fichiers PHP dans le dossier htdocs(.Disque local c aprés xampp aprés htdocs )

3 Démarrez le serveur local :
Démarrez votre serveur local (Apache) à partir de l'interface utilisateur de XAMPP, MAMP ou tout autre outil que vous utilisez.

4 Crée la base de données
Accédez à PHPMyAdmin :Ouvrez votre navigateur et allez à l'URL : http://localhost/phpmyadmin
Connectez-vous à PHPMyAdmin :Connectez-vous avec vos identifiants (par défaut, le nom d'utilisateur est "root" et il n'y a pas de mot de passe).
Créez une nouvelle base de données :Sur le côté gauche, cliquez sur "Nouvelle" pour créer une nouvelle base de données.
Donnez un nom: "t" à votre base de données, choisissez l'ensemble de caractères et cliquez sur "Créer".
Créez une table dans la base de données :Sélectionnez la base de données que vous venez de créer.Cliquez sur "Nouvelle" pour créer une nouvelle table.et nommer:"images"
Définissez le nombre de colonnes"3", leurs noms"id,image_name,image_data", types de données id:int(255)AUTO_INCREMENT,2 image_name:varchar(255);3	image_data:	longblob	, etc., puis cliquez sur "Enregistrer" pour créer la table.

5 Accédez au fichier via votre navigateur :
Ouvrez votre navigateur web et accédez à l'URL locale correspondant au fichier que vous avez placé. Par exemple, si vous avez placé votre fichier dans htdocs avec XAMPP, l'URL pourrait ressembler à http://localhost/insertion-image-en-tableaux-main/

6 Vérifiez le fonctionnement du fichier PHP :
