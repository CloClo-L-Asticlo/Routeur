#!/bin/bash

# Arguments reçu via le form PHP :
# $1 : chemin
# $2 : saut
# $3 : interface réseau
 
# Préparation de la ligne à ajouter dans le fichier de config'
chemin="$1"
saut="$2"
ens="$3"

ligne="up ip route add ${chemin} via ${saut} dev ${ens}"

# Ajout de la ligne dans le fichier de config'
echo "${ligne}" >> /etc/network/interfaces
