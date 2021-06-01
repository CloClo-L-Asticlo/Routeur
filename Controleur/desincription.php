<?php
    include('../Modele/Modele_bdd_connect.php');
    session_start();
    $req = $bdd->prepare("DELETE * FROM user WHERE iduser = :iduser");
        $req->execute(array(
        'iduser' => $_SESSION['iduser'])); 
    header('Location: ../View/View_login.php');
?>