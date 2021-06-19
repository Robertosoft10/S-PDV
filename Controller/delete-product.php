<?php
session_start();
include_once '../App/conection.php';
$idProduct = $_GET['param'];
$imageProduct = $_FILES['imageProduct'];
$sql = "SELECT * FROM tb_products WHERE idProduct='$idProduct'";
$consul = $conection->query($sql);
    while($line = $consul->fetch_array()){
    $arquivo_db = $line['imageProduct'];
}
unlink("../Images/$arquivo_db");

$sql = "DELETE FROM  tb_products WHERE idProduct='$idProduct'";
$delete = $conection->query($sql);

if($delete == true){
    $_SESSION['prodDelok'] = "Registro deletado com sucesso";
   header('location: ../View/view-product.list.php');
}else{
    $_SESSION['proddelerro'] =  "Falha ao deletar o regsitro";
   header('location: ../View/view-product.list.php');
}
?>