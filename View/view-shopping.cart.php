<?php
include '../Includs/header.view-carrinho.php';
if(!isset($_SESSION['carrinho'])){
  $_SESSION['carrinho'] = array();
}
if(isset($_GET['produto'])){

if($_GET['produto'] == 'idProduct'){
    $idProduct = intval($_GET['idProduct']);
    if(!isset($_SESSION['carrinho'][$idProduct])){
        $_SESSION['carrinho'][$idProduct] = 1;
    }else{
      $_SESSION['carrinho'][$idProduct] += 1;
    }
}
if($_GET['produto'] == 'atualizarQtd'){
  if(is_array(@$_POST['atualizar'])){
    foreach($_POST['atualizar'] as $idProduct => $quantidade) {
      $idProduct = intval($idProduct);
      $quantidade = intval($quantidade);
      if(!empty($quantProduto) || $quantidade <> 0){
        $_SESSION['carrinho'][$idProduct] = $quantidade;
      }else{
        unset($_SESSION['carrinho'][$idProduct]);
      }
    }
  }
}
if($_GET['produto'] == 'deleleItem'){
  $idProduct = intval($_GET['idProduct']);
  if(isset($_SESSION['carrinho'][$idProduct])){
    unset($_SESSION['carrinho'][$idProduct]);
  }
}
if($_GET['produto'] == 'cancelar'){
          unset($_SESSION['carrinho']);
      }
}
include_once '../App/conection.php';
$sql = "SELECT *  FROM tb_numpeds ORDER BY idNumPed DESC";
$consultId = $conection->query($sql);
$lineId = $consultId->fetch_array();
?>
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <!-- alertes -->
                    <?php if(isset($_SESSION['nPEdidook'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['nPEdidook'];?>
                    </div>
                    <?php unset($_SESSION['nPEdidook']); } ?>
                     <!-- end alertes -->
                    <div class="data-table-list">
                    
                        <div class="basic-tb-hd">
                            <h3>Carrinho - PDV</h3>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Produto</th>
                                        <th>Preço</th>
                                        <th>QTD</th>
                                        <th>SubTotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php if(@count($_SESSION['carrinho']) == 0){?>
				                <div class="alert alert-danger" role="alert">
				                Carrinho esta vazio! Adicione os produtos
				                </div>
				                 <?php }else{
				                  include_once '../App/conection.php';
				                  $soma = 0;
				                  foreach($_SESSION['carrinho'] as $idProduct => $quant){
				                  $sql   = "SELECT * FROM tb_products WHERE idProduct= '$idProduct'";
				                  $consult = $conection->query($sql);
				                  $line = $consult->fetch_array();
				                  $subTotal = $line['precoProduct'] * $quant;
				                  $soma += $line['precoProduct']  * $quant;
				                  echo '<tr>
				                  <td class="cart-pic first-row">
				                    <a class="btn btn-danger" href="?produto=deleleItem&idProduct='.$idProduct.'">
				                    <i class="fa fa-trash" id="btn-acao-cart"></i></button></a>
				                    <td class="cart-title first-row">
				                    <img id="img-carrinho" src="../Images/'.$line['imageProduct'].'"></td>
				                         </td>
				                         <form  action="?produto=atualizarQtd" method="post">
				                          <td class="p-price first-row" id="dado-pedido">
				                          '.$line['nameProduct'].' 
				                          </td>
                                          <td class="total-price first-row">
                                            R$ '.number_format($line['precoProduct'], 2, ',', '.').'</td>
				                           <td class="qua-col first-row" id="dado-pedido">
				                           <input   id="total-carrinho"  type="text" name="atualizar['.$idProduct.']" value="'.$quant.'">
				                           </td">
				                            <td class="close-td first-row" id="dado-pedido">
				                            R$ '.number_format($subTotal, 2, ',', '.').'
				                              </td>
				                          </tr>';
				                            }
				                          }
				                        ?>
                                </tfoot>
                            </table>
                            <table class="col-lg-12">
                                <tr>
                                    <td colspan="5">
                                      <button id="btn-pedidos" class="btn notika-btn-orange"> <i class="fa fa-refresh"></i> Atualizar Pedido</button>.
                                      </form>  
                                    <a href="view-product.list.php">
                                    <button id="btn-pedidos" class="btn notika-btn-blue"> <i class="fa fa-plus"> </i> Adicionar Produtos</button>.</a>
                                    <?php echo '<a href="?produto=cancelar&idProduct='.@$idProduct.'">
                                     <button id="btn-pedidos" class="btn notika-btn-red"> <i class="fa fa-remove"></i> Cancelar   Pedido</button>
                                     </a>';?>
                                    </td>
                                    <td>   
                                   <small id="total">R$ Total: R$ <?= number_format(@$soma, 2, ',', '.');?></small>
                                    </td>
                                </tr>
                            </table>
                            <div class="btn-table-cart">
                                <?php 
                                $sql = "SELECT  codPed FROM tb_pedids  ORDER BY codPed DESC";
                                $consultId = $conection->query($sql);
                                $lineNp = $consultId->fetch_array();

                               $sql = "SELECT  idNumPed FROM tb_numpeds  ORDER BY idNumPed DESC";
                                $consultId = $conection->query($sql);
                                $lineNumPed = $consultId->fetch_array();
                               if($lineNumPed['idNumPed'] == $lineNp['codPed']){?>
                                <form action="../Controller/new-pedido.php" method="post">
                                <button id="btn-pedidos" class="btn notika-btn-deeppurple col-lg-6 col-md-6 col-sm-6 col-xs-6"><i class="fa fa-plus"></i>  Clique aqui para gerar novo pedido </button>
                                </form>
                                <?php }else{?>
                                <form action="../Controller/save-pedido.php?param=<?= $lineId['idNumPed'];?>" method="post">
                                <button id="btn-pedidos" class="btn notika-btn-green col-lg-6 col-md-6 col-sm-6 col-xs-6"> <i class="fa fa-save"></i> Finalizar Pedido</button>
                                </form>
                                <?php }?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include '../Includs/footer.view-table.php';?>