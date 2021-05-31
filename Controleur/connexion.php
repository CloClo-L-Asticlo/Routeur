<?php

    include('bdd_Connect.php');
    $req = $bdd->prepare('SELECT idUser, passwordUser FROM user WHERE nameUser = :nameUser');
    $req->execute(array(
        'nameUser' => $_POST['nameUser']));
    $resultat = $req->fetch();


    echo $resultat;
    if (!$resultat) {
        header('Location: connexion.html');
    }
    else {
        if ($_POST['passwordUser'] == $resultat['passwordUser']) {
            session_start();
            header('Location: accueil.html');
            $_SESSION['idUser'] = $resultat['idUser'];
            $_SESSION['nameUser'] = $pseudo;
        }
        else {
            header('Location: connexion.html');
        }
    }

?>