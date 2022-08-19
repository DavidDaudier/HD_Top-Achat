<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Recuperation de l'ID de l'article
    if(isset($_GET['reference'])){
        $reference = $_GET['reference'];

        $recup = $db->prepare("SELECT *FROM articles WHERE reference = ?");
        $recup->execute([$reference]);
        $donnees = $recup->fetch();
    }

    // Modification des donnees recuperees de la table client dans la base de donnees gestionstock
    if(isset($_POST['modifier'])){
        $req = $db->prepare("UPDATE articles SET nom=?, description=?, prix=? WHERE reference=?");
       $req->execute([
            $_POST['nom'],
            $_POST['description'],
            $_POST['prix'],
            $_POST['reference']
        ]);
        header('Location:modifier_article.php');

    }
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Modifier Article</title> -->
        <link rel="stylesheet" href="css/style_vendeur.css">
        <link rel="stylesheet" href="css/style_vendeur.css">
        <link rel="stylesheet" href="css/all.min.css">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main_container">
            <div class="item">
                <!-- <center> -->
                <br><h1 class="liste">Modification d'Article</h1>
                <form action="traitement_article.php" method="POST" class="form">
                    <label for="">Nom article</label>
                    <input type="text" required placeholder="Nom article" name="nom" value="<?php echo $donnees['nom'] ?>" ><br><br><br>
                    <label for="">Description</label>
                    <input type="text" required placeholder=" Description de l'article" name="description" value="<?php echo $donnees['description'] ?>" ><br><br><br>
                    <label for="">Prix</label>
                    <input type="number" required placeholder="Prix unitaire" name="prix" value="<?php echo $donnees['prix'] ?>" ><br></br><br>
                   

                    <input type="hidden" name="reference" value="<?php echo $_GET['reference'] ?>">
                    <input type="submit" value="Modifier" name="modifier" class="btn-ajouter"></br></br>
                </form>
                <!-- </center> -->
            </div>
        </div>
    </body>
</html>