<?php 
include '../Includs/header.view.php';
?>
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <?php if($_SESSION['userNivel'] == 1){?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- alertes -->
                    <?php if(isset($_SESSION['razaoSave'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['razaoSave'];?>
                    </div>
                    <?php unset($_SESSION['razaoSave']); } ?>
                     <!-- end alertes -->
                      <!-- alertes -->
                    <?php if(isset($_SESSION['razaoErro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['razaoErro'];?>
                    </div>
                    <?php unset($_SESSION['razaoErro']); } ?>
                     <!-- end alertes -->
                       <!-- alertes -->
                    <?php if(isset($_SESSION['razaoAtua'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['razaoAtua'];?>
                    </div>
                    <?php unset($_SESSION['razaoAtua']); } ?>
                     <!-- end alertes -->
                      <!-- alertes -->
                    <?php if(isset($_SESSION['razaoErroAtua'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['razaoErroAtua'];?>
                    </div>
                    <?php unset($_SESSION['razaoErroAtua']); } ?>
                     <!-- end alertes -->

                      <!-- alertes -->
                    <?php if(isset($_SESSION['userSave'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['userSave'];?>
                    </div>
                    <?php unset($_SESSION['userSave']); } ?>
                     <!-- end alertes -->
                      <!-- alertes -->
                    <?php if(isset($_SESSION['usererro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['usererro'];?>
                    </div>
                    <?php unset($_SESSION['usererro']); } ?>
                     <!-- end alertes -->
                       <!-- alertes -->
                    <?php if(isset($_SESSION['useExiste'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['useExiste'];?>
                    </div>
                    <?php unset($_SESSION['useExiste']); } ?>
                     <!-- end alertes -->

                    <!-- alertes -->
                    <?php if(isset($_SESSION['userAtulSave'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['userAtulSave'];?>
                    </div>
                    <?php unset($_SESSION['userAtulSave']); } ?>
                     <!-- end alertes -->
                       <!-- alertes -->
                    <?php if(isset($_SESSION['userAtulOk'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['userAtulOk'];?>
                    </div>
                    <?php unset($_SESSION['userAtulOk']); } ?>
                     <!-- end alertes -->
                        <!-- alertes -->
                    <?php if(isset($_SESSION['userAtulErro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['userAtulErro'];?>
                    </div>
                    <?php unset($_SESSION['userAtulErro']); } ?>
                     <!-- end alertes -->

                           <!-- alertes -->
                    <?php if(isset($_SESSION['razaoDelOk'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['razaoDelOk'];?>
                    </div>
                    <?php unset($_SESSION['razaoDelOk']); } ?>
                     <!-- end alertes -->

                           <!-- alertes -->
                    <?php if(isset($_SESSION['razaoDelErro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['razaoDelErro'];?>
                    </div>
                    <?php unset($_SESSION['razaoDelErro']); } ?>
                     <!-- end alertes -->
                     <!-- alertes -->
                    <?php if(isset($_SESSION['userDelOk'])){?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['userDelOk'];?>
                    </div>
                    <?php unset($_SESSION['userDelOk']); } ?>
                     <!-- end alertes -->

                      <!-- alertes -->
                    <?php if(isset($_SESSION['userDelErro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['userDelErro'];?>
                    </div>
                    <?php unset($_SESSION['userDelErro']); } ?>
                     <!-- end alertes -->

                     <a id="btn-pedidos" data-toggle="modal"  data-target="#modalCad" class="btn notika-btn-cyan"><i class="fa fa-university"></i> Cadastrar Razão Social</a>
                                <!-- modal empresa -->
                                <div class="modal fade" id="modalCad" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            </div>
                                            <div class="modal-body">
                                                <h2>Cadastrar Razão Social</h2>
                                                <!-- formaulario -->
                                                <form action="../Controller/insert-raz-social.php" method="post">
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Razão Social *</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="razName"  class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Fone * </label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="razContact1"  class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Fone </label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="razContact2"  class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Endereço * </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <textarea id="inputs" type="text" name="razEnderec"  class="form-control input-sm"></textarea> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end formulario -->
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btn-modal"  class="btn notika-btn-green">
                                                    <i class="fa fa-save"></i> Cadastrar</button>
                                                </form>
                                                <button id="btn-modal" type="button" class="btn notika-btn-red" data-dismiss="modal">
                                                    <i class="fa fa-remove"></i> Concelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal empresa -->
                                <!-- end modal usuario -->
                                <a id="btn-pedidos" data-toggle="modal"  data-target="#modalCadUser" class="btn notika-btn-blue"><i class="fa fa-university"></i> Cadastrar Razão Social</a>
                                <!-- modal empresa -->
                                <div class="modal fade" id="modalCadUser" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            </div>
                                            <div class="modal-body">
                                                <h2>Cadastrar novo usuário</h2>
                                                <!-- formaulario -->
                                                <form action="../Controller/insert-user.php" method="post" enctype="multipart/form-data">
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nome</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="userName"  class="form-control input-sm" placeholder="Nome do Usuário" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">E-mail </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="userEmail"  class="form-control input-sm" placeholder="E-mail de Usuário"  required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nivel </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <select id="inputs"  type="text" name="userNivel"  class="form-control input-sm"  required="">
                                                                    <option></option>
                                                                    <option value="1">ADMIN</option>
                                                                    <option value="2">USER</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Senha  </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs" type="password" name="userSenha"  class="form-control input-sm" placeholder="Senha de usuário"  required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Imagem </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs" type="file" name="userImage"  class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end formulario -->
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btn-modal"  class="btn notika-btn-green">
                                                    <i class="fa fa-save"></i> Cadastrar</button>
                                                </form>
                                                <button id="btn-modal" type="button" class="btn notika-btn-red" data-dismiss="modal">
                                                    <i class="fa fa-remove"></i> Concelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal usuario -->
                             <hr>
                            <table id="data-table-basic" class="table table-striped">
                            <tr>
                                <th>Razão Social</th>
                                <th>Fone 1</th>
                                <th>Fone 2</th>
                                <th>Endereço</th>
                                <th></th>
                            </tr>
                            <?php 
                            $sql = "SELECT * FROM tb_razsocial";
                            $consult = $conection->query($sql);
                            while($line = $consult->fetch_array()){?>
                            <tr>
                                <td><?= $line['razName'];?></td>
                                <td><?= $line['razContact1'];?></td>
                                <td><?= $line['razContact2'];?></td>
                                <td><?= $line['razEnderec'];?></td>
                                <td>
                                <a id="btn-pedidos" data-toggle="modal"  data-target="#modalEdit<?= $line['idRaz']?>" class="btn notika-btn-orange"><i class="fa fa-pencil"></i></a>
                                <!-- modal editar -->
                                <div class="modal fade" id="modalEdit<?= $line['idRaz']?>" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            </div>
                                            <div class="modal-body">
                                                <h2>Editar Registro</h2>
                                                <!-- formaulario -->
                                                <form action="../Controller/update-raz-social.php?param=<?= $line['idRaz'];?>" method="post">
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Razão Social </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="razName"  class="form-control input-sm" value="<?= $line['razName'];?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Fone </label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="razContact1"  class="form-control input-sm" value="<?= $line['razContact1'];?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Fone </label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="razContact2"  class="form-control input-sm"  value="<?= $line['razContact2'];?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Endereço </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <textarea id="inputs" type="text" name="razEnderec"  class="form-control input-sm"><?= $line['razEnderec'];?></textarea> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end formulario -->
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btn-modal"  class="btn notika-btn-green">
                                                    <i class="fa fa-check"></i> Salvar Alterações</button>
                                                </form>
                                                <button id="btn-modal" type="button" class="btn notika-btn-red" data-dismiss="modal">
                                                    <i class="fa fa-remove"></i> Concelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal editar -->
                                <a id="btn-pedidos" data-toggle="modal"  data-target="#modalDeleteR<?= $line['idRaz']?>" class="btn notika-btn-red"><i class="fa fa-trash"></i></a>
                                <!-- modal delete -->
                                          <div class="modal fade" id="modalDeleteR<?= $line['idRaz']?>" role="dialog">
                                        <div class="modal-dialog modal-sm"  id="posicao-modal">
                                            <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <h2>Deletar Registro</h2>
                                                <p id="perg-modal">Deseja realmente deletar este Registro
                                                    <i class="fa fa-question-circle"></i></p>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <a href="../Controller/delete-razao.php?param=<?= $line['idRaz'];?>">
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
                        <?php }?>
                        </table>
                    </div>
                    <hr>
        <table id="data-table-basic" class="table table-striped">
        <tr>
             <th></th>
            <th>Usuário</th>
            <th>E-mail</th>
            <th>Nível</th>
            <th>Senha</th>
            <th></th>
        </tr>
        <?php 
        $sql = "SELECT * FROM tb_users";
        $consult = $conection->query($sql);
        while($lineUser = $consult->fetch_array()){?>
        <tr>
            <td id="td-img-prod"><img src="<?= "../Images/".$lineUser['userImage'];?>" id="list-image"></td>
            <td><?= $lineUser['userName'];?></td>
            <td><?= $lineUser['userEmail'];?></td>
            <?php if($lineUser['userNivel'] == 1){?>
            <td>ADMIN</td>
            <?php }else{?>
            <td>USER</td>
            <?php }?>
            <td>** Secreta **</td>
            <td>
                 <a id="btn-pedidos" data-toggle="modal"  data-target="#modalEditU<?= $lineUser['idUser']?>" class="btn notika-btn-orange"><i class="fa fa-pencil"></i></a>
                                <!-- modal editar -->
                                <div class="modal fade" id="modalEditU<?= $lineUser['idUser']?>" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            </div>
                                            <div class="modal-body">
                                                <h2>Editar Registro</h2>
                                                <!-- formaulario -->
                                                <form action="../Controller/update-user.php?param=<?= $lineUser['idUser']?>"method="post" enctype="multipart/form-data">
                                                <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nome</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="userName"  class="form-control input-sm" value="<?= $lineUser['userName'];?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">E-mail </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs"  type="text" name="userEmail"  class="form-control input-sm" placeholder="E-mail de Usuário"  value="<?= $lineUser['userEmail'];?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Nível </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <select id="inputs"  type="text" name="userNivel"  class="form-control input-sm">
                                                            <?php if($lineUser['userNivel'] == 1){?>
                                                                    <option value="1">ADMIN</option>
                                                                <?php }else{?>
                                                                    <option value="2">USER</option>
                                                                <?php }?>
                                                                <option value="1">ADMIN</option>
                                                                <option value="2">USER</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Senha  </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs" type="password" name="userSenha"  class="form-control input-sm" placeholder="Senha atua ou nova senha"  required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="form-example-int form-horizental">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="hrzn-fm">Imagem </label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                <div class="nk-int-st">
                                                                    <input id="inputs" type="file" name="userImage"  class="form-control input-sm">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end formulario -->
                                            </div>
                                            <div class="modal-footer">
                                                <button id="btn-modal"  class="btn notika-btn-green">
                                                    <i class="fa fa-check"></i> Salvar Alterações</button>
                                                </form>
                                                <button id="btn-modal" type="button" class="btn notika-btn-red" data-dismiss="modal">
                                                    <i class="fa fa-remove"></i> Concelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal editar -->
                                <a id="btn-pedidos" data-toggle="modal"  data-target="#modalDeleteU<?= $lineUser['idUser'];?>" class="btn notika-btn-red"><i class="fa fa-trash"></i></a>
                                <!-- modal delete -->
                                          <div class="modal fade" id="modalDeleteU<?= $lineUser['idUser'];?>" role="dialog">
                                        <div class="modal-dialog modal-sm"  id="posicao-modal">
                                            <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <h2>Deletar Registro</h2>
                                                <p id="perg-modal">Deseja realmente deletar este Registro
                                                    <i class="fa fa-question-circle"></i></p>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <a href="../Controller/delete-user.php?param=<?= $lineUser['idUser'];?>">
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
                        </table>
                    <?php }else{?>
                <!-- alertes -->
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                   <i class="fa fa-warning"></i> As informações desta página so podem ser visualizada por usuários adminstradores se você não for, consulte o mesmo!
                    </div>
                     <!-- end alertes -->
                        </div>
                        </div>
                    </div>
                </div>
<?php } ?>
<?php include '../Includs/footer.view.php';?>