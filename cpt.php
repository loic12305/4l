<?php


$ajout=1;
/* ce que je veux ajouter*/

$fichier ="cptr.txt";
/*le fichier a ouvrir*/

$fp=fopen("$fichier","a");
/*ouverture ou creation du fichier si inexistant ! 
(append),on ne teste pas son existence, on en a besoin !*/

fclose($fp);
/*fermeture du fichier , maintenant qu'on est 
sur qu'il est la on va s'en servir!*/

$fp=fopen("$fichier","r+");
/* ouverture en lecture ecriture */

$a=fgets($fp,255);/*
recuperation du contenu si il y a*/

$a=$a+($ajout) ;
/* j'ajoute donc 1 comme indique a la premiere ligne */

fseek($fp,0);
 /*je reviens sur la premiere ligne du fichier*/

fputs($fp,$a);
 /*et j'ecrase le contenu par le resultat de l'addition*/

fclose($fp);
/*fermeture du fichier*/
?>
