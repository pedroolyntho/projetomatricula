<html>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
<?php

	include 'connection.php';
	?>
<form method="POST" action="cadastrandousuario.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>