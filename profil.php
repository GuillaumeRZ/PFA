<?php include('headerprofil.php'); ?>

    <div class="profil">
        <div class="profilview">
            <div class="header">
                <img src="images/profil/profil.jpg" alt="Illustration profil">
                <p class="titre-profil">Jérémy Guerrier</p>
                <a href="projets.php"><p class="credit-profil">46 Jump' à dépenser (1 Jump' = 1€)</p></a>
                <button onclick="document.location.href='/PFA/profil.php'" class="button button-secondary">Exclusivités</button>
                <button onclick="document.location.href='/PFA/profilSuivis.php'" class="button button-thirdary">Projet suivis</button>
                <button onclick="document.location.href='/PFA/profilParametres.php'" class="button button-primary">Informations et paramètres</button>
            </div>
            <div class="exclusivite">
                <div class="exclusivite-single">
                    <p class="title-exclusivite">L'exclu vidéo de la semaine:</p>
                    <p class="title-advice">Gagner 30 Jump' en visionnant cette vidéo</p>
                    <iframe class="excluvideo" width="560" height="315" src="https://www.youtube.com/embed/nTxH6G1tgxQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>