<?php

/**
 * Users class
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
		$data['layouts/user'];
		$this->load->view('layouts/main',$data);
	}
}
?>