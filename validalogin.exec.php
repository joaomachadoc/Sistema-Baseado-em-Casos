<?php
	require_once 'class.Usuario.php';
	require_once 'class.UsuarioDAO.php';

	session_start(); //iniciando uma sessao

	//if simplificado
	(isset($_POST['login']) and !empty($_POST['login']))   ?       $login = $_POST['login']          :        $erro[]= "login";
	(isset($_POST['senha']) and !empty($_POST['senha']))   ?       $senha = $_POST['senha']          :        $erro[]= "senha";

	if(isset($erro) and is_array($erro)) {
		header("Location: login.exec.php?statuserro=senhadif");
		exit;
	}else{
		$md5senha = md5($senha);

		$usuario = new Usuario();

		$usuario->setLogin($login);
		$usuario->setSenha($md5senha);

		$usuarioDAO = new UsuarioDAO();

		$num = $usuarioDAO->validaLogin($usuario);

		if (is_integer($num)){
			$_SESSION['dados'] = 1;
			header("Location: index.php?pag=area");
			exit;
		}else{
			header("Location: index.php");
			exit;
		}	
	}
?>


