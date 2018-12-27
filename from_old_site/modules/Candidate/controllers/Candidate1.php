<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include (APPPATH.'controllers/auth.php'); 

class Candidate extends MX_Controller {
        
    var $data = array();
    
        //variable for storing error message
        private $error;
        //variable for storing success message
        private $success;
    
	function __construct()
	{
            parent::__construct();
            $this->load->library('ion_auth');
            $this->load->model('Candidate_model', 'candidate');
            //$this->logged_in();
            $this->data['nav_url'] = base_url().'Candidate/';
            @$this->data ['passport'] = $this->candidate->get_passport();
            @$this->data ['name'] = $this->candidate->get_name();
           
		
	}
	

	public function index()
	{
            //ensures user is logged in 
            $this->logged_in();
//		if($this->ion_auth->logged_in())
//		{
            $this->data['title'] = "Candidate Dashboard";
            $this->template->load('Candidate', 'default', 'index', $this->data);
//                    
//                    //ensure user is logged in
            //$this->template->load('Candidate', 'default', 'index', $this->data);
//		}else{
                    //redirect('Candidate/login', 'refresh');//$this->login();
//		}			
            
	}
	
       
	public function login()
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
					
					if($this->ion_auth->in_group('Candidate'))
					{
						//admin code
                                            redirect('Candidate/index', 'refresh');
                                            /*
						$status = array(
							"STATUS" => true,
							'type' => "Candidate",
						);
                                        echo json_encode($status);
						*/
					}else{
						$status = array(
                                                    'STATUS' => false,
                                                    'type' => 'Candidate',
						);
                                                                                                
					}
					
				}else{
                                    $this->data['title'] = 'Login Page';

                                    echo "<script lang='javascript' type='text/javascript'>alert('Wrong Username / Password combination');</script>";
                                    echo "<script lang='javascript' type='text/javascript'>window.location.href='login';</script>";
                                    $this->template->load('Candidate', 'login_default', 'login_view', $this->data);

					//$this->session->set_flashdata('message', $this->ion_auth->errors());
					//redirect('Candidate/login', 'refresh');
				}
			}else{echo "NO data submitted"; }
			//here we will verify the inputs
		}else{
                    $this->data['title'] = 'Login Page';
                    $this->template->load('Candidate', 'login_default', 'login_view', $this->data);
		}
		
	}
	//log the user out
	function logout()
	{
		$this->ion_auth->logout();
		redirect('Candidate/login/', 'refresh');
	}
        
        private function logged_in()
        {
            if(!$this->ion_auth->logged_in())
            {
                redirect('Candidate/login', 'refresh');//$this->login();
            }
        }
    /*
	@method update
	*/
	
	public function profile()
	{
            //ensures user is logged in 
            $this->logged_in();
                
            if($this->input->post()){
                /*if(!$this->input->is_ajax_request())
                {
                    //Invalid ajax request
                    exit("This made a wrong post. Please go back, correct yourself and try again");
                }else{
                    echo "You posted something";
                }*/
                $this->form_validation->set_rules('surname', 'Surname', 'required');
                $this->form_validation->set_rules('othernames', 'Othernames', 'required');
                $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
                $this->form_validation->set_rules('birth_town', 'Birth Town', 'required'); 
                $this->form_validation->set_rules('nationality', 'Nationality', 'required');
                $this->form_validation->set_rules('origin_state', 'State of Origin', 'required');
                $this->form_validation->set_rules('lga', 'LGA', 'required');
                $this->form_validation->set_rules('gender', 'Gender', 'required');

                if($this->form_validation->run() === FALSE)
                {
                    echo "validatION failed";
                }else{
                    if($this->candidate->profile() == TRUE)
                    {
                        //success
                        echo "<script lang='javascript' type='text/javascript'>alert('Profile Update Successful');</script>";
                        $this->data ['passport'] = $this->candidate->get_passport();
                        
                        $this->template->load('Candidate', 'default', 'profile', $this->data);
                        //echo "<script lang='javascript' type='text/javascript'>window.location.href='../Candidate/contact';</script>";
                    }else{
                        //no success
                        echo "no success";
                    }

                }


            }else{               
                
                $this->data['title'] = "Profile Update";
                $this->template->load("Candidate", "default", "profile", $this->data);
            }
	}
        
        public function password_update()
        {
            $this->logged_in();  //logged in validation
            
            if($this->input->post() == true){
                $this->form_validation->set_rules('old_password', "Old Password", 'require',
                         array(
                                'required'      => 'You have not provided %s.',
                                'is_unique'     => 'This %s already exists.'
                        )
                    );
                $this->form_validation->set_rules('new_password', "Old Password", 'require',
                    
                        array(
                                'required'      => 'You have not provided %s.',
                                'is_unique'     => 'This %s already exists.'
                        )
                );
                
                $this->form_validation->set_rules('new_password_conf', "Confirm New Password", 'require|matches[new_password]');
                
                if($this->form_validation->run() == true)
                {
                    echo "validation fine";
                }else{
                    echo "<script lang='javascript' type='text/javascript' >alert('Please fill the form correctly and try again.'); </script>";
                    $this->data['title'] = 'Candidate Profile';
                    $this->template->load('Candidate', 'default', 'profile', $this->data);
                    
                }
            }else{
                echo "No post";
            }
        }
        
        
        function state(){
            //ensures user is logged in 
            $this->logged_in();
            
            $country_id = $this->input->post("country_id");
            //$country_id = "101";
            $states = $this->candidate->states($country_id);

            echo "<option value=''>";
            echo "Select Your State";
            echo "</option>";

            foreach($states as $rows)
            {
                echo "<option value=\"$rows->id\">";
                echo $rows->name;
                echo "</option>";
            }
        }
        public function change_password()
        {
            $this->logged_in();  //logged in validation
            
            if($this->input->post())
            {
                $this->form_validation->set_rules('old_password', "Old Password", 'required',
                         array(
                                'required'      => 'You must provide %s.',
                                
                        )
                    );
                $this->form_validation->set_rules('new_password', "Old Password", 'required',
                    
                        array(
                                'required'      => 'You must provide %s.',
                                
                        )
                );
                
                $this->form_validation->set_rules('new_password_conf', "Confirm New Password", 'required|matches[new_password]');
                
                if($this->form_validation->run() == true)
                {
                    $identity = $this->session->userdata('identity');

                    $change = $this->ion_auth->change_password($identity, $this->input->post('old_password'), $this->input->post('new_password'));

                    if ($change)
                    {
                        //if the password was successfully changed
                        echo "<script lang='javascript' type='text/javascript' >alert('Password Change Successful.'); </script>";
                        $this->logout();
                    }
                    else
                    {
                        $this->session->set_flashdata('message', $this->ion_auth->errors());
                        redirect('Candidate/change_password', 'refresh');
                    }
                }else{
                    echo "<script lang='javascript' type='text/javascript' >alert('Please fill the form correctly and try again.'); </script>";
                    $this->data['title'] = 'Candidate Profile';
                    $this->template->load('Candidate', 'default', 'change_password', $this->data);
                    
                }
            }else{
                $this->data['title'] = "Change Password";
                $this->template->load('Candidate', 'default', 'change_password', $this->data);
            }
            
        }
        public function passport_upload()
        {
            $this->logged_in();  //logged in validation
            
            if ($this->input->post('passport_upload')) {
            
            //set preferences
            //file upload destination
            $upload_path = './public/images/candidate/';
            $config['upload_path'] = $upload_path;
            //allowed file types. * means all types
            $config['allowed_types'] = 'jpg|png|gif';
            //allowed max file size. 0 means unlimited file size
            $config['max_size'] = 30;
          
            //change file name to user id
            $config['file_name'] = $this->session->user_id;

            //store image info once uploaded
            $image_data = array();

            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
            if (!$_FILES) {
                $is_file_error = TRUE;
                $this->handle_error('Select an image file.');
            }

            //if file was selected then proceed to upload
            if (!$is_file_error) {

                //delete already existing passport if any
                $this->candidate->remove_passport($upload_path);

                //load the preferences
                $this->load->library('upload', $config);

                //check file successfully uploaded. 'image_name' is the name of the input
                //$this->upload->do_upload('form_field_name', 'new_file_name');
                if (!$this->upload->do_upload('passport')) {

                    //if file upload failed then catch the errors
                    //$this->handle_error($this->upload->display_errors());
                    echo "errorg";
                    $error = array('error' => $this->upload->display_errors());
                    var_dump($error);
                    $is_file_error = TRUE;
                } else {
                    //store the file info
                    $image_data = $this->upload->data();

                    $data = array(
                            'file_ext' => $image_data['file_ext'],
                        );

                    $this->session->set_userdata($data);
                    $this->candidate->remove_passport($upload_path);    //delete old passports
                    $this->candidate->insert_passport();    //insert new passport details into the database

                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 150;
                    $config['height'] = 100;
                    $this->load->library('image_lib', $config);
                    if (!$this->image_lib->resize()) {
                        $this->handle_error($this->image_lib->display_errors());
                    }
                    echo "<script lang='javascript' type = 'text/javascript' >alert('Successful Passport Upload'); </script>";
                    $this->data ['passport'] = $this->candidate->get_passport();
                    $this->template->load('Candidate', 'default', 'profile', $this->data);
                    //redirect('Candidate/profile');
                }
            }
            // There were errors, we have to delete the uploaded image
            if ($is_file_error) {
                if ($image_data) {
                    $file = $upload_path . $image_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            } else {
                $data['resize_img'] = $upload_path . $image_data['file_name'];
                $this->handle_success('Image was successfully uploaded to direcoty <strong>' . $upload_path . '</strong> and resized.');
            }
        }else{
            //no passport selected
        }
 
        
    }
    
    
    //appends all success messages
    private function handle_success($succ) {
        $this->success .= $succ . "rn";
    }
        /*
         * Fetch countries
         */
        function nationality()
        {
            //ensures user is logged in 
            $this->logged_in();
            
            $countries = $this->candidate->countries();
        
            echo "<option value=''>";
            echo "Select Your Country";
            echo "</option>";

            foreach($countries as $rows)
            {
                echo "<option value=\"$rows->id\">";
                echo $rows->name;
                echo "</option>";
            }
            /*
            echo "<option>";
            echo var_dump($countries);
            echo "</option>";
            /*
            foreach($countries as $row)
            {
                echo "<option>";
                echo $row->id;
                echo "</option>";
            }*/
        }
        public function contact()
        {
            $this->logged_in();  //logged in validation
           
			if($this->input->post())
			{
                              $this->form_validation->set_rules('contact_add', 'Contact Address', 'required',
                        array(
                                'required' => 'You must provide your %s.',
                        )
                );

                $this->form_validation->set_rules('permanent_add', 'Permanent Address', 'required', 
                        array(
                                'required' => 'You must provide your %s.',
                            )
                        );
            if($this->form_validation->run() == false)
            {
                    $this->data['title'] = 'Candidate Address';
                    echo "<script lang='javascript' type = 'text/javascript'>alert('Next. of Kin  update failed. Try again.'); </script>";
                    $this->template->load('Candidate', 'default', 'contact', $this->data);
            }else{
                    if($this->candidate->update_contact() == true)
                    {
                            echo "<script lang='javascript' type = 'text/javascript'>alert('Contact update successful'); </script>";
                            $this->data['title'] = 'Candidate Contact';
                            $this->template->load('Candidate', 'default', 'contact', $this->data);
                    }
                    else{
                        echo "Contact update failed";
                    }
            }


            }else{

            //ensures user is logged in 
            $this->logged_in();

            $this->data['title'] = 'Candidate Contact';
            $this->template->load("Candidate", 'default', 'contact', $this->data);
            //echo "contact";
            }
    }

public function next_kin()
{
    $this->logged_in();  //logged in validation

if($this->input->post())
{

        $this->form_validation->set_rules('next_kin_name', 'Next_of Kin Name', 'required',
                array(
                        'required' => 'You must provide your %s.',
                )
        );

        $this->form_validation->set_rules('next_kin_address', 'Next_of Address', 'required', 
                array(
                        'required' => 'You must provide your %s.',
                    )
                );
        $this->form_validation->set_rules('next_kin_phone', 'Next_of Phone', 'required', 
                array(
                        'required' => 'You must provide your %s.',
                    )
                );
        $this->form_validation->set_rules('next_kin_relationship', 'Next_of Address', 'required', 
                array(
                        'required' => 'You must provide your %s.',
                    )
                );

        if($this->form_validation->run() == false)
        {

                $this->data['title'] = 'Candidate Address';
                $this->template->load('Candidate', 'default', 'contact', $this->data);
        }else{
                if($this->candidate->update_next_kin() == true)
                {
                        echo "<script lang='javascript' type = 'text/javascript'>alert('Next of Kin update successful'); </script>";
                        $this->data['title'] = 'Candidate Contact';
                        $this->template->load('Candidate', 'default', 'contact', $this->data);
                }
                else{
                    echo "Contact update failed";
                }
        }


        }else{

        //ensures user is logged in 
        $this->logged_in();

        $this->data['title'] = 'Candidate Contact';
        $this->template->load("Candidate", 'default', 'contact', $this->data);
        //echo "contact";
    }
}
    function olevel($sitting = 1)
    {
        $this->logged_in();  //logged in validation
        
        if($this->input->post())
        {//when there is input from user
            
            //validation rules
            $this->form_validation->set_rules('examination', 'Examination', 'required');
            $this->form_validation->set_rules('exam_number', 'Exam Number', 'required');
            $this->form_validation->set_rules('exam_year', 'Exam Year', 'required');
            $this->form_validation->set_rules('english', 'English', 'required');
            $this->form_validation->set_rules('mathematics', 'Mathematics', 'required');
            $this->form_validation->set_rules('physics', 'Physics', 'required');
            $this->form_validation->set_rules('chemistry', 'Chemistry', 'required');
            $this->form_validation->set_rules('biology', 'Biology', 'required');
         
            if($this->form_validation->run() == false)
            {//check validation failure first for security
                
            }else{//validation successful
                //$sitting = $this->uri->segment(2);
                if($this->candidate->olevel($sitting) == false)
                {//function return false === update failed
                    echo "<script lang='javascript' type='text/javascript' >alert('Olevel Update Not Successful'); </script>";
                    $this->data['title'] = 'Candidate Olevel';
                    $this->template->load('Candidate', 'default', 'olevel1', $this->data);
                   
                }else{//update successful
                    echo "<script lang='javascript' type='text/javascript' >alert('Olevel Update Successful'); </script>";
                    $this->data['title'] = 'Candidate Olevel';
                    $this->template->load('Candidate', 'default', 'olevel1', $this->data);
                 
                }
                
            }
        }else{
            //no posted data
            $this->data['title'] = 'Olevel Data Submission';
            $this->template->load("Candidate", 'default', 'olevel1', $this->data);
            
        }
    }
    function olevel2()
    {
        $this->logged_in();  //logged in validation
        
        if($this->input->post())
        {//when there is input from user
            
            //validation rules
            $this->form_validation->set_rules('examination', 'Examination', 'required');
            $this->form_validation->set_rules('exam_number', 'Exam Number', 'required');
            $this->form_validation->set_rules('exam_year', 'Exam Year', 'required');
            $this->form_validation->set_rules('english', 'English', 'required');
            $this->form_validation->set_rules('mathematics', 'Mathematics', 'required');
            $this->form_validation->set_rules('physics', 'Physics', 'required');
            $this->form_validation->set_rules('chemistry', 'Chemistry', 'required');
            $this->form_validation->set_rules('biology', 'Biology', 'required');
         
            if($this->form_validation->run() == false)
            {//check validation failure first for security
                
            }else{//validation successful
                
                if($this->candidate->olevel2() == false)
                {//function return false === update failed
                    echo "<script lang='javascript' type='text/javascript' >alert('Olevel Update Not Successful'); </script>";
                    $this->data['title'] = 'Candidate Olevel';
                    $this->template->load('Candidate', 'default', 'olevel2', $this->data);
                   
                }else{//update successful
                    echo "<script lang='javascript' type='text/javascript' >alert('Olevel Update Successful'); </script>";
                    $this->data['title'] = 'Candidate Olevel';
                    $this->template->load('Candidate', 'default', 'olevel2', $this->data);
                 
                }
                
            }
        }else{
            //no posted data
            $this->data['title'] = 'Olevel Data Submission';
            $this->template->load("Candidate", 'default', 'olevel2', $this->data);
            
        }
    }
   
        public function history()
        {
            $this->logged_in();  //logged in validation
            
            //ensures user is logged in 
            $this->logged_in();
            
            if($this->input->post())
            {
             
                $uri = $this->uri->segment(3);
                
                switch ($uri){
                    case 1:
                        //this is for employment history
                        if($this->candidate->history_employment() == true)
                       {
                           echo "<script type='text/javascript' lang='javascript' >alert('Update Successful'); </script>";
                           redirect('Candidate/history', 'refresh');
                       }
                        
                        break;
                    case 2:
                        //this is for education
                       if($this->candidate->history_education() == true)
                       {
                           echo "<script type='text/javascript' lang='javascript' >alert('Update Successful'); </script>";
                           redirect('Candidate/history', 'refresh');
                       }
                        break;
                    case 3:
                        //this is for professional qualification
                        
                        if($this->candidate->history_professional())
                        {
                           echo "<script type='text/javascript' lang='javascript' >alert('Update Successful'); </script>";
                           redirect('Candidate/history', 'refresh');
                        }
                        break;
                }
                
            }else{
                
                $this->data['title'] = 'Nursing Qualification';
                $this->template->load("Candidate", 'default', 'history', $this->data);
            }
            
            //echo "contact";
        }
        
        public function show_sess(){
            $this->logged_in();  //logged in validation
            
            var_dump($this->session->userdata());
        }
        
        function passport()
        {
            $this->logged_in();  //logged in validation
            
            $this->data ['passport'] = $this->candidate->get_passport();
            //$passport = $this->candidate->get_passport();
            $this->template->load("Candidate", "default", "profile", $this->data); //echo $passport
        }
        
        
        function preview(){
            $this->logged_in();  //logged in validation
            $school = $this->candidate->get_school();
            
            switch($school)
            {
                case 'nursing':
                    $this->data['title'] = 'Final Preview';
                    $this->template->load('Candidate', 'default', 'preview', $this->data);
                    break;
                case 'medlab':
                    $this->data['title'] = 'Final Preview';
                    $this->template->load('Candidate', 'default', 'medlab_preview', $this->data);
                    break;
                
                case 'midwifery':
                    $this->data['title'] = 'Final Preview';
                    $this->template->load('Candidate', 'default', 'midwifery_preview', $this->data);
                    break;
                default:
                    echo "<script lang='javascript' type='text/javascript' >alert('Sorry! Something went wrong and you have been logged out. Try again.'); </script>";
                    $this->logout();
            }
            //echo $school;
        }
        function submit()
        {
            $this->logged_in();  //logged in validation
            $this->data['title'] = "Complete Application";
            $this->data ['passport'] = $this->candidate->get_passport();
            $this->template->load('Candidate', 'default', 'complete_application', $this->data);
        }
    /*    
       public function forgot()
	{

		if (isset($_GET['info'])) {
               $data['info'] = $_GET['info'];
              }
		if (isset($_GET['error'])) {
              $data['error'] = $_GET['error'];
              }
		$data['title'] = 'Password Recovery';
		
		$this->template->load('Candidate','login_default', 'forgot_password', $data);
		//$this->load->view('login-forget',$data);
	}
        */
	/*public function doforget()
	{
            
		$this->load->helper('url');
		//$email= $_POST['email'];
		$email = $this->input->post('email');
		$this->db->select("*");
		$this->db->where('email', $email);
		$q = $this->db->get('users');
		//$q = $this->db->query("select * from users where email='" . $email . "'");
        
		if ($q->num_rows() > 0) {
                $r = $q->result();
                $user = $r[0];
                $this->resetpassword($user);
                $info = "Password has been reset and has been sent to email id: ". $email;
                redirect('/Candidate/Candidate/password_reset', 'refresh');
        }
		$error= "The email id you entered not found on our database ";
		redirect('/Candidate/forget?error=' . $error, 'refresh');
		
	}
     */  
    /*   
	/private function resetpassword($user)
	{
		date_default_timezone_set('GMT');
		$this->load->helper('string');
		$password= random_string('alnum', 16);
		$this->db->where('id', $user->id);
		$this->db->update('users',array('password'=>MD5($password)));
		$this->load->library('email');
		$this->email->from('noreply@lisgrey.com.ng', 'Password Reset Code');
		$this->email->to($user->email); 	
		$this->email->subject('Password reset');
		$this->email->message('You have requested the new password, Here is you new password:'. $password);	
		$this->email->send();
	}
	*/
      
		//forgot password
	function forgot_password()
	{
		exit();
		//setting validation rules by checking wheather identity is username or email
		if($this->config->item('identity', 'ion_auth') == 'username' )
		{
		   $this->form_validation->set_rules('email', 'required');
		}
		else
		{
		   $this->form_validation->set_rules('email', 'required|valid_email');
		}


		if ($this->form_validation->run() == false)
		{
			//exit("HONE");
			//setup the input
			//$this->data['email'] = array('name' => 'email',
				//'id' => 'email',
			//);

			if ( $this->config->item('identity', 'ion_auth') == 'username' ){
				$this->data['identity_label'] = $this->lang->line('forgot_password_username_identity_label');
			}
			else
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
			}
			
			//var_dump($this->input->post());
			//exit();
			//set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			redirect('Candidate/password_reset', 'refresh'); 
			//$this->template->load('Candidate', 'login_default', 'forgot_password1', $this->data); //$this->_render_page('Candidate/forgot_password', $this->data);
		}
		else
		{ 
			echo "validation good";
			var_dump($forgotten);

			// get identity from username or email
			if ( $this->config->item('identity', 'ion_auth') == 'username' ){
				$identity = $this->ion_auth->where('username', strtolower($this->input->post('email')))->users()->row();
			}
			else
			{
				$identity = $this->ion_auth->where('email', strtolower($this->input->post('email')))->users()->row();
			}
	            	if(empty($identity)) {

	            		if($this->config->item('identity', 'ion_auth') == 'username')
		            	{
                                   $this->ion_auth->set_message('forgot_password_username_not_found');
		            	}
		            	else
		            	{
		            	   $this->ion_auth->set_message('forgot_password_email_not_found');
		            	}

		                $this->session->set_flashdata('message', $this->ion_auth->messages());
                		redirect("Candidate/forgot_password", 'refresh');
            		}

			//run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});
			
			//echo "forgotten ";
			//var_dump($forgotten);
			
			if ($forgotten)
			{
				//if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect("Candidate/login", 'refresh'); //we should display a confirmation page here instead of the login page
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("Candidate/forgot_password", 'refresh');
			}
		}
	}

    function password_reset()
	{
		$this->data['title'] = 'Password Reset';
		$this->template->load('Candidate', 'login_default', 'forgot_password', $this->data);
		
	}
}

