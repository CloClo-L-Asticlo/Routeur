<?php
    include('../Modele/bdd_Connect.php');
    session_start();
    $req = $bdd->prepare("DELETE * FROM User WHERE idUser = :idUser");
        $req->execute(array(
        'idUser' => $_SESSION['idUser'])); 
    header('Location: ../Vue/connexion.html');
?>