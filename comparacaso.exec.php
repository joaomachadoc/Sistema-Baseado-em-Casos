<?php
	require_once "class.pcDAO.php";

	$p1 = $_POST['opcao1'];
	$p2 = $_POST['opcao2'];
	$p3 = $_POST['opcao3'];
	$p4 = $_POST['opcao4'];
	$p5 = $_POST['opcao5'];
	
	$vsO = 0; $vsR = 0; $vsQ = 0; $vsF = 0; $vsT=0; $vsTotal=0;
	$dao = new pcDAO();
	$vet = $dao->lista();

	foreach ($vet as $key => $value){
		$id = $value->getIdPc();
		$orcamento = $value->getOrcamento();
		$resolucao = $value->getResolucao();
		$qualidade = $value->getQualidade();
		$fps = $value->getFps();
		$tempouso = $value->getTempoUso();


		switch($p1){		
			case "Baixo":
				if ($orcamento == $p1) {
					$vsO = 100;
				}else{
					if ($orcamento == "Medio"){
						$vsO = 50;
					}
					if ($orcamento == "Alto"){
						$vsO = 10;	
					}
				}
				break;							
			case "Medio":
				if ($orcamento == $p1) {
					$vsO = 100;	
				}else{
					$vsO = 50;	
				}
				break;	
			case "Alto";
				if ($orcamento == $p1) {
					$vsO = 100;	
				}else{
					if ($orcamento == "Medio") {
						$vsO = 50;	
					}
					if ($orcamento == "Baixo") {
						$vsO = 10;	
					}
				}				
				break;
		}
		switch($p2){		
			case "1080":
				if ($resolucao == $p2) {
					$vsR = 100;
				}else{
					if ($resolucao == "1440"){
						$vsR = 50;
					}
					if ($resolucao == "2160") {
						$vsR = 10;
					}
				}
				break;							
			case "1440":
				if ($resolucao == $p2) {
					$vsR = 100;
				}else{
					$vsR = 50;
				}
				break;	
			case "2160";
				if ($resolucao == $p2) {
					$vsR = 100;
				}else{
					if ($resolucao == "1440") {
						$vsR = 50;
					}
					if ($resolucao == "1080") {
						$vsR = 10;
					}
				}				
				break;
		}
		switch($p3){
			case "Baixo":
				if ($qualidade == $p3) {
					$vsQ = 100;
				}else{
					if ($qualidade == "Medio") {
						$vsQ = 60;
					}
					if ($qualidade == "Alto") {
						$vsQ = 30;
					}
					if ($qualidade == "Ultra") {
						$vsQ = 10;
					}
				}
				break;							
			case "Medio":
				if ($qualidade == $p3) {
					$vsQ = 100;
				}else{
					if ($qualidade == "Baixo") {
						$vsQ = 60;
					}
					if ($resolucao == "Alto") {
						$vsQ = 60;
					}
					if ($resolucao == "Ultra"){
						$vsQ = 30;
					}
				}
				break;	
			case "Alto":
				if ($qualidade == $p3) {
					$vsQ = 100;
				}else{
					if ($qualidade == "Baixo") {
						$vsQ = 30;
					}
					if ($resolucao == "Medio") {
						$vsQ = 60;
					}
					if ($resolucao == "Ultra"){
						$vsQ = 60;
					}
				}
				break;	
			case "Ultra":
				if ($qualidade == $p3) {
					$vsQ = 100;
				}else{
					if ($qualidade == "Baixo") {
						$vsQ = 10;
					}
					if ($resolucao == "Medio") {
						$vsQ = 30;
					}
					if ($resolucao == "Alto"){
						$vsQ = 60;
					}
				}
			break;			
		}
		
		
		switch($p4){
				case "30":
				if ($fps == $p4) {
					$vsF = 100;
				}else{
					if ($fps == "60"){
						$vsF = 50;
					}
					if ($fps == "120") {
						$vsF = 10;
					}
				}
			break;							
			case "60":
				if ($fps == $p4) {
					$vsF = 100;
				}else{
					if ($fps == "30") {
						$vsF = 50;
					}
					if ($fps == "120") {
						$vsF = 50;
					}
				}
			break;	
			case "120";
				if ($fps == $p4) {
					$vsF = 100;
				}else{
					if ($fps == "30") {
						$vsF = 10;
					}
					if ($fps == "60") {
						$vsF = 50;
					}
				}				
			break;
		}
		
		
		switch($p5){
			case "1":
				if ($tempouso == $p5) {
					$vsT = 100;
				}else{
					if ($tempouso == "2"){
						$vsT = 50;
					}
					if ($tempouso == "3") {
						$vsT = 30;
					}
				}
			break;							
			case "2":
				if ($tempouso == $p5) {
					$vsT = 100;
				}else{
					if ($tempouso == "1") {
						$vsT = 50;
					}
					if ($tempouso == "3") {
						$vsT = 30;
					}
				}
			break;	
			case "3";
				if ($tempouso == $p5) {
					$vsT = 100;
				}else{
					if ($tempouso == "2") {
						$vsT = 60;
					}
					if ($tempouso == "1") {
						$vsT = 30;
					}
				}				
			break;
		}

		$vsTotal =  ($vsO * 8) + ($vsR * 10) + ($vsQ * 4) + ($vsF * 6) + ($vsT * 4);
		if ($key == 0) {
			$vsMaior = $vsTotal;
			$idMaior = $id;
		}else{
			if ($vsTotal > $vsMaior){
				$vsMaior = $vsTotal;
				$idMaior = $id;
			}
		}
		$vsO = 0; $vsR = 0; $vsQ = 0; $vsF = 0; $vsT=0; $vsTotal=0;
	}

	$porcentagem = ($vsMaior * 100) / 3200;		
	if($porcentagem < 40){
		header("Location: notFound.exec.php");	
	}else{
		header("Location: mostraResultado.exec.php?pc=".$idMaior."&porcentagem=".$porcentagem);	
	}
	
	exit;
?>