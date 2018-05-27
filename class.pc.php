<?php
	class pc{

		private $id_pc;		
		private $orcamento;
		private $qualidade;
		private $fps;
		private $resolucao;
		private $tempouso;
		private $cpu;
		private $psu;
		private $vga;
		private $mobo;
		private $ram;
		private $hd;
		private $link;

		
		public function setIdPc($id_pc){
			$this->id_pc =  $id_pc;
		}
		public function getIdPc(){
			return $this->id_pc;
		}
		public function setOrcamento($orcamento){
			$this->orcamento =  $orcamento;
		}
		public function getOrcamento(){
			return $this->orcamento;
		}
		public function setQualidade($qualidade){
			$this->qualidade =  $qualidade;
		}
		public function getQualidade(){
			return $this->qualidade;
		}
		public function setResolucao($resolucao){
			$this->resolucao =  $resolucao;
		}
		public function getResolucao(){
			return $this->resolucao;
		}
		public function setFps($fps){
			$this->fps =  $fps;
		}
		public function getFps(){
			return $this->fps;
		}
		public function setTempoUso($tempouso){
			$this->tempouso =  $tempouso;
		}
		public function getTempoUso(){
			return $this->tempouso;
		}
		public function setCpu($cpu){
			$this->cpu =  $cpu;
		}
		public function getCpu(){
			return $this->cpu;
		}
		public function setVga($vga){
			$this->vga =  $vga;
		}
		public function getVga(){
			return $this->vga;
		}
		public function setMobo($mobo){
			$this->mobo =  $mobo;
		}
		public function getMobo(){
			return $this->mobo;
		}
		public function setPsu($psu){
			$this->psu =  $psu;
		}
		public function getPsu(){
			return $this->psu;
		}
		public function setRam($ram){
			$this->ram =  $ram;
		}
		public function getRam(){
			return $this->ram;
		}
		public function setHd($hd){
			$this->hd =  $hd;
		}
		public function getHd(){
			return $this->hd;
		}

		public function setLink($link){
			$this->link =  $link;
		}
		public function getLink(){
			return $this->link;
		}
		
		public function pc(){
			
		}
	}
?>