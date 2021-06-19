<?php
session_start();
include_once '../App/conection.php';
$codPed = $_GET['param'];
$sql = "DELETE FROM tb_pedids WHERE codPed='$codPed'";
$sql = "DELETE FROM tb_pedids, tb_numpeds 
		USING tb_pedids INNER JOIN tb_numpeds
		WHERE tb_pedids.codPed = tb_numpeds.idNumPed
    	AND tb_pedids.codPed = '$codPed'";
$delete = $conection->query($sql);

if($delete == true){
    $_SESSION['prodidoDelok'] = "Registro deletado com sucesso";
   header('location: ../View/view-requests.php');
}else{
    $_SESSION['prodidoDelerro'] =  "Falha ao deletar o regsitro";
   header('location: ../View/view-requests.php');
}
?>