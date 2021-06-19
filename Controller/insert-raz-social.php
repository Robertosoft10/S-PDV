<?php
session_start();
include_once '../App/conection.php';
if(!empty($_POST['razName']) &&!empty($_POST['razContact1']) &&!empty($_POST['razEnderec'])){
$razName = $_POST['razName'];
$razContact1 = $_POST['razContact1'];
$razContact2 = $_POST['razContact2'];
$razEnderec = $_POST['razEnderec'];

$sql = "INSERT INTO tb_razsocial(razName, razContact1, razContact2, razEnderec)VALUES('$razName', '$razContact1', '$razContact2', '$razEnderec')";
$save = $conection->query($sql);

    $_SESSION['razaoSave'] = "Razão social cadastrada com sucesso!";
    header('location: ../View/view-config.php');
}else{
    $_SESSION['razaoErro'] =  "Falha no cadastro! Campos obrigatórios *";
   header('location: ../View/view-config.php');
}
?>