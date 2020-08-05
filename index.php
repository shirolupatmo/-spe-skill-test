<?php

	narcissistic(111);

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
			echo 'true';
		}else{
			echo 'false';
		}
	}

?>