<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_submit extends CI_Controller {
	
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
                { ?>
					<script>
						alert("Anda Harus Login terlebih dahulu untuk memasukan properti.");
						window.location = 'c_login';
					</script>
				   <?php
					
				}
                $this->load->library('session');
                $this->load->helper('form');
                $this->load->library('upload'); //load library upload bisa dilakukan disni atau disimpan di autoload
                $this->load->model('m_submit');
                $this->load->model('m_profil');
        }
        
	public function index()
	{
		$data['select'] = $this->m_profil->select_profil($_SESSION['username']);
		$data['kat'] = $this->m_submit->select_jenis();
		$this->load->view('submit',$data);
	}
	public function add()
	{
		$config['upload_path'] = "./assets/images/properti/"; //lokasi folder yang akan digunakan untuk menyimpan file
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
				
				'nama' => $this->input->post('nama'),
				'jenis_properti' =>$this->input->post('tipe2'),
				'alamat' =>$this->input->post('alamat'),
				'deskripsi' =>$this->input->post('deskripsi'),
				'luas_kamar' =>$this->input->post('luas_kamar'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
				'status' => $this->input->post('status'),
				
				'penghuni_pria' => $this->input->post('penghuni_pria'),
				'penghuni_wanita' => $this->input->post('penghuni_wanita'),
				'penghuni_keluarga' => $this->input->post('penghuni_keluarga'),
				'penghuni_suami_istri' => $this->input->post('penghuni_suami_istri'),
				'penghuni_pria_wanita' =>$this->input->post('penghuni_pria_wanita'),
				
				'untuk_pria' =>$this->input->post('untuk_pria'),
				'untuk_wanita' =>$this->input->post('untuk_wanita'),
				'untuk_keluarga' =>$this->input->post('untuk_keluarga'),
				'untuk_sumai_istri' =>$this->input->post('untuk_sumai_istri'),
				
				'umum_dapur' =>$this->input->post('umum_dapur'),
				'umum_balkon' =>$this->input->post('umum_balkon'),
				'umum_kulkas' =>$this->input->post('umum_kulkas'),
				'umum_tv' =>$this->input->post('umum_tv'),
				'umum_tamu' =>$this->input->post('umum_tamu'),
				'umum_km' =>$this->input->post('umum_km'),
				'umum_lain' =>$this->input->post('umum_lain'),
				
				'privat_kasur' =>$this->input->post('privat_kasur'),
				'privat_almari' =>$this->input->post('privat_almari'),
				'privat_meja' =>$this->input->post('privat_meja'),
				'privat_kursi' =>$this->input->post('privat_kursi'),
				'privat_ac' =>$this->input->post('privat_ac'),
				'privat_kmd' =>$this->input->post('privat_kmd'),
				'privat_tv' =>$this->input->post('privat_tv'),
				
				'lat' =>$this->input->post('lat'),
				'lon' =>$this->input->post('lon'),
				'harian' =>$this->input->post('harian'),
				'mingguan' =>$this->input->post('mingguan'),
				'bulanan' =>$this->input->post('bulanan'),
				'tahunan' =>$this->input->post('tahunan'),
				
				'nama_pengelola' =>$this->input->post('nama_pengelola'),
				'nohp_pengelola' =>$this->input->post('no_hp'),
				'kebijakan' =>$this->input->post('kebijakan')
			  );

				
				$this->m_submit->save($data);
				redirect(c_submit);
		 }else{
		  $upload = $this->upload->data();
			$data = array(
				
				'nama' => $this->input->post('nama'),
				'jenis_properti' =>$this->input->post('tipe2'),
				'alamat' =>$this->input->post('alamat'),
				'deskripsi' =>$this->input->post('deskripsi'),
				'luas_kamar' =>$this->input->post('luas_kamar'),
				'jumlah_kamar' => $this->input->post('jumlah_kamar'),
				'status' => $this->input->post('status'),
				
				'penghuni_pria' => $this->input->post('penghuni_pria'),
				'penghuni_wanita' => $this->input->post('penghuni_wanita'),
				'penghuni_keluarga' => $this->input->post('penghuni_keluarga'),
				'penghuni_suami_istri' => $this->input->post('penghuni_suami_istri'),
				'penghuni_pria_wanita' =>$this->input->post('penghuni_pria_wanita'),
				
				'untuk_pria' =>$this->input->post('untuk_pria'),
				'untuk_wanita' =>$this->input->post('untuk_wanita'),
				'untuk_keluarga' =>$this->input->post('untuk_keluarga'),
				'untuk_sumai_istri' =>$this->input->post('untuk_sumai_istri'),
				
				'umum_dapur' =>$this->input->post('umum_dapur'),
				'umum_balkon' =>$this->input->post('umum_balkon'),
				'umum_kulkas' =>$this->input->post('umum_kulkas'),
				'umum_tv' =>$this->input->post('umum_tv'),
				'umum_tamu' =>$this->input->post('umum_tamu'),
				'umum_km' =>$this->input->post('umum_km'),
				'umum_lain' =>$this->input->post('umum_lain'),
				
				'privat_kasur' =>$this->input->post('privat_kasur'),
				'privat_almari' =>$this->input->post('privat_almari'),
				'privat_meja' =>$this->input->post('privat_meja'),
				'privat_kursi' =>$this->input->post('privat_kursi'),
				'privat_ac' =>$this->input->post('privat_ac'),
				'privat_kmd' =>$this->input->post('privat_kmd'),
				'privat_tv' =>$this->input->post('privat_tv'),
				
				'lat' =>$this->input->post('lat'),
				'lon' =>$this->input->post('lon'),
				'harian' =>$this->input->post('harian'),
				'mingguan' =>$this->input->post('mingguan'),
				'bulanan' =>$this->input->post('bulanan'),
				'tahunan' =>$this->input->post('tahunan'),
				
				'nama_pengelola' =>$this->input->post('nama_pengelola'),
				'nohp_pengelola' =>$this->input->post('no_hp'),
				'kebijakan' =>$this->input->post('kebijakan'),
				
				'photo' => $upload['file_name']
			  );

				
				$this->m_submit->save($data);
				redirect(c_submit);
			
			}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
