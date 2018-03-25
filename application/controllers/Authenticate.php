<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper(['form', 'url']);
		$this->load->model('calculations_model');
    }


    /**
     *  The default start
     */
    function index()
    {
        $data['title'] = 'Day 4 Solution';

        $this->load->view('templates/header', $data);
		$this->load->view('authenticate/homePage', $data);
        $this->load->view('templates/footer');
    }

	/**
     *  The default start
     */
	 /*
    function submit()
    {
		$data['title'] = 'processed';

        $this->load->view('templates/header', $data);
		$this->load->view('authenticate/changedPassword', $data);
        $this->load->view('templates/footer');
	}
   */
   	/**
     *  The default start
     */
    function changePW()
    {
				$data['title'] = 'Day 4 Solution';

				$this->form_validation->set_rules('password', 'Password', 'callback_password_check');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates/header', $data);
					$this->load->view('authenticate/edit', $data);
					$this->load->view('templates/footer');
                }
                else
                { 
					$data['title'] = 'Day 4 Solution';
					
					$pieces = explode(" ", $this->input->post('password'));
					
					$data['permutations'] = $this->calculations_model->calculatePermutations($pieces);
					
					$this->load->view('templates/header', $data);
					$this->load->view('authenticate/success', $data);
					$this->load->view('templates/footer');
                }
   
	}
	

   
   function password_check($str)
        {
                if ($str == '')
                {
                        $this->form_validation->set_message('password_check', 'The {field} field must have four words');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }
   
	
}
