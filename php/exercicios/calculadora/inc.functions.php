<?php
	function gerarObjetoDeIMC($peso, $altura) {
		$objetoDeIMC = array();

		$imc = $peso / ($altura * $altura);
		$grupo = "";

		if($imc < 18.6) {
			$grupo .= "Abaixo do normal";
		} else if($imc >= 18.6 && $imc < 25) {
			$grupo .= "Saudável";
		} else if($imc >= 25 && $imc < 30) {
			$grupo .= "Sobrepeso";
		} else if($imc >= 30 && $imc < 35) {
			$grupo .= "Obesidade 1";
		} else if($imc >= 35 && $imc < 40) {
			$grupo .= "Obesidade 2";
		} else if($imc >= 40) {
			$grupo .= "Obesidade 3";
		}

		$objetoDeIMC['peso'] = $peso;
		$objetoDeIMC['altura'] = $altura;
		$objetoDeIMC['imc'] = $imc;
		$objetoDeIMC['grupo'] = $grupo;


		return $objetoDeIMC;
	}
?>