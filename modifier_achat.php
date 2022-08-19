<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Affichage menu
        require_once 'menu_vendeur.php';

    // Traitement de la suppression
        if(isset($_GET['numeroAch'])){
            $id = $_GET['numeroAch'];

            // Supprimer la donnee dans la table articles 
            $supp = $db->prepare('DELETE FROM achats WHERE id_achat=?');
            $supp->execute([$id]);
        }
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
                    
                    <h1 class="liste"> - Mod.  &  Supp.  Achat - </h1><br>
                    <!-- Affichage de chaque entree une a une -->
                    <table>
                        <thead>
                            <tr>
                                <th>ID ACHAT</th>
                                <th>ID CLIENT</th>
                                <th>ID ARTICLE</th>
                                <th>QUANTITE</th>
                                <th>DATE</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($donnees = $response->fetch()){?>
                                <tr>
                                    <!-- var_dump($donnees); -->
                                    <td class="id"> <?php echo $donnees['id_achat'];?></td>
                                    <td> <?php echo $donnees['id_client'];?></td>
                                    <td> <?php echo $donnees['id_article'];?></td>
                                    <td> <?php echo $donnees['quantite'];?></td>
                                    <td> <?php echo $donnees['date'];?></td>
                                    <td></td>

                                    <!-- Modifier -->
                                    <td> <a href="traitement_achat.php?id_achat=<?php echo $donnees['id_achat'];?>"class="btn-modifier"><i class="fas fa-edit"></i></a></td>

                                     <!-- Supprimer -->
                                    <td> 
                                        <a href="modifier_achat.php?numeroAch=<?php echo $donnees['id_achat'];?>" class="btn-supprimer"><i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
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