<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Result_model extends CI_model //Ion_auth_model
{
    
    public $school;
    public $user_id;
    public $serial_number;
            
            
    function __construct() {
        parent::__construct();
        $this->school = $this->session->userdata('school')."_result";
                
    }
    
    
    function use_card($user_id, $serial_number, $pin = null)
    {
        //echo "Using this card now ... ";
        $this->db->select('*');
        $this->db->where('status', 'active');
        $this->db->where('serial_number', $serial_number);
        
        $data = array(
            'pin' => $pin,
            'status' => 'used',
            //'user_id' => $user_id,
        );
        $this->db->update('pin', $data);
		
		//attach pin to result to subsequent checking
		$this->db->select('*');
		$this->db->where('user_id', $user_id);
		
		$data = array(
			'used_card' => $serial_number,
		);
		
		$this->db->update($this->school, $data);
		return true;

    }
	
	
	function used_for_result($serial_number)
	{
		//echo "School : ".$this->school;
                
                //echo "Serial Number : ".$this->serial_number;
		$this->db->select('*');
		$this->db->where('used_card', $serial_number);
		$query = $this->db->get($this->school);
		
		if(sizeof($query->row()) > 0)
		{
			$result = $query->row();
			//echo "Result_model line 58, user_id before: ".$this->result->user_id."<br/>";
			//get this session working pls
			$newdata = array(
				//'user_id'  => $result->user_id,
				'remark' => $result->remark,
				//'user_id'     => $this->result->'johndoe@some-site.com',
				//'logged_in' => TRUE
			);
			//echo "Result_model line 58, user_id after: ".$this->result->user_id."<br/>";
			$this->session->set_userdata($newdata);
			//echo "<br/>used for result : true";
			return true;
		}
                else
                {
                    return false;
                }
		
		//echo "<br/>Not used for result earlier<br/>";
		
	}
	
	
	function check_result($school, $user_id, $serial_number )
	{
            $this->school = $school."_result";
            $this->user_id = empty($this->session->userdata('user_id')) ? $user_id : $this->session->userdata('user_id');
            //user_id;
            $this->serial_number = $serial_number;
            
            
		$this->db->select('*');
		$this->db->where('user_id', $this->user_id);
		//$this->db->where('used_card', $serial_number);
		
                //echo "School : ".$school;
		//query db
		$query = $this->db->get($this->school);
		//var_dump($query->row());

		//if query->row < 1, this does not exist and no one has used this card before
		if(sizeof($query->row()) >= 1)
		{
			$this->db->select('*');
			$this->db->where('user_id', $user_id);
			$query = $this->db->get($this->school);
		
			//make card tied to one user and invalidate for any other user
                        //echo "Serial Number : ".$serial_number;
			$this->use_card($user_id, $serial_number);
			
			//echo "serial number".$serial_number;
			//var_dump($query->row());
			
			return $query->row();
		}
		
		//echo "serial number".$serial_number;
		//var_dump($query->row());
		//if the card has been used before, allow the person use always to check same result
		return $query->row();
	
	}
    function valid_pin($serial_number)
    {
	//echo "<br/>Inside valid_pin";
        $this->db->select("*");
        $this->db->where('serial_number', $serial_number);
	$this->db->where('status', 'active');
    
        $query = $this->db->get('pin');
        
        //echo "Serial number to validate is : ".$serial_number."<br/>";
        //var_dump($query->row());
        //echo "Size of query->row() ".sizeof($query->row());
        $row = $query->row();
       
        if(sizeof($row) == 0){
			//echo "Return false";
            //echo "I am false";
            return false;
        }elseif (sizeof($row) >=1){
			//echo "Return true";
			return true;
        }
        else
        {
            return false;
        }    
    }
    
    function card_user($serial_number)
    {
        //echo "<br/>The entered serial number is ".$serial_number;
        //echo "<b>::::::::::::::::::::::::::::::::::::::::::::::::".$serial_number."<b/>";
        $this->db->select("*");
        $this->db->where('used_card', $serial_number);
        
        $query = $this->db->get($this->school);
        $card_user = $query->row();
        //echo "<br/><br/>Card User is : $card_user->user_id<br/><br/><br/>";
        return $card_user->user_id;
    }
}