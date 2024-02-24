<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
<link rel="stylesheet" href="../../../public/css/nav.css">
    <link rel="icon" href="../../../public/img/icon.png">
    <title>Tableau de bord</title>
</head>

<body>
    <div class="container-fluid py-0 nav-menu">
        <?php include("menu.php"); ?>
        <div class="row ligne-chiffre">
            <div class="col-6 nb px-2 shadow-sm bg-light chiffre">
                <div class="nb-corps">
                    <span>
                        <h2>5</h2>
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <h6>Utilisateurs</h6>
                </div>
            </div>
            <div class="col-4 nb px-2 bg-light shadow-sm">
                <div class="nb-corps">
                    <span>
                        <h2>15</h2>
                        <i class="fa-solid fa-folder"></i>
                    </span>
                    <h6>Dossiers</h6>
                </div>
            </div>
            <div class="col-4 nb px-2 bg-light shadow-sm">
                <div class="nb-corps">
                    <span>
                        <h2>2</h2>
                        <i class="fa-solid fa-share"></i>
                    </span>
                    <h6>Dossiers partagés</h6>
                </div>
            </div>
            <div class="col-4 nb px-2 bg-light shadow-sm">
                <div class="nb-corps">
                    <span>
                        <h2>8</h2>
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <h6>Clients</h6>
                </div>
            </div>
            <div class="col-4 nb px-2 bg-light shadow-sm">
                <div class="nb-corps">
                    <span>
                        <h2>8</h2>
                        <i class="fa-solid fa-file-text"></i>
                    </span>
                    <h6>Documents</h6>
                </div>
            </div>
        </div>
        <div class="row historique my-4">
            <div class="col-8 mr-5 bg-light rounded-2 shadow-sm p-4">
                <h4 class="my-2">Historique des modifications</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col bg-light rounded-2 p-4 shadow-sm">
                <div class="renvois">
                    <h5 class="my-2">Dossiers renvoyés</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<style>
    .barre-verticale .menu ul li .bord {
        background-color: #ebcd6e;
        opacity: 1;
        transition: 0.8s;
        border-left: 2px solid #000;
    }
</style>