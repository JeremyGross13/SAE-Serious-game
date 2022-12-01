<!DOCTYPE html>
<html lang="fr" id="connexion">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Network Park </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venez tout apprendre sur les réseaux informatique avec Network Park !">
    <meta name="keywords" content="Network, Réseaux, Informatique, Serious-game">
    <meta name="author" content="Groupe 1 Année 2">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login" id="partie1">
                <span class="title">Connexion</span>

                <form action="./query/login.php" method="post">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Entrez votre nom" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Entrez votre mot de passe" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <p id="erreurConnection"></p>
                    <div class="input-field button">
                        <input type="submit" name="login" value="Login" onclick="connection()">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Pas membre?
                        <a href="#" class="text signup-link">Inscrivez-vous</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup" id="partie2">
                <span class="title">Inscription</span>

                <form action="./query/signup.php" method="post">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Entrez votre nom" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" id="createPassword" placeholder="Entrez votre mot de passe" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" id="confirmPassword" placeholder="Confirmez votre mot de passe" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <p id="erreur"></p>
                    <div class="input-field button">
                        <input type="submit" name="signup" value="Signup" onclick="signup()">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Deja membre?
                        <a href="#" class="text login-link">Connectez-vous</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="JS/script2.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>