<?php  
session_start();
require './config.php';
extract($_POST);
if (isset($adminConnect)) {
	$email = htmlspecialchars($email);
	$password = sha1($password);
	$reqAdmin = $bdd ->prepare('SELECT * FROM administrateurs WHERE email = ? AND password = ?');
	$reqAdmin->execute([$email,$password]);
	$adminExist = $reqAdmin->rowCount();
	if ($adminExist == 1) {
		$adminInfo = $reqAdmin->fetch();
		$_SESSION['idAdministrateur'] = $adminInfo['idAdministrateur'];
		$_SESSION['nom'] = $adminInfo['nom'];
		$_SESSION['prenom'] = $adminInfo['prenom'];
		$_SESSION['email'] = $adminInfo['email'];
		header('Location: administrateur/dashboardAdmin/index.php?sessionStartAdmin='.$_SESSION['idAdministrateur']);
	} else{
		$erreur = '<b style="color: red ;">Ce compte administrateur n\'existe pas</b>';
	}
}
?>