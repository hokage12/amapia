<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_dash extends CI_Controller {
	
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
                $this->load->library('session');
                $this->load->model('m_profil');
                $this->load->model('m_mypro');
                $this->load->helper('form');
                $this->load->library('upload'); //load library upload bisa dilakukan disni atau disimpan di autoload
                if($this->session->userdata('is_login')===FALSE)
                {
					redirect('admin/c_login');
				}
        }
        
        
	public function index()
	{
		$data = array();
		$data['notif'] = $this->m_mypro->count_properti();
		$data['notifikasi'] = $this->m_mypro->notif_properti();
		$html = array();
		$html['header'] 	= $this->load->view('admin/header',$data,true);
		$html['kiri'] 		= $this->load->view('admin/kiri',null,true);
		$html['content'] 	= $this->load->view('admin/konten_dashboard',null,true);
		$this->load->view('admin/template',$html);
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
