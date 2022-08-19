<?php

    // Connexion a la base de donnees
        require('conn.php');

    // Affichage menu
        require_once 'menu_comptable.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HD Gestion Stock</title>
        <link rel="stylesheet" href="css/style_comptable.css">
        <link rel="stylesheet" href="css/all.min.css">


        <!-- font pour le titre Vendeur -->
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

        <!-- font Nom Entreprise -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

        <!-- font p -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Italianno&display=swap" rel="stylesheet">

        <!-- Font pour les paragraphes infos p -->
        <link href="https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <!-- C O N T E N U E   A F F I C H A G E -->
            <div class="wrapper">
                <div class="main_container">
                    <div class="item">
                        <marquee behavior="right" direction="left">Ce site n'est pas responsive !!!</marquee>
                        <img src="img/banner_comptable.png"class="img-banner">
                        <p>~ Comptabilisez vos données ~</p>
                    </div>
                </div>
            </div>
        <!-- F I N   C O N T E N U E   A F F I C H A G E --> 

    </body>
</html>