<?php
session_start();
include_once '../App/conection.php';
$idProduct = $_GET['param'];
$nameProduct = $_POST['nameProduct'];
$precoProduct = $_POST['precoProduct'];
$descritionProduct = $_POST['descritionProduct'];
$imageProduct = $_FILES['imageProduct'];

if(isset($_FILES['imageProduct'])){
$sql = "SELECT * FROM tb_products WHERE idProduct='$idProduct'";
$consul = $conection->query($sql);
    while($line = $consul->fetch_array()){
    $arquivo_db = $line['imageProduct'];
}
unlink("../Images/$arquivo_db");
    
if(isset($_FILES['imageProduct'])){
    $extensao = strtolower(substr($_FILES['imageProduct']['name'], -4));
    $arquivo = sha1(time()) . $extensao;
    $diretorio = "../Images/";
    move_uploaded_file($_FILES['imageProduct']['tmp_name'], $diretorio.$arquivo);

$sql = "UPDATE tb_products SET nameProduct='$nameProduct', precoProduct='$precoProduct', descritionProduct='$descritionProduct', imageProduct='$arquivo' WHERE idProduct='$idProduct'";
$update = $conection->query($sql);

    $_SESSION['prodAtulSave'] = "Registro atualizado com sucesso!";
    header('location: ../View/view-product.list.php');

}elseif(!isset($_FILES['imageProduct'])){
$sql = "UPDATE tb_products SET nameProduct='$nameProduct', precoProduct='$precoProduct', descritionProduct='$descritionProduct' WHERE idProduct='$idProduct'";
$update = $conection->query($sql);
    $_SESSION['prodAtulOk'] =  "Registro atualizado com sucesso!";
   header('location: ../View/view-product.list.php');
}else{
    $_SESSION['prodAtulErro'] =   "Falha ao atualizar o registro";
   header('location: ../View/view-product.list.php');
}
}
?>