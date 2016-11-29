<?php
  include "includeTop.php";
?>


         <article>
             

  
        <form id="login" method="post" action="tentativa.php">
            <p >Dados Login:</p> 
        <label for id="login"></label>
            Login: <input type="text" name="login" />
     <p>
          <label for id="senha">Senha:</label>
            <input type="password" name="senha" /> 
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