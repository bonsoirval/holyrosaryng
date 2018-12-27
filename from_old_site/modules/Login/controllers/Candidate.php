<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include (APPPATH.'controllers/auth.php'); 

class Candidate extends Auth {
        
    var $data = array();
    
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
        
                $this->data['nav_url'] = base_url().'Candidate/';
		
	}
	public function index()
	{
            $this->logged_in(); //ensure user is logged in
            echo "Welcome";
	}
	
        private function logged_in()
        {
            if(!$this->ion_auth->logged_in())
            {
                redirect('Candidate/login'); //$this->template->load('Candidate', 'login_default', 'login', $this->data);
            }
			//exit();
        }
	
	function login()
	{
		$this->data['title'] = "Candidate Login";
		if($this->input->post())
		{
			$this->form_validation->set_rules('identity','Identity', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('remember', 'Remember Me', 'integer');
			
			if($this->form_validation->run() === TRUE)
			{
				$remember = (bool)$this->input->post('remember');
				if($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
				{
					redirect('Candidate', 'refresh');
				}else{
					$this->session->set_flashdata('message', $this->ion_auth->errors());
					redirect('Candidate/login', 'refresh');
				}
			}
			//here we will verify the inputs
		}
		$this->template->load('Candidate', 'login_default', 'login', $this->data);
	}
	//log the user out
	function logout()
	{
		$this->ion_auth->logout();
		redirect('Welcome/', 'refresh');
	}
        
        
        
}
