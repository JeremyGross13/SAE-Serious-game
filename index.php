<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title> Network Park </title>
    <meta name="description" content="Venez tout apprendre sur les réseaux informatique avec Network Park !">
    <meta name="keywords" content="Network, Réseaux, Informatique, Serious-game">
    <meta name="author" content="Groupe 1 Année 2" >
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/styleBack.css">
    <link rel="icon" href="img/controller.png">
    <script src="JS/script.js"></script>
</head>
<body>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <header>
        <div>
            <button class="boutonConnexion" onclick="connexionPage()" id="boutonconnexion">
                Se connecter / S'inscrire 
            </button>
            <div id="pageConnexion">
                <object id="htmlpage" type="text/html" data="form.php" width="436" height="500"></object>
            </div>
        </div>
    </header>
        <h1>
            Network Park
        </h1>
    <div class="section" id="sectionMenu">
        <div id="description">
            <p id="textDescription">
                Network Park est un serious game pour tout apprendre sur les Réseaux informatique ! <br>
                Apprenez à résoudre des tâches d'adressage IP, les différents modèles (TCP/UDP, OSI, IP)...
            </p>
        </div>
        <div id="menu">
            <button class="boutonJouer" onclick="menuLvl()" id="boutonJouer">
                Commencer
            </button>
        </div>
        <a id="menulvl">
        </a>
    </div>
    <div class="section" id="sectionScore">
        <div id="scores">
            <h2>
                Meilleurs scores :
            </h2>
            
            
            <!--include "connection/connection.php";
            $con = connect();

            $sql = "SELECT meilleurScore FROM 'utilisateur' ORDER BY meilleurScore"; 

            echo $sql;-->

            
        </div>
    </div>
    <script src="script.js"></script>
</body>
