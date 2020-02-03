<?php
  class Comments extends CI_Controller{
    public function create($quesion_id){
      $slug = $this->input->post('slug');
      $data['quesion'] = $this->quesion_model->get_quesions($slug);

      // $this->form_validation->set_rules('email', 'Email', 'required');

      // $this->form_validation->set_rules('email', 'Email', 'required');

      $this->form_validation->set_rules('body', 'Body', 'required');


      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('quesions/view', $data);
        $this->load->view('templates/footer');
      } else {
        $this->comment_model->create_comment($quesion_id);
        redirect('quesions/'.$slug);
      }
    }
  }