<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		ini_set('session.cookie_httponly',1);
		ini_set('session.use_only_cookies',1);
		$this->load->model('Auth_class');
		$this->load->model('Login_class');
		$this->load->model('Users_class');
		$this->load->model('SelectClass');
		$this->load->model('Services_class');
		//$sp_user = $this->SelectClass->GetServiceProvider($session);
		
	}
	public function auth(){
		return $this->Auth_class->is_loggedin();
	}
	public function index(){
		  if($this->auth() === 0){
			header('location:'.base_url().'dashboard/login');
		 }
		 $data['session123'] = $this->session->userdata('employee_id');
		 $this->load->view('php/include/dashboard_header.php');
		 $this->load->view('php/include/dashboard_sidebar.php');
		 $this->load->view('php/dashboard.php',$data);
		 $this->load->view('php/include/dashboard_footer.php'); 
	}
	public function file_leave(){
		  if($this->auth() === 0){
			header('location:'.base_url().'dashboard/login');
		 }
		 $data['session123'] = $this->session->userdata('employee_id');
		 $this->load->view('php/include/dashboard_header.php');
		 $this->load->view('php/include/dashboard_sidebar.php');
		 $this->load->view('php/dashboard.php',$data);
		 $this->load->view('php/include/dashboard_footer.php'); 
	}
	public function login(){
		$data['AlertType'] = '';
		$data['StatusAlert'] = '';
		
		$session = $this->auth();
			
		if(isset($_POST['employee_id'])){
			$post = $this->input->post();
			$chk_login = $this->Login_class->LoginEmployee($post);
			
			if($chk_login == 3){
				echo "<script>alert('Employee ID doesnt exist');</script>";
			}else if($chk_login == 2){
				echo "<script>alert('Password incorrect');</script>";
			}else if($chk_login == 1){
				//echo "<script>alert('Login successful!');</script>";
				echo "<script>document.location.href='".base_url()."'</script>";
			}
		}
		
		if($session != 0){
			header('location:'.base_url());
		}
			$this->load->view('php/login.php',$data);
	}
	public function settings(){
		 $this->load->view('php/include/dashboard_header.php');
		 $this->load->view('php/include/dashboard_sidebar.php');
		 $this->load->view('php/settings.php');
		 $this->load->view('php/include/dashboard_footer.php'); 
	}
	public function logout(){
		$this->session->sess_destroy();
		header('location:'.base_url());

	}
}
