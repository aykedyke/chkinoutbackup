<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct() {
		parent::__construct();
		ini_set('session.cookie_httponly',1);
		ini_set('session.use_only_cookies',1);
		$this->load->model('Auth_class');
		$this->load->model('Login_class');
		$this->load->model('Users_class');
		$this->load->model('SelectClass');
		$this->load->model('Services_class');



	}
	public function auth()
	{
		return $this->Auth_class->is_loggedin();
	}
	public function index()
	{

		$this->load->view('php/include/header.php');
		$this->load->view('php/home.php');
		$this->load->view('php/include/footer.php');

	}
	public function aboutUs(){
		$this->load->view('php/include/header.php');
		$this->load->view('php/about.php');
		$this->load->view('php/include/footer.php');
	}
	public function services(){
		$this->load->view('php/include/header.php');
		$this->load->view('php/services.php');
		$this->load->view('php/include/footer.php');
	}
	public function contactUs(){
		$this->load->view('php/include/header.php');
		$this->load->view('php/contactus.php');
		$this->load->view('php/include/footer.php');
	}
	public function resources(){
		$this->load->view('php/include/header.php');
		$this->load->view('php/resources.php');
		$this->load->view('php/include/footer.php');
	}
	public function portCallsAndSchedules(){
		$this->load->view('php/include/header.php');
		$this->load->view('php/empty.php');
		$this->load->view('php/include/footer.php');
	}
}
