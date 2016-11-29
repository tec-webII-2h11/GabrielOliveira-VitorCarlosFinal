<?php
   include "includetop.php";
 
?>




         <article>
         

             
             
             <form id="opiniao" method="post">

<h1 >Deixe sua opinião para sabermos </h1> <h1 > o que melhorar em nosso site!</h1>
        <p class="nome">
            <input type="text" id="nomeid" placeholder="Nome" required="required" name="nome" />
            <label for="nome">Nome</label>

        </p>
        
                <p class="checkboxx">        
            <input type="radio" name="Ótimo" value="otm"> Ótimo
            <input type="radio" name="Bom" value="bom"> Bom
            <input type="radio" name="Regular" value="reg"> Regular
            <input type="radio" name="Ruim" value="ruim"> Ruim
            <input type="radio" name="Péssimo" value="pes"> Péssimo
                 </p>
        <p>

            <textarea placeholder="Deixe sua opnião"></textarea>
        </p>

      <p class="noticias">   
          <input type="checkbox" name="noticias" value="not"> Gostaria de receber nossas noticias por email?
      <p class="submit">

            <input type="submit" onclick="Enviar();" value="Enviar" />
        </p>


             </form>
             
              </article>

 <?php
   include "includeBot.php";
?>