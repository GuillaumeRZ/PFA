<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PFA - Fondation de France - Equipe 9</title>
    <link rel="stylesheet" href="library/font-awesome.min.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/ressources.css">
    <script src="library/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="library/bootstrap-3.3.6-dist/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="library/bootstrap-3.3.6-dist/bootstrap.js"></script>
</head>

<body>
    <div class="main-navbar">
        <div class="container-navbar">
            <div class="left-navbar">
                <a href="#" class="principal-menu"><img class="logo-navbar" src="#" alt="Logo"></a>
                <a href="#" class="principal-menu"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Accueil</a>
                <a href="#" class="principal-menu"><i class="fa fa-bullhorn" aria-hidden="true"></i>Les projets</a>
                <a href="#" class="principal-menu"><i class="fa fa-info-circle" aria-hidden="true"></i>A propos</a>
            </div>

            <div class="menu-navbar">
                <div class="align-menu-navbar">
                    <button class="button button-secondary">Soumettre mon projet</button>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
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
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                        </div>
                    </form>
                    <a>Mot de passe oublié ?</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Se connecter</button>
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
                            <input type="text" class="form-control" id="firstname" placeholder="Prénom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="lastname" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"  data-toggle="modal" data-target="#connexionPopup">Annuler</button>
                    <button type="button" class="btn btn-primary">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>




    <iframe width="560" height="315" src="https://www.youtube.com/embed/SYM-RJwSGQ8?list=RDY7OCgi7rANc" frameborder="0" allowfullscreen></iframe>
    <div class="footer">
        <p>footer</p>
    </div>
    <script src="js/connexion.js"></script>
</body>

</html>