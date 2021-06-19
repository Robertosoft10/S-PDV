<?php
session_start();
include_once '../App/conection.php';
if(!empty($_POST['nameProduct']) &&!empty($_POST['precoProduct'])){
$nameProduct = $_POST['nameProduct'];
$precoProduct = $_POST['precoProduct'];
$descritionProduct = $_POST['descritionProduct'];
$imageProduct = $_FILES['imageProduct'];

if(isset($_FILES['imageProduct'])){
    $extensao = strtolower(substr($_FILES['imageProduct']['name'], -4));
    $arquivo = sha1(time()) . $extensao;
    $diretorio = "../Images/";
    move_uploaded_file($_FILES['imageProduct']['tmp_name'], $diretorio.$arquivo);

$sql = "INSERT INTO tb_products(nameProduct, precoProduct, descritionProduct, imageProduct)VALUES('$nameProduct', '$precoProduct', '$descritionProduct', '$arquivo')";
$save = $conection->query($sql);
if($save == true){
    $_SESSION['prodSave'] = "Produto cadastrado com sucesso!";
    header('location: ../View/view-product.list.php');
}else{
    $_SESSION['proderro'] =  "Falha no cadastro! Campos obrigatórios *";
   header('location: ../View/view-new.product.php');
}
}
}else{
    $_SESSION['proderro'] =   "Falha no cadastro! Campos obrigatórios *";
    header('location: ../View/view-new.product.php');
}
?>