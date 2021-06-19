<?php 
session_start();
include '../Includs/header.view.php';
@$idProduct = $_GET['param'];
$sql = "SELECT * FROM tb_products WHERE idProduct='$idProduct'";
$consult = $conection->query($sql);
$result = $consult->fetch_array();
if(!isset($_GET['param'])){
?>
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- alertes -->
                    <?php if(isset($_SESSION['proderro'])){?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-remove"></i></span></button>
                    <?= $_SESSION['proderro'];?>
                    </div>
                    <?php unset($_SESSION['proderro']); } ?>
                     <!-- end alertes -->
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Cadastrar novo produto</h2>
                        </div>
                        <form action="../Controller/insert-product.php" method="post" enctype="multipart/form-data">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Produto *</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input id="inputs"  type="text" name="nameProduct"  class="form-control input-sm" placeholder="Nome do produto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Preço *</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input id="inputs"  type="number" name="precoProduct"  class="form-control input-sm" placeholder="Digite apenas números">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Descrição</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <textarea id="inputs" type="text" name="descritionProduct"  class="form-control input-sm" placeholder="Descrição do produto"></textarea> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Imagem</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="file" name="imageProduct" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button id="btn-cadastro" class="btn  notika-btn-green"><i class="fa fa-save"></i> Cadastrar</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }else{?>
    <!-- editar registro -->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Editar dados do produto</h2>
                        </div>
                        <form action="../Controller/update-product.php?param=<?= $result['idProduct'];?>" method="post" enctype="multipart/form-data">
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Produto </label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input id="inputs"  type="text" name="nameProduct"  class="form-control input-sm" value="<?= $result['nameProduct'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Preço </label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input id="inputs"  type="number" name="precoProduct"  class="form-control input-sm" value="<?= $result['precoProduct'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Descrição</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <textarea id="inputs" type="text" name="descritionProduct"  class="form-control input-sm" placeholder="Descrição do produto"><?= $result['descritionProduct'];?></textarea> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Imagem</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="file" name="imageProduct" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button id="btn-cadastro" class="btn  notika-btn-orange"><i class="fa fa-save"></i> Salvar Alterações</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<?php include '../Includs/footer.view.php';?>