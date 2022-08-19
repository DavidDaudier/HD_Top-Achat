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
                    <h1 class="liste"> - Enregistrement Achat - </h1>
                    <form action="ajouter_achat.php" method="POST" class="form">
                        <label for="">ID Client</label>
                        <input type="number" required placeholder="ID Client" name="numero"><br><br>
                        <label for="">ID Article</label>
                        <input type="number" required placeholder=" ID Article" name="reference"><br><br>
                        <label for="">Quantité Achat</label>
                        <input type="number" required placeholder="Quantité achat" name="quantite"><br><br>
                        <label for="">Date</label>
                        <input type="date" required placeholder="Date achat" name="date"><br><br><br>

                        <!-- Quantite articles disponible -->
                        <label for="">Qte Dispo<sup style="color: #f70a0a;">*</sup></label>
                        <input type="" disabled placeholder="50 Articles disponibles" name="qte_dispo"><br><br>

                        <input type="reset" value="Effacer" class="btn-reset">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn-ajouter"></br></br>
                    </form>

                    <?php

                        // Recuperation des donnees entrer par l'utilisateur
                        if(isset($_POST['ajouter'])){


                        // Recuperation de l'ID du client pour enregistrer un achat dans la table achats
                            $reqIDClient = $db->prepare("SELECT numero FROM clients WHERE numero=?");
                            $reqIDClient->execute(array($_POST['numero']));
                            $ajoutIDCl = $reqIDClient->fetch();

                        // Recuperation l'ID de l'article pour enregistrer un achat dans la table achats
                            $reqIDArticle = $db->prepare("SELECT reference FROM articles WHERE reference=?");
                            $reqIDArticle->execute(array($_POST['reference']));
                            $ajoutIDAr = $reqIDArticle->fetch();


                             $_POST['qte_dispo']=50;
                        // Insertion des donnees de la table achat dans la base de donnees gestionstock
                            if($ajoutIDCl['numero']==$_POST['numero'] AND $ajoutIDAr['reference']==$_POST['reference'] AND $_POST['quantite']<=$_POST['qte_dispo']){
                              
                                $req = $db->prepare("INSERT INTO achats(id_client, id_article, quantite, date)VALUES(?, ?, ?, ?)");
                                $req->execute(array($_POST['numero'], $_POST['reference'], $_POST['quantite'], $_POST['date']));
                                echo '<center style="color:green;"><span>Achat enrégistrer avec succès</span></center>';
                                // $_POST['qte_dispo']--;
                                // $_POST['quantite']--;
                            }
                            
                        // Gestion stock (Stock disponible pour que la vente doit enregistrer)
                            else if($_POST['quantite']>$_POST['qte_dispo']){
                                echo '<center style="color:red;"><span>La quantité acheté doit être inferieur à la quantité disponible</span></center>';
                            }
                            else{
                                echo '<center style="color:red;"><span>Le numero du client et la référence de l\'article est introuvable</span></center>';
                            }
                        }else{
                            // echo "Veuillez remplir tous les champs";
                        }
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>