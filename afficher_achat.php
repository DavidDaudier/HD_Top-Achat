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

        <!-- Recuperation des donnees de la table achat dans la base de donnees gestionstock -->
        <?php $response = $db->query('SELECT *FROM achats'); ?>

        <div class="wrapper">
            <div class="main_container">
                <div class="item">
                    <h1 class="liste"> - Liste des Achats - </h1></br>

                    <!-- Affichage de chaque entree une a une -->
                    <table>
                        <thead>
                            <tr>
                                <th>ID ACHAT</th>
                                <th>ID CLIENT</th>
                                <th>ID ARTICLE</th>
                                <th>QTE ACHETÉ</th>
                                <th>QTE DISPO</th>
                                <th>DATE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $qte_dispo = 50;
                            ?>
                            <?php while($donnees = $response->fetch()){?>
                                <tr>
                                    <!-- var_dump($donnees); -->
                                    <td class="id"> <?php echo $donnees['id_achat'];?></td>
                                    <td> <?php echo $donnees['id_client'];?></td>
                                    <td> <?php echo $donnees['id_article'];?></td>
                                    <td> <?php echo $donnees['quantite'];?></td>
                                    <td> <?php echo $qte_dispo - $donnees['quantite'];?> </td>
                                    <td> <?php echo $donnees['date'];?></td>
                                </tr>
                            <?php }
                            
                            // Termine le traitement de la requete
                            $response->closeCursor();
                            ?>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>