<?php
    function create_route($chemin, $saut, $ens) {
        echo "up ip route add " . $chemin . " via " . $saut . " dev " . $ens ." ";
    }
?> 