<?php
    SESSION_START();
    if(!isset($_SESSION['erro'])){
        $_SESSION['erro'] = 0;
    }
 ?>
 
 <?php
  require_once ('cabecalho.php');
 ?>

 <section class="main">
         
    <div class="formLogin">
         
        <form class="login" method="post" action="validaLogin.php">
            
            <img src="images/seguranca.png"/><br>
            
            <label for="login">Usuário</label><br>
            <input type="text" name="usuario"/><br><br>
              
            <label for="senha">Senha</label><br>
            <input type="password" name="senha"/><br><br>
              
            <a href="perfil.php"><button class="botaoLogin">Login</button> </a><br>
              
        </form>
                          
    </div><br><br>
       
        
</section>
          
<?php
  require_once ('rodape.php');
?>


<?php
    if($_SESSION['erro']==1){
        echo"Usuario e/ou senha incorreto";
    }
    if($_SESSION['erro']==2){
          echo"Pagina restrita, efetue o login";  
    }        
?>


