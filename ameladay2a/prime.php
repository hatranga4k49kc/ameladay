<?php 
	for ($num = 2 ; $num < 100 ; ++$num) { 
		$count = 0;
		for ($i=2; $i <= sqrt($num) ; $i++) { 
			if($num % i == 0){
				$count ++ ;
			}
		}
		if($count == 0 ){
			echo $num . "";
		}
	}


 ?>