<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CONECTANDO COM O BANCO DE DADOS</title>
</head>
<body>
     <?php
     error_reporting(0);

     	$servidor ="localhost";
     	$usuario ="root";
     	$senha="";
     	$banco ="dbfuncionarios";

     	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
      
      if($conexao->connect_errno){
      	echo "Ocorreu um error ao se conectar com o banco de dados ".$conexao->connect_errno."-".$conexao->connect_error;
      }else{
      	echo "Conectado com sucesso : ";
      }

      $result = $conexao->query("SELECT nome FROM funcionarios");

		 while ($row = $result ->fetch_assoc()) {
		 	echo $row ["nome"]. "<br/>";
		 }

     ?>
	
</body>
</html>