<?php
	require_once "class.pcDAO.php";

	$id = $_GET['pc'];
	$porcentagem = $_GET['porcentagem'];

	$dao = new pcDAO();
	$vet = $dao->listaID($id);

	foreach ($vet as $key => $value){
		$cpu = $value->getCpu();
		$vga = $value->getVga();
		$mobo = $value->getMobo();
		$ram = $value->getRam();
		$psu = $value->getPsu();
		$hd = $value->getHd();
		$link = $value->getLink();

		if ($psu == 400){
			$imgpsu = "img/psu400.jpg";
		}else{
			if($psu == 500){
				$imgpsu = "img/psu500.jpg";
			}else{
				$imgpsu = "img/psu750.jpg";
			}
		}
		if ($hd == 500){
			$imghd = "img/hd500.jpg";
		}else{
			if($hd == 1000){
				$imghd = "img/hd1000.png";
			}else{
				$imghd = "img/hd2000.jpg";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type = "image/x-icon" href="img/icone.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  />
	<title> Veja Seu Resultado!!! </title>
	<link href="tools/style.css" rel="stylesheet" type="text/css" />
	<link href="tools/960.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/rolagem.js"> </script>
	<script type="text/javascript" src="js/Adobe_Caslon_Pro_600.font.js" ></script>
	<script type="text/javascript">Cufon.replace('h1', {fontFamily: 'Adobe Caslon Pro', hover:true})</script>
</head>
<body>

	<div class="container_12" id="content">
	<h1>Seu PC Gamer Ideal foi encontrado!</h1>
	<h3>Rápido, simples e eficaz.</h3>
	<a  href="index.php?pag=especialista"><h3 align="right">Area do Especialista</h3></a>
	<div class="main" >
		<div class="mcontent" >
			<div class="form"> 
				<br><p class="formulariotitulo">Seu caso é <?php echo $porcentagem; ?> % parecido com este que estamos lhe recomendando!</p>

				<br><p class="formulariotitulo"><img width="100" src="img/cpu.jpg"> Processador recomendado: <?php echo $cpu; ?></p>

				<br><p class="formulariotitulo"><img width="100" src="img/vga.jpg"> Placa de vídeo recomendada: <?php echo $vga; ?></p>

				<br><p class="formulariotitulo"><img width="100" src="img/mobo.jpg"> Placa-Mãe recomendada: <?php echo $mobo; ?></p>

				<br><p class="formulariotitulo"><img width="100" src="img/ram.jpg"> Memória RAM recomendada: <?php echo $ram; ?> GB</p>

				<br><p class="formulariotitulo"><img width="100" src=" <?php echo $imghd; ?>  "> Memória Principal recomendada: <?php echo $hd; ?> GB</p>
				
				<br><p class="formulariotitulo"><img width="100" src=" <?php echo $imgpsu; ?>  "> Fonte de Alimentação recomendada: <?php echo $psu; ?> Watts</p>

				<br><br><br><br><br>
				<a  href="index.php?pag=home"><h2> Voltar </a>
				<a href=redireciona.exec.php?link="<?php echo $link; ?>"> <h2 align="right"> Quero comprar </a>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>