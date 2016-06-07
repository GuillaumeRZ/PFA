<?php include('headerprofil.php'); ?>

    <div class="profil">
        <div class="profilview">
            <div class="header">
                <img src="images/profil/profil.jpg" alt="Illustration profil">
                <p class="titre-profil">Jérémy Guerrier</p>
                <a href="projets.php">
                    <p class="credit-profil">46 Jump' à dépenser (1 Jump' = 1€)</p>
                </a>
                <button onclick="document.location.href='/PFA/profil.php'" class="button button-secondary">Exclusivités</button>
                <button onclick="document.location.href='/PFA/profilSuivis.php'" class="button button-thirdary">Projet suivis</button>
                <button onclick="document.location.href='/PFA/profilParametres.php'" class="button button-primary">Informations et paramètres</button>
            </div>
            <div class="exclusivite" id="addServerForm">
                <div class="exclusivite-single">
                    <p class="title-exclusivite">Informations et paramètres</p>
                    <p class="title-advice">Modifiez si besoin les informations !</p>
                    <input id="projectname" class="fullInput" type="text" name="firstname" placeholder="Jérémy" />
                    <input id="structuretype" class="fullInput" type="text" name="structuretype" placeholder="Guerrier" />
                    <input id="structuretype" class="fullInput" type="text" name="structuretype" placeholder="jeremy.guerrier@gmail.com" />
                    <input id="structuretype" class="fullInput" type="text" name="structuretype" placeholder="Mot de passe" />
                    <input id="structuretype" class="fullInput" type="text" name="structuretype" placeholder="Confirmer le mot de passe" />
                    <p class="title-advice">Completez vos passions et compétences !<br> <i>(20 Jumps / compétences remplis)</i></p>
                    <textarea name="description" id="serverDescription" placeholder="Décrivez-nous vos passions, vos activités..." rows=4></textarea>
                    <p class="fs-subtitle2"><span id="compteur">(0 / 2000 caractères)</span></p>
                    <textarea name="description" id="serverDescription2" placeholder="Décrivez-nous vos compétences, vos capacités..." rows=4></textarea>
                    <p class="fs-subtitle2"><span id="compteur2">(0 / 2000 caractères)</span></p>
                    <button onclick="document.location.href='/PFA/profil.php'" class="button button-secondary">Sauvegarder mon profil !</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>