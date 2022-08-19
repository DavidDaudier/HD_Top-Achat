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
        
        <!-- Recuperation des donnees de la table articles dans la base de donnees gestionstock -->
        <?php $response = $db->query('SELECT *FROM articles'); ?>

        <div class="wrapper">
            <div class="main_container">
                <div class="item">
                    
                    <!-- Affichage de chaque entree une a une -->
                    <h1 class="liste"> - Liste des Articles - </h1></br>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOM ARTICLE</th>
                                <th>DESCRIPTION</th>
                                <th>PRIX</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($donnees = $response->fetch()){?>
                                <tr>
                                    <!-- var_dump($donnees); -->
                                    <td class="id"> <?php echo $donnees['reference'];?></td>
                                    <td> <?php echo $donnees['nom'];?></td>
                                    <td> <?php echo $donnees['description'];?></td>
                                    <td> <?php echo $donnees['prix'];?> $ HT</td>
                                </tr>
                            <?php } 
                            
                            // Termine le traitement de la requete
                            $response->closeCursor();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>