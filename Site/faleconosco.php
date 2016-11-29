<?php
   include "includetop.php";
?>

         <article>
             
                         
             <h1 id="form1">Cadastre-se para participar do site!!!</h1>
             
             <form id="cadastro" method="post" action="create.php">


        <p class="nome">
            <label for id="nome">Nome</label>
            <input type="text" id="nomeid" placeholder="Nome" required="required" name="nome" />
        </p>
                 
                   <p>
            <label for id="email">Email</label>
            <input type="email" id="emailid" placeholder="exemplo@email.com" name="email" />
            
        </p>
                 
       <p>
            <label for id="login">Login</label>
                <input type="text" name="login" placeholder="Escolha um Login">
        </p>
      
        <p>
          <label for id="senha">Senha</label>
            <input type="password" name="senha" placeholder="Escolha uma senha">
        </p>
                 
         
        <p>
          <label for id="enviar"></label>
            <input type="submit" name="enviar" value="Enviar">
        </p>


             </form>
      </article>

 <?php
   include "includeBot.php";
?>