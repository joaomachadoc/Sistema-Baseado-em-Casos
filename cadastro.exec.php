<html>
	<head>
		<title> Cadastro de Usuario </title>
	</head>
	<body>
		<p align="center">
			<?php
				if(  (isset($_GET['statuserro']) and !empty($_GET['statuserro']))  ){
					echo "As senhas não conferem!!";
				}
			?>	
		</p>
		<table border="2" width="80%" align="center">
			<tr>
				<td align="center">
					Cadastro de Especialistas	
				</td>
			</tr>
			<tr>
				<td align="center">
					<hr>
				</td>
			</tr>
			<tr>
				<td align="center">
					<form action="insertuser.exec.php" method="POST">
						Usuário: <input type="text" name="nome"><br>
						Login: <input type="text" name="login"><br>
						Senha: <input type="password" name="senha"><br>
						Confirmar Senha: <input type="password" name="confsenha">
						<br><br>
						<input type="submit" name="botao" value="Salvar Usuario">
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>

