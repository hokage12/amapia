<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class M_submit extends CI_Model
{
         
        function __construct(){
			parent::__construct();
			 $this->load->library('session'); 
		}
  
     function save($data)
     {
       
		$this->db->set('create_date','NOW()', FALSE);
		$this->db->set('username',$_SESSION['username']);
		$this->db->insert('properti',$data);
		return;
     } 
      
     function select_jenis()
     {
       
		$vehicle = $this->db->query("SELECT * FROM sub_kategori where id_kategori = 1 ");
		$zz = $vehicle->result_array();
		return $zz;
		
     } 
                  
     
       
		
		
		
}
