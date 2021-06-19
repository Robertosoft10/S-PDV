<?php
session_start();
include_once '../App/conection.php';
$idRaz  = $_GET['param'];
$razName = $_POST['razName'];
$razContact1 = $_POST['razContact1'];
$razContact2 = $_POST['razContact2'];
$razEnderec = $_POST['razEnderec'];

$sql = "UPDATE tb_razsocial SET razName='$razName', razContact1='$razContact1', razContact2='$razContact2', razEnderec='$razEnderec'  WHERE idRaz='$idRaz'";
$update = $conection->query($sql);
if($update == true){
    $_SESSION['razaoAtua'] = "Registro atualizado com sucesso!";
    header('location: ../View/view-config.php');
}else{
    $_SESSION['razaoErroAtua'] =  "Falha ao atualizar registro";
   header('location: ../View/view-config.php');
}
?>