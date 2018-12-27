<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

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
                
                //general navigation 
                $this->data['nav_url'] = base_url().'Admin/';
	}
	public function index()
	{
		if(!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			$this->data['title'] = 'Admin Login';
			$this->template->load('Admin', 'login_default', 'login',$this->data);
		}else{
			$this->data['title'] = 'Admin Dashboard';
			$this->template->load('Admin', 'default', 'index',$this->data);
		}
		
	}
        
        //log the user in
	function login()
	{
		//$this->data['title'] = "Login";

		//validate form input
		$this->form_validation->set_rules('identity', 'Identity', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{
			//check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');
                        
                        $login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);
			if ($login == true)
			{
				$this->data['title'] = "Admin Dashboard";
				$this->data['your_pass'] = 'Your passport';
                                $status = array(
                                    "STATUS"=>true,
                                    'type' => "Admin",
                                );
                                
                                echo json_encode ($status);
			}
			else
			{
				//if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				//redirect('auth/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{/*
                    if(!$this->ion_auth->logged_in())
                    {
                        echo "I am not logged in";
                    }else{
                        echo "Logged In";
                        
                    }
                    */
			//the user is not logging in so display the login page
			//set the flash data error message if there is one
			//$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);
			$this->data['title'] = 'Admin Dashboard';
                        $this->template->load('Admin', 'login_default', 'login', $this->data);
			//$this->_render_page('auth/login', $this->data);
                         
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
                redirect('Admin/login', 'refresh');
	}
}
