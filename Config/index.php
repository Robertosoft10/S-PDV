<?php 
include '../Includs/header.config.php';
?>
 <div class="login-content"  id="page-login">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
           <small id="logo-system"><i class="fa fa-shopping-basket"></i> SPDV</small><br>
            <small id="name-system">Sistema ponto de Vendas</small><br>
            
            <div class="nk-form">
            Bem-vindo(a)
            <br>
            <!-- alertes -->
            <?php if(isset($_SESSION['usererro'])){?>
             <button  id="btn-login" class="btn notika-btn-red"> 
                 <?= $_SESSION['usererro'];?>
               </button>
            <?php unset($_SESSION['usererro']); } ?>
            <!-- end alertes -->
            <a href="userInicial.php">
            <button id="btn-config" class="btn notika-btn-green"> Avançar</button></a>
        </div>
    </div>
<?php include '../Includs/footer.login.php';?>