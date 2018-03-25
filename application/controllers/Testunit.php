<?php

class Testunit extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
		$this->load->model('calculations_model');
    }

	private function howMany($password){
		$pieces = explode(" ", $password);
		return $this->calculations_model->calculatePermutations($pieces);
	}
	
    public function index()
    {
		echo "Testing:1";
		$test_name = "How many password permutations can we have? 'a b c d'";
		$test = $this->howMany('a b c d');
		$expected_result = 104;
		echo $this->unit->run($test, $expected_result, $test_name);
		echo "Testing:2";
		$test_name = "How many password permutations can we have? 'aaa bc cdd dss'";
		$test = $this->howMany('aaa bc cdd dss');
		$expected_result = 53404;
		echo $this->unit->run($test, $expected_result, $test_name);
    }
}