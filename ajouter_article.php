<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Affichage menu
        require_once 'menu_vendeur.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Document</title> -->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/style_vendeur.css">
        
    </head>
    <body>
        <div class="wrapper">
            <div class="main_container">
                <div class="item">
                    <h1 class="liste"> - Enregistrement Article - </h1>
                    <form action="ajouter_article.php" method="POST" class="form">
                        <label for="">Nom article</label>
                        <input type="text" required placeholder="Nom Article" name="nom"><br><br>
                        <label for="">Description</label>
                        <input type="text" required placeholder=" Description de l'article" name="description"><br><br>
                        <label for="">Prix</label>
                        <input type="number" required placeholder="Prix unitaire" name="prix"><br><br>
                        <input type="reset" value="Effacer" class="btn-reset">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn-ajouter"></br></br>
                    </form>

                    <?php

                        // Recuperation des donnees entrer par l'utilisateur
                        if(isset($_POST['ajouter'])){

                        // Insertion des donnees dans la base de donnees
                            $req = $db->prepare("INSERT INTO articles(nom, description, prix)VALUE(:nom,:description,:prix)");

                            $req->execute([
                                'nom'=>$_POST['nom'],
                                'description'=>$_POST['description'],
                                'prix'=>$_POST['prix']
                            ]);
                            echo '<center style="color:green;"><span>Article ajouter avec succès</span><center>';
                        }else{
                            // echo "Veuillez remplir tous les champs";
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>