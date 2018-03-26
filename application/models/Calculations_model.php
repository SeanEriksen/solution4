<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculations_model extends CI_Model
{

    /**
     * Calculate permutations of the password given
     * A password is made up of 4 words
     * Calculate the number of letters in each word
     * Calculate teh number of potential words each one could be
     * Add them all together to get the total
     */
    public function calculatePermutations($pieces)
    {
        (int)$totalPermutations = 0;
        for ($x = 0; $x < count($pieces); $x++) {
            $totalPermutations += pow(26, strlen($pieces[$x]));
        }

        return $totalPermutations;
    }

}