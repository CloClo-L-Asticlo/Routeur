<?php

    include('../Modele/bdd_Connect.php');
    $req = $bdd->prepare('SELECT idUser, passwordUser FROM User WHERE nameUser = :nameUser');
    $req->execute(array(
        'nameUser' => $_POST['nameUser']));
    $resultat = $req->fetch();


    echo $resultat;
    if (!$resultat) {
        header('Location: ../Vue/connexion.html');
    }
    else {
        if ($_POST['passwordUser'] == $resultat['passwordUser']) {
            session_start();
            header('Location: ../Vue/accueil.html');
            $_SESSION['idUser'] = $resultat['idUser'];
            $_SESSION['nameUser'] = $pseudo;
        }
        else {
            header('Location: ../Vue/connexion.html');
        }
    }

?>