<html><!-- abrir um codigo em html -->
<head><!-- cabeçalho da pagina-->
<title> cadastro</title> <!-- titulo da pagina-->
</head><!-- acaba o cabeçalho-->
<body>
<form mothod = "POST" action = "cadastro.php">
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
// faz a conexão com o banco de dados ja que nao chamou a aba connection
$host = "localhost";
$user= "root";
$pass = "";
$banco = "cadastro";
$mysqli = new mysqli($host, $user, $pass, $banco);
if($mysqli->connect_errno)
	echo"falha:(".$mysqli->connect_errno.")".$mysqli->connect_erro
?>
<?php
// recebe os valores da pagina cadas.php e coloca nas vairaveis de php q são as q começa com $
$nome = $_REQUEST['nome'];
$certidao_nascimento = $_REQUEST['certidao_nascimento'];
$naturalidade = $_REQUEST['naturalidade'];
$estado = $_REQUEST['estado'];
$endereco = $_REQUEST['endereco'];
$n_casa = $_REQUEST['n_casa'];
$pai = $_REQUEST['pai'];
$naturalidade_p = $_REQUEST['naturalidade_p'];
$profissao_p = $_REQUEST['profissao_p'];
$mae = $_REQUEST['mae'];
$naturalidade_m = $_REQUEST['naturalidade_m'];
$profissao_m = $_REQUEST['profissao_m'];
$dat_nasc =$_REQUEST['dat_nasc'];
$sexo = $_REQUEST['sexo'];
$serie = $_REQUEST['serie'];
$turno = $_REQUEST['turno'];
$turma = $_REQUEST['turma'];
$dat_mat =$_REQUEST['dat_mat'];
$obs = $_REQUEST['obs'];
// insere os dados no banco de dados da tabela aluno
$sql = "INSERT INTO aluno(nome, certidao_nascimento, naturalidade, estado, endereco, n_casa, pai, naturalidade_p, profissao_p, mae, naturalidade_m, profissao_m, dat_nasc, sexo)
VALUES('$nome', '$certidao_nascimento', '$naturalidade', '$estado', '$endereco', '$n_casa', '$pai', '$naturalidade_p', '$profissao_p', '$mae', '$naturalidade_m', '$profissao_m', '$dat_nasc', '$sexo')";
$sqli = mysqli_query($mysqli, $sql);//manda para o banco de dados

$n_aluno = "SELECT MAX(id_aluno) FROM aluno"; // seleciona o id_aluno da tabela aluno
// insere os dados no banco de dados da tabela matricula
$sqlm = "INSERT INTO matricula(serie, turno, turma, dat_mat, obs, n_aluno) 
VALUES('$serie', '$turno', '$turma', '$dat_mat', '$obs',LAST_INSERT_ID())";// obso LAST_INSERT_ID() é um metado q solicita o ultimo id selecionado da tabela aluno no select MAX()
$sqlma = mysqli_query($mysqli, $sqlm);//manda para o banco de dados

?>
<p>
	 <font size="10" face="Verdana">
	 <i>  ALUNO CADASTRADO COM SUCESSO!</i>
	 </p>
 <input type = "submit" class="btn btn-primary btn-lg active" value ="sair" />
</body>

</html>
