<?php
   include "includetop.php";
?>
<article>
    <p id="formcrud.php">
<?php

    $opcao=$_POST['tipoCRUD'];
    switch ($opcao){
        case "C":
            $formulario="<h3>CRIAR</h3>
                <form action='create.php' method='POST'>
                    Nome:<input type='text' name='nome'/><br/>
                    Email:<input type='text' name='email'/><br/>
                    Senha:<input type='password' name='senha'/><br/>
                    Login:<input type='text' name='login'/><br/>
                    <input type='submit' value='CRIAR'/>
                </form>";
        break;
        case "R":
            $formulario="<h3>BUSCAR</h3>
                <form action='read.php' method='POST'>
                    <input type='submit' value='BUSCAR'/>
                </form>";
        break;
        case "U":
            $formulario="<h3>ATUALIZAR</h3>
                <form action='update.php' method='POST'>
                    Nome:<input type='text' name='nome'/><br/>
                    Email:<input type='text' name='email'/><br/>
                    Senha:<input type='text' name='senha'/><br/>
                    Login:<input type='text' name='login'/><br/>
                    <input type='submit' value='ATUALIZAR'/>
                </form>";
        break;
        case "D":
            $formulario="<h3>APAGAR</h3>
                <form action='delete.php' method='POST'>
                    Nome:<input type='text' name='nome'/><br/>
                    <input type='submit' value='REMOVER'/>
                </form>";
        break;
    }
    echo $formulario;
?>
       </p>
    </article>
<?php
   include "includeBot.php";
?>
    