<?php
    SESSION_START();
    if($_SESSION['logado']){
        
?>
    
<?php
    require_once ('cabecalho.php');
?>

<section class="main">


    <div class=formAgenda>

        <form method="post" action="#">
            
            <h2>Registro Geral Pet</h2><br>

            Nome:<input type="text"> <br>

            Filiação:<input type="text"> <br>

            Naturalidade: <input type="text"> <br>

            Data de nascimento:<input type="date"> <br>

            Telefone do Responsavel:<input type="text"> <br>

            CPF Proprietario: <input type="text"> <br>
            
            Como deseja receber: 
            <select>
               <option selected >...</option>
                <option>Correio</option>
                <option>Email</option>
                <option>Retirar</option>
            </select> <br>
            

            <button class="butFormAgenda">Solicitar</button>
            
            <button class="butFormAgenda"><a href="index.php">Cancelar</a></button>

        </form>
        
    </div>
    
     <img class="rgPet" src="images/rgPet.png">
     

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