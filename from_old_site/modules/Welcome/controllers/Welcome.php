<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Welcome extends MX_Controller {

        public $data = array();
        
	function __construct() {
            parent::__construct();
            $this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
                
                $this->load->model('Welcome_model', 'welcome');
          
            /*
            $this->load->database();
            $this->load->library(array('form_validation'));
            $this->load->helper(array('url','language'));

            $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

            $this->lang->load('auth');
            
           
            $this->load->model('Welcome_model', 'welcome');*/
            
        }
	public function index()
	{
            $this->data['title'] = 'Holy Rosary : Index';
            $this->template->load('Welcome', 'default', 'index', $this->data);
	}
        
        public function about()
        {
            $this->data['title'] = "About Us";
            $this->template->load('Welcome', 'default', 'about', $this->data);
        }
        
        function admission()
        {
            $this->data['title'] = "Admission Information";
            $this->template->load('Welcome', 'default', 'admission', $this->data);
        }
        public function nursing()
        {
            $this->data['title'] = "School of Nursing";
            $this->template->load('Welcome', 'default', 'nursing', $this->data);
        }
        public function medlab()
        {
            $this->data['title'] = "School of MedLab";
            $this->template->load('Welcome', 'default', 'medlab', $this->data);
        }
        
        public function mid_wifery()
        {
            $this->data['title'] = "School of Midwifery";
            $this->template->load('Welcome', 'default', 'mid_wifery', $this->data);
        }
        
        public function create_account()
        {
            //Note the value of username is the serial number
            $username = null;
            $pin = null;
            $email = null;
            $phone = null; 
            $password  = null;
            $additional_data= null;
            
            $this->data['title'] = "Create Account";
            $tables = $this->config->item('tables','ion_auth');

            //validate form input
            $this->form_validation->set_rules('email','Email','required|valid_email|is_unique['.$tables['users'].'.email]',
                array(
                'is_unique' => 'Email already exists.')
                );
            $this->form_validation->set_rules('phone','Phone','required|is_unique['.$tables['users'].'.phone]',
                array(
                    'is_unique' => "Phone number already exists."
                )
                );

            $this->form_validation->set_rules('username','Username','required|is_unique['.$tables['users'].'.username]',
                    array(
                            'is_unique' => "Username already exists.",
                            'required' => 'You must provide a username'
                    )
            );
            $this->form_validation->set_rules('receipt_number','Receipt Number','required|is_unique['.$tables['users'].'.receipt_number]',
                    array(
                            'is_unique' => "Receipt number already exists.",
                            'required' => 'You must provide a %s'
                    )
            );
            $this->form_validation->set_rules('school', 'required');
            $this->form_validation->set_rules('password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'required|trim|required|matches[password]');

            if ($this->form_validation->run() == true)
            {
                    $username   = strtolower($this->input->post('username'));
                    $pin        = strtolower($this->input->post('pin'));
                    $email      = strtolower($this->input->post('email'));
                    $phone      = $this->input->post('phone');
                    $password   = $this->input->post('password');


                    $additional_data = array(
                            'phone'      => $this->input->post('phone'),
                            'school'    => $this->input->post('school'),
                            'receipt_number' => $this->input->post('receipt_number'),
                    );
           }
            
            //Note the value of username is the serial number
            if($this->form_validation->run() == true && $this->welcome->valid_pin($username) == true)
            {
                $id = $this->ion_auth->register($username, $password, $email, $additional_data);
                
                //create contact for the user
                $data  = array('user_id' => $id,);
                $this->db->insert('contact', $data); //create a user record in contact
                $this->db->insert('olevel1', $data); //create a user record in olevel
                $this->db->insert('olevel2', $data); //create a user record in olevel
                $this->db->insert('employment', $data); //create a user record in employment
                $this->db->insert('education', $data); //create a user record in education
                $this->db->insert('nextkin', $data); //create a user in next_kin
                
                $this->welcome->use_card($id, $username, $pin);
                
                $data = array(
                    'user_id' => $id,
                );
                $this->db->set($data);
                $this->db->insert('profile');
                
                //check to see if we are creating the user
                //redirect them back to the admin page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect("Candidate/", 'refresh');
                //redirect("Welcome/create_account", 'refresh');
            }else{
                //echo "<script lang='javascript' type='text/javascript' >alert('Invalid card details or incorrect form filling. Try again!'); </script>";
                //display the create user form
                //set the flash data error message if there is one
                $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

                $this->data['email'] = array(
                        'name'  => 'email',
                        'id'    => 'email',
                        'type'  => 'text',
                        'value' => $this->form_validation->set_value('email'),
                );

                $this->data['phone'] = array(
                        'name'  => 'phone',
                        'id'    => 'phone',
                        'type'  => 'text',
                        'value' => $this->form_validation->set_value('phone'),
                );
                $this->data['password'] = array(
                        'name'  => 'password',
                        'id'    => 'password',
                        'type'  => 'password',
                        'value' => $this->form_validation->set_value('password'),
                );
                $this->data['password_confirm'] = array(
                        'name'  => 'password_confirm',
                        'id'    => 'password_confirm',
                        'type'  => 'password',
                        'value' => $this->form_validation->set_value('password_confirm'),
                );

                $this->template->load('Welcome', 'default', 'create_account', $this->data); //echo "create accoung";
                //$this->_render_page('auth/create_user', $this->data);
            }
            
       
            }
}