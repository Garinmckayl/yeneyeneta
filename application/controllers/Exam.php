<?php 

class Exam extends CI_Controller
{
	public function index()
    {
        $data['title'] = "Your Exams"; 
        $this->load->view('Exam/header'); 	  
		$this->load->view('Exam/index', $data);
		$this->load->view('Exam/footer');
    }

    public function free()
    {
    	$data['title'] = "Your Exams"; 
    	$this->load->view('Exam/header');	  
		$this->load->view('Exam/createfree-exam', $data);
		$this->load->view('Exam/footer');
    }


        public function edit()
    {   
        $data['title'] = "Your Exams";
        $this->load->library('encryption');	 
    	$this->load->view('Exam/header');	  
		$this->load->view('Exam/editer', $data);
		$this->load->view('Exam/footer');
    }

}



?>