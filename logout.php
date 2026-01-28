<?php
session_start();

session_unset();  //suprimer les variables de la memoire

session_destroy(); //suprimer toute la session
require_once('./inc/library.php');


redirect('login.php');


die();


?>