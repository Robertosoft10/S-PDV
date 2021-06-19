<?php 
session_start();
include_once '../App/conection.php';
$codPed = $_GET['param'];
$codPed = $_GET['param'];

$sql = "SELECT * FROM  tb_razsocial";
$consult = $conection->query($sql);
$lineR = $consult->fetch_array();

$sql = "SELECT * FROM  tb_pedids PD JOIN tb_numpeds NP ON PD.codPed = NP.idNumPed  WHERE codPed='$codPed'";
$consult = $conection->query($sql);
$line = $consult->fetch_array();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>S-PDV</title>
	<link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
	<div class="dado-empresa">
		<br>
		<small id="cupom">NOTA COMPRA<br>
		Nº: <?= $line['codPed'];?></small><br><br>
	<?= $lineR['razName'];?> <br>
	<?= $lineR['razEnderec'];?><br>
	<?= $lineR['razContact1'];?><br>
	<?= $lineR['razContact2'];?><br>
	<hr>
<table class="dado-pedido">
	<tr>
		<td>Produto</td>
		<td>Preço</td>
		<td>Qtd</td>
	</tr>
		<?php
		$sql = "SELECT * FROM  tb_pedids PD JOIN tb_numpeds NP ON PD.codPed = NP.idNumPed JOIN tb_products PT ON PD.productId = PT.idProduct WHERE codPed='$codPed'";
		$consult = $conection->query($sql);
		while($lineList = $consult->fetch_array()){?>
			<tr>
		<td><?= $lineList['nameProduct'];?></td>
		<td>R$ <?= number_format($lineList['precoProduct'], 2, ',', '.');?></td>
		<td><?= $lineList['quant'];?></td>
	</tr>
	<?php } ?>
</table>
<br>
<div class="dado-velor">
	Valor: R$ <?= number_format($line['valor'], 2, ',', '.');?><br>
	Desconto: R$ 0,00<br>
	Total:R$  <?= number_format($line['valor'], 2, ',', '.');?><br>
	Operador(a): <?= $_SESSION['userName'];?><br>
	<?php $data = date('d/m/Y H:i:s', strtotime($line['dataPed']));?>
	Data : <?= $data;?><br><br>
	<button id="btn-print" href="" onClick="window.print()" >Imprimir</button>
	<button id="btn-print-close" href="" onClick="window.close()" >Cancelar</button>
	<br><br>
</div>
</div>


</body>
</html>