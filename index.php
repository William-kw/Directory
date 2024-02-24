<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/fontawesomev6/css/all.css">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="icon" href="public/img/icon.png">
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/login.js" defer></script>
    <title>Directory</title>
</head>

<body>
    <div class="container-sm text-center corps">
        <div class="row py-3 align-items-center">
            <div class="row py-4 align-seft-center">
                <img src="public/img/logo.png" class="logo-login" srcset="">
            </div>
            <div class="row shadow p-3 bg-body-tertiary rounded-4 p-3 login m-auto">
                <div class="row">
                    <div class="col">
                        <h3>Se connecter</h3>
                    </div>
                </div>
                <div class="row m-auto content-div">
                    <div class="erreur"></div>
                    <form action="core/fonctions/login.php" method="POST" class=" my-2 formulaire">
                        <div class="input-group my-3">
                            <span class="input-group-text login-username"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating">
                                <input type="text" autocomplete="off" name="nom" class="form-control login-username" id="floatingInputGroup1" placeholder="Nom d'utilisateur">
                                <label for="floatingInputGroup1">Nom d'utilisateur</label>
                            </div>
                        </div>
                        <div class="input-group my-3">
                            <span class="input-group-text login-pwd"><i class="fa-solid fa-key"></i></span>
                            <div class="form-floating group-pass">
                                <input type="password" autocomplete="off" name="mdp" class="form-control login-pwd" id="floatingInputGroup2" placeholder="Mot de passe">
                                <label for="floatingInputGroup2">Mot de passe</label>
                            </div>
                            <span class="input-group-text login-pwd">
                                <i class="fa-solid fa-eye" id="showmdp"></i>
                                <i class="fa-solid fa-eye-slash" id="masqmdp" style="display:none;"></i>
                            </span>
                        </div>
                        <input type="submit" class="btn-login" name="connexion" id="connexion" value="Se connecter">
                        <div class="form-group oublie my-2">
                            <a href="C:\Users\William William\Documents\Rapport William\Couverture_William.pdf">Mot de passe oublié ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>