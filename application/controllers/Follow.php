<?php
  class Follow extends CI_Controller
  {
    public function follow_author()
    {
      if (isset($_POST['userid']))
       {
        $userid = $_POST['userid'];
       $this->follow_model->follow($userid);
       echo $userid;
       }

      $followers = array();
      $following = array();



      $mutual = array_intersect($followers, $following);
      $followers = array_diff($followers, $mutual);
      $following = array_diff($following, $mutual);
      $friends = FALSE;

    }


    public function unfollow_author()
    {



    }

}