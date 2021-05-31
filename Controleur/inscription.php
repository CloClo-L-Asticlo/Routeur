<?php
    session_start();
    echo "Votre pseudo est : " . $_POST['nameUser'] . ", votre mot de passe est : " . $_POST['passwordUser'] ." et votre mail est " . $_POST['emailUser'];
    include('bdd_Connect.php');
    $req = $bdd->prepare("INSERT INTO user (nameUser, passwordUser, emailUser) VALUES (:nameUser,:passwordUser,:emailUser)");
    $req->execute(array(
        'nameUser' => $_POST['nameUser'],
        'passwordUser' => $_POST['passwordUser'],
        'emailUser' => $_POST ['emailUser'])
    );
    header('Location: connexion.html');
?>