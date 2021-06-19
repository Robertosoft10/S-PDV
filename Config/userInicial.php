<?php 
include '../Includs/header.config.php';
?>
 <div class="login-content"  id="page-login">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
           <small id="logo-system"><i class="fa fa-shopping-basket"></i> SPDV</small><br>
            <small id="name-system">Sistema ponto de Vendas</small><br>
            
            <div class="nk-form">
          Cadastrar usuário para acessar o sistema
            <br>
            
            <form action="../Controller/insert-user-inicial.php" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-user"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="userName" class="form-control" placeholder="Nome do Usuário" required="">
                    </div>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-envelope-o"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="userEmail" class="form-control" placeholder="E-mail do Usuário"  required="">
                    </div>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-barcode"></i></span>
                    <div class="nk-int-st">
                        <select type="text" name="userNivel" class="form-control" required="">
                            <option></option>
                            <option value="1">ADMIN</option>
                        </select> 
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-unlock-alt"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="userSenha" class="form-control" placeholder="Senha de Usuário"  required="">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-picture-o"></i>
                    <small> Opcional</small></span>
                    <div class="nk-int-st">
                        <input type="file" name="userImage" class="form-control" placeholder="Senha de Usuário">
                    </div>
                </div>
                <div class="fm-checkbox">
                        <button id="btn-config" class="btn notika-btn-green">  Salvar Usuário</button>
                </div>
                </form>
        </div>
    </div>
<?php include '../Includs/footer.login.php';?>