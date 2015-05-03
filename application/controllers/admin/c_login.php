<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {
	
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
                parent::__construct();
                $this->load->library('session');
                $this->load->model('m_profil');
                $this->load->model('m_admin');
                $this->load->helper('form');
                $this->load->library('upload'); //load library upload bisa dilakukan disni atau disimpan di autoload
                
        }
        
        
	public function index()
	{
		if($this->session->userdata('is_login')===TRUE)
		{
			redirect('admin/c_dash','refresh');
		}
		$data = array('msg'=>$this->_get_flashdata());
		$this->load->view('admin/login',$data);
	}
	
	function log()
	{
		
		$target = '';
		$msg = '';
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$login = $this->m_admin->login($username,$password);
		if($login == TRUE){
			$target = 'admin/c_dash';
		}else{
			 $msg = array(
                    "type" => "alert-info",
                    "content" => "Username atau Password salah!!!"
                );
			$target = 'admin/c_login';
		}
		
		$this->session->set_flashdata("process_msg", $msg);
        redirect($target,'refresh');
	}
    
    public function test(){
		$salt = "4ku6anttenGGG";
		$enc = md5($salt.'rahasia');
		echo $enc;

	}
    public function logout() //fungsi logout
    {		
        $this->session->sess_destroy();
        	redirect('admin/c_login','refresh');
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
