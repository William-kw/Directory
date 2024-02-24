<?php 
    require_once("connexion.php");

    if (isset($_GET["idclient"])) {
        $idclient= $_GET["idclient"];
        $sup_client= $connexion->prepare("DELETE FROM client WHERE ID_CLIENT=? LIMIT 1");
        $res_sup_client= $sup_client->execute(array($idclient));
        if ($res_sup_client) {
            header("location:../pages/Admin/client.php?result=succes_sup");
        }
    }
?>