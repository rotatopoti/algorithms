<?php

// Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:

// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

// By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.

	$prepre = 0;
	$previous = 1;
	$result = 0;
	$fibonacci = [];
	$position = 0; 
	$sum = 0;

	//1+2+3+5

	for($x = 1; $x<=4000000; $x=$previous+$prepre){		
		$fibonacci[$position] = $x;
		$position +=1;
		$prepre = $previous;
		$previous = $x;
		if($x%2 == 0){
			$sum = $sum+$x;
		}

	}
	print_r($fibonacci);
	echo $sum . "\n";

?>