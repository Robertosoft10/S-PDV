<?php
session_start();
include_once '../App/conection.php';
$idUser  = $_GET['param'];

$userSenha = sha1($_POST['userSenha']);

$sql = "UPDATE tb_users SET userSenha='$userSenha' WHERE idUser='$idUser'";
$update = $conection->query($sql);

if($update == true){
    $_SESSION['passOk'] = "Senha atualizada com sucesso!";
   header('location: /../s-pdv/index.php');

}else{
    $_SESSION['passErro'] =  "Erro ao recuperar senha!";
   header('location: /../s-pdv/index.php');
}
?>