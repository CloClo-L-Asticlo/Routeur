#!/bin/sh

"up ip route add ". $_POST["chemin"] ." via ". $_POST["saut"] ." dev ". $_POST["ens"]

echo "up ip route add ". $_POST['chemin'] ." via ". $_POST['saut'] ." dev ". $_POST['ens'] >> /etc/network/interfaces