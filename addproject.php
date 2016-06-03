<?php include('header.php'); ?>

    <div class="addprojet">
        <!--
           <p id="inputBlock">
                    <input id="Animaux" value="Semi-RP" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Animaux" class="fs-subtitle">Semi-RP</label>
                </p>
                <p id="inputBlock">
                    <input id="Sport" value="Sport" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Sport" class="fs-subtitle">Sport</label>
                </p>
                <p id="inputBlock">
                    <input id="Médical" value="Médical" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Médical" class="fs-subtitle">Médical</label>
                </p>
                <p id="inputBlock">
                    <input id="Technologies" value="Technologies" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Technologies" class="fs-subtitle">Technologies</label>
                </p>
                <p id="inputBlock">
                    <input id="Voyage" value="Mini-Jeux" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Voyage" class="fs-subtitle">Mini-Jeux</label>
                </p>
                <p id="inputBlock">
                    <input id="Environnement" value="Environnement" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Environnement" class="fs-subtitle">Environnement</label>
                </p>
                <p id="inputBlock">
                    <input id="Artisanat" value="Artisanat" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Artisanat" class="fs-subtitle">Artisanat</label>
                </p>
                <p id="inputBlock">
                    <input id="roleplay" value="Rôle-Play" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="roleplay" class="fs-subtitle">Rôle-Play</label>
                </p>

                <div class="wrap">
                    <label id="labelAddServer" for="serverVersion">Le serveur accepte t'il les versions crackés ?</label>
                    <input type="checkbox" class="hideInput" id="serverVersion" name="serverVersion" value="crackée" />
                    <label class="slider-v3" for="serverVersion"></label>
                </div>
           
           
        
            <textarea name="time" id="time" cols="30" rows="10"></textarea>
            <p>Catégories: <span>(3 maximums)</span></p>
            <input type="checkbox" name="associations"> associations
            <input type="checkbox" name="animaux">animaux
            <input type="checkbox" name="sport">sport
            <input type="checkbox" name="médical">médical
            <input type="checkbox" name="voyage">voyage
            <input type="checkbox" name="écologie">écologie
            <input type="checkbox" name="jeux">jeux
            <input type="checkbox" name="musique">musique
            <input type="checkbox" name="techno">techno
            <input type="checkbox" name="photographie">photographie
            <input type="checkbox" name="gastronomie">gastronomie
            <input type="checkbox" name="cinéma">cinéma
            <input type="checkbox" name="artisanat">artisanat
            <input type="checkbox" name="spectacle">spectacle
            <input type="checkbox" name="scolarité">scolarité
            <p>Besoin du projet: <span>(2000 caractères maximum)</span></p>
            <textarea name="objectif" id="objectif" cols="30" rows="10" placeholder="Expliquez en détail les besoins, les compétences nécessaire, qui seront par la suite publié à la communauté."></textarea>
            <input type="submit" value="Submit">
                    </form>
                    45c686

-->
        <form id="addServerForm">
            <ul id="progressbar">
                <li class="active">Le projet</li>
                <li>Vos infos</li>
                <li>Les détails</li>
                <li>Vos besoins</li>
            </ul>
            <fieldset>
                <h2 class="fs-title">Soumettez-nous votre projet !</h2>
                <input id="projectname" class="fullInput" type="text" name="firstname" placeholder="Nom du projet" />
                <input id="structuretype" class="fullInput" type="text" name="structuretype" placeholder="Type de structure" />
                <input type="button" name="next" class="next button button-secondary" value="Étape suivante" />
            </fieldset>

            <fieldset id="emptyCheckbox">
                <h2 class="fs-title">Vos informations !</h2>
                <input id="lastname" class="fullInput" type="text" name="lastname" placeholder="Nom du chef de projet" />
                <input id="firstname" class="fullInput" type="text" name="firstname" placeholder="Prénom du chef de projet" />
                <input id="adresse" class="fullInput" type="text" name="adresse" placeholder="Votre adresse" />
                <input id="city" class="fullInput" type="text" name="city" placeholder="Votre ville" />
                <input id="codepostal" class="fullInput" type="text" name="codepostal" placeholder="Votre code postal" />
                <input type="text" id="serverContact" class="fullInput" name="mail" placeholder="Et enfin votre adresse e-mail" />
                <div id="privacyDiv">
                    <p class="fs-subtitle2 privacy">Nous ferons attention à votre adresse email.
                        <br> Vous détestez les spams. Nous aussi.</p>
                </div>
                <input type="button" name="previous" class="previous button button-secondary" value="Étape précèdente" />
                <input type="button" name="next" class="next button button-secondary" value="Étape suivante" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Les détails !</h2>
                <textarea name="description" id="serverDescription" placeholder="Résumé votre projet..." rows=4></textarea>
                <p class="fs-subtitle2"><span id="compteur">(0 / 2000 caractères)</span></p>
                <textarea name="description" id="serverDescription2" placeholder="Objectif du projet..." rows=4></textarea>
                <p class="fs-subtitle2"><span id="compteur2">(0 / 2000 caractères)</span></p>
                <p>Sélectionnez jusqu'à 3 catégories:</p>
                <p id="inputBlock">
                    <input id="Animaux" value="Semi-RP" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Animaux" class="fs-subtitle">Animaux</label>
                </p>
                <p id="inputBlock">
                    <input id="Sport" value="Sport" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Sport" class="fs-subtitle">Sport</label>
                </p>
                <p id="inputBlock">
                    <input id="Médical" value="Médical" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Médical" class="fs-subtitle">Médical</label>
                </p>
                <p id="inputBlock">
                    <input id="Technologies" value="Technologies" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Technologies" class="fs-subtitle">Technologies</label>
                </p>
                <p id="inputBlock">
                    <input id="Voyage" value="voyage" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Voyage" class="fs-subtitle">Voyage</label>
                </p>
                <p id="inputBlock">
                    <input id="Environnement" value="Environnement" name="serverGamemode" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Environnement" class="fs-subtitle">Environnement</label>
                </p>
                <p id="inputBlock">
                    <input id="Artisanat" value="Artisanat" name="projectCat" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Artisanat" class="fs-subtitle">Artisanat</label>
                </p>
                <p id="inputBlock">
                    <input id="Artistique" value="Artistique" name="projectCat" class="checkbox checkbox--native" type="checkbox"></input>
                    <label for="Artistique" class="fs-subtitle">Artistique</label>
                </p>

                <input type="button" name="previous" class="previous button button-secondary" value="Étape précèdente" />
                <input type="button" name="next" class="next button button-secondary" value="Dernière étape" />
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Vos besoins !</h2>
                <textarea name="description" id="serverDescription3" placeholder="Décrivez-nous précisement vos besoins. Ces derniers seront par la suite publié à la communauté." rows=4></textarea>
                <p class="fs-subtitle2"><span id="compteur3">(0 / 2000 caractères)</span></p>

                <input type="button" name="previous" class="previous button button-secondary" value="Étape précèdente" />
                <input type="submit" name="submit" class="submit button button-primary" value="Envoyer" />
            </fieldset>
        </form>
    </div>

    <?php include('footer.php'); ?>