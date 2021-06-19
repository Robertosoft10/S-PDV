<?php
session_start();
include_once '../App/conection.php';

$sql = "INSERT INTO tb_numpeds(idNumPed, datePed)VALUES(null, NOW())";
$save = $conection->query($sql);
if($save == true){
$_SESSION['nPEdidook'] = "Número de pedido inserido com sucesso! Pode finalizar seu pedido";
header('location: ../View/view-shopping.cart.php');
}
?>