<?php defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * Checks admin login
 *
 * @author  Sitaram Shreevastava
 * @access	public
 * @param 	mixed value to be checked for blank
 * @param 	int msgcode of the message to be shown
 * @param 	boolean true if not error
 * @param 	string language code for messages
 */

	class Admin extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('Admin_model','admin');
			date_default_timezone_set('Asia/kolkata');
			$this->load->library("pagination");
		}

		// Check login status if atready login redirect it to dashboard
		public function is_logged_in() {
			$admin_data = $this->session->userdata('adminData');
			if (!empty($admin_data)) {
				redirect(site_url('admin/dashboard'));
			}
		}

		// Check login status if not login redirect it to login page
		public function is_not_logged_in() {
			$admin_data = $this->session->userdata('adminData');
			if (empty($admin_data)) {
				redirect(site_url('admin/index'));
			}
		}

		/* index page call */
		public function index() {
			$this->is_logged_in();
			$admin_name = $this->input->post('user_name');
			$admin_pass = $this->input->post('password');

			$this->form_validation->set_rules('user_name', 'Email-id', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == TRUE) {

				$login_data = $this->admin->login($admin_name, base64_encode($admin_pass));

				if (!empty($login_data)) {
					$img = '';
					if(!empty($login_data['profile'])){
						$img = $login_data['profile'];
					}else{
						$img = 'Administrator.png';
					}
					$admin_Data = array(
									'userId' 	=> $login_data['id'],
									'Name' 		=> ucwords($login_data['name']),
									'Email' 	=> $login_data['email'], 
									'image' 	=> $img,
								);
					$this->session->set_userdata('adminData', $admin_Data);
					$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Welcome&nbsp;&nbsp;<strong>'.ucwords($login_data['email']).'</strong>&nbsp;&nbsp;You have successfully logged in.</div>';
					$this->session->set_flashdata('login_message', $message);
					//$this->dashboard();
					redirect(site_url('admin/dashboard'), 'refresh');
				} else {
							$message = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Login Credentials Incorrect</div>';
                			$this->session->set_flashdata('login_message', $message);
							redirect(site_url('admin'), 'refresh');
				}	
			} else {
				$data['title'] = 'Admin LogIn';
				$this->load->view('admin/login',$data);
			}
		}

		public function dashboard() {
			$this->is_not_logged_in();
	        $data['title'] = 'Dashboard';
 	        $this->load->view('main/include/header', $data);
	        $this->load->view('main/dashboard');
	        $this->load->view('main/include/footer');
		}


		/* Update Profile */
		public function adminProfile(){
			$this->is_not_logged_in();
			$id = $this->uri->segment(3);
			$data['data'] = $this->db->get_where('adminLogin',array('id' => $id))->row_array();
			$data['title'] = 'Admin Profile';
			$this->load->view('main/include/header', $data);
	        $this->load->view('admin/adminProfile');
	        $this->load->view('main/include/footer');
	        if($this->input->post()){
	        	
	        $id = $this->uri->segment(3);
			$fileName  = $_FILES["img"]["name"];
			if(!empty($fileName)){
				$extension = explode('.',$fileName);
				$extension = strtolower(end($extension));
				$uniqueName = uniqid().'.'.$extension;
				$type      = $_FILES["img"]["type"];
				$size      = $_FILES["img"]["size"];
				$tmp_name  = $_FILES["img"]["tmp_name"];
				$targetlocation = DIRECTORY_ROOT.'adminImages/profile/'.$uniqueName;
				move_uploaded_file($tmp_name,$targetlocation);
				$img = utf8_encode(trim($uniqueName));
			} else {
				$img = $this->input->post('StoredImg');
			}
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => base64_encode($this->input->post('password')),
				'modifyDate' => time()
			);
			if(!empty($img)) {
				$data['profile'] = $img;
			}
			$result = $this->admin->update('adminLogin',$data,array('id' => $id));
			if($result > 0) {
				$value = array(
					'userId' 	=> $id,
					'Name' 		=> ucwords($data['name']),
					'Email' 	=> $data['email'], 
					'image' 	=> !empty($data['image']) ? $data['image'] : 'Administrator.png',
				);
				if(!empty($img)) {
					$value['image'] = $img;
				} else {
					$value['image'] = $this->session->userdata['adminData']['image'];
				}
				$this->session->set_userdata('adminData',$value);
				$sess = $this->session->get_userdata('adminData');
				$message = '<div class="alert alert-success alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Profile Updated successfully.</div>';
				$this->session->set_flashdata('login_message', $message);
				redirect('admin/dashboard');
			} else {
				$message = '<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something Went Wrong.</div>';
				$this->session->set_flashdata('login_message', $message);
				redirect('admin/adminProfile/'.$id);
			}
		        }
		}

		/* logout admin */
		public function logout() {

			$this->is_not_logged_in();
			$this->session->sess_destroy();
			$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>You have successfully terminated your session!</div>';
			$this->session->set_flashdata('login_message', $message);
			redirect(site_url('admin'), 'refresh');
		} /* logout admin/  */


		public function setting(){
			$this->is_not_logged_in();
			$data['logoData'] = $this->db->get_where('manageIogoFavicon')->row_array();
			$data['contactData'] = $this->db->get_where('manageContactInfo')->row_array();
			$data['socialMedia'] = $this->db->get_where('manageSocialMedia')->row_array();
			$data['title'] = 'Manage Settings';
			$this->load->view('main/include/header', $data);
	        $this->load->view('main/setting/setting');
	        $this->load->view('main/include/footer');
		}

		public function logo(){
			if ($this->input->post()) {
				$id = $this->input->post('id');
			        	$logo  = $_FILES["logo"]["name"];
						if(!empty($logo)){
							$extension = explode('.',$logo);
							$extension = strtolower(end($extension));
							$uniqueName = uniqid().'.'.$extension;
							$type      = $_FILES["logo"]["type"];
							$size      = $_FILES["logo"]["size"];
							$tmp_name  = $_FILES["logo"]["tmp_name"];
							$targetlocation = imageDirectory.'Images/logo/'.$uniqueName;
							move_uploaded_file($tmp_name,$targetlocation);
							$img = utf8_encode(trim($uniqueName));
						} else {
							$img = $this->input->post('storedLogo');
						}

						$favicon  = $_FILES["faviconIcon"]["name"];
						if(!empty($favicon)){
							$extension1 = explode('.',$favicon);
							$extension1 = strtolower(end($extension1));
							$uniqueName1 = uniqid().'.'.$extension1;
							$type1      = $_FILES["faviconIcon"]["type"];
							$size1      = $_FILES["faviconIcon"]["size"];
							$tmp_name1  = $_FILES["faviconIcon"]["tmp_name"];
							$targetlocation1 = imageDirectory.'Images/logo/'.$uniqueName1;
							move_uploaded_file($tmp_name1,$targetlocation1);
							$img1 = utf8_encode(trim($uniqueName1));
						} else {
							$img1 = $this->input->post('storedFavicon');
						}
						$insertData = array(
							'logo' 			=> $img, 
							'favicon' 		=> $img1, 
							'status' 		=> 1, 
							'modifyDate' 	=> time()
						);
						if (!empty($id)) {
							$result = $this->db->where('id',$id)->update('manageIogoFavicon',$insertData);
						}else{
							$insertData['addedDate'] = time();
							$result = $this->db->insert('manageIogoFavicon',$insertData);
						}
	      				if($result > 0){
			        		$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Updated Successfully</div>';
							$this->session->set_flashdata('message', $message);
							redirect(site_url('admin/setting'), 'refresh');
			        	}else{
			        		$message = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something went Wrong.</div>';
							$this->session->set_flashdata('message', $message);
							redirect(site_url('user/setting'), 'refresh');
			        	}

		        }
		    }


		public function contactInformation(){
			if($this->input->post()){
				$id = $this->input->post('id');
				$insertData = array(
					'address' 		=> $this->input->post('address'), 
					'email' 		=> $this->input->post('email'), 
					'number' 		=> $this->input->post('number'), 
					'status' 		=> 1, 
					'modifyDate' 	=> time(), 
				);
				if (!empty($id)) {
					$result = $this->db->where('id',$id)->update('manageContactInfo',$insertData);
				}else{
					$insertData['addedDate'] = time();
					$result = $this->db->insert('manageContactInfo',$insertData);
				}
  				if($result > 0){
	        		$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Updated Successfully</div>';
					$this->session->set_flashdata('message', $message);
					redirect(site_url('admin/setting'), 'refresh');
	        	}else{
	        		$message = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something went Wrong.</div>';
					$this->session->set_flashdata('message', $message);
					redirect(site_url('user/setting'), 'refresh');
	        	}
			}
		} 


		public function socialMedia(){
			if($this->input->post()){
				$id = $this->input->post('id');
				$insertData = array(
					'facebook' 		=> $this->input->post('facebook'), 
					'twitter' 		=> $this->input->post('twitter'), 
					'youtube' 		=> $this->input->post('youtube'), 
					'linkedin' 		=> $this->input->post('linkedIn'), 
					'instagram' 	=> $this->input->post('instagram'), 
					'gmail' 		=> $this->input->post('gmail'), 
					'status' 		=> 1, 
					'modifyDate' 	=> time(), 
				);
				if (!empty($id)) {
					$result = $this->db->where('id',$id)->update('manageSocialMedia',$insertData);
				}else{
					$insertData['addedDate'] = time();
					$result = $this->db->insert('manageSocialMedia',$insertData);
				}
  				if($result > 0){
	        		$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Updated Successfully</div>';
					$this->session->set_flashdata('message', $message);
					redirect(site_url('admin/setting'), 'refresh');
	        	}else{
	        		$message = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something went Wrong.</div>';
					$this->session->set_flashdata('message', $message);
					redirect(site_url('user/setting'), 'refresh');
	        	}
			}
		}

		public function findDoctor(){
			$this->is_not_logged_in();
			$data['doctorData'] = $this->db->order_by('id','desc')->get_where('findDoctor')->result_array();
			$data['title'] = 'Manage Find Doctor';
			$this->load->view('main/include/header', $data);
	        $this->load->view('main/doctor/findDoctor');
	        $this->load->view('main/include/footer');
		}

		public function editFindDoctor(){
			$this->is_not_logged_in();
			$id = base64_decode($this->uri->segment(3));
			$data['doctorData'] = $this->db->get_where('findDoctor',array('id' => $id))->row_array();
			$data['title'] = 'Edit Find Doctor';
			$this->load->view('main/include/header', $data);
	        $this->load->view('main/doctor/editFindDoctor');
	        $this->load->view('main/include/footer');
	        if ($this->input->post()) {
	        	$id = base64_decode($this->uri->segment(3));
	        	$insertData = array(
				'doctorType' 	=> $this->input->post('doctorType'), 
				'doctorName' 	=> $this->input->post('doctorName'), 
				'aboutDoctor' 	=> $this->input->post('aboutDoctor'), 
				'qualification' => $this->input->post('qualifcation'), 
				'publications' 	=> $this->input->post('publications'), 
				'exprience' 	=> $this->input->post('exeperience'),
				'status'		=> $this->input->post('status'),
				'modifyDate'	=> time() 
			);
			$result = $this->db->where('id',$id)->update('findDoctor',$insertData);
			if($result > 0){
	        		$message = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Updated Successfully</div>';
					$this->session->set_flashdata('message', $message);
					redirect(site_url('admin/findDoctor'), 'refresh');
	        	}else{
	        		$message = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something went Wrong.</div>';
					$this->session->set_flashdata('message', $message);
					redirect(site_url('admin/editFindDoctor/'.base64_encode($id)), 'refresh');
	        	}
	        }
		}
	}
?>