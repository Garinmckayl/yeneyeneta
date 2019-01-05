<?php
/**
* 
*/
class Contact extends CI_Controller
{
	
	public function sendemail(){
		$this->load->library('email');

        $name = $this->input->post('name');
	    $email = $this->input->post('email');
	    $message = $this->input->post('message');


		$this->email->from($email, $name);
		$this->email->to('contact@yeneyeneta.com');
		$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');

		$this->email->subject('Email Test');
		$this->email->message($message);

		$this->email->send();

	}
}


 ?>