<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class M_mypro extends CI_Model
{
         
	function __construct(){
		parent::__construct();
		 $this->load->library('session'); 
	}

      
	 function select_properti()
	 {
		$vehicle = $this->db->query("SELECT * FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID where p.username = '".$_SESSION['username']."' ");
		$zz = $vehicle->result_array();
		return $zz;
		
	 } 
                  
     function all_properti(){
		$vehicle = $this->db->query("SELECT *,p.nID as idProperti FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID");
		$zz = $vehicle->result_array();
		return $zz;
	 }	
	 
	 function count_properti(){
		$vehicle = $this->db->query("SELECT COUNT(new) notif FROM properti WHERE new = 1");
		$zz = $vehicle->row_array();
		return $zz;
	 }
	 
	 function notif_properti(){
		$vehicle = $this->db->query("SELECT * FROM properti WHERE new = 1 AND verified = 0");
		$zz = $vehicle->result_array();
		return $zz;
	 }
	 
	 function aproval($id,$data){
		 $this->db->where('nID', $id);
		 $this->db->update('properti', $data);

	 }
}
