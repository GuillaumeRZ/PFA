<?php include('headerprofil.php'); ?>

    <div class="profil">
        <div class="profilview">
            <div class="header">
                <img src="images/profil/profil.jpg" alt="Illustration profil">
                <p class="titre-profil">Jérémy Guerrier</p>
                <a href="projets.php">
                    <p class="credit-profil">46 Jump' à dépenser (1 Jumps = 1€)</p>
                </a>
                <button onclick="document.location.href='/PFA/profil.php'" class="button button-secondary">Exclusivités</button>
                <button onclick="document.location.href='/PFA/profilSuivis.php'" class="button button-thirdary">Projet suivis</button>
                <button onclick="document.location.href='/PFA/profilParametres.php'" class="button button-primary">Informations et paramètres</button>
            </div>
            <div class="exclusivite">
                <div class="exclusivite-single">
                    <p class="title-exclusivite">Les projets que vous suivez:</p>
                    <p class="title-advice">Interagissez avec ces projets</p>
                    <div class="projet-suivis">
                        <img src="images/projets/savanturiers.png" alt="Illustration projet suivis">
                        <div class="projet-suivis-title">
                            <a href="singleprojet.php">Les savanturiers</a>
                        </div>
                    </div>
                    <div class="projet-suivis">
                        <img src="images/projets/adn.png" alt="Illustration projet suivis">
                        <div class="projet-suivis-title">
                            <a href="singleprojet.php">Adn & Vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>