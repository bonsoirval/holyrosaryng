<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Interview_model extends CI_model //Ion_auth_model
{
    
    public $school;
    public $user_id;
    public $serial_number;
            
            
    function __construct() {
        parent::__construct();
        //$this->school = $this->session->userdata('interview');
                
    }
    
    
  
	function check_result($exam_number, $phone)
	{
            
		$this->db->select('*');
		$this->db->where('exam_num', $exam_number);
		$this->db->where('phone', $phone);
		
        //echo "School : ".$school;
		//query db
		$query = $this->db->get('interview');
		//var_dump($query->row());
		
		/*
        echo "<br/>Result dey<br/>";
        var_dump($query->row());*/

		//if query->row < 1, this does not exist and no one has used this card before
		if(sizeof($query->row()) >= 1)
		{
			$data = array();
			
			foreach($query->row() as $key => $value)
			{
				$data["$key"] = $value;
			}
			
			
			$this->session->set_userdata($data);
			return $query->row();
		}
		
		//echo "serial number".$serial_number;
		//var_dump($query->row());
		//if the card has been used before, allow the person use always to check same result
		return false;
	
	}
}