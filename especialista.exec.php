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
	
	<table border="1" width="80%" align="center">
		<?php
			require_once "class.pcDAO.php";
			require_once "funcao.inc.php";

			$dao = new pcDAO();

			$vet = $dao->lista();

			if (isset($vet)){
				echo "<tr>";
				echo "<td align=".'center'." colspan=".'12'.">";
				echo "<a href=".'index.php?pag=novocaso'."> Inserir Caso</a>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan=".'12'.">";
				echo "<hr></td></tr>";

				echo "<tr>";
				echo "<td>Orcamento</td>";
				echo "<td>Resolucao</td>";
				echo "<td>Qualidade</td>";
				echo "<td>FPS</td>";
				echo "<td>Tempo de Uso</td>";
				echo "<td>Cpu</td>";
				echo "<td>Vga</td>";
				echo "<td>MoBo</td>";
				echo "<td>Ram</td>";
				echo "<td>Fonte</td>";
				echo "<td>Espaço</td>";
				echo "<td>Excluir Caso</td>";
				echo "</tr>";
			
				foreach ($vet as $key => $value){
				
					$id_pc = $value->getIdPc();
					$orcamento = $value->getOrcamento();
					$resolucao = $value->getResolucao();
					$qualidade = $value->getQualidade();
					$fps = $value->getFps();
					$tempouso = $value->getTempoUso();
					$cpu = $value->getCpu();
					$vga = $value->getVga();
					$mobo = $value->getMobo();
					$ram = $value->getRam();
					$psu = $value->getPsu();
					$hd = $value->getHd();
					
				
					echo "<tr>";		
					echo "<td>" . $orcamento . "</td>";
					echo "<td>" . $resolucao . "p </td>";
					echo "<td>" . $qualidade . "</td>";
					echo "<td>" . $fps . "</td>";
					echo "<td>" . $tempouso. " Ano(s)</td>";
					echo "<td>" . $cpu. "</td>";
					echo "<td>" . $vga. "</td>";
					echo "<td>" . $mobo. "</td>";
					echo "<td>" . $ram. " GB </td>";
					echo "<td>" . $psu. " W </td>";
					echo "<td>" . $hd. " GB</td>";
					echo "<td>" . '<a href="index.php?pag=excluircaso&id_pc=' . $id_pc . ' "> Excluir </a>'.  "</td>";
					echo "</tr>";	
				}
			}else{
				echo "<tr>";
				echo "<td colspan="."12>";
				echo "<br><br>";
				echo "<h2 align="."center"."> Não há casos salvos no sistema";
				echo "<br><br> <a href=" . "index.php?pag=novocaso" . ">Insira um novo Caso</a></h2>";		
				echo "<br><br><br>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>