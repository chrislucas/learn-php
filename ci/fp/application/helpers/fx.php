<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Exemplo simples
*/

if( ! function_exists('string_money_format')) {
	function string_money_format($number) {
		if(is_numeric($number)) {
			return str_replace('.', ',', $number);
		}
	}
}


/* End of file fx.php */
/* Location: ./application/helpers/fx.php */