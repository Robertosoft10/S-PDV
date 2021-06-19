<?php
session_start();
include_once '../App/conection.php';
$userEmail = $_POST['userEmail'];
$sql = "SELECT * FROM tb_users WHERE userEmail='$userEmail'";
$result = mysqli_query($conection, $sql);
$line = mysqli_num_rows($result);
if($line >= 1){
    $_SESSION['useExiste'] = "Este usuário já estar cadastrado na base de dados";
    header('location: ../View/view-config.php');

}else{
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
    header('location: ../View/view-config.php');
}else{
    $_SESSION['usererro'] =  "Falha no cadastro! Campos obrigatórios *";
   header('location: ../View/view-config.php');
}
}else{
    $_SESSION['usererro'] =   "Falha no cadastro! Campos obrigatórios *";
    header('location: ../View/view-config.php');
}
}
?>