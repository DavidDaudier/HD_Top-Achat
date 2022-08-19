<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Achat</title>
    <link rel="stylesheet" href="css/style_vendeur.css">
    <link rel="stylesheet" href="css/all.min.css">


    <!-- font pour le titre Vendeur -->
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

    <!-- font Nom Entreprise -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">

    <!-- font pour les boutons submit & reset -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   
</head>
<body>
    
    <!-- C O N T E N U E      A F F I C H A G E -->
        <div class="wrapper">
            
            <div class="top_navbar">
                <div class="top_menu">
                    <div class="text gradient-text">Dashboard Vendeur</div>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-sign-out-alt"></i>
                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            
            <div class="sidebar">

                <div class="logo">
                   <img class="img-logo" src="img/logo.png">
                   <h1 class="titre-entreprise gradient-text">Top Achat</h1>
                   <a href="index_vendeur.php" class="infos"><i class="fas fa-home"></i> Accueil</a>
                </div><br>
                <!-- I N S E R T I O N   D E S   D O N N E E S -->
                <ul>
                    <h3 class="titre gradient-text">
                        <span class="icon-titre gradient-text">
                            <i class="fas fa-users"></i> 
                        </span> CLIENT
                    </h3>
                    <li>
                        <a href="ajouter_client.php">
                            <span class="icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="title">Ajouter</span>
                        </a>
                    </li>
                    <li>
                        <a href="modifier_client.php">
                            <span class="icon">
                                <i class="far fa-edit"></i>
                            </span>
                            <span class="title">Mod./</span>
                            <span class="icon">
                                <i class="far fa-trash-alt"></i>
                            </span>
                            <span class="title">Supp.</span>  
                        </a>
                    </li>
                    <li>
                        <a href="afficher_client.php">
                            <span class="icon">
                                <i class="far fa-address-card"></i>
                            </span>
                            <span class="title">Afficher</span>
                        </a>
                    </li>
                </ul>
            
                <!-- M O D I F I C A T I O N   D E S   D O N N E E S -->
                <ul>
                    <h3 class="titre gradient-text">
                        <span class="icon-titre">
                            <i class="fas fa-cash-register gradient-text"></i>
                        </span> ARTICLE
                    </h3>
                    <li>
                        <a href="ajouter_article.php">
                            <span class="icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="title">Ajouter</span>
                        </a>
                    </li>
                    <li>
                        <a href="modifier_article.php">
                            <span class="icon">
                                <i class="far fa-edit"></i>
                            </span>
                            <span class="title">Mod./</span>
                            <span class="icon">
                                <i class="far fa-trash-alt"></i>
                            </span>
                            <span class="title">Supp.</span>  
                        </a>
                    </li>
                    <li>
                        <a href="afficher_article.php">
                            <span class="icon">
                                <i class="far fa-newspaper"></i>
                            </span>
                            <span class="title">Afficher</span>
                        </a>
                    </li>
                </ul>

                <!-- C O N S U L T A T I O N   D E S   D O N N E E S -->
                <ul>
                    <h3 class="titre gradient-text">
                        <span class="icon-titre gradient-text">
                            <i class="fas fa-shopping-cart"></i>
                        </span> ACHAT
                    </h3>
                    <li>
                        <a href="ajouter_achat.php">
                            <span class="icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="title">Ajouter</span>
                        </a>
                    </li>
                    <li>
                        <a href="modifier_achat.php">
                             <span class="icon">
                                <i class="far fa-edit"></i>
                            </span>
                            <span class="title">Mod./</span>
                            <span class="icon">
                                <i class="far fa-trash-alt"></i>
                            </span>
                            <span class="title">Supp.</span>  
                        </a>
                    </li>
                    <li>
                        <a href="afficher_achat.php">
                            <span class="icon">
                                <i class="fas fa-luggage-cart"></i>
                            </span>
                            <span class="title">Afficher</span>
                        </a>
                    </li>
                </ul>
            </div>


        
        </div>
    <!-- F I N    C O N T E N U E     A F F I C H A G E -->
    

</body>
</html>