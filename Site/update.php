<?php
   include "includetop.php";
?>

<article>
    <?php
include "conecta_mysql.php";

$nome=$_POST['nome'];
$email=$_POST['email'];
$login=$_POST['login'];
$senha=sha1($_POST['senha']);

$resultado = mysqli_query($conexao,"UPDATE cadastro SET Login='$login',Senha='$senha' WHERE Nome='$nome'") or die ("Não foi possivel executar a SQL".mysqli_error($conexao));
	
	if ($resultado==TRUE){
		echo "<br/>Usuario alterado com sucesso";
	}else{
		echo "<br/>Erro na alteração";
	}
	mysqli_close($conexao)
	?>
</article>
    <?php
   include "includeBot.php";
?>
