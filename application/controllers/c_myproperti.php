<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_myproperti extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
        {
                session_start();
                parent::__construct();
                if(!isset($_SESSION['username']))
                { 
					redirect('c_login');
				}
                $this->load->library('session');
                $this->load->model('m_profil');
                $this->load->model('m_mypro');
        }
        
        
	public function index()
	{
		$data['select'] = $this->m_profil->select_profil($_SESSION['username']);
		$data['properti'] = $this->m_mypro->select_properti();
		$this->load->view('my_properti',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
