<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    var $data = array();
    
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));
		$this->form_validation->set_error_delimiters(
		$this->config->item('error_start_delimiter', 'ion_auth'),
		$this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
    }
	public function index()
	{
		if(!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->data['title'] = 'Admin Login';
			$this->template->load('Login', 'default', 'login',$this->data);
			
		}else{
                    
			//$this->_render_page('auth/index', $this->data);
			$this->data['title'] = 'Admin Dashboard';
			$this->template->load('Admin', 'default', 'welcome',$this->data);
		}
		
	}
        
        //log the user in
	function login()
	{
		//$this->data['title'] = "Login";
		if (!$this->input->is_ajax_request()) {
            exit('Fill and submit the login form');
        }else{
		//validate form input
		$this->form_validation->set_rules('identity', 'Identity', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

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
					
					if($this->ion_auth->in_group('Administrator'))
					{
						//admin code
						
						$status = array(
							"STATUS" => true,
							'type' => "Admin",
						);
                        echo json_encode($status);
						
					}elseif($this->ion_auth->in_group('Candidate'))
					{
						//Candidate code
						$this->data['title'] = "Candidate Dashboard";
						
						//$this->data['your_pass'] = 'Your passport';
                                $status = array(
                                    "STATUS"=>true,
                                    'type' => "Candidate",
                                );
                                
                                echo json_encode ($status);
					}elseif($this->ion_auth->in_group('Student'))
					{
						$status = array(
							"STATUS"=>true,
							'type' => "Student",
						);
                                
                        echo json_encode ($status);
						//student code
					}
					/*
					$this->data['title'] = "Admin Dashboard";
					$this->data['your_pass'] = 'Your passport';
                                $status = array(
                                    "STATUS"=>true,
                                    'type' => "Admin",
                                );
                                
                                echo json_encode ($status);
							*/	
					//redirect('Candidate', 'refresh');
				}else{
					//do nothing if not logged in, we handle it with jquery
					
					//$this->session->set_flashdata('message', $this->ion_auth->errors());
					//redirect('Candidate/login', 'refresh');
				}
			}else{
				//failed validation
			}
			
		}else{
			//there is no post data
		}
		//$this->template->load('Candidate', 'login_default', 'login', $this->data);
		}

	}

        
        //log the user out
	function logout()
	{
		//$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		//$this->template->load('Admin', 'login_default', 'login');
                //$this->template->load('Admin', 'login_default', 'login', $this->data);
                redirect('admin/login', 'refresh');
	}
        
       
}
