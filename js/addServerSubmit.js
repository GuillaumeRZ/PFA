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
        document.location.href="projets.php"
    })
});