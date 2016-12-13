<?php

if(isset($_GET['cible'])) {

    switch($_GET['cible']) {}

        case "capteurs":
   s include('controller/capteurs');
            break;

        case "utilisateurs":

            break;

} else {

    include('controller/accueil.php')
}