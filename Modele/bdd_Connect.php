<?php
    try {
        $bdd = new PDO('mysql:host=localhost; dbname=auto-route; charset=utf8', 'root', '');
    } catch (Exception $E) {
        die ("error : " . $E->getMessage());
    }
?>