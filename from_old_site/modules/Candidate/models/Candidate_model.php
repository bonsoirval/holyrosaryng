<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Candidate_model extends CI_model
{
    public function __construct()
	{
		parent::__construct();
		$c_count1 = 0; //variable to hold the number of c and above grades
		$c_count2 = 0; //variable to hold the number of c and above grades
			
	}
    

	/*
	*
	*@return bool
	*@author Njoku Valentine
	*/
	public function applied()
	{
            return false;
	}
        
        function update_contact()
        {
            $this->db->where('user_id', $this->session->user_id);
            //data to be updated with
            $data = array(
                'contact_address' => $this->input->post('contact_add'),
                'permanent_address' => $this->input->post('permanent_add'),
            );
            if($this->db->update('contact', $data))
            {
                return true;
            }return false;
        }
        function update_next_kin()
        {
            
            $this->db->where('user_id', $this->session->user_id);
            //data to be updated with
            $data = array(
                'name' => $this->input->post('next_kin_name'),
                'nextkin_address' => $this->input->post('next_kin_address'),
                'nextkin_phone' => $this->input->post('next_kin_phone'),
                'relationship' => $this->input->post('next_kin_relationship'),
                
            );
            if($this->db->update('nextkin', $data))
            {
                return true;
            }return false;
        }
        
function more_than_c()
		{
			$this->get_olevel1(); //execute olevel1
			$this->get_olevel2(); //execute olevel2
			
			$c_count = $this->c_count1  +  $this->c_count2;
			
			return $c_count;
		}
		function get_olevel2()
		{
			$this->db->select("*");
			$this->db->where('user_id', $this->session->user_id);
			$query = $this->db->get('olevel2');
			
			$result = $query->result_array();
			
			foreach($result as $grade)
			{
				if($this->grade($grade['english']) == 'c')
				{
					$this->c_count2 += 1;
				}
				if($this->grade($grade['mathematics']) == 'c')
				{
					$this->c_count2 += 1; 
				}
				if($this->grade($grade['physics']) == 'c')
				{
					$this->c_count2 += 1; 
				}
				if($this->grade($grade['chemistry']) == 'c')
				{
					$this->c_count2 += 1; 
				}
				if($this->grade($grade['biology']) == 'c')
				{
					$this->c_count2 += 1; 
				}
			}
		}
		
		
		function get_olevel1()
		{
			$this->db->select("*");
			$this->db->where('user_id', $this->session->user_id);
			$query = $this->db->get('olevel1');
			
			
			
			$result = $query->result_array();
						
			foreach($result as $grade)
			{
				
				if($this->grade($grade['english']) == 'c')
				{
					$this->c_count1 += 1; 
				}
				if($this->grade($grade['mathematics']) == 'c')
				{
					$this->c_count1 += 1; 
				}if($this->grade($grade['physics']) == 'c')
				{
					$this->c_count1 += 1; 
				}if($this->grade($grade['chemistry']) == 'c')
				{
					$this->c_count1 += 1; 
				}if($this->grade($grade['biology']) == 'c')
				{
					$this->c_count1 += 1; 
				}
			}
			
			
		}
		private function grade($grade = null)
		{
			if($grade == 'a1' || $grade == 'b2' || $grade == 'b3' || $grade == 'c4' || $grade == 'c5' || $grade == 'c6')
			{
				$grade = 'c';
				return $grade;
			}
			else{
				return false;
			}
		}
        
        
        
        /*
         * 
         */
        function history_education($user_id = 0)
        {
            if($user_id == 0)
            {
                $this->db->where('user_id', $this->session->user_id);
                $data = array(
                    'school1' => $this->input->post('edu11'),
                    'year1' => $this->input->post('edu12'),
                    'qualification1' => $this->input->post('edu13'),
                    
                    'school2' => $this->input->post('edu21'),
                    'year2' => $this->input->post('edu22'),
                    'qualification2' => $this->input->post('edu23'),
                    
                    'school3' => $this->input->post('edu31'),
                    'year3' => $this->input->post('32'),
                    'qualification3' => $this->input->post('edu33'),
                    
                    'school4' => $this->input->post('edu41'),
                    'year4' => $this->input->post('edu42'),
                    'qualification4' => $this->input->post('edu43'),
                );
                $this->db->update('education',$data);
                
                return true;
            }else{
                
                //used while registering a candidate to create an education for him
                $this->db->insert('education', $user_id);
                return true;
                
            }
        }
        
       
        function history_professional($user_id = 0)
        {
            var_dump($this->input->post());
            //exit();
            
            if($user_id == 0)
            {
                $this->db->where('user_id', $this->session->user_id);
                $data = array(
                    'school1' => $this->input->post('edu11'),
                    'year1' => $this->input->post('edu12'),
                    'qualification1' => $this->input->post('edu13'),
                    
                    'school2' => $this->input->post('edu21'),
                    'year2' => $this->input->post('edu22'),
                    'qualification2' => $this->input->post('edu23'),
                    
                    'school3' => $this->input->post('edu31'),
                    'year3' => $this->input->post('32'),
                    'qualification3' => $this->input->post('edu33'),
                    
                    'school4' => $this->input->post('edu41'),
                    'year4' => $this->input->post('edu42'),
                    'qualification4' => $this->input->post('edu43'),
                  
                );
                $this->db->update('professional',$data);
                
                return true;
            }else{
                
                //used while registering a candidate to create an education for him
                $this->db->insert('professional', $this->session->user_id);
                return true;
                
            }
        }
        
                
        function history_employment($user_id = 0)
        {
            var_dump($this->input->post());
             if($user_id == 0)
            {
                $this->db->where('user_id', $this->session->user_id);
                $data = array(
                    'employer' => $this->input->post('employer'),
                    'address' => $this->input->post('emp_address'),
                    'position_held' => $this->input->post('position'),
                    'phone' => $this->input->post('emp_phone'),
                  
                );
                $this->db->update('employment',$data);
                
                return true;
            }else{
                
                //used while registering a candidate to create an education for him
                $this->db->insert('employment', $this->session->user_id);
                return true;
                
            }
        }
        
        /*
         |@name : Get school
         |@var : null
         |@return : string the person's school of choice
         */
        public function get_school()
        {
            $this->db->select("*");
            $this->db->where('id', $this->session->user_id);
            $query = $this->db->get('users');
          
            return $query->row()->school;
          
        }
        
        function get_contact($return = 'contact_address')
        {
            $this->db->select('*');
            $this->db->where('user_id', $this->session->user_id);
            
            
            //query databas
            $query = $this->db->get('contact');
            $result = $query->row();
            
            return $result->{$return};
        }
        
        
        function get_next_kin()
        {
             $this->db->select('*');
            $this->db->where('user_id', $this->session->user_id);
            
            
            //query databas
            $query = $this->db->get('nextkin');
            return $query->row();
           
        }
        
        
        function get_user()
        {
            $this->db->select('*');
            $this->db->where('id', $this->session->user_id);
            $query = $this->db->get('users');
            return $query->row();
        }
        function get_olevel($sitting = 1)
        {
            $this->db->select('*');
            $this->db->where('user_id', $this->session->user_id);
            $this->db->limit(1);
            
            if($sitting == 1)
            {
                $query = $this->db->get('olevel1');
                return $query->row();
            }
            $query = $this->db->get('olevel2');
            return $query->row();
            
        }
        
        
        function get_employment()
        {
            $this->db->select('*');
            $this->db->where('user_id', $this->session->user_id);
            $this->db->limit(1);
            $query = $this->db->get('employment');
            return $query->row();
       }
        
        function get_professional()
        {
            $this->db->select('*');
            $this->db->where('user_id', $this->session->user_id);
            $this->db->limit(1);
            $query = $this->db->get('professional');
            return $query->row();
       }
        function get_state($param = 'states', $param_id)
        {
            $this->db->select('name');
            $this->db->where('id', $param_id);
            
            
            //query databas
            $query = $this->db->get($param);
            $result = $query->row();
            
            return $result->name;
            
        }
        function olevel()
        {
            $this->db->where('user_id', $this->session->user_id);
            //data to be updated with
            $data = array(
                'examination' => $this->input->post('examination'),
                'exam_number' => $this->input->post('exam_number'),
                'exam_year' => $this->input->post('exam_year'),
                'english' => $this->input->post('english'),
                'mathematics' => $this->input->post('mathematics'),
                'physics' => $this->input->post('physics'),
                'chemistry' => $this->input->post('chemistry'),
                'biology' => $this->input->post('biology'),
                'english' => $this->input->post('english'),
                
                
            );
            if($this->db->update('olevel1', $data))
            {
                return true;
            }return false;
        }
        function olevel2()
        {
            $this->db->where('user_id', $this->session->user_id);
            //data to be updated with
            $data = array(
                'examination' => $this->input->post('examination'),
                'exam_number' => $this->input->post('exam_number'),
                'exam_year' => $this->input->post('exam_year'),
                'english' => $this->input->post('english'),
                'mathematics' => $this->input->post('mathematics'),
                'physics' => $this->input->post('physics'),
                'chemistry' => $this->input->post('chemistry'),
                'biology' => $this->input->post('biology'),
                'english' => $this->input->post('english'),
                
                
            );
            if($this->db->update('olevel2', $data))
            {
                return true;
            }return false;
        }
        /**
	 * register
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function register($username, $password, $email, $additional_data = array(), $groups = array())
	{
		$this->trigger_events('pre_register');

		$manual_activation = $this->config->item('manual_activation', 'ion_auth');

		if ($this->identity_column == 'email' && $this->email_check($email))
		{
			$this->set_error('account_creation_duplicate_email');
			return FALSE;
		}
		elseif ($this->identity_column == 'username' && $this->username_check($username))
		{
			$this->set_error('account_creation_duplicate_username');
			return FALSE;
		}
		elseif ( !$this->config->item('default_group', 'ion_auth') && empty($groups) )
		{
			$this->set_error('account_creation_missing_default_group');
			return FALSE;
		}

		//check if the default set in config exists in database
		$query = $this->db->get_where($this->tables['groups'],array('name' => $this->config->item('default_group', 'ion_auth')),1)->row();
		if( !isset($query->id) && empty($groups) )
		{
			$this->set_error('account_creation_invalid_default_group');
			return FALSE;
		}

		//capture default group details
		$default_group = $query;

		// If username is taken, use username1 or username2, etc.
		if ($this->identity_column != 'username')
		{
			$original_username = $username;
			for($i = 0; $this->username_check($username); $i++)
			{
				if($i > 0)
				{
					$username = $original_username . $i;
				}
			}
		}

		
		$salt       = $this->store_salt ? $this->salt() : FALSE;
		$password   = $this->hash_password($password, $salt);

		// Users table.
		$data = array(
		    'username'   => $username,
		    'password'   => $password,
		    'email'      => $email,
		   
		    'created_on' => time(),
		    'active'     => ($manual_activation === false ? 1 : 0)
		);

		if ($this->store_salt)
		{
			$data['salt'] = $salt;
		}

		//filter out any data passed that doesnt have a matching column in the users table
		//and merge the set user data and the additional data
		$user_data = array_merge($this->_filter_data($this->tables['users'], $additional_data), $data);

		$this->trigger_events('extra_set');

		$this->db->insert($this->tables['users'], $user_data);

		$id = $this->db->insert_id();

		//add in groups array if it doesn't exits and stop adding into default group if default group ids are set
		if( isset($default_group->id) && empty($groups) )
		{
			$groups[] = $default_group->id;
		}

		if (!empty($groups))
		{
			//add to groups
			foreach ($groups as $group)
			{
				$this->add_to_group($group, $id);
			}
		}

		$this->trigger_events('post_register');

		return (isset($id)) ? $id : FALSE;
	}
        function countries()
        {
            $this->db->select("*");
            $query = $this->db->get("countries");

            $countries = $query->result();
            return $countries;
        }
        
        function states($country_id)
        {
            $this->db->select("*");
            $this->db->where("country_id", $country_id);
            $query = $this->db->get("states");

            $states = $query->result();
            return $states;
        }
       
        function get_profile()
        {
            $this->db->where('user_id', $this->session->user_id);
            $this->db->select('*');
            $result = $this->db->get('profile');
            return $result->row();
        }
        public function profile()
        {
            //insert the profile only if it does not exist already.
            //$this->profile_id returns true if the id exists. 
            /*if($this->profile_id() != true) //!= $this->session->user_id)
            {
                $data = array(
                    'user_id' => $this->session->user_id,
                    'dob' =>$this->input->post('dob'),
                    'birth_town' =>$this->input->post('birth_town'),
                    'nationality' => $this->input->post('nationality'),
                    'origin_state' => $this->input->post('origin_state'),
                    'lga' => $this->input->post('lga'),
                    'gender' => $this->input->post('gender'),
                );
                
                $this->db->set($data);
                $this->db->insert('profile');
            }*/
            
            $this->db->where('user_id', $this->session->user_id);
            
            $data = array(
                    'dob' =>$this->input->post('dob'),
                    'birth_town' =>$this->input->post('birth_town'),
                    'nationality' => $this->input->post('nationality'),
                    'origin_state' => $this->input->post('origin_state'),
                    'lga' => $this->input->post('lga'),
                    'gender' => $this->input->post('gender'),
                );
                
                $this->db->set($data);
                $this->db->update('profile');
            
            
            $this->db->where('id', $this->session->user_id);
            $data = array(
                'first_name' => $this->input->post('surname'),
                'last_name' => $this->input->post('othernames'),
            );
           
            $this->db->update('users', $data);
            return true;
        }
        
            /*
    *@name: remove_passport
    *@var : null
    *@description: This method removes the passport extension from the users table signifying non-existence of an uploaded passport
    */
    public function remove_passport($upload_path)
    {
       
        //echo "The part is ".$path.'<br/>';
        $file = $upload_path.$this->session->user_id.$this->get_this('passport_ext');
        @unlink($file);


        $this->db->where('id', $this->session->user_id);

        $data = array(
                'passport_ext' => '',
        );

        $this->db->update('users', $data);

        //return $ext;
    }
    
    
    /*
    *@description : this returns the path to the user's passport
    */
    function get_passport()
    {
		$this->db->select("*");
		$this->db->where('id', $this->session->user_id);
		$query = $this->db->get('users');
		$result = $query->row_array();
		$passport = base_url().'public/images/candidate/'.$this->session->user_id.$result['passport_ext'];
       
		return $passport; //$result['passport_ext'];
    }

    
    function get_name(){
        $this->db->select("*");
        $this->db->where('id', $this->session->user_id);
        
        $query = $this->db->get("users");
        $row = $query->row();
        return $row->last_name.", ".$row->first_name;
    }
    
    
    /*
    *@name: insert_passport
    *@var : null
    *@description: This method inserts the passport extension into the users table signifying presence of an uploaded passport
    */
    public function insert_passport()
    {
        $this->db->where('id', $this->session->user_id);

        $data = array(
                'passport_ext' => $this->session->file_ext,
        );

        $this->db->update('users', $data);
        
    }
    function get_this($what_to_get)
    {
        $this->db->select($what_to_get);
        $this->db->where('id', $this->session->user_id);

        $query = $this->db->get('users');
        //var_dump($query);

        $ext = null;
        foreach ($query->result() as $row)
        {
            //echo "extension".$row->passport_ext;
            $ext = $row->$what_to_get;
            
        }

        
        return $ext; //return the passport extension as saved in the database
    }

        function profile_id()
        { 
            $this->db->where('user_id', $this->session->user_id);
            $this->db->select("*");
            
            $query = $this->db->get('profile');
            $result = $query->row();
            
            if($result->user_id > 0)
            {
                return true;
            }
            
        }
     
	 
	 /**
	 * Hashes the password to be stored in the database.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function hash_password($password, $salt=false, $use_sha1_override=FALSE)
	{
		if (empty($password))
		{
			return FALSE;
		}

		//bcrypt
		if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt')
		{
			return $this->bcrypt->hash($password);
		}


		if ($this->store_salt && $salt)
		{
			return  sha1($password . $salt);
		}
		else
		{
			$salt = $this->salt();
			return  $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
		}
	}

}