<?php
    session_start();
    require_once("connexion.php");

    //creation des clients
    if (isset($_POST["subClient"])) {
        $nom= $_POST["nom"];
        $cni= $_POST["cni"];
        $telephone= $_POST["telephone"];
        $sexe= $_POST["sexe"];
        $photo= $_FILES["photo"]["name"];
        if (!empty($nom) && !empty($cni) && !empty($telephone) && !empty($sexe) && !empty($photo)) {
            $insertClient= $connexion->prepare("INSERT INTO client VALUES(null, ?, ?, ?, ?, ?)"); 
            $resCLient= $insertClient->execute([$cni, $nom, $telephone, $sexe, $photo]);
            if ($resCLient) {
                header("location:../pages/Admin/client.php?result=succes"); 
            } header("location:../pages/Admin/client.php?result=echec");
        } else header("location:../pages/Admin/client.php?result=vide");
    }

    //creation de dossiers
    if (isset($_POST["subDossier"])) {
        $intitule= $_POST["intitule"];
        $adversaire= $_POST["adversaire"];
        $audiance= $_POST["audiance"];
        $client= $_POST['client'];
        $tribunal= $_POST['tribunal'];
        $user= $_SESSION["loged"][0];
        $date= date("Y-m-d");
        if (!empty($intitule) && !empty($adversaire) && !empty($audiance) && !empty($client) && !empty($tribunal)) {
            $user= $_SESSION["loged"][0];
            $date= date("Y-m-d");
            $partager= 0;
            $insertDossier= $connexion->prepare("INSERT INTO dossier VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?)");
            $resDossier= $insertDossier->execute([$client, $tribunal, $user, $intitule, $date, $adversaire, $audiance, $partager]);
            if ($resDossier) {
                $nomDossier= $intitule."-".$user;
                $chemin= "../bibliothèque/".$nomDossier;
                $mk= mkdir($chemin, 0777, true);
                if ($mk) {
                    header("location:../pages/Admin/dossier.php?result=succes");
                } else header("location:../pages/Admin/dossier.php?result=echec-mk");
            } else header("location:../pages/Admin/dossier.php?result=echec-insert");
        } else header("location:../pages/Admin/dossier.php?result=vide");
    }
?>