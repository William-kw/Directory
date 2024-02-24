<?php
session_start();
require_once("connexion.php");

$nom = $_POST['nom'];
$mdp = $_POST['mdp'];
if (!empty($nom) && !empty($mdp)) {
    $_SESSION['loged'] = "none";
    $req = $connexion->query("SELECT * FROM utilisateur WHERE NOM = '$nom'");
    if ($req->rowCount() > 0) {
        $aff = $req->fetch();
        if (password_verify($mdp, $aff['MDP'])) {
            $_SESSION['loged'] = array($aff['ID_USER'], $aff['NOM'], $aff['MDP'], $aff['PHOTO'], $aff['ROLE'], $aff['PRIVILEGE']);
            if ($_SESSION['loged'][5] > 1)
                echo "Admin";
            else echo "User";
        } else echo "Mot de passe incorrect !";
    } else echo "Aucun compte trouvé !";
} else echo "Remplir tous les champs !";