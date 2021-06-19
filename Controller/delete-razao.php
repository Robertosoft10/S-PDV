<?php
session_start();
include_once '../App/conection.php';
$idRaz  = $_GET['param'];
$sql = "DELETE FROM tb_razsocial WHERE idRaz  = '$idRaz'";
$delete = $conection->query($sql);

if($delete == true){
    $_SESSION['razaoDelOk'] = "Registro deletado com sucesso";
   header('location: ../View/view-config.php');
}else{
    $_SESSION['razaoDelErro'] =  "Falha ao deletar o regsitro";
   header('location: ../View/view-config.php');
}
?>