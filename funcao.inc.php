<?php
	function formataDataBr($data_br){
		
		$array_date = explode('/',$data_br);

		//               22/02/1986
		// $array_date[] 0  1  2

		$data_mysql = $array_date[2].'-'.$array_date[1].'-'.$array_date[0];

		return $data_mysql;
	}

	function formataDataSQL($data_mysql){
		$array_date = explode('-', $data_mysql);

		$data_br = $array_date[2].'/'.$array_date[1].'/'.$array_date[0];

		return $data_br;
	}
	function dataAtual(){
		setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
       	date_default_timezone_set( 'America/Sao_Paulo' );
		$data = (strftime( '%d/%m/%Y ', strtotime('today') ));
		return $data;
	}		

	function formataDatePicker($data_dp){
		$array_date = explode('/',$data_dp);

		//               02/22/1986
		// $array_date[] 0  1  2

		$data_mysql = $array_date[2].'-'.$array_date[0].'-'.$array_date[1];

		return $data_mysql;
	}
	function formataDatePickerSQL($data_dp){
		$array_date = explode('/',$data_dp);

		//               6/30/2017
		// $array_date[] 0  1  2

		$data_mysql = $array_date[2].'-'.$array_date[0].'-'.$array_date[1];

		return $data_mysql;
	}

	function sqltoDatePicker($data_mysql){
		$array_date = explode('-', $data_mysql);

		$data_dp = $array_date[1].'/'.$array_date[2].'/'.$array_date[0];

		return $data_dp;	
	}

?>