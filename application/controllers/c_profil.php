<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_profil extends CI_Controller {
	
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
                $this->load->helper('form');
                $this->load->library('upload'); //load library upload bisa dilakukan disni atau disimpan di autoload
        }
        
        
	public function index()
	{
		$data['select'] = $this->m_profil->select_profil($_SESSION['username']);
		$this->load->view('profil',$data);
	}
	
	public function update()
	{
		$config['upload_path'] = "./assets/images/profil/"; //lokasi folder yang akan digunakan untuk menyimpan file
		 $config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
		 $config['file_name'] = '_'.date('Y_m_d_H_i_s');
		 $config['max_size']	= '80000';
		 $config['max_width']  = '4000';
		 $config['max_height']  = '4000';
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config); //meng set config yang sudah di atur
		 if( !$this->upload->do_upload())
		 {
			 $data = array(
				
				'strFLName' => $this->input->post('nama'),
				'strEmail' =>$this->input->post('email'),
				'strTelNumber' =>$this->input->post('phone'),
				'skype' =>$this->input->post('skype'),
				'strAddress' =>$this->input->post('alamat'),
				'fb' => $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'goplus' => $this->input->post('google_plus')
			  );

			$this->m_profil->update_profil($data);
			redirect(c_profil);
		 }else{
			
			$upload = $this->upload->data();
			$data = array(
				
				'strFLName' => $this->input->post('nama'),
				'strEmail' =>$this->input->post('email'),
				'strTelNumber' =>$this->input->post('phone'),
				'skype' =>$this->input->post('skype'),
				'strAddress' =>$this->input->post('alamat'),
				'fb' => $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'goplus' => $this->input->post('google_plus'),
				'photo' => $upload['file_name']
			  );
			$this->m_profil->update_profil($data);
			redirect(c_profil);
			
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
