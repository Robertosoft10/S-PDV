<?php 
session_start();
include 'Includs/header.login.php';
 unset($_SESSION['userEmail'],
 $_SESSION['userSenha']);
?>
 <div class="login-content"  id="page-login">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
           <small id="logo-system"><i class="fa fa-shopping-basket"></i> SPDV</small><br>
            <small id="name-system">Sistema ponto de Vendas</small><br>
            
            <div class="nk-form">
            <div id="name-login">
                <br>
            <i class="fa fa-user"></i> Login de Usuário
            </div>
            <br>
             <!-- alertes -->
            <?php if(isset($_SESSION['loginVazio'])){?>
             <button id="btn-login" class="btn notika-btn-red"> 
                 <?= $_SESSION['loginVazio'];?>
               </button>
            <?php unset($_SESSION['loginVazio']); } ?>
            <!-- end alertes -->
             <!-- alertes -->
            <?php if(isset($_SESSION['loginFalse'])){?>
             <button id="btn-login" class="btn notika-btn-red"> 
                 <?= $_SESSION['loginFalse'];?>
               </button>
            <?php unset($_SESSION['loginFalse']); } ?>
            <!-- end alertes -->

              <!-- alertes -->
            <?php if(isset($_SESSION['secury'])){?>
             <button id="btn-login" class="btn notika-btn-red"> 
                 <?= $_SESSION['secury'];?>
               </button>
            <?php unset($_SESSION['secury']); } ?>
            <!-- end alertes -->

              <!-- alertes -->
            <?php if(isset($_SESSION['userSave'])){?>
             <button id="btn-login" class="btn notika-btn-green"> 
                 <?= $_SESSION['userSave'];?>
               </button>
            <?php unset($_SESSION['userSave']); } ?>
            <!-- end alertes -->
                <!-- alertes -->
            <?php if(isset($_SESSION['emailincorreto'])){?>
             <button id="btn-login" class="btn notika-btn-red"> 
                 <?= $_SESSION['emailincorreto'];?>
               </button>
            <?php unset($_SESSION['emailincorreto']); } ?>
            <!-- end alertes -->
                <!-- alertes -->
            <?php if(isset($_SESSION['passOk'])){?>
             <button id="btn-login" class="btn notika-btn-green"> 
                 <?= $_SESSION['passOk'];?>
               </button>
            <?php unset($_SESSION['passOk']); } ?>
            <!-- end alertes -->
               <!-- alertes -->
            <?php if(isset($_SESSION['passErro'])){?>
             <button id="btn-login" class="btn notika-btn-red"> 
                 <?= $_SESSION['passErro'];?>
               </button>
            <?php unset($_SESSION['passErro']); } ?>
            <!-- end alertes -->
            <form action="App/login.php" method="post">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-envelope-o"></i></span>
                    <div class="nk-int-st">
                        <input type="text" name="userEmail" class="form-control" placeholder="E-mail de Usuário">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-unlock-alt"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="userSenha" class="form-control" placeholder="Senha de Usuário">
                    </div>
                </div>
                <div class="fm-checkbox">
                        <button id="btn-login" class="btn notika-btn-green"> <i class="fa fa-sign-in"></i> Entrar</button>
                </div>
                </form>
                <div class="fm-checkbox">
                    <label><a href="Config/recPassword.php">Esqueci a senha!</a></label>
                </div>
        </div>
    </div>
<?php include 'Includs/footer.login.php';?>