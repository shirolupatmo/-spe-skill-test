<?php

	echo narcissistic(153);

	function narcissistic($numb){
		$sumcar = strval($numb);
		$ln = strlen(strval($numb));

		$myString = $sumcar;
		$myArray = str_split($myString);

		$a = 0;
		 
		foreach($myArray as $character){
			$temp_a = pow((int)$character, (int)$ln); 
			$a += $temp_a;
		}


		if($numb == $a){
			return 'true';
		}else{
			return 'false';
		}
	}

?>