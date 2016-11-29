<?php
   include "includetop.php";
?>
<article>
    <p id="formcrud">
<?php
include "conecta_mysql.php";

$nome=$_POST['nome'];
$email=$_POST['email'];
$login=$_POST['login'];
$senha=md5($_POST['senha']);

$resultado = mysqli_query($conexao,"INSERT INTO cadastro(nome,email,login,senha)
	VALUES('".$nome."','".$email."','".$login."','".$senha."')") or die ("Não foi possivel executar a SQL".mysqli_error($conexao));
	if ($resultado==TRUE){
		echo "<br/>Cadastro Realizado! <br/> Clique no botão abaixo para retornar";
        echo "<br/><a href=\"home.php\">Voltar<a/>";
	}else{
		echo "<br/>Erro no Cadastro";
	}
	mysqli_close($conexao)
	?>
        </p>
</article>
<?php
   include "includeBot.php";
?>