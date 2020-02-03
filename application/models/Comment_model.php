<?php 

   class Comment_model extends CI_model
   {
        public function __construct()
          {
         		$this->load->database();
         	}
        public function create_comment($question_id)
          {
         		$data = array(
               'question_id' => $question_id,
               'name' => $this->input->post('name'),
               'email' => $this->session->userdata('email'),
               'comment' => $this->input->post('comment')
         		);
         		return $this->db->insert('comments', $data);
         	}

        public function get_comments($question_id)
          {
          $query = $this->db->get_where('comments', array('question_id' => $question_id));
          return $query->result_array();
          }

   }