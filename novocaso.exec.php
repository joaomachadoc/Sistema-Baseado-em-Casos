<!DOCTYPE html>
<html>
<head>
	<title>Qual é o PC Gamer ideal para você? </title>
	<script type="text/javascript">
		Cufon.replace('h1', {fontFamily: 'Adobe Caslon Pro', hover:true})
	</script>
	<script type="text/javascript" src="js/rolagem.js"> </script>
	<link rel="shortcut icon" type = "image/x-icon" href="img/icone.ico"/>	
</head>
<body>
<form action="inserircaso.exec.php" method="POST" enctype="multipart/form-data">
	
	<div class="main" align="center">
		<div class="mcontent" align="center">
			<div class="form" align="center">
				<br><p class="formulariotitulo" align="center">Digite as carasterísticas do novo caso</p><br>
				<br><p class="formulariotitulo">Seu orcamento pode ser definido como: </p>
				<p class="formulario"><input align="left" type="radio" name="orcamento" value="Baixo" required> Baixo <br></p>
				<p class="formulario"><input align="left" type="radio" name="orcamento" value="Medio"> Médio <br></p>
				<p class="formulario"><input align="left" type="radio" name="orcamento" value="Alto"> Alto <br></p><br>
				<p class="formulariotitulo">Qual a resolução que pretende jogar: </p>
				<p class="formulario"><input align="left" type="radio" name="resolucao" value="1080" required> 1080p Full HD <br></p>
				<p class="formulario"><input align="left" type="radio" name="resolucao" value="1440"> 1440p 2.5K <br></p>
				<p class="formulario"><input align="left" type="radio" name="resolucao" value="2160"> 2160p 4K <br></p><br>
				<p class="formulariotitulo">Qual a qualidade gráfica desejada: </p>
				<p class="formulario"><input align="left" type="radio" name="qualidade" value="Baixo" required> Baixo <br></p>
				<p class="formulario"><input align="left" type="radio" name="qualidade" value="Medio"> Médio <br></p>
				<p class="formulario"><input align="left" type="radio" name="qualidade" value="Alto"> Alto <br></p>
				<p class="formulario"><input align="left" type="radio" name="qualidade" value="Ultra"> Ultra <br></p><br>
				<p class="formulariotitulo">Qual a taxa média de Frames(FPS) desejada: </p>
				<p class="formulario"><input align="left" type="radio" name="fps" value="30" required> +30 FPS <br></p>
				<p class="formulario"><input align="left" type="radio" name="fps" value="60"> +60 FPS <br></p>
				<p class="formulario"><input align="left" type="radio" name="fps" value="120"> +120 FPS <br></p><br>
				<p class="formulariotitulo">Por quantos anos deseja que este computador mantenha este desempenho: </p>
				<p class="formulario"><input align="left" type="radio" name="tempouso" value="1" required> 1 Ano <br></p>
				<p class="formulario"><input align="left" type="radio" name="tempouso" value="2"> 2 Anos  <br></p>
				<p class="formulario"><input align="left" type="radio" name="tempouso" value="3"> 3 Anos <br></p>
				
				<br><p class="formulariotitulo" align="center">Digite os componentes deste PC:</p>
				<br><p class="formulariotitulo">Processador: <input type="text" name="cpu" required=""> </p>
				<br><p class="formulariotitulo">Placa de Vídeo: <input type="text" name="vga" required=""> </p>
				<br><p class="formulariotitulo">Placa Mãe: <input type="text" name="mobo" required=""> </p>
				<br><p class="formulariotitulo">Memória RAM:  
				<input type="radio" name="ram" value="4" required> 4 GB
				<input type="radio" name="ram" value="8"> 8 GB 
				<input type="radio" name="ram" value="16"> 16 GB</p>

				<br><p class="formulariotitulo">Fonte de Alimentação:  
				<input type="radio" name="psu" value="400" required> 400W
				<input type="radio" name="psu" value="500"> 500W
				<input type="radio" name="psu" value="750"> 750W</p>

				<br><p class="formulariotitulo">Espaço de Armazenamento:  
				<input type="radio" name="hd" value="500" required> 500GB
				<input type="radio" name="hd" value="1000"> 1 TB
				<input type="radio" name="hd" value="2000"> 2TB </p>

				<br><p class="formulariotitulo">Insira um link onde venda essa configuração: <input type="text" name="link"> </p>
		
				<input type="image" src="img/seta.png" align="right" width="100" onClick="this.form.submit()"></p>
			</div>
		</div>
	</div>
</div>	
</form>
</body>
</html>