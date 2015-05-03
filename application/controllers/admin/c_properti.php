<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_properti extends CI_Controller {
	
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
		$data['msg']   = $this->_get_flashdata();
		$data['notif'] = $this->m_mypro->count_properti();
		$data['notifikasi'] = $this->m_mypro->notif_properti();
		$data['rows'] = $this->m_mypro->all_properti();
		$html = array();
		$html['header'] 	= $this->load->view('admin/header',$data,true);
		$html['kiri'] 		= $this->load->view('admin/kiri',null,true);
		$html['content'] 	= $this->load->view('admin/properti',$data,true);
		$this->load->view('admin/template',$html);
	}
	
	public function properti_aprove($id){
		$msg = '';
		$target = '';
		$data = array('verified'=>1,'new'=>0);
		$update = $this->m_mypro->aproval($id,$data);
		if($update){
			$target = 'admin/c_properti';
		}else{
			$msg = array(
                    "type" => "alert-info",
                    "content" => "Username atau Password salah!!!"
                );
			$target = 'admin/c_properti';
		}
		
		$this->session->set_flashdata("process_msg", $msg);
        redirect($target,'refresh');
	}
	
	public function properti_unaprove($id){
		$target = '';
		$data = array('verified'=>0);
		$update = $this->m_mypro->aproval($id,$data);
		if($update){
			$target = 'admin/c_properti';
		}else{
			$msg = array(
                    "type" => "alert-info",
                    "content" => "Username atau Password salah!!!"
                );
			$target = 'admin/c_properti';
		}
		
		$this->session->set_flashdata("process_msg", $msg);
        redirect($target,'refresh');
	}
	private function _get_flashdata() {
        $msg = $this->session->flashdata("process_msg");
        if (empty($msg))
            return array("type" => "hidden", "content" => "");
        else
            return $msg;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
