<?php
session_start();
include_once '../App/conection.php';
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userNivel = $_POST['userNivel'];
$userSenha = sha1($_POST['userSenha']);
$userImage = $_FILES['userImage'];

if(isset($_FILES['userImage'])){
    $extensao = strtolower(substr($_FILES['userImage']['name'], -4));
    $arquivo = sha1(time()) . $extensao;
    $diretorio = "../Images/";
    move_uploaded_file($_FILES['userImage']['tmp_name'], $diretorio.$arquivo);

$sql = "INSERT INTO tb_users (userName, userEmail, userNivel, userSenha, userImage, userDate)VALUES('$userName', '$userEmail', '$userNivel', '$userSenha', '$arquivo', NOW())";
$save = $conection->query($sql);

if($save == true){
    $_SESSION['userSave'] = "Usuário cadastrado com sucesso!";
    header('location: /../s-pdv/index.php');
}else{
    $_SESSION['usererro'] =  "Falha no cadastro! Campos obrigatórios *";
   header('location: ../Config/index.php');
}
}
?>