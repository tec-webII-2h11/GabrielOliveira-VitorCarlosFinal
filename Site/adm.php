<?php
   include "includetop.php";
 
?>
         <article>
         

             <form id="crudadm" action="crud.php" method="post">
               <span style="padding-left:125px"> O que deseja realizar?<br> </span>Criar, buscar, atualizar ou deletar um usuário?<br>
                 <span style="padding-left:175px">
                     <input type="radio" name="tipoCRUD" value="C" checked/>Create<br/>
                     </span>
                 <span style="padding-left:175px">
                     <input type="radio" name="tipoCRUD" value="R"/>Read<br/>
                     </span>
                 <span style="padding-left:175px">
                     <input type="radio" name="tipoCRUD" value="U"/>Update<br/>
                     </span>                 
                <span style="padding-left:175px">
                     <input type="radio" name="tipoCRUD" value="D"/>Delete<br/>
                    </span>
                 <span style="padding-left:175px">
                    <input type="submit"  value="Realizar" />
                     </span>

             </form>

         </article>

 <?php
   include "includeBot.php";
?>