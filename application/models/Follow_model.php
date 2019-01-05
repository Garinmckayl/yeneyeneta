 <?php 

   class Follow_model extends CI_model
   {
        public function __construct()
          {
         		$this->load->database();
          }

        public function follow($userid = FALSE)
          {
         		$data = array(
		         'user_id' => $userid,
		         'follower_id' => $this->session->userdata('user_id')
				);
				  return $this->db->insert('followers', $data);


          }

        public function unfollow($user)
          {



          } 

   }