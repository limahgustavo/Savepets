<!-- <?php //Conexão com o Banco de Dados
$connect = tmysqli_connet("localhost", "root", "");
$db = mysqli_select_db("$connect", "savepets")
?>



<?php
$sql = "select * from usuario";
$query = mysqli_query($db, $sql) or die ("Erro na query do banco de dados=" .mysqli_error($db));
while($resultado = mysqli_fetch_assoc($query)){

echo $resultado['usunome'];
?> -->