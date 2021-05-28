<?php

    include('bdd_Connect.php');
    $req = $bdd->prepare('SELECT iduser, pwd FROM user WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $_POST['pseudo']));
    $resultat = $req->fetch();


    echo $resultat;
    if (!$resultat) {
        header('Location: connexion.html');
    }
    else {
        if ($_POST['pwd'] == $resultat['pwd']) {
            session_start();
            header('Location: accueil.html');
            $_SESSION['iduser'] = $resultat['iduser'];
            $_SESSION['pseudo'] = $pseudo;
        }
        else {
            header('Location: connexion.html');
        }
    }

?>