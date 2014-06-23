<?php

$filename = "cptr";
$compteur = file_exists($filename) ? file_get_contents($filename) + 1 : 1;
file_put_contents($filename, $compteur, LOCK_EX);
echo $compteur;

?>