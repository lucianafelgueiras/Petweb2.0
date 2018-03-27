<?php
    require_once ('cabecalho.php');
?>

 <section class="main">
        
    <div class="petPerfil"> 
             
        <img src="images/perfilLogin.png">     
              
    </div>
            
    <div class="conteudo">
               
        <a href="perfil.php"><div class="botao" id="botao">Voltar</div></a>
     
    </div>
     
    <div class="formAgenda">
        <form class="agendamento" action="#"> 
         <!--direcionar action para o banco ou email do pet-->
          
          <h2>Agendamento On-line</h2><br><br>
           
            Proprietário(a):<input type="text" name="nomeDono" id="nomeDono"><br>
            
            Pet:<input type="text" name="nomePet" id="nomePet"><br>
            
            e-mail:<input type="email" name="mail" /><br>
            
            Telefone: <input type="text" name="fone" /><br>
            
            Setor: 
            <select>
                <option selected>Clínica</option>
                <option>Estética</option> 
                <option>Vacinação</option>    
                <option>Exames</option>    
                <option>Outros</option>      
            </select><br>
            
            Serviço:
            <select>
                <option selected>Consulta</option>
                <option>Exames</option>
                <option>Banho / Tosa</option>
                <option>Retorno</option>
                <option>Acupultura</option>
                <option>Massoterapia</option>
                <option>Fisioterapia</option>
                <option>Hidroterapia</option>
            </select><br>
            
            Data:<input type="date" name="dataAgenda"/><br>
             
            <button class="butFormAgenda"><a href="#">Enviar</a></button>
        </form>
    </div>                         
   
                  
</section>
       

<?php
    require_once ('rodape.php')
?>