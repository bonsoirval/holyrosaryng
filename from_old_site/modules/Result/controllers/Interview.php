<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Interview extends MX_Controller {

        public $data = array();
		public $exam_number = null;
		public $phone = null;
		
        
	function __construct() {
            parent::__construct();
            $this->load->database();
	            
        $this->load->model('Interview_model', 'result');
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
		$this->template->load('Result', 'default', 'interview', $data);
	}
    
	function admission_letter()
	{
		$id = $this->uri->segment(4);
		$this->template->load('Result', 'result_default', 'admission_letter', $this->name);
	}
	function check()
	{
		//var_dump($this->input->post());
                
		$this->exam_number = $this->input->post('exam_number');
		$this->phone = $this->input->post('phone');
		
		$result = $this->result->check_result($this->exam_number, $this->phone);  
		//var_dump($result);		
		
		//print result or errr message
		if($result == false)
		{
			echo "Sorry You Have No Result or did not make it true.";
			print "\nPlease for complains regarding this system only, send email to bonsoirval@gmail.com . Thank you very much."; 
		}
		else
		{
			$data = array();
			
			foreach($result as $key => $value)
			{
				$data["$key"] = $value;
			}
			
			//var_dump($data);
			
			$this->template->load('Result', 'result_default', 'show_interview', $data);
		}	
	}
}