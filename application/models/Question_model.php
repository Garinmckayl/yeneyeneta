<?php 
/**
 * Question_model
 *
 * @package     YeneYeneta
 * @subpackage  Question Model
 * @category    model
 * @author      Natnael Getenew
 * @link        http://yeneyeneta.com
 * @since       Version 1.0.0
 */

class Question_model extends CI_Model
{
		public function __construct()
			{
				$this->load->database();
			}
		public function get_questions($slug = FALSE, $limit = FALSE, $offset = FALSE)
			{
				if($limit)
				{
		             $this->db->limit($limit, $offset);
				}
				if($slug === FALSE)
				{
					  $this->db->order_by('questions.question_id', 'desc');
					  $this->db->join('users', 'users.id = questions.user_id');
		              $query = $this->db->get('questions');
		              return $query->result_array();
				}
				      $this->db->join('users', 'users.id = questions.user_id');
				$query = $this->db->get_where('questions', array('slug' => $slug));
				return $query->row_array();
			}
		 
		public function add_question()
			{
				 $slug = url_title(uniqid('', true).".".$this->session->userdata('username'), 'underscore')/*$this->input->post('Questionadd')*/;
				 $data = array(
		         'subject' => $this->input->post('subject'),
		         'user_id' => $this->session->userdata('user_id'),
		         'author' => $this->session->userdata('username'),
		         'grade' => $this->input->post('grade'),
		         'question' => $this->input->post('Questionadd'),
		         'slug' => $slug
				);
				  return $this->db->insert('questions', $data);
			}

		public function delete_question($question_id)
			{
				 $this->db->where('question_id', $question_id);
				 $this->db->delete('questions');
				 return true;
			}

		public function update_question()
			{
				 $slug = url_title($this->input->post('edit_question'));
				 $data = array(
		         'subject' => $this->input->post('subject'),
		         'grade' => $this->input->post('grade'),
		         'question' => $this->input->post('edit_question'),
		         'slug' => $slug
				);
				 $this->db->where('question_id', $this->input->post('question_id'));
				 return $this->db->update('questions', $data);
			}

		public function get_subject()
			{
				$this->db->order_by('name');
				$query = $this->db->get('subjects');
				return $query->result_array();
			}

		public function search_question($search)
			{
			    $this->db->order_by('questions.id', 'DESC');
				$query = $this->db->query("SELECT * FROM questions
				                            WHERE subject LIKE '%$search%'
				                            OR author LIKE '%$search%'
				                            OR grade LIKE '%$search%'
				                            OR question LIKE '%$search%'");
		       return $query->result_array();
			}
 

		public function search_questionauthor($user)
			{   
				$this->db->order_by('questions.question_id', 'DESC');
		        $this->db->join('questions', 'questions.user_id = users.id');
				$query = $this->db->query("SELECT * FROM questions
				                          WHERE author = '$user'");
				return $query->result_array();

			}

		    
		    /********************   GET QUESTION BY CATAGORY       **********/



		public function get_questionsBY_catagory($subject)
			{
				$subjectc = $this->db->escape($subject);
				$this->db->join('users', 'users.id = questions.user_id');
				$query = $this->db->query("SELECT * FROM questions 
					                      WHERE subject = $subjectc");
				// $query = $this->db->get_where('questions', array('subject' => $this->db->escape($subject)));
				return $query->result_array();
				  //$query = $this->db->where('subject', $this->db->escape($subject));
			    // $query = "SELECT * FROM questions WHERE subject LIKE '%" .
		     //    $this->db->escape($search)."%' ESCAPE '!'";
			}

}  