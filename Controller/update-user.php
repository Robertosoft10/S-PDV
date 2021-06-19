<?php
session_start();
include_once '../App/conection.php';
$idUser  = $_GET['param'];
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userNivel = $_POST['userNivel'];
$userSenha = sha1($_POST['userSenha']);
$userImage = $_FILES['userImage'];

if(isset($_FILES['userImage'])){
$sql = "SELECT * FROM tb_users WHERE idUser ='$idUser '";
$consul = $conection->query($sql);
    while($line = $consul->fetch_array()){
    $arquivo_db = $line['userImage'];
}
unlink("../Images/$arquivo_db");
    
if(isset($_FILES['userImage'])){
    $extensao = strtolower(substr($_FILES['userImage']['name'], -4));
    $arquivo = sha1(time()) . $extensao;
    $diretorio = "../Images/";
    move_uploaded_file($_FILES['userImage']['tmp_name'], $diretorio.$arquivo);

$sql = "UPDATE tb_users SET userName='$userName', userEmail='$userEmail', userNivel='$userNivel', userSenha='$userSenha', userImage='$arquivo' WHERE idUser='$idUser'";
$update = $conection->query($sql);

    $_SESSION['userAtulSave'] = "Registro atualizado com sucesso!";
    header('location: ../View/view-config.php');

}elseif(!isset($_FILES['userImage'])){
$sql = "UPDATE tb_users SET userName='$userName', userEmail='$userEmail', userNivel='$userNivel', userSenha='$userSenha' WHERE idUser='$idUser'";
$update = $conection->query($sql);
    $_SESSION['userAtulOk'] =  "Registro atualizado com sucesso!";
   header('location: ../View/view-config.php');
}else{
    $_SESSION['userAtulErro'] =   "Falha ao atualizar o registro";
   header('location: ../View/view-config.php');
}
}
?>