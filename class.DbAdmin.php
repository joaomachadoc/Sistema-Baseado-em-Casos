<?php
	class DbAdmin{

		private $tipo;     //mysql, mysqli, pgsql, mssql
		private $conn;	  //conexao ativa, que seria no projeto atual a variavel $link

		public function DbAdmin($tipo){
			$this->tipo = $tipo;
		}

		public function connect($host, $user, $pass, $base){
			switch ($this->tipo){
				case "mysql":
					$this->conn = mysql_connect($host, $user, $pass);
					mysql_select_db($base);
					break;
				case "mysqli":
					$this->conn = mysqli_connect($host, $user, $pass);
					mysqli_select_db($this->conn, $base);
					break;
				default:
					die("Erro de selecao de db ou conexao no banco - dbadmin");
					break;
			}
		}
	
		public function query($query){
			switch ($this->tipo){
				case "mysql":
					$res = mysql_query($sql, $this->conn) or die(mysql_error());  // ai sim :D
					break;
				case "mysqli":
					$res = mysqli_query($this->conn, $query) or die(mysqli_error());
					//$res = mysqli_master_query($this->conn, $sql);
					break;
				default:
					die("Erro na dbadmin->query, linguagem do banco incorreta");
					break;
			}
			return $res;
		}

		public function numRows($res){
			switch ($this->tipo){
				case 'mysqli':
					$num = mysqli_num_rows($res) or die(mysqli_error($this->conn));
					break;
				case 'mysql':
					$num = mysql_num_rows($res) or die(mysql_error());
					break;
				default:
					die("fatal error dbadmin numrows");
					break;
			}
			return $num;
		}
	}
?>