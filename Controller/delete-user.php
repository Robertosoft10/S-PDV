<?php
session_start();
include_once '../App/conection.php';
$idUser   = $_GET['param'];
$sql = "DELETE FROM tb_users WHERE idUser   = '$idUser'";
$delete = $conection->query($sql);

if($delete == true){
    $_SESSION['userDelOk'] = "Registro deletado com sucesso";
   header('location: ../View/view-config.php');
}else{
    $_SESSION['userDelErro'] =  "Falha ao deletar o regsitro";
   header('location: ../View/view-config.php');
}
?>