<?php
ob_start();
if(($_SESSION['userEmail'] == "") || ($_SESSION['userSenha'] == "")) {
	$_SESSION['secury'] = "Login obrigatório";
	header('location: /../s-pdv/index.php');
}
?>