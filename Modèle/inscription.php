<?php
    session_start();
    echo "Votre pseudo est : " . $_POST['pseudo'] . ", votre mot de passe est : " . $_POST['pwd'] ." et votre mail est " . $_POST['email'];
    include('bdd_Connect.php');
    $req = $bdd->prepare("INSERT INTO user (pseudo, pwd, email) VALUES (:pseudo,:pwd,:email)");
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],
        'pwq' => $_POST['pwd'],
        'email' => $_POST ['email'])
    );
    header('Location: connexion.html');
?>