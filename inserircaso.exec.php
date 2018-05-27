<?php
	require_once "class.pc.php";
	require_once "class.pcDAO.php";

	(isset($_POST['orcamento']))   	?   $orcamento  =  $_POST['orcamento']  :     $erro[]= "erro";
	(isset($_POST['resolucao']))   	?   $resolucao  =  $_POST['resolucao']  :     $erro[]= "erro";
	(isset($_POST['qualidade']))	?   $qualidade  =  $_POST['qualidade']  :     $erro[]= "erro";
	(isset($_POST['fps'])) 		 	?   $fps  		=  $_POST['fps']   	    :     $erro[]= "erro";
	(isset($_POST['tempouso']))    	?   $tempouso 	=  $_POST['tempouso']	:     $erro[]= "erro";
	(isset($_POST['cpu']))    		?   $cpu 	=  $_POST['cpu']	:     $erro[]= "erro";
	(isset($_POST['vga']))    		?   $vga 	=  $_POST['vga']	:     $erro[]= "erro";
	(isset($_POST['mobo']))    		?   $mobo 	=  $_POST['mobo']	:     $erro[]= "erro";
	(isset($_POST['ram']))    		?   $ram 	=  $_POST['ram']	:     $erro[]= "erro";
	(isset($_POST['psu']))    		?   $psu 	=  $_POST['psu']	:     $erro[]= "erro";
	(isset($_POST['hd']))    		?   $hd 	=  $_POST['hd']	    :     $erro[]= "erro";
	(isset($_POST['link']))    		?   $link 	=  $_POST['link']	    :     $erro[]= "erro";

	$pc = new pc();

	if(isset($erro) and is_array($erro)){
		die("erro de recebimento de dados");
	}else{
		$pc->setOrcamento($orcamento);
		$pc->setResolucao($resolucao);
		$pc->setQualidade($qualidade);
		$pc->setFps($fps);
		$pc->setTempoUso($tempouso);

		$pc->setCpu($cpu);
		$pc->setVga($vga);
		$pc->setMobo($mobo);
		$pc->setRam($ram);
		$pc->setHd($hd);
		$pc->setPsu($psu);

		$pc->setLink($link);

		$pcDAO = new pcDAO();
		$pcDAO->insert($pc);
	}

	header("Location: index.php?pag=especialista");
	exit;
?>

