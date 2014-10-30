<?php
session_start();
ob_start();

/*
********************************************************************************************
CONFIGURATION
********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer &agrave; plusieurs &agrave; la fois, s&eacute;parez-les par une virgule
$destinataire = 'loic.entressangle@gmail.com';
$objet = "Contact site 4lsenva.fr";
// copie ? (envoie une copie au visiteur)
$copie = 'oui'; // 'oui' ou 'non'
 
// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a &eacute;chou&eacute;, veuillez r&eacute;essayer SVP.";
 
// Messages d'erreur du formulaire
$message_erreur_formulaire = "Vous devez d'abord <a href=\"index.php\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "V&eacute;rifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
 
/*
********************************************************************************************
FIN DE LA CONFIGURATION
********************************************************************************************
*/
 

if (!isset($_POST['envoi']))
{
     echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
}
else
{

$nom = $_POST['nom'];
$email=  $_POST['email'];
$message= $_POST['message'];

//verif tout est remplis
if($_POST['nom']=="" || $_POST['email']=="" || $_POST['message']=="" || $_POST['captcha']=="")
    echo $message_formulaire_invalide;
else
{
    if($_POST['captcha'] != $_SESSION['captcha'])
        echo 'Le captcha n\'est pas bon.';
//envoi  du message
    else
    {
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
					'Reply-To:'.$email. "\r\n" .
					'X-Mailer:PHP/'.phpversion();
		// Envoi du mail
		if (mail("loic.entressangle@gmail.com", $objet, "Mr/Mme $nom \n$message"))
		{
			echo '<p>'.$message_envoye.'</p>'."\n";
			header ("Refresh: 2;URL=index.php");
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>'."\n";
			header ("Refresh: 2;URL=index.php");
			
		}

    }
             

}
}
?>
