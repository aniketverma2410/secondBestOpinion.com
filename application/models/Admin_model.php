<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin_model extends CI_Model {
		public function __construct(){
	        parent::__construct();
	       //$this->load->helper('string');
	    }

	    public function login($userName,$password){
	    	return $this->db->get_where('adminLogin',array('email' => $userName,'password' => $password))->row_array();
	    }

	    		/* get channel list */
		public function getData($table, $con = false) {
			if (!empty($con)) {
				$query = $this->db->select('*')
							  ->from($table)
							  ->where($con)
							  ->get()
							  ->result_array();
			} else {
				$query = $this->db->select('*')
							  ->from($table)
							  ->get()
							  ->result_array();
			}
			return $query;	
		}

		public function update($table,$data,$id){
			$this->db->where($id);
    		return $this->db->update($table, $data);
		}

		public function deleteData($table,$con){  
		    $this->db->where($con);
    		$this->db->delete($table);
		}

    }
?>