<?php
$chemin = $_POST["chemin"];
$saut = $_POST["saut"];
$ens = $_POST["ens"];
$route = "up ip route add " . $chemin . " via " . $saut . " dev " . $ens . "";
echo $route;
echo "\n";
$cmd = "echo '" . $route . "' >> /etc/network/interfaces";
echo $cmd;
echo "\n";
$output = system($cmd);
//echo system('cat /etc/network/interfaces');
?>
