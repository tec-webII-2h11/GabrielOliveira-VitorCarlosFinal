<?php
   include "includetop.php";
?>
<article>

<?php
include "conecta_mysql.php";

$resultado = mysqli_query($conexao, "SELECT * from cadastro") or die ("Não foi possivel retornara a SQL: ".mysqli_error($conexao));
if ($resultado){
while ($row = mysqli_fetch_array($resultado)){
echo "Nome".$row["nome"]." - "."email".$row["email"]." - "."Login".$row["login"]." - "."Senha".$row["senha"]."<br/>";
 }
}
mysqli_close($conexao);
?>
</article>
<?php
   include "includeBot.php";
?>