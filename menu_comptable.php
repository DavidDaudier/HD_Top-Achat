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

    <!-- font p -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Italianno&display=swap" rel="stylesheet">
   
</head>
<body>
    
    <!-- C O N T E N U E      A F F I C H A G E -->
        <div class="wrapper">
            
            <div class="top_navbar">
                <div class="top_menu">
                    <div class="text gradient-text">Dashboard Comptable</div>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <!-- <i class="fas fa-user"></i> -->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            
            <div class="sidebar">

                <div class="logo">
                   <img class="img-logo" src="img/logo.png">
                   <h1 class="titre-entreprise gradient-text">Top Achat</h1>
                   <a href="index_comptable.php" class="infos"><i class="fas fa-home"></i> Accueil</a>
                </div><br>
                <!--   C L I E N T S   -->
                <ul>
                    <h3 class="titre gradient-text">
                        <span class="icon-titre gradient-text">
                            <i class="fas fa-users"></i> 
                        </span> CLIENT
                    </h3>
                    <li>
                        <a href="#alert-ajout-c">
                            <span class="icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="title">Ajouter</span>
                        </a>

                        <!--  I N F O R M A T I O N    S U R   A J O U T E R  -->
                        <div class="alert-ajout-c" id="alert-ajout-c">
                            <a href="#" class="btn-fermer">X</a>
                            <div class="infos-alert">
                                <p class="p-alert"><i class="fas fa-exclamation-triangle"></i> Désolé!!! vous n'avez pas d'accès d'ajouter un client
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#alert-mod-c">
                            <span class="icon">
                                <i class="far fa-edit"></i>
                            </span>
                            <span class="title">Mod./</span>
                            <span class="icon">
                                <i class="far fa-trash-alt"></i>
                            </span>
                            <span class="title">Supp.</span>  
                        </a>

                        <!--  I N F O R M A T I O N   S U R   M O D I F I E R / S U P P R I M E R  -->
                        <div class="alert-mod-c" id="alert-mod-c">
                            <a href="#" class="btn-fermer">X</a>
                            <div class="infos-alert">
                                <p class="p-alert"><i class="fas fa-exclamation-triangle"></i> Désolé!!! vous n'avez pas d'accès de modifier ou supprimer un client
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="afficher_client_c.php">
                            <span class="icon">
                                <i class="far fa-address-card"></i>
                            </span>
                            <span class="title">Afficher</span>
                        </a>
                    </li>
                </ul>
            
                <!--   A R T I C L E S   -->
                <ul>
                    <h3 class="titre gradient-text">
                        <span class="icon-titre gradient-text">
                            <i class="fas fa-cash-register"></i>
                        </span> ARTICLE
                    </h3>
                    <li>
                        <a href="#alert-ajout-a">
                            <span class="icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="title">Ajouter</span>
                        </a>

                        <!--  I N F O R M A T I O N    S U R   A J O U T E R  -->
                        <div class="alert-ajout-a" id="alert-ajout-a">
                            <a href="#" class="btn-fermer">X</a>
                            <div class="infos-alert">
                                <p class="p-alert"><i class="fas fa-exclamation-triangle"></i> Désolé!!! vous n'avez pas d'accès d'ajouter un article
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#alert-mod-a">
                            <span class="icon">
                                <i class="far fa-edit"></i>
                            </span>
                            <span class="title">Mod./</span>
                            <span class="icon">
                                <i class="far fa-trash-alt"></i>
                            </span>
                            <span class="title">Supp.</span>  
                        </a>

                        <!--  I N F O R M A T I O N   S U R   M O D I F I E R / S U P P R I M E R  -->
                        <div class="alert-mod-a" id="alert-mod-a">
                            <a href="#" class="btn-fermer">X</a>
                            <div class="infos-alert">
                                <p class="p-alert"><i class="fas fa-exclamation-triangle"></i> Désolé!!! vous n'avez pas d'accès de modifier ou supprimer un article
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="afficher_article_c.php">
                            <span class="icon">
                                <i class="far fa-newspaper"></i>
                            </span>
                            <span class="title">Afficher</span>
                        </a>
                    </li>
                </ul>

                <!--   A C H A T S   -->
                <ul>
                    <h3 class="titre gradient-text">
                        <span class="icon-titre gradient-text">
                            <i class="fas fa-shopping-cart"></i>
                        </span> ACHAT
                    </h3>
                    <li>
                        <a href="#alert-ajout-ac">
                            <span class="icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="title">Ajouter</span>
                        </a>

                        <!--  I N F O R M A T I O N    S U R   A J O U T E R  -->
                        <div class="alert-ajout-ac" id="alert-ajout-ac">
                            <a href="#" class="btn-fermer">X</a>
                            <div class="infos-alert">
                                <p class="p-alert"><i class="fas fa-exclamation-triangle"></i> Désolé!!! vous n'avez pas d'accès d'ajouter un achat
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#alert-mod-ac">
                            <span class="icon">
                                <i class="far fa-edit"></i>
                            </span>
                            <span class="title">Mod./</span>
                            <span class="icon">
                                <i class="far fa-trash-alt"></i>
                            </span>
                            <span class="title">Supp.</span>  
                        </a>

                        <!--  I N F O R M A T I O N   S U R   M O D I F I E R / S U P P R I M E R  -->
                        <div class="alert-mod-ac" id="alert-mod-ac">
                            <a href="#" class="btn-fermer">X</a>
                            <div class="infos-alert">
                                <p class="p-alert"><i class="fas fa-exclamation-triangle"></i> Désolé!!! vous n'avez pas d'accès de modifier ou supprimer un achat
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="afficher_achat_c.php">
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