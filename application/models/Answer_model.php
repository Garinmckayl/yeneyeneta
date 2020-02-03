<?php
	class Answer_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function create_answer($question_id)
		{
			$data = array(
				'question_id' => $question_id,
				'answer' => $this->input->post('createAnswer'),
				'user_id' => $this->session->userdata('user_id')
			);

			return $this->db->insert('answers', $data);
		}

		public function get_answers($question_id)
		{
			$this->db->order_by('answers.answer_id', 'DESC');
			$this->db->join('users', 'users.id = answers.user_id');
			$query = $this->db->get_where('answers', array('question_id' => $question_id));
			return $query->result_array();
		}

		public function get_answer_by_user($user_id)
		{
			$this->db->order_by('answers.answer_id', 'DESC');
			$this->db->join('users', 'users.id = answers.user_id');
			$query = $this->db->get_where('answers', array('user_id' => $user_id));
			return $query->result_array();
		}

	}