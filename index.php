<?php //Conexão com o Banco de Dados

$host = "localhost";
$usuario = "id18890523_adminpets";
$senha = "Im<51VQ3G]SdiFYt";
$banco = "id18890523_savepets22";

$conexao = new MySQLi ("$host","$usuario","$senha", "$banco" );
$conexao -> set_charset("utf8");

if ($conexao -> connect_error) {

echo "ERRO DE CONEXÃO";


} /* else {
	 echo "CONEXÃO BEM SUCEDIDA!";
	} */
	
	


?>