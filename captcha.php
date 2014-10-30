<?php
function motListe()
{
	$liste = array('trophy', 'course', 'etudiant','raid');
	return $liste[array_rand($liste)];
}

function captcha()
{
	$mot = motListe();
	$_SESSION['captcha'] = $mot;
	return $mot;
}
?>