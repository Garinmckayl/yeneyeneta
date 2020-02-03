<?php 
  /**
  * 
  */
  class subjects extends CI_controller
  {
      	public function create()
        	{
        		$data['title'] = 'create subject';
        		$this->form_validation->set_rules('name', 'name', 'required');

        		if($this->form_validation->run() === FALSE)
            {
        			$this->load->view('templates/header');
        			$this->load->view('subjects/create');
        			$this->load->view('templates/footer');
        		}
            else
            {
        			$this->subject_model->add_subject();
        			redirect('subjects');
        		}
        	}
  }