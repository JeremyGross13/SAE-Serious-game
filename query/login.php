<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

include "../connection/connection.php";
$con = connect();

// Si clic sur le bouton se connecter
if (isset($_POST["login"])) {

    // On récupère l'identifiant et le mot de passe de l'utilisateur
    $_SESSION['username'] = $_POST["username"];
    $_SESSION['password'] = $_POST["password"];

    $mot_de_passe_hash = "SELECT mot_de_passe FROM `utilisateur` WHERE identifiant = '".$_SESSION["username"]."'";
    $string = $con ->query($mot_de_passe_hash) ->fetch_assoc();

    if (password_verify($_SESSION['password'], current($string))) {
        // Envoi de la requête
        $sql = " SELECT * FROM `utilisateur` WHERE identifiant = '".$_SESSION["username"]."'";

        $user = $con -> query($sql);

        // Si l'utilisateur existe
        if ($user -> num_rows > 0) {
            while($rows = $user -> fetch_assoc()) {
                echo "<script> alert('Vous êtes connecté" . " " . $_SESSION["username"] . "'); </script>";
            }
        }
        else {
            echo "<script> alert('Identifiant invalide'); </script>";
        }
    }
}
?>
