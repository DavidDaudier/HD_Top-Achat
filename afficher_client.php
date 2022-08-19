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

         <!-- Recuperation des donnees de la table client dans la base de donnees gestionstock -->
        <?php $response = $db->query('SELECT *FROM clients'); ?>

        <div class="wrapper">
            <div class="main_container">
                <div class="item">

                    <!-- Affichage de chaque entree une a une -->
                    <h1 class="liste"> - Liste des Clients - </h1></br>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>ADRESSE</th>
                                <th>CODE POSTAL</th>
                                <th>VILLE</th>
                                <th>PAYS</th>
                                <th>TELEPHONE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($donnees = $response->fetch()){?>
                                <tr>
                                    <!-- var_dump($donnees); -->
                                    <td class="id"> <?php echo $donnees['numero'];?></td>
                                    <td> <?php echo $donnees['nom'];?></td>
                                    <td> <?php echo $donnees['prenom'];?></td>
                                    <td> <?php echo $donnees['adresse'];?></td>
                                    <td> <?php echo $donnees['codepostal'];?></td>
                                    <td> <?php echo $donnees['ville'];?></td>
                                    <td> <?php echo $donnees['pays'];?></td>
                                    <td>(+509) <?php echo $donnees['telephone'];?></td>
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