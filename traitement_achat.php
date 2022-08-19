<?php
    // Connexion a la base de donnees
        require('conn.php');

    // Recuperation l'ID de l'achat
    if(isset($_GET['id_achat'])){
        $id_achat = $_GET['id_achat'];

        $recup = $db->prepare("SELECT *FROM achats WHERE id_achat = ?");
        $recup->execute([$id_achat]);
        $donnees = $recup->fetch();
    }

    // Modification des donnees recuperees de la table client dans la base de donnees gestionstock
    if(isset($_POST['modifier'])){
        $req = $db->prepare("UPDATE achats SET id_client=?, id_article=?, quantite=?, date=?  WHERE id_achat=?");
       $req->execute([
            $_POST['id_client'],
            $_POST['id_article'],
            $_POST['quantite'],
            $_POST['date'],
            $_POST['id_achat']
        ]);
        header('Location:modifier_achat.php');

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
        <link rel="stylesheet" href="css/all.min.css">

        <!-- font pour les boutons submit & reset -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main_container">
            <div class="item">
                <br><h1 class="liste">Modification d'Achat</h1>
                <form action="traitement_achat.php" method="POST" class="form">
                    <label for="">ID Client</label>
                    <input type="number" required placeholder="ID Client" name="id_client" value="<?php echo $donnees['id_client'] ?>" ><br><br><br>
                    <label for="">ID Article</label>
                    <input type="text" required placeholder=" ID Article" name="id_article" value="<?php echo $donnees['id_article'] ?>" ><br><br><br>
                    <label for="">Quantite Achat</label>
                    <input type="number" required placeholder="Prix unitaire" name="quantite" value="<?php echo $donnees['quantite'] ?>" ><br></br><br>
                    <label for="">Date</label>
                    <input type="date" required placeholder="Date achat" name="date" value="<?php echo $donnees['date'] ?>" ><br></br><br>
                   

                    <input type="hidden" name="id_achat" value="<?php echo $_GET['id_achat'] ?>">
                    <input type="submit" value="Modifier" name="modifier" class="btn-ajouter"></br></br>
                </form>
            </div>
        </div>
    </body>
</html>