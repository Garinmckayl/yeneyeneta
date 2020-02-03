<?php
	class Answers extends CI_Controller{
		public function create($question_id){
			$slug = $this->input->post('slug');
			$data['question'] = $this->question_model->get_questions($slug);

			$this->form_validation->set_rules('createAnswer', 'createAnswer', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('questions/view', $data);
				$this->load->view('templates/footer');
			} else {
				$this->answer_model->create_answer($question_id);
				redirect('questions/'.$slug);
			}
		}
	}