<?php 
include '../Includs/header.view.php';
$idProduct = $_GET['param'];
$sql = "SELECT * FROM tb_products WHERE idProduct='$idProduct'";
$consult = $conection->query($sql);
$line = $consult->fetch_array();
?>
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                    <a href="view-new.product.php">
                        <button id="btn-pedidos" class="btn notika-btn-deeppurple pull-right"> <i class="fa fa-plus"></i> Novo Produto </button></a>
                        <div class="basic-tb-hd">
                            <h2>Detalhes do Produto</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <td id="td-detalhe">
                                        <img src="<?= "../Images/".$line['imageProduct'];?>"> 
                                        </td>
                                        <td id="text-detalhe">
                                            Produto: <?= $line['nameProduct'];?><br>
                                            Preço: R$ <?= number_format($line['precoProduct'], 2, ',', '.');?><br>
                                            Descrição: <?= $line['descritionProduct'];?><hr>
                                            <a id="btn-pedidos" class="btn notika-btn-green" href="view-shopping.cart.php?produto=idProduct&idProduct=<?= $line['idProduct'];?>"><i class="fa fa-shopping-cart"></i> Adc. Carrinho</a>
                                    
                                           <a id="btn-pedidos" href="view-new.product.php?param=<?= $line['idProduct'];?>" class="btn notika-btn-orange"><i class="fa fa-pencil"></i> Editar</a>
                                         <a id="btn-pedidos" data-toggle="modal" data-target="#modalDelete<?= $line['idProduct']?>" class="btn notika-btn-red"><i class="fa fa-trash"></i> Deletar</a>
                                         <!-- modal delete -->
                                          <div class="modal fade" id="modalDelete<?= $line['idProduct']?>" role="dialog">
                                        <div class="modal-dialog modal-sm"  id="posicao-modal">
                                            <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <h2>Deletar Registro</h2>
                                                <p id="perg-modal">Deseja realmente deletar este Registro
                                                    <i class="fa fa-question-circle"></i></p>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <a href="../Controller/delete-product.php?param=<?= $line['idProduct'];?>">
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
                                </thead>
                                <tbody>

                                    <tr>
                                       
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
