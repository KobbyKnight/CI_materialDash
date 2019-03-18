<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
function __construct(){
		parent::__construct(){
			$this->load->helper('url')

		};
}
	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('login_b',$data);
		
	
	}
	public function dash(){
		$data['title'] = 'Dashboard';
		// redirect('views/dashboard');
		$data['view'] = 'layouts/dashboard';
		$this->load->view('layouts/main',$data);
	
	}
}
