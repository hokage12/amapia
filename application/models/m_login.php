<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class M_login extends CI_Model
{
         
        function __construct(){
			parent::__construct();
			 $this->load->library('session'); 
		}
  
      public function ambilPengguna($username, $password)
      {
    	$psw = $this->enc($password);
    	$query = $this->db->query("select * from user where (strUsername = '".$username."' OR strEmail = '".$username."') AND (strUserPassword = '".$psw."'  ) AND (bVerified = 1)");
       if ($query->num_rows() == 1) { // jika data = 1
    					$data = $query->row();
    					$_SESSION['nID'] = $data->nID;
    					$_SESSION['username'] = $data->strUserName;
   		 				return TRUE;
    					
    					//return $query->row_array(); // return data dan nilai TRUE
    			} else{
    							return FALSE; // else mengembalikan FALSE
    			}
      }
      
                  
     public function update($email,$kode){
			$data = array(
               'bVerified' => 1
            );
			$this->db->where('verify_email_code', $kode);
			$this->db->update('user', $data);
		}
		
		 function cek($email)
		 {
			$query = $this->db->query("select * from aw_manager WHERE strUser='$email'");
			return $query->num_rows();
		 }
		
		
		function error($email,$kode){
		$query = $this->db->query("select bVerified from user WHERE strEmail='$email' and bVerified=1 and verify_email_code='$kode' ");
		return $query->row();
		}
		
		
        function save($kode){
		$pass=$this->input->post('pass');
        $data = array(
            'strUserName' => $this->input->post('nama_pengguna'),
            'strFLName' => $this->input->post('nama'),
			'strTelNumber' => $this->input->post('telp'),
			'strAddress' => $this->input->post('alamat'),
			'strEmail' => $this->input->post('email'),
            'strUserPassword' => $this->enc($pass),
			'verify_email_code' => $kode,
			'nUserPrivilege' => 1
		  );
		$this->db->set('create_date', 'NOW()', FALSE);
		$this->db->set('bVerified', 0, FALSE);
		$this->db->insert('user',$data);
        } 
	
		
		function updatUser($nID,$data){
			$this->db->where('nID', $nID);
			$this->db->update('user', $data);
		}
		
		
	
	    function updatAvatar($nID,$data){

              $this->db->where('nID', $nID);
			  $this->db->update('user', $data);
			
		}
		
		function enc($password){
		$salt = "4ku6anttenGGG";
		$enc = md5($salt.$password);
		return $enc;
		
		}
}
