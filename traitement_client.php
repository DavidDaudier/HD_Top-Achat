<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Recuperation de l'ID du client
    if(isset($_GET['numero'])){
        $numero = $_GET['numero'];

        $recup = $db->prepare("SELECT *FROM clients WHERE numero = ?");
        $recup->execute([$numero]);
        $donnees = $recup->fetch();
    }

    // Modification des donnees recuperees de la table client dans la base de donnees gestionstock
    if(isset($_POST['modifier'])){
        $req = $db->prepare("UPDATE clients SET nom=?, prenom=?, adresse=?, codepostal=?, ville=?, pays=?, telephone=? WHERE numero=?");
        $req->execute([
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['adresse'],
            $_POST['code_postal'],
            $_POST['ville'],
            $_POST['pays'],
            $_POST['telephone'],
            $_POST['numero']
        ]);
        header('Location:modifier_client.php');

    }
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Modifier Client</title> -->
        <link rel="stylesheet" href="css/style_vendeur.css">
        <link rel="stylesheet" href="css/all.min.css">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main_container">
            <div class="item">
                <br><h1 class="liste">Modification du Client</h1>
                <form action="traitement_client.php" method="POST" class="form">
                    <label for="">Nom</label>
                    <input type="text" required placeholder="Nom Client" name="nom" value="<?php echo $donnees['nom'] ?>" ><br><br><br>
                    <label for="">Prénom</label>
                    <input type="text" required placeholder=" Prénom Client" name="prenom" value="<?php echo $donnees['prenom'] ?>" ><br><br><br>
                    <label for="">Adresse</label>
                    <input type="text" required placeholder="Adresse Client" name="adresse" value="<?php echo $donnees['adresse'] ?>" ><br><br><br>
                    <label for="">Code Postal</label>
                    <input type="number" required placeholder=" Code Postal Client" name="code_postal" value="<?php echo $donnees['codepostal'] ?>" ><br><br><br>
                    <label for="">Ville</label>
                    <input type="text" required placeholder="Ville" name="ville" value="<?php echo $donnees['ville'] ?>" ><br><br><br>
                    <label for="">Pays</label>
                    <select name="pays" id="">
                        <option value="Haiti" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="Jamaique" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="Rep. Dominicaine" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="Porto-Rico" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="Etats-unis" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="Canada" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="Bresil" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="Chili" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                        <option value="France" value="<?php echo $donnees['pays'] ?>" > <?php echo $donnees['pays'] ?> </option>
                    </select><br><br><br>
                    <label for="">Telephone</label>
                    <input type="text" required placeholder=" Telephone Client" name="telephone" value="<?php echo $donnees['telephone'] ?>" ><br><br><br>

                    <input type="hidden" name="numero" value="<?php echo $_GET['numero'] ?>">
                    
                    <input type="submit" value="Modifier" name="modifier" class="btn-ajouter"></br></br>
                </form>
            </div>
        </div>
    </body>
</html>