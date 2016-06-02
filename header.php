<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PFA - Fondation de France - Equipe 9</title>
    <link rel="stylesheet" href="library/font-awesome.min.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/ressources.css">
    <link rel="stylesheet" href="style/addproject.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/projets.css">
    <link rel="stylesheet" href="library/sweetalert.css">
    <script src="library/jquery-1.12.4.min.js"></script>
    <script src="library/sweetalert.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="library/bootstrap-3.3.6-dist/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="library/bootstrap-3.3.6-dist/bootstrap.js"></script>
</head>

<body>
    <div class="main-navbar">
        <div class="container-navbar">
            <img class="logo-navbar" src="#" alt="Logo Jump'in" />
            <div class="left-navbar">
                <a href="index.php" class="principal-menu"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Accueil</a>
                <a href="projets.php" class="principal-menu"><i class="fa fa-bullhorn" aria-hidden="true"></i>Les projets</a>
                <!--                <a href="about.php" class="principal-menu"><i class="fa fa-info-circle" aria-hidden="true"></i>A propos</a>-->
            </div>

            <div class="menu-navbar">
                <div class="align-menu-navbar">
                    <button onclick="document.location.href='/PFA/addproject.php'" class="button button-secondary">Soumettre mon projet</button>
                    <button type="button" class="button button-primary" data-toggle="modal" data-target="#connexionPopup">Connexion</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Connexion modal -->
    <div class="modal fade" id="connexionPopup" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Connexion</h4>
                    <p class="modal-title" id="exampleModalLabel">Vous êtes à quelques clics de rendre le monde plus beau !</p>
                    <button type="button" class="social-login login-facebook">Connexion Facebook</button>
                    <button type="button" class="social-login login-twitter">Connexion Twitter</button>
                    <button type="button" class="social-login login-mail" data-toggle="modal" data-target="#inscriptionPopup" data-dismiss="modal">Inscrivez-vous par mail</button>
                </div>
                <div class="modal-body">
                    <p>Connexion avec votre adresse mail</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Adresse e-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                        </div>
                        <div class="mdpforget">
                            <a>Mot de passe oublié ?<br></a>
                        </div>
                        <button type="button" class="button button-thirdary" data-dismiss="modal">Annuler</button>
                        <input class="button button-primary" name="submit" type="submit" value="Se connecter" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Inscription modal -->
    <div class="modal" id="inscriptionPopup" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <h4 class="modal-title" id="exampleModalLabel">Inscription</h4>
                </div>
                <div class="modal-body">
                    <p>Entrez les informations relatives à la création de votre compte</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Adresse e-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                        </div>
                        <button type="button" class="button button-thirdary" data-dismiss="modal" data-toggle="modal" data-target="#connexionPopup">Annuler</button>
                        <input class="button button-primary" name="submit" type="submit" value="S'inscrire" />
                    </form>
                </div>
            </div>
        </div>
    </div>