<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller
{
    /**
     * Load everything required for this class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(['form', 'url']);
        $this->load->model('calculations_model');
    }


    /**
     *  The Home page
     *  1. Option to run the password change page
     *  2. Option to display a unit test (only here for demonstration)
     */
    function index()
    {
        $data['title'] = 'Day 4 Solution';

        $this->load->view('templates/header', $data);
        $this->load->view('authenticate/homePage', $data);
        $this->load->view('templates/footer');
    }


    /**
     *  Change Password
     *  1. Displays the view/page to display the new password input - authenticate/edit
     *  2. Validate the input
     *  3. If successful then display the success page with the calculated number of password permutations
     */
    function changePW()
    {
        $data['title'] = 'Day 4 Solution';

        // check that the data is correct che with ca callback on passwordCheck
        $this->form_validation->set_rules('password', 'Password', 'callback_passwordCheck');

        // does not pass the validation test - display the edit page again or could be the first time
        if ($this->form_validation->run() == FALSE) {
            // display the results
            $this->load->view('templates/header', $data);
            $this->load->view('authenticate/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Day 4 Solution';

            // place the 4 words into an array to evaluate
            $pieces = explode(" ", $this->input->post('password'));

            // calculate the number of password permutations
            $data['permutations'] = $this->calculations_model->calculatePermutations($pieces);

            // display the results
            $this->load->view('templates/header', $data);
            $this->load->view('authenticate/success', $data);
            $this->load->view('templates/footer');
        }

    }


    /**
     *  Check if the password field has something in it
     *  Need to complete:
     *  Add the same checks that JavaScript has checked for on the browser side
     *  in-case the user has bypassed the JavaScript checks
     */
    function passwordCheck($str)
    {
        // if it has nothing then display a message
        if ($str == '') {
            $this->form_validation->set_message('passwordCheck', 'The {field} field must have four words');
            return FALSE;
        } else {
            // need to add further checks here based on the same rules as the JavaScript browser
            return TRUE;
        }
    }

}
