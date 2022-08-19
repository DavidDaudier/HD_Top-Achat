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
        <!-- <title>Entreprise HD</title> -->
        <link rel="stylesheet" href="css/style_vendeur.css">
        <link rel="stylesheet" href="css/all.min.css">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        
    </head>
    <body>
        
        <div class="wrapper">
            <div class="main_container">
                <div class="item">
                    <h1 class="liste"> - Enregistrement Client - </h1>
                    <form action="ajouter_client.php" method="POST" class="form">
                        <label for="">Nom</label>
                        <input type="text" required placeholder="Nom Client" name="nom"><br><br>
                        <label for="">Prénom</label>
                        <input type="text" required placeholder=" Prénom Client" name="prenom"><br><br>
                        <label for="">Adresse</label>
                        <input type="text" required placeholder="Adresse Client" name="adresse"><br><br>
                        <label for="">Code Postal</label>
                        <input type="number" required placeholder=" Code Postal Client" name="code_postal"><br><br>
                        <label for="">Ville</label>
                        <input type="text" required placeholder="Ville" name="ville"><br><br>
                        <label for="">Pays</label>
                        <select name="pays" id="" >
                            <option value="Haiti">Haiti</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Jamaique">Jamaique</option>
                            <option value="Rep. Dominicaine">Rep. Dominicaine</option>
                            <option value="Porto-Rico">Porto-Rico</option>
                            <option value="Etats-unis">Etats-unis</option>
                            <option value="Canada">Canada</option>
                            <option value="Bresil">Brésil</option>
                            <option value="Chili">Chili</option>
                            <option value="France">France</option>
                        </select><br><br>
                        <label for="">Téléphone</label>
                        <input type="text" required placeholder=" Téléphone Client" name="telephone"><br><br>
                        <input type="reset" value="Effacer" class="btn-reset">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn-ajouter"></br></br>
                    </form>

                    <?php

                    // Recuperation des donnees entrer par l'utilisateur
                        if(isset($_POST['ajouter'])){

                        // Insertion des donnees dans la base de donnees
                            $req = $db->prepare("INSERT INTO clients(nom, prenom, adresse, codepostal, ville, pays, telephone)VALUE(:nom,:prenom,:adresse,:codepostal,:ville,:pays,:telephone)");

                            $req->execute([
                                'nom'=>$_POST['nom'],
                                'prenom'=>$_POST['prenom'],
                                'adresse'=>$_POST['adresse'],
                                'codepostal'=>$_POST['code_postal'],
                                'ville'=>$_POST['ville'],
                                'pays'=>$_POST['pays'],
                                'telephone'=>$_POST['telephone']
                            ]);
                            echo '<center style="color:green;"><span>Client enrégistrer avec succès</span></center>';
                        }else{
                            // echo "Veuillez remplir tous les champs";
                        }
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>