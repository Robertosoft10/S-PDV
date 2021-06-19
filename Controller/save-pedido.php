<?php
session_start();

  include_once '../App/conection.php';
   $soma = 0;
   foreach($_SESSION['carrinho'] as $idProduct => $quant){
   $sql   = "SELECT * FROM tb_products WHERE idProduct='$idProduct'";
   $consult = $conection->query($sql);
   $line = $consult->fetch_array();
   $subTotal = $line['precoProduct'] * $quant;
   $soma += $line['precoProduct']  * $quant;
   $preco = $line['precoProduct'];
   $codPed = $_GET['param'];

$sql = "INSERT INTO  tb_pedids(codPed, productId, preco, quant, valor, dataPed)VALUES('$codPed', '$idProduct', '$preco', '$quant', '$soma', NOW())";
$save = $conection->query($sql);
if($save == true){
   $_SESSION['pedidook'] =  "Pedido finalizado com sucesso!";
   header('location: ../View/view-requests.php');
}else{
	$_SESSION['pedidoErro'] =  "Erro ao finalizar pedido tente novamente! ou consute o Administrado";
   header('location: ../View/view-requests.php');
}
}
?>