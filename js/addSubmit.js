$(document).ready(function (e) {
    $('#serverDescription').keyup(function () {
        var nombreCaractere = $(this).val().length;
        var msg = '(' + nombreCaractere + ' / 250 caractères)';
        $('#compteur').text(msg);
    })
});

$(document).ready(function (e) {
    $('#serverDescription2').keyup(function () {
        var nombreCaractere = $(this).val().length;
        var msg = '(' + nombreCaractere + ' / 250 caractères)';
        $('#compteur2').text(msg);
    })
});

$(document).ready(function (e) {
    $('#serverDescription3').keyup(function () {
        var nombreCaractere = $(this).val().length;
        var msg = '(' + nombreCaractere + ' / 250 caractères)';
        $('#compteur3').text(msg);
    })
});

$(".submit").click(function (e) {
    e.preventDefault();
    swal("Projet envoyé !", "Merci, nous allons étudié attentivement votre dossier et vous envoyer un e-mail récapitulatif.", "success")
    $(".confirm").click(function (e) {
        document.location.href = "projets.php"
    })
});

$(".partager").click(function (e) {
    e.preventDefault();
    swal({
        title: "Partagez ce projet !",
        text: "Inscrivez le mail de la personne que ce projet intêresserait, vous gagnerez 50 Jumps ! (= 50€)",
        type: "input",
        imageUrl: "/PFA/images/share.png",
        html: true,
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        cancelButtonText: "Annuler",
        inputPlaceholder: "adresse@mail.fr"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("Inscrivez-un mail valide !");
            return false
        }
        swal("Nous l'avons contacté !", "Merci pour cette relation, nous avons crédité votre compte de 50 Jumps ! (50€)", "success");
    });
});

$(".soutenir").click(function (e) {
    e.preventDefault();
    swal({
        title: "Jumper ce projet !",
        text: "Combien de Jump' souhaitez-vous attribuer au projet ?<br> <i>Vous en possêdez actuellement <b>86</b> (= 86€)</i>",
        type: "input",
        imageUrl: "/PFA/images/jumper.png",
        html: true,
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        cancelButtonText: "Annuler",
        inputPlaceholder: "Ecrivez un nombre"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("Vous devez écrire un nombre entier !");
            return false
        }
        swal("C'est fait !", "Vos jumps ont bien été envoyé au projet !", "success");
    });
});

$(".postuler").click(function (e) {
    e.preventDefault();
    swal({
        title: "Proposer une compétence !",
        text: "Vous êtes motivé par ce projet et vous sentez capable de les aider ? Proposez-leurs une de vos compétences !",
        type: "input",
        imageUrl: "/PFA/images/jumper.png",
        html: true,
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        cancelButtonText: "Annuler",
        inputPlaceholder: "Votre e-mail + Votre compétence"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("Merci d'expliquez précisement ce que vous pouvez leur apporter !");
            return false
        }
        swal("C'est envoyé !", "Vous recevrez un mail très prochainement !", "success");
    });
});