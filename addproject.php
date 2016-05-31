<?php include('header.php'); ?>

    <div class="addprojet">
        <form>
            <p>Nom de la structure:</p>
            <input type="text" name="structureName">
            <p>Type de la structure:</p>
            <select name="le_nom" id="le_nom">
                <option>Association</option>
                <option>Entreprise</option>
                <option>Fondation</option>
            </select>
            <h2>Vous</h2>
            <p>Nom du chef de projet:</p>
            <input type="text" name="lastname">
            <p>Prénom du chef de projet:</p>
            <input type="text" name="firstname">
            <p>Adresse mail du chef de projet:</p>
            <input type="text" name="mail">
            <p>Adresse postale:</p>
            <input type="text" name="adresse">
            <p>Ville:</p>
            <input type="text" name="ville">
            <p>Code postal:</p>
            <input type="text" name="codepostal">
            <p>Numéro de téléphone:</p>
            <input type="text" name="codepostal">
            <h2>Le projet</h2>
            <p>Résumé du projet: <span>(2000 caractères maximum)</span></p>
            <textarea name="resume" id="resume" cols="30" rows="10"></textarea>
            <p>Objectif du projet: <span>(2000 caractères maximum)</span></p>
            <textarea name="objectif" id="objectif" cols="30" rows="10"></textarea>
            <p>Année de création et début du projets: <span>(2000 caractères maximum)</span></p>
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
    </div>

    <?php include('footer.php'); ?>