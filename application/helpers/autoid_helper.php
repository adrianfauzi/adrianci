<?php 
	if (!function_exists('get_id')) {
		function get_id($fields="",$tabel="",$inisial="")
		{
			$CI =& get_instance();
			$query = $CI->db->query("SELECT MAX($fields) AS max FROM ".$tabel);
			$result = current($query->result());
			$number = 0;
			$imax = 9;
			$tmp = "";
			if ($result->max !='') {
				$number = substr($result->max, strlen($inisial));
				$number++;
				$number = strval($number);
				for ($i=0; $i <=($imax-strlen($inisial)-strlen($number)); $i++){
					$tmp = $tmp."0";
				}
			}
			return $inisial.$tmp.$number;
		}
	}
 ?>