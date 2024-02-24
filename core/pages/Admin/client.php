<?php
session_start();
require_once("../../fonctions/connexion.php");
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
    <title>Clients</title>
</head>

<body>
    <div class="container-fluid py-0 nav-menu">
        <?php include("menu.php") ?>
        <div class="row">
            <div class="col">
                <h3>Les clients</h3>
            </div>
            <div class="col">
                <select name="trie" class="trie" id="">
                    <option value="">Trier par</option>
                    <option value="">Nom</option>
                    <option value="">Date</option>
                    <option value="">Croissant</option>
                </select>
            </div>
            <div class="col">
                <button class="ajouter" id="ajouter" onclick="masquer()"><h3>+ </h3>Ajouter</button>
            </div>
            <?php
            if (isset($_GET['result'])) {
                $result = $_GET['result'];
                if ($result == "vide") {
                    echo "<div id='result' class='erreur'>
                <i class='fa-solid fa-xmark' onclick='masquerResult()' id='fermer'></i><p>Remplir tous les champs !!!</p></div>";
                }
                if ($result == "succes") {
                    echo "<div id='result' class='succes'>
                <i class='fa-solid fa-xmark' onclick='masquerResult()' id='fermer'></i><p>Ajout Réussie !!!</p></div>";
                }
                if ($result == "echec") {
                    echo "<div id='result' class='erreur'>
                <i class='fa-solid fa-xmark' onclick='masquerResult()' id='fermer'></i><p>Echec de l'ajout !!!</p></div>";
                }
            }
            $count = $connexion->query("SELECT COUNT(ID_CLIENT) AS NB FROM client");
            $tcount = $count->fetch();
            @$page = $_GET["page"];
            if (empty($page)) $page = 1;
            $nb_el = 10;
            $nb_pa = ceil($tcount["NB"] / $nb_el);
            $debut = ($page - 1) * $nb_el;
            ?>
        </div>
        <div class="row py-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">CNI</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $req = $connexion->query("SELECT *
                                                    FROM client
                                                    ORDER BY ID_CLIENT LIMIT $debut, $nb_el");
                    if ($req->rowCount() == 0) header("location:client.php");
                    while ($aff = $req->fetch()) {
                    ?>
                        <tr>
                            <th scope="row"><?= $aff['ID_CLIENT']; ?></th>
                            <td><?= $aff['CNI']; ?></td>
                            <td><?= $aff['NOMS_CLIENT']; ?></td>
                            <td><?= $aff['TELEPHONE_CLIENT']; ?></td>
                            <td><?= $aff['SEXE_CLIENT']; ?></td>
                            <td>
                                <a href="modifier_client.php?idclient=<?= $aff['ID_CLIENT']; ?>" class="modifier" title="Modifier"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="../../fonctions/supprimer.php?idclient=<?= $aff['ID_CLIENT']; ?>" class="supprimer" Onclick="return confirm('Voulez vous vraiment supprimer ?')" title="Supprimer"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="pagination">
                <?php
                $p = $page - 1;
                $s = $page + 1;
                echo "<a href='?page=$p' class='lien-fleche'><i class='fa-solid fa-arrow-left'></i></a>";
                for ($i = 1; $i <= $nb_pa; $i++) {
                    if ($page != $i) {
                        echo "<a href='?page=$i' class='lien'>$i</a>";
                    } else {
                        echo "<a href='?page=$i' class='lien-courant'>$i</a>";
                    }
                }
                echo "<a href='?page=$s' class='lien-fleche'><i class='fa-solid fa-arrow-right'></i></a>";
                ?>
            </div>

        </div>
        <div class="form" id="form">
            <div class="form-content">
                <i class="fa-solid fa-xmark" onclick="masquer()" id="fermer"></i>
                <h5>Ajouter un nouveau client</h5>
                <form action="../../fonctions/insertion.php" method="post" enctype="multipart/form-data">
                    <input type="text" class="input" name="nom" placeholder="Nom du client" autocomplete="off" required>
                    <input type="text" class="input" name="cni" placeholder="CNI" autocomplete="off" required>
                    <input type="text" class="input" name="telephone" placeholder="Téléphone" autocomplete="off" required>
                    <span>Masculin <input type="radio" class="sexe" value="M" name="sexe">Féminin <input type="radio" value="F" class="sexe" name="sexe"></span>
                    <input type="file" name="photo">
                    <input type="submit" style="margin-top: 25px;" class="input" name="subClient" value="Enregistrer">
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
    function masquerResult() {
        var result = document.getElementById("result");
        if (result.style.display === "block") {
            result.style.display = "none";
        } else {
            result.style.display = "block";
        }
    }
</script>
<style>
    .barre-verticale .menu ul li .client {
        background-color: #ebcd6e;
        opacity: 1;
        transition: 0.8s;
        border-left: 2px solid #000;
    }
</style>