<?php 
/**
* 
*/
class Pages extends CI_controller
{
	
	  public function view($page = 'home')
		{
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
				show_404();
			}
			$data['title'] = ucfirst($page);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/serviceWorker.php');
			// $this->load->view('templates/footer');
		}
            

      public function blog($page = 'blog')
       {
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->view('pages/'.$page, $data);
			// $this->load->view('templates/footer');
		}


}