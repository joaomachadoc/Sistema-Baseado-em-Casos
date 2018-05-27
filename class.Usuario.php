<?php
	class Usuario{
		private $id_usuario;
		private $nome;
		private $login;
		private $senha;

		public function Usuario(){

		}


		public function setIdUsuario($id){
			$this->id_usuario =  $id;
		}
		public function getIdUsuario(){
			return $this->id_usuario;
		}
		public function setNome($nome){
			$this->nome =  $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setLogin($log){
			$this->login =  $log;
		}
		public function getLogin(){
			return $this->login;
		}
		public function setSenha($senha){
			$this->senha =  $senha;
		}
		public function getSenha(){
			return $this->senha;
		}	
	}
?>