<?php 
include '../Includs/header.view.php';
$sql = "SELECT * FROM tb_products";
$consult = $conection->query($sql);
?>
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- alertes -->
                    <?php if(isset($_SESSION['prodSave'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['prodSave'];?>
                    </div>
                    <?php unset($_SESSION['prodSave']); } ?>
                     <!-- end alertes -->
                       <!-- alertes -->
                    <?php if(isset($_SESSION['prodAtulSave'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['prodAtulSave'];?>
                    </div>
                    <?php unset($_SESSION['prodAtulSave']); } ?>
                     <!-- end alertes -->
                       <!-- alertes -->
                    <?php if(isset($_SESSION['prodAtulOk'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['prodAtulOk'];?>
                    </div>
                    <?php unset($_SESSION['prodAtulOk']); } ?>
                     <!-- end alertes -->
                       <!-- alertes -->
                    <?php if(isset($_SESSION['prodAtulErro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['prodAtulErro'];?>
                    </div>
                    <?php unset($_SESSION['prodAtulErro']); } ?>
                     <!-- end alertes -->
                      <!-- alertes -->
                    <?php if(isset($_SESSION['prodDelok'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['prodDelok'];?>
                    </div>
                    <?php unset($_SESSION['prodDelok']); } ?>
                     <!-- end alertes -->
                       <!-- alertes -->
                    <?php if(isset($_SESSION['proddelerro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['proddelerro'];?>
                    </div>
                    <?php unset($_SESSION['proddelerro']); } ?>
                     <!-- end alertes -->
                    <div class="data-table-list">
                    <a href="view-new.product.php">
                        <button id="btn-pedidos" class="btn notika-btn-deeppurple pull-right"> <i class="fa fa-plus"></i> Novo Produto </button></a>
                        <div class="basic-tb-hd">
                            <h2>Lista de Produtos</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Produto</th>
                                        <th>Preço</th>
                                        <th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($line = $consult->fetch_array()){;?>
                                    <tr>
                                        <td id="td-img-prod"><img src="<?= "../Images/".$line['imageProduct'];?>" id="list-image"></td>
                                        <td id="td-fonte"><?= $line['nameProduct'];?></td>
                                        <td id="td-fonte">R$ <?= number_format($line['precoProduct'], 2, ',', '.');?></td>
                                        <td id="btn-view-produto">
                                         <a id="btn-pedidos" class="btn notika-btn-green" href="view-shopping.cart.php?produto=idProduct&idProduct=<?= $line['idProduct'];?>"><i class="fa fa-shopping-cart"></i></a>
                                        <a id="btn-pedidos" class="btn notika-btn-cyan" href="view-view.product.php?param=<?= $line['idProduct'];?>"><i class="fa fa-eye"></i></a>
                                           <a id="btn-pedidos" href="view-new.product.php?param=<?= $line['idProduct'];?>" class="btn notika-btn-orange"><i class="fa fa-pencil"></i></a>
                                         <a id="btn-pedidos" data-toggle="modal" data-target="#modalDelete<?= $line['idProduct']?>" class="btn notika-btn-red"><i class="fa fa-trash"></i> </a>
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
                                <?php } ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include '../Includs/footer.view.php';?>
