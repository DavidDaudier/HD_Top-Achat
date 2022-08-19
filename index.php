<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/styleLogin.css">

        <!-- Font type Utilisateur-->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

        <!-- Font login -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="index.php" method="post">
            <h2 class="gradient-text">Login</h2>
            <h4 class="gradient-text">Top Achat</h4>
            <select name="utilisateur" class="select">
                <option value=""> Choix utilisateurs </option>
                <option value="vendeur"> Vendeur </option>
                <option value="comptable"> Comptable </option>
            </select><br><br>
            <input type="text" required class="input" name="nom" placeholder="Nom complet"><br><br>
            <input type="password" required class="input" name="mdp" placeholder="mot de passe"><br><br>
            <input type="submit" class="btn gradient-bg" name="connecter" value="Connecter"><br><br>
            <marquee behavior="right" direction="left"> 
                Utilisateur: Vendeur, Mot de pass: vendeur &nbsp; &nbsp;|&nbsp; &nbsp; Utilisateur: Comptable, Mot de pass: comptable
            </marquee><br>
            <!-- Traitement login -->
            <?php
                // Condition pour connecter
                if(isset($_POST['connecter'])){
                    if($_POST['mdp'] == 'vendeur' &&  $_POST['utilisateur']=='vendeur' ){
                        header('Location:index_vendeur.php');
                    }
                    else if($_POST['mdp'] == 'comptable' &&  $_POST['utilisateur']=='comptable'){
                        header('Location:index_comptable.php');
                    }
                    else{
                        echo "<label><center style='color:red; font-family: Quicksand; letter-spacing: 1px;'><span>Connexion réfusé</span></center></label><br>";
                    }
                }
            ?>

        </form>
    </body>
</html>