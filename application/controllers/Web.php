<?php defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * Checks admin login
 *
 * @author  Aniket Verma
 * @access	public
 * @param 	mixed value to be checked for blank
 * @param 	int msgcode of the message to be shown
 * @param 	boolean true if not error
 * @param 	string language code for messages
 */

	class Web extends CI_Controller {
		public function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/kolkata');
			$this->load->library("pagination");
		}

	public function index(){
		$data['title'] = 'Home';
		$this->load->view('website/include/header',$data);
		$this->load->view('website/dashboard');
		$this->load->view('website/include/footer');
	}

	public function findDoctor(){
		if ($this->input->post()) {
			$insertData = array(
				'doctorType' 	=> $this->input->post('radio1'), 
				'doctorName' 	=> $this->input->post('doctorName'), 
				'aboutDoctor' 	=> $this->input->post('aboutDoctor'), 
				'qualification' => $this->input->post('qualification'), 
				'publications' 	=> $this->input->post('publications'), 
				'exprience' 	=> $this->input->post('exprience'),
				'status'		=> 1,
				'addedDate'		=> time(),
				'modifyDate'	=> time() 
			);
			$result = $this->db->insert('findDoctor',$insertData);
			if($result > 0){
	        		$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Thanks ! For Visit The Website</div>';
					$this->session->set_flashdata('login_message', $message);
					redirect(site_url('web/index'), 'refresh');
	        	}else{
	        		$message = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something went Wrong.</div>';
					$this->session->set_flashdata('login_message', $message);
					redirect(site_url('web/index'), 'refresh');
	        	}
		}
	}

	public function makeEnquiry(){
		if ($this->input->post()) {
			$insertData = array(
				'doctorType' 	=> $this->input->post('radio1'), 
				'doctorName' 	=> $this->input->post('doctorName'), 
				'aboutDoctor' 	=> $this->input->post('aboutDoctor'), 
				'qualification' => $this->input->post('qualification'), 
				'publications' 	=> $this->input->post('publications'), 
				'exprience' 	=> $this->input->post('exprience'),
				'status'		=> 1,
				'addedDate'		=> time(),
				'modifyDate'	=> time() 
			);
			$result = $this->db->insert('findDoctor',$insertData);
			if($result > 0){
	        		$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Thanks ! For Visit The Website</div>';
					$this->session->set_flashdata('login_message', $message);
					redirect(site_url('web/index'), 'refresh');
	        	}else{
	        		$message = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something went Wrong.</div>';
					$this->session->set_flashdata('login_message', $message);
					redirect(site_url('web/index'), 'refresh');
	        	}
		}
	}

	}
?>