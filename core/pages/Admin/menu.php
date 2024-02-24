<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
<link rel="stylesheet" href="../../../public/css/menu.css">
<link rel="stylesheet" href="../../../public/css/style.css">
<script src="../../../public/js/bootstrap.bundle.min.js" defer></script>
<div class="barre-verticale" id="barreVerticale">
    <div class="logo">
        <a href="index.php"><img src="../../../public/img/logo.png" alt="logo" class="directory"></a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="bord"><i class="fas fa-dashboard"></i>Tableau de bord</a></li>
            <li><a href="dossier.php" class="dossier"><i class="fa-solid fa-folder"></i>Dossiers</a></li>
            <li><a href="document.php" class="document"><i class="fa-solid fa-file-text"></i>Documents</a></li>
            <li><a href="client.php" class="client"><i class="fa-solid fa-user"></i>Clients</a></li>
            <li><a href="profil.php" class="profil"><i class="fa-solid fa-pen-to-square"></i>Mon profil</a></li>
            <li><a href="archive.php" class="archive"><i class="fa-solid fa-cloud-upload"></i>Archiver</a></li>
            <li><a href="message.php" class="message"><i class="fa-solid fa-comments"></i>Messages</a></li>
            <li><a href="utilisateur.php" class="utilisateur"><i class="fa-solid fa-users"></i>Utilisateurs</a></li>
        </ul>
    </div>
</div>
<div class="barre-horizon" id="barreHorizontale">
    <div class="row align-items-center">
        <div class="col-1 home">
            <i class="fa-solid fa-bars" id="bouton"></i>
        </div>
        <div class="col-2"></div>
        <div class="col">
            <div class="search-bar">
                <i class="fa-solid fa-search"></i>
                <input type="search" name="search" id="search" class="search" placeholder="Rechercher...">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-2 user-profil" id="masquer">
            <div class="profil" onclick="plus()">
                <div class="pp">
                    <img src="../../../public/img/<?= $_SESSION['loged'][3]; ?>" alt="User" class="user-pp">
                </div>
                <div class="text">
                    <div class="nom" title="<?= $_SESSION['loged'][1]; ?> : <?= $_SESSION['loged'][4]; ?>">
                        <h3 class="nom"><?= $_SESSION['loged'][1]; ?></h3>
                        <h6 class="nom"><?= $_SESSION['loged'][4]; ?></h5>
                    </div>
                    <div class="notif"> <a href="notification.php"><i class="fa-solid fa-bell"></i></a></div>
                </div>
            </div>
            <div class="plus shadow-sm" id="plus">
                <ul>
                    <li><a href="profil.php"><i class="fa-solid fa-pen-to-square"></i> Profil</a></li>
                    <li><a href="../../fonctions/deconnexion.php" Onclick="return confirm('Vous allez vous déconnecter !')" title="Se déconnecter"><i class="fa-sharp fa-solid fa-power-off"></i> Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container content" id="content">
    <script type="text/javascript">
        function plus() {
            var plus = document.getElementById("plus");
            if (plus.style.display === "block") {
                plus.style.display = "none";
            } else {
                plus.style.display = "block";
            }
        }

        const barreVerticale = document.getElementById('barreVerticale');
        const barreHorizontale = document.getElementById('barreHorizontale');
        const content = document.getElementById('content');
        const bouton = document.getElementById('bouton');

        function reduireOuAgrandir() {
            if (barreVerticale.style.width === '17%') {
                barreVerticale.style.width = '5%';
                barreHorizontale.style.width = '95%';
                content.style.margin = '90px 0 0 7%';
            } else {
                barreVerticale.style.width = '17%';
                barreHorizontale.style.width = '83%';
                content.style.margin = '90px 0 0 17%';
            }
        }
        bouton.addEventListener('click', reduireOuAgrandir);

        function toggleDiv() {
            var div = document.getElementById("maDiv");
            div.style.display = (div.style.display === "none") ? "block" : "none";
        }
    </script>