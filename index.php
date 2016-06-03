<?php include('header.php'); ?>

    <div class="index">
        <div class="title">
            <h2 class="websitetitle">Propulses des projets ambitieux,</h2>
            <h2 class="websitetitle">Gratuitement.</h2>
        </div>

        <iframe class="videopresentation" width="560" height="315" src="https://www.youtube.com/embed/SYM-RJwSGQ8?list=RDY7OCgi7rANc" frameborder="0" allowfullscreen></iframe>

        <a id="indexbtn" href="#LesProjets" type="button" class="button button-primary btnindex"><i class="fa fa-arrow-down" aria-hidden="true"></i> Découvrir des projets ! <i class="fa fa-arrow-down" aria-hidden="true"></i>
        </a>

        <div class="separation"></div>

        <div id="LesProjets">
            <div class="index-projet">
                <h3>Les savanturiers</h3>
                <img class="img-projet" src="images/projets/savanturiers.png" alt="Illustration projet">
                <p>Les Savanturiers – Ecole de la Recherche est un programme éducatif qui vise à introduire les méthodes et l’éthique de la recherche dans les écoles et dans les ateliers périscolaires.</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">3420 Jump'</div>
                </div>
                <button onclick="document.location.href='/PFA/singleprojet.php'" class="button button-thirdary">Découvrir</button>
                <button  data-toggle="modal" data-target="#connexionPopup" class="button button-secondary">Jumper le projet</button>
            </div>
            <div class="index-projet">
                <h3>Adn & Vous</h3>
                <img class="img-projet" src="images/projets/adn.png" alt="Illustration projet">
                <p>L’Agence du Don en Nature collecte des produits neufs non alimentaires invendus et non périmé auprès des entreprises, associations et les redistribue aux plus démunis en France.</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">6541 Jump'</div>
                </div>
                <button onclick="document.location.href='/PFA/singleprojet.php'" class="button button-thirdary">Découvrir</button>
                <button  data-toggle="modal" data-target="#connexionPopup" class="button button-secondary">Jumper le projet</button>
            </div>
            <div class="index-projet">
                <h3>Uniterres</h3>
                <img class="img-projet" src="images/projets/uniterres.png" alt="Illustration projet">
                <p>Uniterres, programme de l’association ANDES, soutient l’agriculture paysanne et favorise l’accès de personnes en situation précaire à une alimentation saine et de qualité.</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width:54%">4874 Jump'</div>
                </div>
                <button onclick="document.location.href='/PFA/singleprojet.php'" class="button button-thirdary">Découvrir</button>
                <button  data-toggle="modal" data-target="#connexionPopup" class="button button-secondary">Jumper le projet</button>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>