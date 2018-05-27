<?php 
	require_once "class.pc.php";
	require_once "class.DbAdmin.php";
	require_once "funcao.inc.php";

	class pcDAO{		

		private $dba;

		public function pcDAO(){
			$dba = new DbAdmin("mysqli");
			$dba->connect('localhost', 'root', '', 'inteligencia');
			$this->dba = $dba;
		}

		public function lista(){
			$dba = $this->dba;	

			$query = "SELECT * FROM pc;";
			
			$res = $dba->query($query);		

			while( $linha = mysqli_fetch_array($res) ){
				$pc = new pc();
				
				$pc->SetIdPc($linha['id_pc']);
				$pc->setOrcamento( $linha['orcamento']);
				$pc->setQualidade( $linha['qualidade']);
				$pc->setResolucao( $linha['resolucao']);
				$pc->setFps( $linha['fps'] );
				$pc->setTempoUso( $linha['tempouso']);
				$pc->setCpu( $linha['cpu']);
				$pc->setMobo( $linha['mobo']);
				$pc->setPsu( $linha['psu']);
				$pc->setVga ($linha['vga']);
				$pc->setHd ($linha['hd']);
				$pc->setRam ($linha['ram']);				
				$pc->setLink ($linha['link']);				

				$vet[] = $pc;
			}
			if(isset($vet)){
				return $vet;
			}
			
		}

		public function insert($pc){
			$dba = $this->dba;

			$orcamento = $pc->getOrcamento();
			$qualidade = $pc->getQualidade();
			$resolucao = $pc->getResolucao();
			$fps = $pc->getFps();
			$tempouso = $pc->getTempoUso();

			$cpu = $pc->getCpu();
			$vga = $pc->getVga();
			$mobo = $pc->getMobo();
			$psu = $pc->getPsu();
			$hd = $pc->getHd();
			$ram = $pc->getRam();

			$link = $pc->getLink();			

			$query = 'INSERT INTO pc (orcamento, qualidade, resolucao, fps, tempouso, cpu, vga, mobo, psu, hd, ram, link) VALUES("'.$orcamento.'","'.$qualidade.'","'.$resolucao.'","'.$fps.'","'.$tempouso.'", "'.$cpu.'", "'.$vga.'", "'.$mobo.'", "'.$psu.'", "'.$hd.'", "'.$ram.'", "'.$link.'")';

			$dba->query($query);
		}


		public function listaID($id){
			$dba = $this->dba;		//require_once "conexao.inc.php";   agora conexao esta sendo feita pela classe dbadmin

			$query = 'SELECT * FROM pc WHERE  id_pc = ' . $id;
			
			$res = $dba->query($query);		//$res = mysqli_query($link, $query);

			while( $linha = mysqli_fetch_array($res) ){
				$pc = new pc();
				
				$pc->SetIdPc($linha['id_pc']);
				$pc->setOrcamento( $linha['orcamento']);
				$pc->setQualidade( $linha['qualidade']);
				$pc->setResolucao( $linha['resolucao']);
				$pc->setFps( $linha['fps'] );
				$pc->setTempoUso( $linha['tempouso']);
				$pc->setCpu( $linha['cpu']);
				$pc->setMobo( $linha['mobo']);
				$pc->setPsu( $linha['psu']);				
				$pc->setVga ($linha['vga']);
				$pc->setHd ($linha['hd']);
				$pc->setRam ($linha['ram']);
				$pc->setLink ($linha['link']);
				
				$vet[] = $pc;
			}

			return $vet;
		}

		public function excluirPc($id_pc){
			$dba = $this->dba;

			$query = 'DELETE FROM pc WHERE id_pc = "'.$id_pc.'";';
			//echo $query; die();
			
			$dba->query($query);
		}
	}
?>
