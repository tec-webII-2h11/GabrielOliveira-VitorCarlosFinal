<?php
   include "includetop.php";
?>
<article>
<?php
include "conecta_mysql.php";

$nome=$_POST['nome'];
$email=$_POST['email'];
$login=$_POST['login'];
$senha=md5($_POST['senha']);

$resultado = mysqli_query($conexao,"DELETE FROM cadastro WHERE Nome='$nome'") or die ("Não foi possivel executar a SQL".mysqli_error($conexao));
	
	if ($resultado==TRUE){
		echo "<br/>Usuario removido";
	}else{
		echo "<br/>Erro na remoção";
	}
	mysqli_close($conexao)
	?>
</article>
    <?php
   include "includeBot.php";
?>