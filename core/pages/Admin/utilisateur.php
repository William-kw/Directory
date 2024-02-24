<?php
session_start();
if ($_SESSION['loged'] === "none") {
    header("location:../../../index.php?result=loged");
} else {
    if ($_SESSION['loged'][5] < 2) {
        session_destroy();
        header("location:../../index.php?result=priv");
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="icon" href="../../../public/img/icon.png">
    <title>Dossiers</title>
</head>

<body>
    <div class="container-fluid py-0 nav-menu">
        <?php include("menu.php") ?>
        <div class="row">
            <div class="col">
                <h3>Les utilisateurs</h3>
            </div>
            <div class="col">
                <select name="trie" class="trie" id="">
                    <option value="">Trier par</option>
                    <option value="">Nom</option>
                    <option value="">Date</option>
                    <option value="">Croissant</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="row bg-light p-3 dossier">
                <div class="col-2 new-dossier mx-4" onclick="masquer()">
                    <span><i class="fa-solid fa-plus"></i><br>Nouveau Dossier</span>
                </div>
            </div>
        </div>
        <div class="form" id="form">
            <div class="form-content">
                <i class="fa-solid fa-xmark" onclick="masquer()" id="fermer"></i>
                <h5>Créer un nouveau dossier</h5>
                <form action="../../fonctions/insertion.php" method="post">
                    <input type="text" class="input" name="intitule" placeholder="Intitulé du dossier" autocomplete="off" required>
                    <input type="text" class="input" name="adversaire" placeholder="Adversaire" autocomplete="off" required>
                    <input type="date" class="input" name="audiance" placeholder="Audiance" autocomplete="off" required>
                    <select name="client" class="input" id="">
                        <option value="">Choisir le client</option>
                        <option value=""></option>
                    </select>
                    <select name="tribunal" class="input" id="">
                        <option value="">Choisir le tribunal</option>
                        <option value=""></option>
                    </select>
                    <input type="submit" style="margin-top: 25px;" class="input" name="subDossier" value="Enregistrer">
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<script>
    function masquer() {
        var form = document.getElementById("form");
        if (form.style.display === "block") {
            form.style.display = "none";
        } else {
            form.style.display = "block";
        }
    }
</script>
<style>
    .barre-verticale .menu ul li .utilisateur {
        background-color: #ebcd6e;
        opacity: 1;
        transition: 0.8s;
        border-left: 2px solid #000;
    }
</style>