<?php
    SESSION_START();
    if($_SESSION['logado']){      
?>
     
    
<?php
    require_once ('cabecalho.php');
?>


 <section class="main">
        
    <div class="petPerfil"> 
             
        <img src="images/perfilLogin.png">     
              
    </div>
            
    <div class="conteudo">
               
        <a href="vacinas.php"><div class="botao" id="botao">Vacinas</div></a>
               
        <a href="agendamento.php"><div class="botao" id="botao">Agendar</div></a>
        
        <a href="rgPet.php"><div class="botao">Rg Pet</div></a>
     
    </div>
                                 
    <div class="publiPerfil">
           
        <a href="http://www.adoteumfocinho.com.br/v1/#.WhtRh0qnGMo"><img src="images/ado%C3%A7%C3%A3o-e-animais.jpg"></a>
        <a href="http://www.ssp.sp.gov.br/depa"><img src="images/denunciejpg.jpg"></a>
           <a href="http://ilm.org.br/"><img src="images/luizaMel.jpg"></a>
           <a href="http://www.projetomiau.org.br/"><img src="images/miaumiau.jpg"></a>
         
    </div>     
       
                                  
</section>
    
     

<?php
    require_once ('rodape.php')
?>

<?php
        
    }
    else{
        $_SESSON['erro']=2;
        header("location:index.php");
        echo'Pagina restrita, efetue o login';
    }

?>