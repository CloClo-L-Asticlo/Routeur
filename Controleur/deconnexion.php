<?php
    session_start();
    include "../Modèle/bdd_Connect.php";
    if ($_POST["action"] == "deconnexion") {
        session_destroy();
        //afficher la view
        header("Location: ../Vue/connexion.html");          
    }
?>