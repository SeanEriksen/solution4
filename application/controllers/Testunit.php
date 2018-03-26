<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testunit extends CI_Controller
{
    /**
     * Load everything required for this class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('calculations_model');
    }


    /**
     * Load all the tests here
     */
    public function index()
    {
        // Test 1:
        echo "Testing:1";
        $test_name = "How many password permutations can we have? 'a b c d'";
        // load the user input
        $test = $this->howMany('a b c d');
        // load the correct result to compare to the test
        $expected_result = 104;
        // display the results
        echo $this->unit->run($test, $expected_result, $test_name);

        // Test 2:
        echo "Testing:2";
        $test_name = "How many password permutations can we have? 'aaa bc cdd dss'";
        // load the user input
        $test = $this->howMany('aaa bc cdd dss');
        // load the correct result to compare to the test
        $expected_result = 53404;
        // display the results
        echo $this->unit->run($test, $expected_result, $test_name);
    }


    /**
     * Run the test against the model where the calculatePermutations method is
     */
    private function howMany($password)
    {
        $pieces = explode(" ", $password);
        return $this->calculations_model->calculatePermutations($pieces);
    }

}