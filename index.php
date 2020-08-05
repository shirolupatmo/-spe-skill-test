<?php

	$arrnumber = [160, 3, 1719, 19, 11, 13, -21];

	narcissistic(111);
	parityoutlier($arrnumber);


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

	function parityoutlier($arr){
		echo '<br> ----- <br>';

		$oddnumber 	= 0;
		$ganjil = '';
		$evennumber = 0;
		$genap = '';

		foreach($arr as $character){
			if((int)$character >= 0){
				if((int)$character%2 == 0){
					$evennumber += 1;
					$genap = $character;
				}else{
					$oddnumber += 1;
					$ganjil = $character;
				}
			}
		}

		echo 13%2;

		//echo "ganjil = ".$oddnumber." - genap = ".$evennumber;

		if($oddnumber == 1){
			echo $ganjil." (the only odd number)";
		}elseif($evennumber == 1){
			echo $ganjil." (the only even number)";
		}else{
			//echo "all odd integer, no outlier";
			echo "ganjil = ".$oddnumber." - genap = ".$evennumber;
		}
	}

?>