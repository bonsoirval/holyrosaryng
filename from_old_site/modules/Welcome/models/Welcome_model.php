<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome_model extends CI_model //Ion_auth_model
{
    function __construct() {
        parent::__construct();
    }
    
    
    function use_card($user_id, $serial_number, $pin)
    {
        $this->db->select('*');
        $this->db->where('status', 'active');
        $this->db->where('serial_number', $serial_number);
        
        $data = array(
            'pin' => $pin,
            'status' => 'used',
            'user_id' => $user_id,
        );
        $this->db->update('pin', $data);
        
        
    }
    function valid_pin($pin)
    {
        $this->db->select("*");
        $this->db->where('status', 'active');
        $query = $this->db->get('pin');
       
        $row = $query->row();
       
        if(empty($row)){
            return false;
        }
        return true;
        
    }

}