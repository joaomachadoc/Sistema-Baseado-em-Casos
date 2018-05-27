<?php
	require_once "class.pcDAO.php";


	if (isset($_GET['id_pc']) and !empty($_GET['id_pc']) ) {
		//die("passei aqui");	

		$id = $_GET['id_pc'];

		$dao = new pcDAO();

		$dao->excluirPc($id);

		header('Location:index.php?pag=especialista');
		exit;
	}else{		
			die("Nao foi possivel excluir");		
	}	
?>