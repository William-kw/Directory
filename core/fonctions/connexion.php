<?php 
    try {
        $connexion= new PDO ("mysql:host=localhost; dbname=directory", "root", "");
    } catch (PDOException $th) {
        echo "Echec Connexion".$th->getMessage();
    }
?>