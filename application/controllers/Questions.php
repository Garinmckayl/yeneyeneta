<?php 
/**
 * Questions 
 *
 * @package     YeneYeneta
 * @subpackage  Question controller
 * @category    controller
 * @author      Natnael Getenew
 * @link        http://yeneyeneta.com
 * @since       Version 1.0.0
 */
class Questions extends CI_Controller
{
    	public function index($offset = 0)
        {
                    // Pagination Config    
                $config['base_url'] = base_url() . 'questions/index/';
                $config['total_rows'] = $this->db->count_all('questions');
                $config['per_page'] = 15;
                $config['uri_segment'] = 3;
                $config['attributes'] = array('class' => 'pagination-link');
                // Init Pagination
                $this->pagination->initialize($config);
        		$data['title'] = "Leatest Posts";   
                $data['questions'] = $this->question_model->get_questions(FALSE, $config['per_page'], $offset);
                $data['user'] = $this->user_model->get_user_detail($this->session->userdata('user_id'));
        		$this->load->view('templates/header' , $data);
        		$this->load->view('questions/index', $data);
                $this->load->view('templates/serviceWorker.php');
        		$this->load->view('templates/footer');
    	}


    public function view($slug = NULL)
        {
            $this->load->helper('download');
            $data['random_users'] = $this->user_model->get_random_users();
    		$data['question'] = $this->question_model->get_questions($slug);
            $question_id = $data['question']['question_id'];
            $data['answers'] = $this->answer_model->get_answers($question_id);
    		if(empty($data['question']))
            {
            show_404();
    		}
    		$this->load->view('questions/view', $data);
            $this->load->view('templates/serviceWorker.php');
    		$this->load->view('templates/footer');
     	}


    public function add()
       {
            // check login 
                   if(!$this->session->userdata('logged_in'))
                   {
                    redirect('home');
                   }
             		$data['title'] = 'Create question';
                    $data['user'] = $this->user_model->get_user($this->session->userdata('username'));
             		$this->form_validation->set_rules('subject','subject', 'required');
             		$this->form_validation->set_rules('grade','grade', 'required');
             		$this->form_validation->set_rules('Questionadd','question', 'trim|required|min_length[10]');
                   if($this->form_validation->run() === FALSE)
                   { 
                     $this->load->view('templates/header' , $data);
            		 $this->load->view('questions/create', $data);
                     $this->load->view('templates/serviceWorker.php');
            		 $this->load->view('templates/footer');
                   }
                   else
                   {
                   	$this->question_model->add_question();
                    $this->session->set_flashdata('question_added', 'your question has been added');
                    redirect('questions');
                   }


        }

    public function delete($question_id)
        {
            // check login 
            if(!$this->session->userdata('logged_in'))
            {
                redirect('home');
            }
        	$this->question_model->delete_question($question_id);
            $this->session->set_flashdata('question_deleted', 'your question has been deleted!');
        	redirect('questions');
        }


    public function edit($slug)
        {
            // check login 
                if(!$this->session->userdata('logged_in'))
                {
                    redirect('home');
                }
                $data['user'] = $this->user_model->get_user($this->session->userdata('username'));
            	$data['question'] = $this->question_model->get_questions($slug);
                // check user
                if($this->session->userdata('user_id') != $this->question_model->get_questions($slug)['user_id'])
                {
                    redirect('questions');
                }
               # $data['subjects'] = $this->question_model->get_subject();

        		if(empty($data['question']))
                {
                show_404();
        		}
        		$data['author'] = $data['question']['author'];

        		$this->load->view('templates/header', $data);
        		$this->load->view('questions/edit', $data);
                $this->load->view('templates/serviceWorker.php');
        		$this->load->view('templates/footer');
        }
        

    public function update()
        {
            // check login 
            if(!$this->session->userdata('logged_in'))
            {
                redirect('home');
            }

        	$this->question_model->update_question();
            $this->session->set_flashdata('question_updated', 'your question has been updated');
        	redirect('questions');
        }




        // search

    public function search()
        {
                $this->form_validation->set_rules('search','search', 'required');
                if($this->form_validation->run() === FALSE)
                {
                   redirect('questions');
                }
                else
                {
                        // benchmark to show total time of search
                $this->benchmark->mark('search_question_start');
                $search = $this->input->post('search', TRUE);
                $data['searchval'] = $search = $this->input->post('search');
                $data['title'] = 'search question';
                $data['user'] = $this->user_model->get_user($this->session->userdata('username'));
                $data['search'] = $this->question_model->search_question($search);
                $this->benchmark->mark('search_question_end');
                $data['elapsed_search_time'] = $this->benchmark->elapsed_time('search_question_start', 'search_question_end');
                // echo $this->benchmark->elapsed_time('search_question_start', 'search_question_end');
                $this->load->view('templates/header' , $data);
                $this->load->view('questions/search', $data);
                $this->load->view('templates/serviceWorker.php');
                $this->load->view('templates/footer');
                }

        }



        //  comming soon

     public function commingsoon()
        {
            $this->load->view('pages/commingsoon');
        }


    public function questionbyteacher($q)
       {
            if (!$_GET['q'])
            {
                 redirect(questions);
            }
            else
            {
                $author = $_GET['q'];
                $data['author'] = $_GET['q'];
                $data['title'] = $data['author']. "questions";
                $data['questionvalue'] = $this->question_model->search_questionauthor($author);


                $this->load->view('templates/header');
                $this->load->view('questions/questionbyteacher', $data);
                $this->load->view('templates/serviceWorker.php');
                $this->load->view('templates/footer');

            }
        }


    public function categories($subject = NULL)
        {
               $data['title'] =  $subject ." Questions";
               $data['user'] = $this->user_model->get_user($this->session->userdata('username'));
               $data['questions'] = $this->question_model->get_questionsBY_catagory($subject);
                $this->load->view('templates/header', $data);
                $this->load->view('questions/qBySubject', $data);
                $this->load->view('templates/serviceWorker.php');
                $this->load->view('templates/footer');
        } 

}