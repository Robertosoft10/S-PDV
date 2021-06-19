<?php 
include '../Includs/header.config.php';
$userEmail = $_POST['userEmail'];
$sql = "SELECT * FROM tb_users WHERE userEmail='$userEmail'";
$consult = $conection->query($sql);
$result = $consult->fetch_assoc();
if(empty($result)) {
  $_SESSION['emailincorreto'] = "Usuário   não encotrado!";
  header('location: /../s-pdv/index.php');
}else{
  $_SESSION['idUser'] = $result['idUser'];
  $_SESSION['userName'] = $result['userName'];
  $_SESSION['userEmail'] = $result['userEmail'];
  $_SESSION['userNivel'] = $result['userNivel'];
  $_SESSION['userSenha'] = $result['userSenha'];
}
?>
 <div class="login-content"  id="page-login">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
           <small id="logo-system"><i class="fa fa-shopping-basket"></i> SPDV</small><br>
            <small id="name-system">Sistema ponto de Vendas</small><br>
            
            <div class="nk-form">
            Recuperar Senha
            <br>
            <form action="../Controller/update-new-pass-user.php?param=<?= $_SESSION['idUser'];?>" method="post">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-envelope-o"></i></span>
                    <div class="nk-int-st">
                        <input type="text" value="<?= $_SESSION['userName'];?>" class="form-control" disabled="">
                    </div>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-user"></i></span>
                    <div class="nk-int-st">
                        <input type="text" value="<?= $_SESSION['userEmail'];?>" class="form-control" disabled="">
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-unlock-alt"></i></span>
                    <div class="nk-int-st">
                        <input type="password" name="userSenha" class="form-control" required="" placeholder="Digite a nova senha de usuário">
                    </div>
                </div>
                <div class="fm-checkbox">
                        <button id="btn-login-senha" class="btn notika-btn-green"> Avançar e Salvar</button>
                </div>
        </div>
    </div>
<?php include '../Includs/footer.login.php';?>