<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Result extends MX_Controller {

        public $data = array();
		public $exam_number = null;
		public $school = null;
        
	function __construct() {
            parent::__construct();
            $this->load->database();
	            
        $this->load->model('Result_model', 'result');
        //@$this->session->sess_destroy();
        /*
        echo "<pre>";
        print_r($this->session->all_userdata());
        echo "</pre>";
        echo "inside Result line 18 to 21";
            */
        }
	public function index()
	{
		$this->data['title'] = 'Result Checker';
		$this->template->load('Result', 'default', 'index', $this->data);
	}
    
	function check()
	{
		//var_dump($this->input->post());
                
		$this->school = $this->input->post('school');
		$this->exam_number = $this->input->post('exam_number');
		$this->serial_number = $this->input->post('serial_number');
		
		$data = array(
			'school' => $this->school,
			'exam_number' => $this->exam_number,
			'serial_number' => $this->serial_number,
                        'user_id' => $this->exam_number,
                  
		); 
		
		$this->session->set_userdata($data);
                //echo "Check result line 48, <br/>School : $this->school, <br/>Exam_number : $this->exam_number, and <br/>Serial_number : $this->serial_number<br/>";
                
	
		//echo "school:::::::::".$this->school."<br/>exam number:::::::::".$this->exam_number."<br/>Serial number:::::::::".$this->serial_number;
		//validate card pin
		if($this->result->valid_pin($this->serial_number) === true)
		{			
			if ($this->result->used_for_result($this->serial_number) === false)
			{
                            echo "<br/>Card not used before";
                            $this->show_result($this->school);
			}else
                        {
                            $this->show_result($this->school);
                        }
		}
		else
		{
                       
                    //echo "HOlla";
			//result recheck with same pi
                    //echo "Card user user_id : ".$this->session->userdata('user_id');
                    //echo "<br/>Result checker user_id : ". $this->exam_number."<br/>";
                    //var_dump($this->result->used_for_result($this->serial_number));
                    
			if($this->result->used_for_result($this->serial_number)  === true && $this->session->userdata('user_id') == $this->result->card_user($this->serial_number))
			{
                           
				//show student result when result is used before.
				$this->show_result($this->school);
                                //exit();
			}elseif($this->result->used_for_result($this->serial_number)  === false)
                        { 
                            //echo "Card has not been used before";
                            $this->show_result($this->school);
                        }
			else
			{
                                echo "Used for result";
				$this->data['title'] = "Your Result";
				$this->template->load('Result', 'result_default', 'pin_error', $this->data);
			}
		}
		
		
		
		
	}
	
	function show_result($school)
	{
		
		switch($this->school)
		{
			case 'medlab':
			{
				echo "I am a medlab";
				break;
			}
			
			case 'midwifery':
			{
				
                            $this->data['result'] = $this->result->check_result($this->school, $this->exam_number, $this->serial_number );
                            $this->data['title'] = "Your Result";
                            $this->template->load('Result', 'result_default', 'show_result', $this->data);
                            break;
			}
			case 'nursing':
			{
                            $this->data['result'] = $this->result->check_result($this->school, $this->exam_number, $this->serial_number );
                            $this->data['title'] = "Your Result";
                            $this->template->load('Result', 'result_default', 'nursing_result', $this->data);
                            break;
			}
			case 'pts':
			{
                            $this->data['result'] = $this->result->check_result($this->school, $this->exam_number, $this->serial_number );
                            $this->data['title'] = "Your Result";
                            $this->template->load('Result', 'result_default', 'pts_result', $this->data);
                            break;
			}
			default: ; //This is unknown
		}
	
	}
	
	function is_valid($pin)
	{
		return true;
	}
	
    
}