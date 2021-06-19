<?php 
include '../Includs/header.config.php';
?>
 <div class="login-content"  id="page-login">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
           <small id="logo-system"><i class="fa fa-shopping-basket"></i> SPDV</small><br>
            <small id="name-system">Sistema ponto de Vendas</small><br>
            
            <div class="nk-form">
            Recuperar Senha
            <br>
            <form action="../View/view-rec.password.php" method="post">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-envelope-o"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="userEmail" class="form-control" placeholder="Informe e-mail  de usuário">
                    </div>
                </div>
                <div class="fm-checkbox">
                        <button id="btn-login-senha" class="btn notika-btn-green"> Avançar</button>
                </div>
        </div>
    </div>
<?php include '../Includs/footer.login.php';?>