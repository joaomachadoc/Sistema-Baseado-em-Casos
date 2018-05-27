<?php 
  include_once "conexao.inc.php";
  include_once "funcao.inc.php";

  session_start();
?>

<link rel="shortcut icon" type = "image/x-icon" href="img/icone.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
<title> Sistema de Recomendação de PC Gamers </title>
<link href="tools/style.css" rel="stylesheet" type="text/css" />
<link href="tools/960.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/rolagem.js"> </script>
<script type="text/javascript" src="js/Adobe_Caslon_Pro_600.font.js" ></script>
<script type="text/javascript">
	Cufon.replace('h1', {fontFamily: 'Adobe Caslon Pro', hover:true})
</script>
</head>
	<body>
	
	<br><h1 align="center">Sistema Baseado em Casos para Compra de Computadores </h1>
		<br><img src="img/field.png" width="10000" height="10" align="center">
		<div class="main" align="center">
			<div class="mcontent" align="center">
			
				<a  href="index.php?pag=home"><h2 align="center"> Modo Usuario </h2> </a><br>
				<a  href="index.php?pag=especialista"><h2 align="center"> Ver casos salvos na base </h2> </a><br>
				<a href="index.php?pag=cadastro"><h2 align="right"> Cadastro de Especialistas</h2> </a>
				<a href="index.php?pag=logoff"> <h2 align="right">LogOff </h2></a></p>
			</div>
		</div>
		</p>
		<br>
		<br>
		
		<?php
			if($_REQUEST['pag'] == "especialista" and !(isset($_SESSION['dados'])  and  !empty($_SESSION['dados']))) {
				header("Location: login.exec.php");
				exit;
			}
			if( isset($_SESSION['dados'])  and  !empty($_SESSION['dados']) ){
				if (isset($_REQUEST['pag']) and !empty($_REQUEST['pag'])) {
					$pg = $_REQUEST['pag'];
					//echo $pg;
				}else{
					$pg = "especialista";
				}
			}else{
				header("Location: home.exec.php");
				exit;
			}
			include_once $pg . '.exec.php';
	
			mysqli_close($link);				
		?>
	</body>
</html>