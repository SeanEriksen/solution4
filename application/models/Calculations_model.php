<?php
class Calculations_model extends CI_Model {

		
	public  function calculatePermutations($pieces) {

	(int)$totalPermutations=0;
	for ($x = 0; $x < count($pieces); $x++) {
				$totalPermutations += pow(26, strlen($pieces[$x]));
		} 
					
		return $totalPermutations;

}

}