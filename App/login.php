<?php
session_start();
include_once 'conection.php';
if(empty($_POST['userEmail']) || empty($_POST['userSenha'])){
	$_SESSION['loginVazio'] = "Não foi informado e-mail e senha de usuário";
	header('location: /../s-pdv/index.php');;
	exit();
}
$userEmail = $_POST['userEmail'];
$userSenha =  sha1($_POST['userSenha']);


$sql = "SELECT * FROM tb_users WHERE userEmail='$userEmail' AND userSenha='$userSenha'";
$consult = $conection->query($sql);
$result = $consult->fetch_assoc();
if(empty($result)) {
  $_SESSION['loginFalse'] = "Usuário  ou senha invalidos!";
  header('location: /../s-pdv/index.php');
}else{
  $_SESSION['idUser'] = $result['idUser'];
  $_SESSION['userName'] = $result['userName'];
  $_SESSION['userEmail'] = $result['userEmail'];
    $_SESSION['userNivel'] = $result['userNivel'];
  $_SESSION['userSenha'] = $result['userSenha'];
  $_SESSION['userImage'] = $result['userImage'];
  header('location: ../View/view-requests.php');
}
?>
