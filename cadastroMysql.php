<?php

	$server = 'localhost';
	$usuario = 'root';
	$senha = '';
	$database = 'agrotec';

	$conect = @mysql_connect($server,$usuario,$senha,$database) or die('Não foi possível conectar ao banco de dados.');
	$sql_banco = mysql_select_db($database, $conect);
?>

<?php

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];
        $ddd = $_POST["ddd"];
        $tel = $_POST["tel"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $resenha = $_POST["resenha"];

	$sql = ("INSERT INTO usuario(nome,email,sexo,ddd,tel,login,senha,resenha) VALUES ('$nome','$email','$sexo','$ddd','$tel','$login','$senha','$resenha')");
	mysql_query($sql);
	echo "<script> alert('Cadastrado com suceso!');</script>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
</head>
<body>
<a href="cadastro_user.html"><input type="button" name="voltar" value="Voltar"></a>



</body>
</html>
