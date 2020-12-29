<?php

// Paramètrage du timezone
date_default_timezone_set("Europe/Paris");


// Ajoutez 1 mois à la date courante:

echo "Nous somme le : ".date('d-m-Y', strtotime('+1 month'));


?>