<?php
$script_path='/var/www/html/Controleur/routage.sh';
$chemin = $_POST["chemin"];
$saut = $_POST["saut"];
$ens = $_POST["ens"];
$output = system("bash {$script_path} {$chemin} {$saut} {$ens}");
echo $output;
?>
