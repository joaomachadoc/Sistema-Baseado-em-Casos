<?php 
	require_once "class.Usuario.php";
	require_once "class.DbAdmin.php";
	require_once "funcao.inc.php";

	class UsuarioDAO{		

		private $dba;	// nome do objeto da class dbadmin

		public function UsuarioDAO(){
			$dba = new DbAdmin("mysqli");
			$dba->connect('localhost', 'root', '', 'inteligencia');
			$this->dba = $dba;	
		}

		public function lista(){
			$dba = $this->dba;		//require_once "conexao.inc.php";   agora conexao esta sendo feita pela classe dbadmin

			$query = "SELECT * FROM usuario;";
			
			$res = $dba->query($query);		//$res = mysqli_query($link, $query);

			while( $linha = mysqli_fetch_array($res) ){
				$con = new Usuario();
				
				$con->setIdUsuario( $linha['id_usuario']);
				$con->setNome( $linha['nome']);
				$con->setLogin( $linha['login']);
				$con->setSenha( $linha['senha']);
				
				$vet[] = $con;
			}

			return $vet;
		}

		public function insert($usuario){
			$dba = $this->dba;

			$id_usuario = $usuario->getIdUsuario();
			$nome = $usuario->getNome();
			$login = $usuario->getLogin();
			$senha = $usuario->getSenha();
			

			$query = 'INSERT INTO usuario (id_usuario, nome, login, senha) VALUES("'.$id_usuario.'","'.$nome.'","'.$login.'","'.$senha.'")';

			$dba->query($query);
		}

		public function validaLogin($usuario){
			$dba = $this->dba;

			$login = $usuario->getLogin();
			$senha = $usuario->getSenha();

			$query = ' SELECT * FROM usuario WHERE login ="'.$login.'" AND senha = "'.$senha.'";';


			$res = $dba->query($query);
			$num = $dba->numRows($res);
			
			//testes de erro
			//echo "TTTTT";
			//print_r( $num);die(); //teste

			return $num;
		}
	}
 ?>