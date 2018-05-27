<?php
	require_once "class.Usuario.php";
	require_once 'class.UsuarioDAO.php';

	(isset($_POST['nome']) and !empty($_POST['nome']))        		  ?	   		$nome  = $_POST['nome'] 				        :	     $erro[]= "nome";
	(isset($_POST['login']) and !empty($_POST['login']))      		  ?			$login = $_POST['login']      				  	:	     $erro[]= "login";
	(isset($_POST['senha']) and !empty($_POST['senha']))      		  ?			$senha = $_POST['senha']        				:	     $erro[]= "senha";
	(isset($_POST['confsenha']) and !empty($_POST['confsenha']))      ?   		$confsenha = $_POST['confsenha']   		        :	     $erro[]= "confsenha";

	if ($senha == $confsenha) {
		if(isset($erro) and is_array($erro)) {
			die("erro no recebimento de dados");
		}else{
			$md5senha = md5($senha);
			
			$usuario = new Usuario();

			$usuario->setNome($nome);
			$usuario->setLogin($login);
			$usuario->setSenha($md5senha);

			$usuarioDAO = new UsuarioDAO();

			$usuarioDAO->insert($usuario);

			header("location: index.php");
			exit;
		}
	}else{
		header("Location: cadastro.exec.php?statuserro=senhadif");
		exit;
	}
?>