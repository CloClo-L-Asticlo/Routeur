<?php
    try {
        $bdd = new PDO('mysql:host=localhost; dbname=Auto-Route; charset=utf8', 'root', '');
    } catch (Exception $E) {
        die ("error : " . $E->getMessage());
    }
?>
