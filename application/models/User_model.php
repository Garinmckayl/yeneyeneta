<?php 
/**
 * User_model
 *
 * @package     YeneYeneta
 * @subpackage  User Model
 * @category    model
 * @author      Natnael Getenew
 * @link        http://yeneyeneta.com
 * @since       Version 1.0.0
 */
   class User_model extends CI_model
   {

       public function register($enc_password)
          {
             $userstatus = $this->input->post('userstatus');
     		     $data = array(
             'username' => $this->input->post('username'),
             'userstatus' => $this->input->post('userstatus'),
             'school' => $this->input->post('school'),
             'email' => $this->input->post('email'),
             'password' => $enc_password,
             'user_image' => 'noimage.jpg' );
              return $this->db->insert('users', $data);
          }


       public function check_username_exists($username)
          {
             $query = $this->db->get_where('users', array('username' => $username));
             if(empty($query->row_array()))
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
             $query = $this->db->get_where('users', array('email' => $email));
            if(empty($query->row_array()))
            {
                return true;
            } 
            else 
            {
              return false;
            }
          }



       public function login($username, $password)
          {
             $this->db->where('username', $username);
             $this->db->where('password', $password);
             $result = $this->db->get('users');
             if($result->num_rows() == 1)
             {
               return $result->row(0)->id;
             }
             else
             {
                return false;
             }
         }
  

      public function create_avatar($post_image)
          {
              $slug = url_title($this->input->post('title'));
              $data = array(
                'user_img' => $post_image
              );
              $this->db->where('id', $this->session->userdata('user_id'));
              return $this->db->update('users', $data);
          }


     // public function create_profile_avatar($user_image)
     //      {
     //          $data = array(
     //            'user_image' => $user_image
     //          );
     //          $this->db->where('id', $this->session->userdata('user_id'));
     //          return $this->db->update('users', $data);
     //      }   

          //****************  users  **************** rout model 



    public function get_user($user)
         {
             $this->db->join('users', 'users.id = questions.user_id');
             $query = $this->db->get_where('questions', array('author' => $user));
             return $query->row_array();
         }
        
     public function get_user_detail($user_id)
           {
              // $this->db->join('users', 'users.id = questions.teacher_id');
              // $this->db->join('subjects', 'subjects.id = questions.subject_id');
               $query = $this->db->get_where('users', array('id' => $user_id));
               return $query->row_array();
           }



     public function update_account($user_image)
          {
            #$enc_password = md5($this->input->post('password'));
             $data = array(
                 #'username' => $this->input->post('username'),
                 'usertitle' => $this->input->post('user_title'),
                 'school' => $this->input->post('school'),
                 #'email' => $this->input->post('email'),
                 #'password' => $enc_password,
                 'user_image' => $user_image,
                 'gender' => $this->input->post('user_gender'),
                 'bio' => $this->input->post('bio'),      
                 'firstname' => $this->input->post('firstname'),  
                 'lastname' => $this->input->post('lastname'),  
                 'grade' => $this->input->post('grade')          
            );
             $this->db->where('id', $this->input->post('user_id'));
             return $this->db->update('users', $data);
          }    

    public function get_random_users()
          {
                  $this->db->order_by('username', 'RANDOM');
                  $this->db->limit(3);
                  #$this->db->join('questions', 'questions.user_id = users.id');
                  $query = $this->db->get('users');
                  return $query->result_array();

          }
}