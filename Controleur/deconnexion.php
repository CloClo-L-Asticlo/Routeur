<?php
    session_start();
    include "../Modele/Modele_bdd_connect.php";
    if ($_POST["action"] == "deconnexion") {
        session_destroy();
        //afficher la view
        header("Location: ../View/View_login.php");          
    }
?>