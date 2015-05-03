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
                session_start();
                parent::__construct();
				$this->load->model('m_login'); 
                $this->load->library('email');
                $this->load->library('session');
                $this->load->helper(array('form','url'));
                $this->load->library(array('encrypt','form_validation')); 
        }
        
	public function index()
	{
		$this->load->view('login');
	}
    
    public function submit() 
    {
  	
		$u = new M_login();
		$kode = md5(uniqid(rand()));
		$u->save($kode);
					
					

					$to     = $this->input->post('email');
					$judul  = "Aktivasi Akun Anda";
					$dari   = "From: aditya@id-clouds.net \n";
					$dari   .= "Content-type: text/html \r\n";
					
			 		$pesan  = "Selamat datang di Gotcha GPS <br />";
					$pesan  = "Untuk aktifikasi akun silahkan klik link berikut : <br />";
					$pesan  .= "<a href=".base_url()."c_login/kirim/".$this->input->post('email')."/".$kode." > ".base_url()."index.php/c_login/kirim/".$this->input->post('email')."/".$kode."</a>";
					$config = array ( 'mailtype' => 'html',
									  'charset'  => 'utf-8',
									  'priority' => '1'
									   );
					$this->email->initialize($config);
					$this->email->from('aditya@id-clouds.net', 'Admin');
					$this->email->to($to);
					$this->email->subject($judul);
					$this->email->message($pesan);	
					$this->email->send();
		 $this->load->view('verification3');

	}
    
    public function kirim($email,$kode){
			$this->m_login->update($email,$kode);
			$this->load->view('verification');
			
			
	}
    
    public function berhasil()
	{
        $this->load->view('verification3');
	}
    
    function log()
	{
		$data 		= $this->input->post('data');
		$json 		= json_decode(str_replace('\\','',$data));
		$username 	= $json[0]->{"user"};
        $password 	= $json[0]->{"pass"};
        
		$cek 		= $this->m_login->ambilPengguna($username, $password);
	
       if($cek <> 0){
          $data = json_encode(true);
          echo $data;
        }
	   else{
        $data = json_encode(false); 
		echo $data;	
        }
	}
    
    public function logout() //fungsi logout
    {		
        session_destroy(); //session destroy
        redirect('c_login');
    }
    
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
