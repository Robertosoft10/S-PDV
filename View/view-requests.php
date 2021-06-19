<?php 
include '../Includs/header.view.php';
$sql = "SELECT * FROM  tb_pedids PD JOIN tb_numpeds NP ON PD.codPed = NP.idNumPed ORDER BY codPed DESC";
$consult = $conection->query($sql);
$line = $consult->fetch_array();
?>
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	 <!-- alertes -->
                    <?php if(isset($_SESSION['pedidook'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['pedidook'];?>
                    </div>
                    <?php unset($_SESSION['pedidook']); } ?>
                     <!-- end alertes -->

                      <!-- alertes -->
                    <?php if(isset($_SESSION['pedidoErro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['pedidoErro'];?>
                    </div>
                    <?php unset($_SESSION['pedidoErro']); } ?>
                     <!-- end alertes -->

                          <!-- alertes -->
                    <?php if(isset($_SESSION['prodidoDelok'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['prodidoDelok'];?>
                    </div>
                    <?php unset($_SESSION['prodidoDelok']); } ?>
                     <!-- end alertes -->

                          <!-- alertes -->
                    <?php if(isset($_SESSION['prodidoDelerro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['prodidoDelerro'];?>
                    </div>
                    <?php unset($_SESSION['prodidoDelerro']); } ?>
                     <!-- end alertes -->
                    <div class="data-table-list">
                    <form action="../Controller/new-pedido.php" method="post">
                    <button id="btn-pedidos" class="btn notika-btn-deeppurple pull-right"> <i class="fa fa-plus"></i> Novo Pedido</button>
                    </form>
                        <div class="basic-tb-hd">
                            <h2>Pedido Atual
                            </h2>
                        </div>
                        <table  class="table table-striped">
                            <tr>
                                <th>Nº Pedido</th>
                                <th>Valor do Pedido</th>
                                <th>Data do Pedido</th>
                                <th></th>
                            </tr>
                                <tr>
                                <td><?= $line['codPed'];?></td>
                                <td>R$ <?= number_format($line['valor'], 2, ',', '.');?></td>
                                 <?php $data = date('d/m/Y H:i:s', strtotime($line['dataPed'])); ?>
                                <td><?= $data;?></td>
                                <td id="btn-view-pedido">
                                <a href="view-print.php?param=<?= $line['codPed'];?>"  target="_blank">
                             <button id="btn-pedidos" class="btn notika-btn-cyan"> <i class="fa fa-print"></i></button></a>
                             <a href="view-view.pedids.php?param=<?= $line['codPed'];?>">
                              <button id="btn-pedidos" class="btn notika-btn-green" > <i class="fa fa-eye"></i> </button></a>

                            <button id="btn-pedidos" class="btn notika-btn-red"  data-toggle="modal" data-target="#modalDelete<?= $line['codPed']?>"> <i class="fa fa-trash"></i> </button>
                             <!-- modal delete -->
                            <div class="modal fade" id="modalDelete<?= $line['codPed'];?>" role="dialog">
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
                          <!-- fim tabela -->
                        </table>
                        <div class="basic-tb-hd">
                            <h2>Lista de Pedidos
                            </h2>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nº Pedido</th>
                                        <th>Valor do Pedido</th>
                                        <th>Data do Pedido</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                    $sql = "SELECT * FROM tb_pedids GROUP BY codPed";
                                    $consult = $conection->query($sql);
                                    while($line = $consult->fetch_array()){;?>
                                    <tr>
                                        <td><?= $line['codPed'];?></td>
                                        <td>R$ <?= number_format($line['valor'], 2, ',', '.');?></td>
                                       <?php $data = date('d/m/Y H:i:s', strtotime($line['dataPed'])); ?>
                                        <td><?= $data;?></td>
                                        <td id="btn-view-pedido">
                                         <a href="view-print.php?param=<?= $line['codPed'];?>"  target="_blank">
                                         <button id="btn-pedidos" class="btn notika-btn-cyan"> <i class="fa fa-print"></i></button></a>
                                         <a href="view-view.pedids.php?param=<?= $line['codPed'];?>">
                                          <button id="btn-pedidos" class="btn notika-btn-green" > <i class="fa fa-eye"></i> </button></a>

                                        <button id="btn-pedidos" class="btn notika-btn-red"  data-toggle="modal" data-target="#modalDelete<?= $line['codPed']?>"> <i class="fa fa-trash"></i> </button>
                                         <!-- modal delete -->
                                        <div class="modal fade" id="modalDelete<?= $line['codPed'];?>" role="dialog">
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
                                    <?php } ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  include '../Includs/footer.view.php';?>