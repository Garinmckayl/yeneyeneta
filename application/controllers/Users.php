<?php 
/**
 * Users
 *
 * @package     YeneYeneta
 * @subpackage  users controller
 * @category    controller
 * @author      Natnael Getenew
 * @link        https://yeneyeneta.com
 * @since       Version 1.0.0
 */
  
class Users extends CI_controller
{

 

    public function view($user = NULL)
        {
            $data['user'] = $this->user_model->get_user($user);
            $user_id = $data['user']['user_id'];
            $data['answers'] = $this->answer_model->get_answer_by_user($user_id);
            $data['questions'] = $this->question_model->search_questionauthor($user);
            

            if(empty($data['user']))
            {
            show_404();
            }
            $this->load->view('templates/header', $data);
            $this->load->view('profile/profile', $data);
            $this->load->view('templates/footer');
           
        }


// register user
    public function register()
        {
        	        $data['title']='signup';
           			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|alpha_dash|callback_check_username_exists');
           			$this->form_validation->set_rules('school', 'school', 'required');
                    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_email_exists');
                    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');

                 if($this->form_validation->run() === FALSE)
                   {
                        if($this->input->post('page') === 'blog')  //  redirect unsuccessfully to blog 
                        {
                             redirect('/posts');
                        }
                        else  //  redirect unsuccessfully to home 
                        {
                			$this->load->view('pages/home', $data); 
                        }  
        		   } 
                   else 
                   {
        				// Encrypt password
            			$enc_password = md5($this->input->post('password'));
            			$this->user_model->register($enc_password);
            			// Set message
            			$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
                       if($this->input->post('page') === 'blog')
                        {
                         redirect('/posts');
                        }
                        else
                        {
            				redirect('home');
                        }
        		}
                // end class
        }
    // validation

	public function check_username_exists($username)
        {
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			if($this->user_model->check_username_exists($username))
            {
				return true;
			} 
            else 
            {
				return false;
			}
		}

	public function check_email_exists($email)
        {
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->user_model->check_email_exists($email))
            {
				return true;
			} 
            else 
            {
				return false;
			}
		}


// login user

	public	function login()
        {
    	        $data['title']='Login';
                $this->form_validation->set_rules('username', 'username', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');
                if($this->form_validation->run() === FALSE)
                {
            		$this->load->view('pages/home', $data);
            	}
                 else
                {
                         $username = $this->input->post('username');
                         $password = md5($this->input->post('password')); 
                         $user_id = $this->user_model->login($username, $password);
                         if($user_id)
                         {  
                                //$data['user'] = $this->user_model->get_user($username);
                                //create session
                                 $user_data = array(
                                 'user_id' => $user_id,
                                 'username' => $username,
                                 //'useremail' => $data['user']['email'],
                                 'logged_in' => true
                                );   
                                $this->session->set_userdata($user_data);
                                      // Set message
                    			$this->session->set_flashdata('user_loggedin', 'You are now logged in as ' . $username);
                                if($this->input->post('page') === 'blog')
                                {
                                     redirect('/posts');
                                }
                                else
                                {
                    				redirect('/questions');
                                }
                                // if user id is not set
                         }
                        else
                        {
                             	// Set message
                			$this->session->set_flashdata('login_failed', 'Login is invalid | check your username or password');
                            if($this->input->post('page') === 'blog')
                            {
                                $page="blog";
                                redirect('/posts');
                            }
                            else
                            {
                				redirect('home');
                             }
                        }		
        		}
        }


  //   logout       
     
    public function logout()
        {
        	$this->session->unset_userdata('logged_in');
        	$this->session->unset_userdata('user_id');
        	$this->session->unset_userdata('email');
            $this->session->set_flashdata('user_loggedout', 'you are now logged out');
            redirect('home');
        }


    public function create_avatar($user_image)
        {
            // Upload Image
            $config['upload_path'] = './assets/images/avatar';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['file_ext_tolower'] = 'true';
            $config['max_size'] = '2000048';
            $config['max_width'] = '20000';
            $config['max_height'] = '20000';
            $config['file_name'] = uniqid('Yeneta').".png";
            $this->load->library('upload', $config);
            if(!$this->upload->create_avatar())
            {
                $errors = array('error' => $this->upload->display_errors());
                $user_image = 'noimage.png';
            } 
            else 
            {
                $data = array('upload_data' => $this->upload->data());
                $user_image = $config['file_name']; 
            }
        

        }


    public function edit_account($user_id)
        {
           if(!$this->session->userdata('logged_in'))
                {
                    redirect('home');
                }
            $data['user'] = $this->user_model->get_user_detail($user_id);
            if($this->session->userdata('user_id') != $this->user_model->get_user_detail($user_id)['id'])
                {
                    redirect('questions');
                }

            if(empty($data['user']))
                {
                show_404();
                }  

         

                $this->load->view('templates/header' , $data);
                $this->load->view('user/edit', $data);
                $this->load->view('templates/footer');

        }


 ##############################    Update the profile    ####################################     

    public function update()
        {

            $this->form_validation->set_rules('school', 'school', 'required');
            $user_id = $this->input->post('user_id');
            $data['user'] = $this->user_model->get_user_detail($user_id);
            if($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('user/edit' ,$data);
                $this->load->view('templates/footer');
            } 
            else 
            {   
                if(!empty($_FILES['user_image']['name']))
                    {  #echo $_FILES['user_image']['name']; die;
                            $user_image = $this->input->post('user_image');
                            
                            // Upload Image
                            $config['upload_path'] = './assets/images/avatar';
                            $config['allowed_types'] = 'jpeg|jpg|png';
                            #$config['file_ext_tolower'] = 'true';
                            $config['max_size'] = '2048';
                            $config['max_width'] = '2000';
                            $config['max_height'] = '2000';
                            $config['file_name'] = uniqid()."_YENETA_IMG.png";
                            $this->load->library('upload', $config);
                        
                        if(!$this->upload->do_upload('user_image'))
                        {
                            $errors = array('error' => $this->upload->display_errors());
                            $user_image = 'noimage.jpg';
                        } 
                        else 
                        {
                            $data = array('upload_data' => $this->upload->data());
                            $user_image = $config['file_name'];
                        }  

                         // $this->user_model->create_profile_avatar($user_image);
                    }
                    else
                    {        //  if the user dont't change the profile
                           $user_image = $data['user']['user_image'];
                    }

                        $this->user_model->update_account($user_image);
                        $this->session->set_flashdata('account_updated', 'your account has been updated');
                        redirect('questions');
                    
           }
        }

}