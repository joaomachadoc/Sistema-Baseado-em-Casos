<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type = "image/x-icon" href="img/icone.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login </title>
<link rel="shortcut icon" href="icone.ico" type="image/x-icon" />
<link href="tools/style.css" rel="stylesheet" type="text/css" />
<link href="tools/960.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Adobe_Caslon_Pro_600.font.js"></script>
<script type="text/javascript">
	Cufon.replace('h1', {fontFamily: 'Adobe Caslon Pro', hover:true})
</script>
</head>
<body>
	<p align="center">
		<?php
			if(  (isset($_GET['statuserro']) and !empty($_GET['statuserro']))  ){
				echo "<h1 align".'center'.">Usuario ou senha incorretos!!";
			}
		?>	
		</p>		
		<div class="container_12" id="content">
		<div class="main">
			<div class="mcontent">
				<div class="form">
					<form action="validalogin.exec.php" method="POST" >
						<p align="center" class="formulariotitulo">Login:<input type="text" name="login"><br>
						<p align="center" class="formulariotitulo">Senha:<input type="password" name="senha"><br><br>
						<input type="image" src="img/seta.png" width="100" onClick="this.form.submit()"></p>
					</form>		
				</td>	
			</tr>	
		</table>
	</body>
</html>