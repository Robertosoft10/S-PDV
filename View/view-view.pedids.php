<?php 
include '../Includs/header.view.php';
$codPed = $_GET['param'];
 $sql = "SELECT * FROM  tb_pedids PD JOIN tb_numpeds NP ON PD.codPed = NP.idNumPed JOIN tb_products PT ON PD.productId = PT.idProduct WHERE codPed='$codPed'";
$consult = $conection->query($sql);
$line = $consult->fetch_array();?>
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                    <a href="view-new.product.php">
                        <button id="btn-pedidos" class="btn notika-btn-deeppurple pull-right"> <i class="fa fa-plus"></i> Novo Produto </button></a>
                        <div class="basic-tb-hd">
                            <h2>Detalhes do Pedido</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <?php
                                    $sql = "SELECT * FROM  tb_pedids PD JOIN tb_numpeds NP ON PD.codPed = NP.idNumPed JOIN tb_products PT ON PD.productId = PT.idProduct WHERE codPed='$codPed'";
                                    $consult = $conection->query($sql);
                                    while($lineList = $consult->fetch_array()){?>
                                    <tr>
                                        <td id="td-detalhe-pedi">
                                        <img id="img-det-ped" src="<?= "../Images/".$lineList['imageProduct'];?>"> 
                                        </td>
                                        <td id="text-detalhe">
                                            Produto: <?= $lineList['nameProduct'];?><br>
                                            Preço: R$ <?= number_format($lineList['precoProduct'], 2, ',', '.');?><br>
                                            Descrição: <?= $lineList['descritionProduct'];?><hr>
                                        </td>
                                    </tr>
                                <?php }?>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                       <td>
                                        <a id="btn-pedidos" class="btn notika-btn-green" href="view-print.php?param=<?= $line['codPed'];?>"  target="_blank"><i class="fa fa-print"></i> Imprimir</a>
                                    
                                           <a id="btn-pedidos" href="" class="btn notika-btn-red" data-toggle="modal" data-target="#modalDelete<?= $line['codPed']?>"><i class="fa fa-trash"></i> Deletar</a>
                                           
                                        <!-- modal delete -->
                                          <div class="modal fade" id="modalDelete<?= $line['codPed']?>" role="dialog">
                                        <div class="modal-dialog modal-sm"  id="posicao-modal">
                                            <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <h2>Deletar Registro</h2>
                                                <p id="perg-modal">Deseja realmente deletar este Registro
                                                    <i class="fa fa-question-circle"></i></p>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <a href="../Controller/delete-pedids.php?param=<?= $line['codPed'];?>">
                                                <button id="btn-modal"  class="btn notika-btn-green">
                                                    <i class="fa fa-check"></i> Sim Deletar</button></a>
                                                <button id="btn-modal" type="button" class="btn notika-btn-red" data-dismiss="modal">
                                                    <i class="fa fa-remove"></i> Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- end modal delete -->
                                       </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include '../Includs/footer.view-table.php';?>
